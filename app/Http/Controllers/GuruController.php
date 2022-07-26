<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use Symfony\Component\HttpKernel\HttpCache\Store;

class GuruController extends Controller
{
   public function index(){
       $data = guru::paginate(5);
       return view('home', compact('data'));
   }

   public function create(){
       return view('tambahguru');
   }

   public function Store(Request $request){
       $this->validate($request,[
           'namaguru' => 'required',
           'nikguru' => 'required',
       ]);
       guru::create($request->all());
       return redirect(route('guru'));
   }

   public function tampilan($id){
        
    $data = guru::find($id);
    return view('editdataguru', compact('data'));
    }

    public function update(Request $request, $id){
        $data = guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru');
    }

    public function destroy($id){
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('guru');
    }
}

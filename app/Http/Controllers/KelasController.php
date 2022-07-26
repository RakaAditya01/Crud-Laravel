<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use Symfony\Component\HttpKernel\HttpCache\Store;

class KelasController extends Controller
{
    public function index(){
        $data = kelas::paginate(5);
        return view('kelas', compact('data'));
    }

    public function create(){
        return view('tambahkelas');
    }
 
    public function Store(Request $request){
        $this->validate($request,[
            'namakelas' => 'required',
            'walikelas' => 'required',
        ]);
        kelas::create($request->all());
        return redirect(route('kelas'));
    }
 
    public function tampilan($id){
         
     $data = kelas::find($id);
     return view('editdatakelas', compact('data'));
     }
 
     public function update(Request $request, $id){
         $data = kelas::find($id);
         $data->update($request->all());
         return redirect()->route('kelas');
     }
 
     public function destroy($id){
         $data = kelas::find($id);
         $data->delete();
         return redirect()->route('kelas');
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabel;
use Symfony\Component\HttpKernel\HttpCache\Store;

class TabelguruController extends Controller
{
    public function index(){
        $data = tabel::paginate(5);
        return view('guru.tabelguru', compact('data'));
    }
 
    public function create(){
        return view('guru.tambahtabel');
    }
 
    public function Store(Request $request){
        $this->validate($request,[
            'namaguru' => 'required',
            'matapelajaran' => 'required',
            'materipelajaran' => 'required',
            'jampelajaran' => 'required',
            'absensi' => 'required',
            'namakelas' => 'required',
            'jenispembelajaran' => 'required',
            'linkpembelajaran' => 'required',
            'dokumentasi' => 'required',
            'keterangan' => 'required'
        ]);
        $data = tabel::create($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotodokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect(route('tabel'));
    }
 
    public function tampilan($id){
         
     $data = tabel::find($id);
     return view('guru.edit', compact('data'));
     }
 
     public function update(Request $request, $id){
         $data = tabel::find($id);
         $data->update($request->all());
         return redirect()->route('tabel');
     }
 
     public function destroy($id){
         $data = tabel::find($id);
         $data->delete();
         return redirect()->route('tabel');
     }
}

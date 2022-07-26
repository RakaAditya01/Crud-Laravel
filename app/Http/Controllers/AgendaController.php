<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use App\Models\tabel;
use App\Models\agenda;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Store;

class AgendaController extends Controller
{
    public function index(){
        $data = Agenda::select('agendas.*', 'gurus.*', 'kelas.*', 'tabels.*', 'agendas.id as id_agenda')
		->leftJoin('gurus', 'agendas.guru_id', 'gurus.id')
		->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')->paginate(5);
        // dd($data);
        return view('agenda',[
            'title' => 'Data Agenda',
            'data' => $data
        ]);
    }
 
    public function create(){
        $dataguru = guru::all();
        $datatabel = tabel::all();
        $datakelas = kelas::all(); 
        return view('tambahagenda',[
            "title" => "Add Data Agenda",
            'dataguru' => $dataguru,
            'datatabel' => $datatabel,
            'datakelas' => $datakelas
        ]);
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
        $data = agenda::create($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotodokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect(route('agenda'));
    }
 
    public function tampilan($id){
         
     $data = agenda::find($id);
     return view('editagenda', compact('data'));
     }
 
     public function update(Request $request, $id){
         $data = agenda::find($id);
         $data->update($request->all());
         return redirect()->route('agenda');
     }
 
     public function destroy($id){
         $data = agenda::find($id);
         $data->delete();
         return redirect()->route('agenda');
     }
}

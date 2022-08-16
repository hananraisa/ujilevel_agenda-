<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\kelas;
use App\Models\mapel;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{
    public function main(){
        
        return view('layout.main');
    }
    public function index(){

        $data =    Agenda::select('agendas.*', 'gurus.*', 'kelas.*', 'mapels.*', 'agendas.id as id_agenda')
		->leftJoin('gurus', 'agendas.guru_id', 'gurus.id')
		->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')
		->leftJoin('mapels', 'mapels.id', 'gurus.mapel_id')->get();
        return view('tampilagenda', [
            'data' => $data 
    ]);
    }
    public function tambahagenda(){
        $dataguru = Guru::all();
        $datamapel = mapel::all();
        $datakelas = kelas::all();
        return view('tambahagenda', [
            "title" => "Add Data Agenda",
            'dataguru' => $dataguru,
            'datamapel' => $datamapel,
            'datakelas' => $datakelas
        ]);
    }
    public function insertdataagenda(request $request){        
        $data = Agenda::create($request->all());
        if ($request->hasfile('dokumentasi')) {
            $request->file('dokumentasi')->move('fotodokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi =$request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('agenda');
    }
    public function editagenda($id){
        $data = Agenda::find($id);
        $dataguru = guru::all();
        $datamapel = mapel::all();
        $datakelas = kelas::all();

        return view('editagenda', compact('data', 'dataguru', 'datamapel', 'datakelas'));
    }
    public function updateagenda(Request $request, $id){
        $data = Agenda::find($id);
        $data->update($request->all());
        if ($request->hasFile('dokumentasi')) {
            $destination = 'fotodokumentasi/'.$data->dokumentasi;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalName();
            $filename = time().'.'.$extension;
            $file->move('fotodokumentasi/', $filename);
            $data->dokumentasi = $filename;
        }
        $data->update();
        
        return redirect()->route('agenda');
    }
    public function deleteagenda($id){
        $data = Agenda::find($id);
        $data->delete();

        return redirect()->route('agenda');
    }
}

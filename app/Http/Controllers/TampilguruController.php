<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\kelas;
use App\Models\mapel;
use App\Models\Agenda;
use App\Models\Tampilguru;
use Illuminate\Http\Request;

class TampilguruController extends Controller
{
    public function viewguru(){

        $data = Agenda::select('agendas.*', 'gurus.*', 'kelas.*', 'mapels.*', 'agendas.id as id_agenda')
		->leftJoin('gurus', 'agendas.guru_id', 'gurus.id')
		->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')
		->leftJoin('mapels', 'mapels.id', 'gurus.mapel_id')->get();
        return view('viewguru', compact('data'));
    }
    public function tambahviewguru(){
        $dataguru = Guru::all();
        $datamapel = mapel::all();
        $datakelas = kelas::all(); 
        return view('tambahviewguru', [
            "title" => "Add Data Agenda",
            'dataguru' => $dataguru,
            'datamapel' => $datamapel,
            'datakelas' => $datakelas
        ]);
    }
    public function insertdataviewguru(request $request){        
        $data = Agenda::create($request->all());
        if ($request->hasfile('dokumentasi')) {
            $request->file('dokumentasi')->move('fotodokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi =$request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('viewguru');
    }
}

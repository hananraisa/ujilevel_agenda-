<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function main(){
        return view('layout.main');
    }
    public function index(){

        $data = Agenda::all();
        return view('tampilagenda', compact('data'));
    }
    public function tambahagenda(){
        return view('tambahagenda');
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

        return view('editagenda', compact('data'));
    }
    public function updateagenda(Request $request, $id){
        $data = Agenda::find($id);
        $data->update($request->all());
        
        return redirect()->route('agenda');
    }
    public function deleteagenda($id){
        $data = Agenda::find($id);
        $data->delete();

        return redirect()->route('agenda');
    }
}

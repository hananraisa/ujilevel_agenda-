<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Tampilguru;
use Illuminate\Http\Request;

class TampilguruController extends Controller
{
    public function viewguru(){

        $data = Agenda::all();
        return view('viewguru', compact('data'));
    }
    public function tambahviewguru(){
        return view('tambahviewguru');
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

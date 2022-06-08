<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function main(){
        return view('layout.main');
    }
    public function index(){

        $data = Mapel::all();
        return view('tampilmapel', compact('data'));
    }
    public function tambahmapel(){
        return view('tambahmapel');
    }
    public function insertdatamapel(request $request){        
        Mapel::create($request->all());
    
        return redirect()->route('mapel');
    }
    public function editmapel($id){
        $data = Mapel::find($id);

        return view('editmapel', compact('data'));
    }
    public function updatemapel(Request $request, $id){
        $data = Mapel::find($id);
        $data->update($request->all());

        return redirect()->route('mapel');
    }
    public function deletemapel($id){
        $data = Mapel::find($id);
        $data->delete();

        return redirect()->route('mapel');
    }
}

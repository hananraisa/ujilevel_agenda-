<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function main(){
        return view('layout.main');
    }
    public function index(){

        $data = Kelas::all();
        return view('tampilkelas', compact('data'));
    }
    public function tambahkelas(){
        return view('tambahkelas');
    }
    public function insertdatakelas(request $request){        
        kelas::create($request->all());
    
        return redirect()->route('kelas');
    }
    public function editkelas($id){
        $data = Kelas::find($id);

        return view('editkelas', compact('data'));
    }
    public function updatekelas(Request $request, $id){
        $data = Kelas::find($id);
        $data->update($request->all());

        return redirect()->route('kelas');
    }
    public function deletekelas($id){
        $data = Kelas::find($id);
        $data->delete();

        return redirect()->route('kelas');
    }
}

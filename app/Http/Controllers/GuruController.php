<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function main(){
        return view('layout.main');
    }
    public function index(){
        
        $data = Guru::all();
        return view('tampilguru', compact('data'));
    }
    public function tambahguru(){
        return view('tambahguru');
    }
    public function insertdata(request $request){        
        guru::create($request->all());
    
        return redirect()->route('guru');
    }
    public function editguru($id){
        $data = Guru::find($id);

        return view('editguru', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Guru::find($id);
        $data->update($request->all());

        return redirect()->route('guru');
    }
    public function delete($id){
        $data = Guru::find($id);
        $data->delete();

        return redirect()->route('guru');
    }
}

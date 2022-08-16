<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\mapel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function main(){
        return view('layout.main');
    }
    public function index(){
        
        $data = guru::select('gurus.*', 'users.*', 'mapels.*', 'gurus.id as id_guru')
		->leftJoin('users', 'users.id', 'gurus.user_id')
		->leftJoin('mapels', 'mapels.id', 'gurus.mapel_id')->get();
        return view('tampilguru',[
            'data' => $data
        ]);
    }
    public function tambahguru(){
        $datamapel = mapel::all();
        $datauser = User::all();
        return view('tambahguru',[
            'datamapel' => $datamapel,
            'datauser' => $datauser
        ]);
    }
    public function insertdata(request $request){ 
        // dd($request->all());       
        guru::create($request->all());
    
        return redirect()->route('guru');
    }
    public function editguru($id){
        $data = Guru::find($id);
        $datamapel = mapel::all();
        $datauser = User::all();

        return view('editguru', compact('data', 'datamapel', 'datauser'));
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

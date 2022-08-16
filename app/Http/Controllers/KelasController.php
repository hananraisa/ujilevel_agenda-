<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function main(){
        return view('layout.main');
    }
    public function index(){

        $datas = Kelas::select('kelas.*', 'gurus.*', 'kelas.id as id_kelas')
		->leftJoin('gurus', 'kelas.guru_id', 'gurus.id')
		->paginate(5);
        return view('tampilkelas', compact('datas'));
    }
    public function tambahkelas(){
        $dataguru = Guru::all();
        return view('tambahkelas',[
            'dataguru' => $dataguru
        ]);
    }
    public function insertdatakelas(request $request){        
        kelas::create($request->all());
    
        return redirect()->route('kelas');
    }
    public function editkelas($id){
        $data = kelas::find($id);
        $dataguru = Guru::all();

        return view('editkelas', compact('data', 'dataguru'));
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

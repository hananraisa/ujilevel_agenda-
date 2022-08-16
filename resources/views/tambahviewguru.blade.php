@extends('layout.mainguru')

@section('content')
<div class="container">
        <h1 class="text-center mb-4">TAMBAH DATA</h1>
        <form action="{{ route('insertdataviewguru') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
              <select class="form-select" name="guru_id">
                <option selected>Select Guru</option>
                  @foreach($dataguru as $data)
                      <option value="{{$data->id}}">{{$data->namaguru}}</option>
                  @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Materi Pelajaran</label>
              <input type="text" name="materipel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 row">
              <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                <select class="form-select" name="kelas_id">
                  <option selected>Select Kelas</option>
                  @foreach($datakelas as $data3)
                  <option value="{{$data3->id}}">{{$data3->namakelas}}</option>
                  @endforeach
                </select>            
              </div>
              <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Absen</label>
                <input type="text" name="absen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jam Pelajaran</label>
              <input type="text" name="jampel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
              <input type="text" name="linkpem" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-6 row">
              <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
              <input type="file" name="dokumentasi" class="form-control">
            </div>
            <div class="mb-3 row">
              <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">            
              </div>
              <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Jenis Pembelajaran</label>
                <select class="form-select" name="jenispem" aria-label="Default select example">
                  <option selected>Pilih Jenis Pembelajaran</option>
                  <option value="1">Offline</option>
                  <option value="2">Online</option>
                </select>             
              </div>
            </div>
            <button type="submit" class="btn btn-secondary">Save</button>
        </form>
    </div>
@endsection
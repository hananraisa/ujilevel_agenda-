@extends('layout.mainguru')
@section('content')
    <div class="container">
        <h1 class="text-center mb-4">TAMBAH DATA</h1>
        <form action="{{ route('insertdataviewguru') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
              <input type="text" name="namaguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
              <input type="text" name="mapel" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Materi Pelajaran</label>
              <input type="text" name="materipel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 row">
              <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
    <div class="container">
    <div class="tab-content">
        <div class="tab-pane show active table-responsive" id="scroll-horizontal-preview">
        <table class="table table-dark table-striped rounded w-100 nowarp" id="scroll-horizontal-datatable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Mapel</th>
                    <th scope="col">Materi</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Absen</th>
                    <th scope="col">Jam Pelajaran</th>
                    <th scope="col">Link</th>
                    <th scope="col">Dokumentasi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Jenis</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->namaguru}}</td>
                    <td>{{$row->mapel}}</td>
                    <td>{{$row->materipel}}</td>
                    <td>{{$row->kelas}}</td>
                    <td>{{$row->absen}}</td>
                    <td>{{$row->jampel}}</td>
                    <td>{{$row->linkpem}}</td>
                    <td>
                        <img src="{{ asset ('fotodokumentasi/'.$row->dokumentasi)}}" alt="" >
                    </td>
                    <td>{{$row->keterangan}}</td>
                    <td>{{$row->jenispem}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
@endsection
@extends('layout.mainguru')
@section('content')
    
    <div class="container">
    <div class="tab-content">
    <a type="button" href="{{ route('tambahviewguru') }}" class="btn btn-secondary mb-3">Add</a>
    <div class="tab-pane show active table-responsive rounded" id="scroll-horizontal-preview">
        <table class="table table-dark table-striped w-100 nowarp" id="scroll-horizontal-datatable">
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
            @foreach($data as $index => $row)
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
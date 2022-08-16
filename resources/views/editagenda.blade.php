@extends ('layout.main')
@section('title', 'editguru')
@section ('content')
<div class="container">
    <h1 class="text-center mb-4">EDIT DATA AGENDA</h1>
    <form action="/updateagenda/{{$data->id}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
            <select class="form-select" name="namaguru_id" value="">
                @foreach($dataguru as $data2)
                <option value="{{$data2->id}}">{{$data2->namaguru}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Materi Pelajaran</label>
            <input type="text" name="materipel" value="{{$data->materipel}}" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 row">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                <select class="form-select" name="kelas_id">
                    @foreach($datakelas as $item)
                    <option value="{{$item->id}}">{{$item->namakelas}}</option>
                    @endforeach
                </select>
                @error('kelas')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Absen</label>
                <input type="text" name="absen" value="{{$data->absen}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jam Pelajaran</label>
            <input type="text" name="jampel" value="{{$data->jampel}}" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
            <input type="text" name="linkpem" value="{{$data->linkpem}}" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
            <input Type="file" value="{{ $data->dokumentasi }}" name="dokumentasi" class="form-control">
            <img src="/fotodokumentasi/{{ $data->dokumentasi }}" width="300px">
        </div>
        <div class="mb-3 row">
            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" value="{{$data->keterangan}}" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Jenis Pembelajaran</label>
                <select class="form-select" name="jenispem" aria-label="Default select example">
                    <option selected>{{$data->jenispem}}</option>
                    <option value="1">Offline</option>
                    <option value="2">Online</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary">Save</button>
    </form>
</div>
@endsection

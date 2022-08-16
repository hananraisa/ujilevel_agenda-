@extends ('layout.main')
@section('')

@section ('content')
<div class="container">
    <h1 class="text-center mb-4">TAMBAH DATA GURU</h1>
    <form action="{{ route('insertdata') }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input list="browsers" name="user_id" class="form-control" id="exampleInputEmail1">
                @foreach($datauser as $data)
                <datalist id="browsers">
                    <option value="{{$data->id}}">{{$data->email}}</option>
                    @endforeach
                    @error('user_id')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="namaguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
            <select class="form-select" name="mapel_id">
                <option selected>Select Mata Pelajaran</option>
                @foreach($datamapel as $data)
                <option value="{{$data->id}}">{{$data->mapel}}</option>
                @endforeach
                @error('mapel')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </select>
        </div>
        <button type="submit" class="btn btn-secondary">Save</button>
    </form>
</div>
@endsection

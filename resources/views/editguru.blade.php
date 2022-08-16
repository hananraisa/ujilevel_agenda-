@extends ('layout.main')
@section('title', 'editguru')
@section ('content')
<div class="container">
    <h1 class="text-center mb-4">EDIT DATA GURU</h1>
    <form action="/updatedata/{{$data->id}}" method="POST">
        @csrf
        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->namaguru }}">
                            @error('namaguru')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nik</label>
                            <input type="text" name="nik" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->nik }}">
                            @error('nik')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                            <select class="form-select" name="mapel_id">
                                <option selected>Ubah Mata pelajaran</option>
                                @foreach ($datamapel as $item)
                                <option value="{{$item->id}}">{{$item->mapel}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Use rname</label>
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
        <button type="submit" class="btn btn-secondary">Save</button>
    </form>
</div>
@endsection

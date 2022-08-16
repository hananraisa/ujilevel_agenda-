@extends ('layout.main')
@section('')

@section ('content')
    <div class="container">
        <h1 class="text-center mb-4">EDIT DATA MAPEL</h1>
        <form action="/updatemapel/{{$data->id}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
              <input type="text" name="mapel_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-secondary">Save</button>
        </form>
    </div>
@endsection
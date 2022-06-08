@extends ('layout.main')
@section('')

@section ('content')
    <div class="container">
        <h1 class="text-center mb-4">EDIT DATA KELAS</h1>
        <form action="/updatekelas/{{$data->id}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
              <input type="text" name="namakelas" value="{{$data->namakelas}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Wali Kelas</label>
              <input type="text" name="walikelas" value="{{$data->walikelas}}" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-secondary">Save</button>
        </form>
    </div>
@endsection
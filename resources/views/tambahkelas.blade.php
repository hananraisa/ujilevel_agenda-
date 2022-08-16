@extends ('layout.main')
@section('')

@section ('content')
    <div class="container">
        <h1 class="text-center mb-4">TAMBAH DATA KELAS</h1>
        <form action="{{ route('insertdatakelas') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
              <input type="text" name="namakelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Wali Kelas</label>
              <select class="form-select" name="guru_id">
                <option selected>Select Guru</option>
                @foreach($dataguru as $data)
                    <option value="{{$data->id}}">{{$data->namaguru}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-secondary">Save</button>
        </form>
    </div>
@endsection
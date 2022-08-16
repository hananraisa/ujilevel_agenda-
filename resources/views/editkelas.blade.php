@extends ('layout.main')
@section('')

@section ('content')
<div class="container">
    <h1 class="text-center mb-4">EDIT DATA KELAS</h1>
    <form action="/updatekelas/{{$data->id}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
            <input type="text" name="namakelas" value="{{$data->namakelas}}" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
            <select class="form-select" name="guru_id" value="">
                @foreach ($dataguru as $item)
                <option value="{{$item->id}}">{{$item->namaguru}}</option>
                @endforeach
            </select>


        </div>
        <button type="submit" class="btn btn-secondary">Save</button>
    </form>
</div>
@endsection

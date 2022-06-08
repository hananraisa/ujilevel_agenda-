@extends('layout.main')
@section('content')
<div class="container">
    <h1 class="text-center mb-4">Table Mapel</h1>
    <a type="button" href="{{ route('tambahmapel') }}" class="btn btn-secondary mb-3">Add</a>
        <table class="table table-dark table-striped rounded">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($data as $row)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$row->mapel}}</td>
                    <td>
                        <a href="/deletemapel/{{$row->id}}" class="btn btn-warning">Delete</a>
                        <a type="button" href="/editmapel/{{$row->id}}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
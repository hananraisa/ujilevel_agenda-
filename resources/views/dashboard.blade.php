@extends('layout.main')
@section('content')
<div class="row">

    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h1 class="font-weight-bold">Welcome {{auth()->user()->name}} !</h1>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
            <div class="card-people mt-auto">
                <img src="/assets/images/dashboard/people.svg" alt="people">
                <div class="weather-info">
                    <div class="d-flex">
                        <div class="ml-2">
                            <h2 class="location font-weight-normal">HALLO</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (auth()->user()->role == 'admin')
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Table Guru</p>
                        <p class="fs-30 mb-2">{{$jumlahguru}}</p>
                        <p>Data</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Table Kelas</p>
                        <p class="fs-30 mb-2">{{$jumlahkelas}}</p>
                        <p>Data</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Table Agenda</p>
                        <p class="fs-30 mb-2">{{$jumlahagenda}}</p>
                        <p>Data</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Table Mapel</p>
                      <p class="fs-30 mb-2">{{$jumlahmapel}}</p>
                        <p>Data</p>
                    </div>
                  </div>
            </div>
          </div>
        </div>
        @endif
        
        @if (auth()->user()->role == 'user')
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                    <a href="/viewguru"><h4 class="text-light mb-4">Agenda</h4></a>
                    <p class="fs-30 mb-2">{{$jumlahagenda}}</p>
                    <p>Data</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
      @endsection
      
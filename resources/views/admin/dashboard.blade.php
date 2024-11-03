@extends('admin.appl')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-xxl-8 mb-6 order-0">
            <div class="card">
            <div class="d-flex align-items-start row">
                <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title text-primary mb-3">Selamat Datang, {{ Auth::user()->name }} !</h5>
                    <p class="mb-6">
                    Update data setiap hari.<br />Untuk memberikan informasi yang terbaru.
                    </p>
                </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-6">
                    <img
                    src="{{ asset('img/illustrations/man-with-laptop.png')}}"
                    height="175"
                    class="scaleX-n1-rtl"
                    alt="View Badge User" />
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2">
            <div class="row">
            <div class="col-6 mb-6">
                <div class="card h-100">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between mb-4">
                    <div class="avatar flex-shrink-0">
                        <img src="{{ asset('img/icons/unicons/wallet.png')}}" alt="paypal" class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt4"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                        <a class="dropdown-item" href="{{ route('anggota.index') }}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    </div>
                    <p class="mb-1">Anggota</p>
                    <h4 class="card-title mb-3">{{ $absen }}</h4>
                </div>
                </div>
            </div>
            <div class="col-6 mb-6">
                <div class="card h-100">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between mb-4">
                    <div class="avatar flex-shrink-0">
                        <img src="{{ asset('img/icons/unicons/chart.png')}}" alt="Credit Card" class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt1"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded text-muted"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                        <a class="dropdown-item" href="{{ route('absen') }}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    </div>
                    <p class="mb-1">Hadir Hari Ini</p>
                    <h4 class="card-title mb-3">{{ $presensi }}</h4>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        </div>
    </div>
@endsection
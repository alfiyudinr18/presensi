@extends('admin.appl')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
        <h5 class="card-header">Tabel Absensi</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jam Masuk</th>
                        <th>Jam Pulang</th>
                    </tr>
                </thead>
                <tbody>
                @php $no=1; @endphp
                @foreach ($absen as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->anggota->nama }}</td>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->jam_masuk }}</td>
                        <td>{{ $data->jam_keluar }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection
@extends('admin.appl')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Data Anggota</strong>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('anggota.create') }}" class="fas fa-plus-square btn btn-primary float-right"> Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-hover" id="datatable">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>UID</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Divisi</th>
                                    <th>Aksi</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @php $no=1; @endphp
                                    @foreach ($anggota as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->uid }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->nim }}</td>
                                            <td>{{ $data->divisi->divisi }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        
                                                        <a class="dropdown-item" href="{{ route('anggota.edit', $data->id) }}">
                                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                                        </a>
                                                        <form action="{{ route('anggota.destroy', $data->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="dropdown-item">
                                                                <i class="bx bx-trash me-1"></i> Hapus 
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                              </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
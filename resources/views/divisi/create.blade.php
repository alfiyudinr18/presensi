@extends('admin.appl')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> </h1>
            <div class="card">
                <div class="card-header">
                    <strong>Tambah Data Divisi</strong>
                </div>
                <hr>
                <div class="card-body">
                    <form action="{{ route('divisi.store') }}" method="post">
                    @csrf

                    <div class="row mb-12">
                        <label class="col-sm-2 col-form-label" for="">Nama Divisi</label>
                        <div class="col-sm-10">
                            <input type="text" name="divisi" class="form-control" required>
                        </div>
                    </div>
                    {{-- @error('divisi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror --}}
                    <div class="form-group">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary"> Kembali</a>
                        <button type="submit" class="btn btn-success"> Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

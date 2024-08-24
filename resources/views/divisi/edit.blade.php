@extends('admin.appl')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> </h1>
            <div class="card">
                <div class="card-header">
                    <strong>Edit Divisi</strong>
                </div>
                <hr>
                <div class="card-body">
                    <form action="{{ route('divisi.update', $divisi->id) }}" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="row mb-12">
                            <label class="col-sm-2 col-form-label" for="">Nama Divisi</label>
                            <div class="col-sm-10">
                                <input type="text" name="divisi" value="{{ $divisi->divisi }}" class="form-control" required>
                            </div>
                        </div>
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
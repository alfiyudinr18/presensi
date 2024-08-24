@extends('admin.appl')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> </h1>
            <div class="card">
                <div class="card-header">
                    <strong>Edit Anggota</strong>
                </div>
                <hr>
                <div class="card-body">
                    <form action="{{ route('anggota.update', $anggota->id) }}" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="row mb-12">
                            <label class="col-sm-2 col-form-label" for="">RFID</label>
                            <div class="col-sm-10">
                                <input type="text" name="anggota" value="{{ $anggota->uid }}" class="form-control" required readonly>
                            </div>
                        </div>

                        <div class="row mb-12">
                            <label class="col-sm-2 col-form-label" for="">Nama Anggota</label>
                            <div class="col-sm-10">
                                <input type="text" name="anggota" value="{{ $anggota->nama }}" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-12">
                            <label class="col-sm-2 col-form-label" for="">NIM Anggota</label>
                            <div class="col-sm-10">
                                <input type="text" name="anggota" value="{{ $anggota->nim }}" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-12">
                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Kategori</label>
                            <select class="form-control" name="id_divisi" id="exampleFormControlSelect1">
                                @foreach ($divisi as $data)
                                    <option value="{{ $data->id }}" @if ($data->divisi == $anggota->divisi->divisi) selected @endif>
                                        {{ $data->divisi }}
                                    </option>
                                @endforeach
                            </select>
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
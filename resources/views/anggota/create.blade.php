@extends('admin.appl')

@section('content')
@push('js')
    <script>
        // $(document).ready(function(){
        //     setInterval(function(){
        //         $("#nokartu").load('/nokartu')
        //     },1000);
        // });
        $(document).ready(function () {
            setInterval(() => {
                $.ajax({
                    type: "GET",
                    url: "/nokartu",
                    success: function (response) {
                        $("#nokartu").html(response.data.uid);
                        console.log(response);
                    }
                });
            }, 1000);
        });
    </script>
@endpush

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> </h1>
            <div class="card">
                <div class="card-header">
                    <strong>Tambah Data Anggota</strong>
                </div>
                <hr>
                <div class="card-body">
                    <form action="{{ route('anggota.store') }}" method="post">
                    @csrf

                    <div id="nokartu"></div>

                    <div class="row mb-12">
                        <label class="col-sm-2 col-form-label" for="">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-12">
                        <label class="col-sm-2 col-form-label" for="">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-12">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Divisi</label>
                        <select class="col-sm-10 form-select" name="id_divisi"  id="exampleFormControlSelect1">
                            @foreach ($divisi as $data)
                                <option value="{{ $data->id }}">{{ $data->divisi }}</option>
                            @endforeach
                        </select>
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

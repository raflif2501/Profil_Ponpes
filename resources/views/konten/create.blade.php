@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <form action="{{ route('konten.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <div class="card-body">
                        Tambah Kegiatan
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                            @endif
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Judul Kegiatan</label>
                                        <input type="text" name="judul" class="form-control"
                                            placeholder="Masukkan Judul" value="{{ old('judul') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="gambar" class="form-control"
                                            placeholder="Masukkan Gambar" value="{{ old('gambar') }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label for="isi">Isi Berita</label>
                                        <textarea id="isi" name="isi" class="form-control" placeholder="Masukkan Isi Berita"
                                            value="{{ old('isi') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group" style="display: none">
                                        <label>Tanggal</label>
                                        <input type="text" name="tanggal" value="{{ $today }}"
                                            class="form-control" placeholder="{{ $today }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="float: right">
                                <a href="{{ route('konten.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                                <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/datatables-simple-demo.js') }}"></script>
@endsection

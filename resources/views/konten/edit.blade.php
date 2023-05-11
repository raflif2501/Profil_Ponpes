@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Edit Kegiatan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('konten.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Judul Kegiatan</label>
                                <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul"
                                    value="{{ $data->judul }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 1</label>
                                <input type="file" name="gambar" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar }}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 2</label>
                                <input type="file" name="gambar1" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar1 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 3</label>
                                <input type="file" name="gambar2" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar2 }}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 4</label>
                                <input type="file" name="gambar3" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar3 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 4</label>
                                <input type="file" name="gambar4" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar4 }}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 5</label>
                                <input type="file" name="gambar5" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar5 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 6</label>
                                <input type="file" name="gambar6" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar6 }}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 7</label>
                                <input type="file" name="gambar7" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar7 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 8</label>
                                <input type="file" name="gambar8" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar8 }}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 9</label>
                                <input type="file" name="gambar9" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar9 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 10</label>
                                <input type="file" name="gambar10" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->gambar10 }}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="isi">Isi Berita</label>
                                <textarea id="isi" name="isi" class="form-control" placeholder="Masukkan Isi Berita"
                                    value="{{ $data->isi }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" style="display: none">
                                <label>Tanggal</label>
                                <input type="text" name="tanggal" value="{{ $today }}" class="form-control"
                                    placeholder="{{ $today }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('konten.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

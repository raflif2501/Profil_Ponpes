@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Tambah Kegiatan
                </div>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form action="{{ route('konten.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Judul Kegiatan</label>
                                <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul"
                                    value="{{ old('judul') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 1</label>
                                <input type="file" name="gambar" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ old('gambar') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 2</label>
                                <input type="file" name="gambar1" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar1') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 3</label>
                                <input type="file" name="gambar2" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar2') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 4</label>
                                <input type="file" name="gambar3" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar3') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 5</label>
                                <input type="file" name="gambar4" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar4') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 6</label>
                                <input type="file" name="gambar5" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar5') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 7</label>
                                <input type="file" name="gambar6" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar6') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 8</label>
                                <input type="file" name="gambar7" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar7') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 9</label>
                                <input type="file" name="gambar8" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar8') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 10</label>
                                <input type="file" name="gambar9" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar9') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 11</label>
                                <input type="file" name="gambar10" class="form-control"
                                    placeholder="Masukkan Gambar (Boleh Dikosongi)" value="{{ old('gambar10') }}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="isi">Isi Pragraf 1</label>
                                <textarea id="isi" name="isi" class="form-control" placeholder="Masukkan Isi Berita"
                                    value="{{ old('isi') }}"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="isi1">Isi Paragraf 2</label>
                                <textarea id="isi1" name="isi1" class="form-control" placeholder="Masukkan Isi Berita (Boleh dikosongi)"
                                    value="{{ old('isi1') }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="isi2">Isi Pragraf 3</label>
                                <textarea id="isi2" name="isi2" class="form-control" placeholder="Masukkan Isi Berita (Boleh dikosongi)"
                                    value="{{ old('isi2') }}"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="isi3">Isi Paragraf 4</label>
                                <textarea id="isi3" name="isi3" class="form-control" placeholder="Masukkan Isi Berita (Boleh dikosongi)"
                                    value="{{ old('isi3') }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="isi4">Isi Pragraf 5</label>
                                <textarea id="isi4" name="isi4" class="form-control" placeholder="Masukkan Isi Berita (Boleh dikosongi)"
                                    value="{{ old('isi4') }}"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="isi5">Isi Paragraf 6</label>
                                <textarea id="isi5" name="isi5" class="form-control" placeholder="Masukkan Isi Berita (Boleh dikosongi)"
                                    value="{{ old('isi5') }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div>
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
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/datatables-simple-demo.js') }}"></script>
@endsection

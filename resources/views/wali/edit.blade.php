@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Edit Data Wali</h3>
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
                <form action="{{ route('wali.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Wali</label>
                                <input type="text" name="wali" class="form-control" placeholder="Masukkan Nama Wali"
                                    value="{{ $data->wali }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat3" class="form-control"
                                    placeholder="Masukkan Tempat Lahir" value="{{ $data->tempat3 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl3" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir" value="{{ $data->tgl3 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat3" class="form-control" placeholder="Masukkan Alamat"
                                    value="{{ $data->alamat3 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>No. telpon</label>
                                <input type="text" name="telp3" class="form-control" placeholder="Masukkan No Telpon"
                                    value="{{ $data->telp3 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan3" class="form-control"
                                    placeholder="Masukkan Pendidikan" value="{{ $data->pendidikan3 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pekerjaam</label>
                                <input type="text" name="pekerjaan3" class="form-control"
                                    placeholder="Masukkan Pekerjaan" value="{{ $data->pekerjaan3 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea id="keterangan" name="keterangan" class="form-control" placeholder="Masukkan Keterangan (Jika Ada)"
                                    value="{{ $data->keterangan }}">{{ $data->keterangan }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('wali.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
            </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
@endsection

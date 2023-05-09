@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Edit Data Orang Tua</h3>
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
                <form action="{{ route('orang.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Ayah</label>
                                <input type="text" name="ayah" class="form-control" placeholder="Masukkan Nama Ayah"
                                    value="{{ $data->ayah }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat1" class="form-control"
                                    placeholder="Masukkan Tempat Lahir" value="{{ $data->tempat1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl1" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir" value="{{ $data->tgl1 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat1" class="form-control" placeholder="Masukkan Alamat"
                                    value="{{ $data->alamat1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>No. telpon</label>
                                <input type="text" name="telp1" class="form-control" placeholder="Masukkan No Telpon"
                                    value="{{ $data->telp1 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan1" class="form-control"
                                    placeholder="Masukkan Pendidikan" value="{{ $data->pendidikan1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pekerjaam</label>
                                <input type="text" name="pekerjaan1" class="form-control"
                                    placeholder="Masukkan Pekerjaan" value="{{ $data->pekerjaan1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Ibu</label>
                                <input type="text" name="ibu" class="form-control" placeholder="Masukkan Nama Ibu"
                                    value="{{ $data->ibu }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat2" class="form-control"
                                    placeholder="Masukkan Tempat Lahir" value="{{ $data->tempat2 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl2" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir" value="{{ $data->tgl2 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat2" class="form-control" placeholder="Masukkan Alamat"
                                    value="{{ $data->alamat2 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>No. telpon</label>
                                <input type="text" name="telp2" class="form-control" placeholder="Masukkan No Telpon"
                                    value="{{ $data->telp2 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan2" class="form-control"
                                    placeholder="Masukkan Pendidikan" value="{{ $data->pendidikan2 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pekerjaam</label>
                                <input type="text" name="pekerjaan2" class="form-control"
                                    placeholder="Masukkan Pekerjaan" value="{{ $data->pekerjaan2 }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('orang.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
            </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
@endsection

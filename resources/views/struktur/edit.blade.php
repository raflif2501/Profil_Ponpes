@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Edit Nama Pengurus</h3>
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
                <form action="{{ route('struktur.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                                    value="{{ $data->nama }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan"
                                    value="{{ $data->jabatan }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Awalan</label>
                                <select name="gelar" id="cars">
                                    <option value="{{ $data->gelar }}">{{ $data->gelar }}</option>
                                    <option value="KH.">KH.</option>
                                    <option value="Ust.">Ust.</option>
                                    <option value="Gus">Gus</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer" style="float: right">
                            <a href="{{ route('struktur.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                            <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

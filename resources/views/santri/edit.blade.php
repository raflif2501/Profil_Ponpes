@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Edit Data Santri</h3>
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
                <form action="{{ route('santri.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control"
                                    placeholder="Masukkan Nama Lengkap" value="{{ $data->nama }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat" class="form-control"
                                    placeholder="Masukkan Tempat Lahir" value="{{ $data->tempat }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir" value="{{ $data->tgl }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
                                    value="{{ $data->alamat }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Anak Ke-</label>
                                <input type="number" name="anak" class="form-control" placeholder="Masukkan Anak Ke-"
                                    value="{{ $data->anak }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jumlah Saudara</label>
                                <input type="number" name="saudara" class="form-control"
                                    placeholder="Masukkan Jumlah Saudara" value="{{ $data->saudara }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Ijazah Terakhir</label>
                                <select name="ijazah" class="form-control">
                                    <option value="{{ $data->ijazah }}">{{ $data->ijazah }}</option>
                                    <option value="SD/MI">SD/MI</option>
                                    <option value="SMP/MTS">SMP/MTS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="number" name="nisn" class="form-control" placeholder="Masukkan NISN"
                                    value="{{ $data->nisn }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control">
                                    <option value="{{ $data->kelas }}">{{ $data->kelas }}</option>
                                    <option value="Isti'dad">Isti'dad</option>
                                    <option value="I. Awwaliyah">I. Awwaliyah</option>
                                    <option value="II. AwwalIyah">II. Awwaliyah</option>
                                    <option value="III. Awwaliyah">III. Awwaliyah</option>
                                    <option value="I. Wustha">I. Wustha</option>
                                    <option value="II. Wustha">II. Wustha</option>
                                    <option value="III. Wustha">III. Wustha</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6" style="display: none;">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Diterima</label>
                                <input type="text" name="diterima" class="form-control"
                                    placeholder="Masukkan Tanggal Diterima" value="{{ $data->diterima }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('santri.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
            </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
@endsection

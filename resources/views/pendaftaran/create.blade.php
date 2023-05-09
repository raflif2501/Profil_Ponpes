@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Form Pendaftaran Santri
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
                <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <center>
                        <h3>Data Santri</h3>
                    </center>
                    <hr>
                    {{-- @php
                        $id = Auth::user()->id;
                    @endphp
                    <input type="text" name="id" class="form-control id="id" value="{{ $id }}"
                        placeholder="Name" hidden> --}}
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control"
                                    placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat" class="form-control"
                                    placeholder="Masukkan Tempat Lahir" value="{{ old('tempat') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir" value="{{ old('tgl') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
                                    value="{{ old('alamat') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Anak Ke-</label>
                                <input type="number" name="anak" class="form-control" placeholder="Masukkan Anak Ke-"
                                    value="{{ old('anak') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jumlah Saudara</label>
                                <input type="number" name="saudara" class="form-control"
                                    placeholder="Masukkan Jumlah Saudara" value="{{ old('saudara') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Ijazah</label>
                                <select name="ijazah" class="form-control">
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
                                    value="{{ old('nisn') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control">
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
                                    placeholder="Masukkan Tanggal Diterima" value="{{ $today }}">
                            </div>
                        </div>
                    </div>
                    <center>
                        <h3>Data Ayah</h3>
                    </center>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input type="text" name="ayah" class="form-control" placeholder="Masukkan Nama Ayah"
                                    value="{{ old('ayah') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat1" class="form-control"
                                    placeholder="Masukkan Tempat Lahir Ayah" value="{{ old('tempat1') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl1" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir Ayah" value="{{ old('tgl1') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat1" class="form-control"
                                    placeholder="Masukkan Alamat Ayah" value="{{ old('alamat1') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>No. Telpon</label>
                                <input type="number" name="telp1" class="form-control"
                                    placeholder="Masukkan No. Telpon Ayah" value="{{ old('telp1') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan1" class="form-control"
                                    placeholder="Masukkan Pendidikan Terakhir Ayah" value="{{ old('pendidikan1') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan1" class="form-control"
                                    placeholder="Masukkan Pekerjaan Ayah" value="{{ old('pekerjaan1') }}">
                            </div>
                        </div>
                    </div>
                    <center>
                        <h3>Data Ibu</h3>
                    </center>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" name="ibu" class="form-control"
                                    placeholder="Masukkan Nama Ibu" value="{{ old('ibu') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat2" class="form-control"
                                    placeholder="Masukkan Tempat Lahir Ibu" value="{{ old('tempat2') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl2" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir Ibu" value="{{ old('tgl2') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat2" class="form-control"
                                    placeholder="Masukkan Alamat Ibu" value="{{ old('alamat2') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>No. Telpon</label>
                                <input type="number" name="telp2" class="form-control"
                                    placeholder="Masukkan No. Telpon Ibu" value="{{ old('telp2') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan2" class="form-control"
                                    placeholder="Masukkan Pendidikan Terakhir Ibu" value="{{ old('pendidikan2') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan2" class="form-control"
                                    placeholder="Masukkan Pekerjaan Ibu" value="{{ old('pekerjaan2') }}">
                            </div>
                        </div>
                    </div>
                    <center>
                        <h3>Data Wali</h3>
                    </center>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Wali</label>
                                <input type="text" name="wali" class="form-control"
                                    placeholder="Masukkan Nama Wali" value="{{ old('wali') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat3" class="form-control"
                                    placeholder="Masukkan Tempat Lahir Wali" value="{{ old('tempat3') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl3" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir Wali" value="{{ old('tgl3') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat3" class="form-control"
                                    placeholder="Masukkan Alamat Wali" value="{{ old('alamat3') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>No. Telpon</label>
                                <input type="number" name="telp3" class="form-control"
                                    placeholder="Masukkan No. Telpon Wali" value="{{ old('telp3') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan3" class="form-control"
                                    placeholder="Masukkan Pendidikan Terakhir Wali" value="{{ old('pendidikan3') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan3" class="form-control"
                                    placeholder="Masukkan Pekerjaan Wali" value="{{ old('pekerjaan1') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea id="keterangan" name="keterangan" class="form-control" placeholder="Masukkan Keterangan (Jika Ada)"
                                    value="{{ old('keterangan') }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('pendaftaran.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        {{-- <input type="submit"> --}}
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

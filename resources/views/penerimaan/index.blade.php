@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Santri</h3>
                        <a href="{{ route('santri.create') }}" type="button" class="btn btn-success"
                            style="float: right">Tambahkan Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Ijazah</th>
                                    <th>Pendaftaran</th>
                                    <th>Kelas</th>
                                    <th>Jumlah Saudara</th>
                                    <th>Anak Ke</th>
                                    <th>Ayah</th>
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>No. Telpon</th>
                                    <th>Pendidikan</th>
                                    <th>Pekerjaan</th>
                                    <th>Ibu</th>
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>No. Telpon</th>
                                    <th>Pendidikan</th>
                                    <th>Pekerjaan</th>
                                    <th>Wali</th>
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>No. Telpon</th>
                                    <th>Pendidikan</th>
                                    <th>Pekerjaan</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->nisn }}</td>
                                        <td>{{ $p->tempat }} , {{ $p->tgl }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->ijazah }}</td>
                                        <td>{{ $p->diterima }}</td>
                                        <td>{{ $p->kelas }}</td>
                                        <td>{{ $p->saudara }}</td>
                                        <td>{{ $p->anak }}</td>
                                        <td>{{ $p->orang->ayah }}</td>
                                        <td>{{ $p->orang->tempat1 }}, {{ $p->orang->tgl1 }}</td>
                                        <td>{{ $p->orang->alamat1 }}</td>
                                        <td>{{ $p->orang->telp1 }}</td>
                                        <td>{{ $p->orang->pendidikan1 }}</td>
                                        <td>{{ $p->orang->pekerjaan1 }}</td>
                                        <td>{{ $p->orang->ibu }}</td>
                                        <td>{{ $p->orang->tempat2 }}, {{ $p->orang->tgl2 }}</td>
                                        <td>{{ $p->orang->alamat2 }}</td>
                                        <td>{{ $p->orang->telp2 }}</td>
                                        <td>{{ $p->orang->pendidikan2 }}</td>
                                        <td>{{ $p->orang->pekerjaan2 }}</td>
                                        <td>{{ $p->wali->wali }}</td>
                                        <td>{{ $p->wali->tempat3 }}, {{ $p->wali->tgl3 }}</td>
                                        <td>{{ $p->wali->alamat3 }}</td>
                                        <td>{{ $p->wali->telp3 }}</td>
                                        <td>{{ $p->wali->pendidikan3 }}</td>
                                        <td>{{ $p->wali->pekerjaan3 }}</td>
                                        <td>{{ $p->wali->keterangan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection

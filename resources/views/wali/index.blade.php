@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Wali</h3>
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
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                    <th>Wali</th>
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>No. Telpon</th>
                                    <th>Pendidikan</th>
                                    <th>Pekerjaan</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->santri->nama }}</td>
                                        <td>{{ $p->santri->tempat }} , {{ $p->santri->tgl }}</td>
                                        <td>{{ $p->santri->alamat }}</td>
                                        <td>{{ $p->santri->kelas }}</td>
                                        <td>{{ $p->wali }}</td>
                                        <td>{{ $p->tempat3 }} , {{ $p->tgl3 }}</td>
                                        <td>{{ $p->alamat3 }}</td>
                                        <td>{{ $p->telp3 }}</td>
                                        <td>{{ $p->pendidikan3 }}</td>
                                        <td>{{ $p->pekerjaan3 }}</td>
                                        <td>{{ $p->keterangan }}</td>
                                        <td>
                                            <form action="{{ route('santri.destroy', $p->id) }}" method="post"
                                                style="display:inline">
                                                <a href="{{ route('wali.edit', $p->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Yakin ingin menghapus data ? Data tidak dapat dipulihkan')">Delete</button>
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
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

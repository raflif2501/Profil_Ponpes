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
                                    <th>Ayah</th>
                                    <th>Ibu</th>
                                    <th>Wali</th>
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
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->nisn }}</td>
                                        <td>{{ $p->tempat }} , {{ $p->tgl }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->ijazah }}</td>
                                        <td>{{ $p->diterima }}</td>
                                        <td>{{ $p->kelas }}</td>
                                        <td>{{ $p->orang->ayah }}</td>
                                        <td>{{ $p->orang->ibu }}</td>
                                        <td>{{ $p->wali->wali }}</td>
                                        <td>
                                            <form action="{{ route('santri.destroy', $p->id) }}" method="post"
                                                style="display:inline">
                                                <a href="{{ route('santri.edit', $p->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <a href="{{ route('santri.show', $p->id) }}"
                                                    class="btn btn-sm btn-primary">Cetak</a>
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

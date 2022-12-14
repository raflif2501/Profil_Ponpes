@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kegiatan/Berita</h3>
                        <a href="{{ route('konten.create') }}" type="button" class="btn btn-success" style="float: right">Buat
                            Kegiatan</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th width="350px">Gambar</th>
                                    <th>Judul Kegiatan</th>
                                    <th>Isi</th>
                                    <th>Tanggal</th>
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
                                        <td><img src="{{ asset('image') }}/{{ $p->gambar }}" alt=""
                                                width="20%"></td>
                                        <td>{{ $p->judul }}</td>
                                        <td>{{ $p->isi }}</td>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>
                                            <form action="{{ route('konten.destroy', $p->id) }}" method="post"
                                                style="display:inline">
                                                <a href="{{ route('konten.edit', $p->id) }}"
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
    @include('konten.scriptDelete')
@endsection

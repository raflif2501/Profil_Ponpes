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
                                    <th width="100px">Gambar 1</th>
                                    <th width="100px">Gambar 2</th>
                                    <th width="100px">Gambar 3</th>
                                    <th width="100px">Gambar 4</th>
                                    <th width="100px">Gambar 5</th>
                                    <th width="100px">Gambar 6</th>
                                    <th width="100px">Gambar 7</th>
                                    <th width="100px">Gambar 8</th>
                                    <th width="100px">Gambar 9</th>
                                    <th width="100px">Gambar 10</th>
                                    <th width="100px">Gambar 11</th>
                                    <th>Judul Kegiatan</th>
                                    <th>Isi 1</th>
                                    <th>Isi 2</th>
                                    <th>Isi 3</th>
                                    <th>Isi 4</th>
                                    <th>Isi 5</th>
                                    <th>Isi 6</th>
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
                                                width="100px"></td>
                                        <td><img src="{{ asset('image1') }}/{{ $p->gambar1 }}" alt=""
                                                width="100px"></td>
                                        <td><img src="{{ asset('image2') }}/{{ $p->gambar2 }}" alt=""
                                                width="100px"></td>
                                        <td><img src="{{ asset('image3') }}/{{ $p->gambar3 }}" alt=""
                                                width="100px"></td>
                                        <td><img src="{{ asset('image4') }}/{{ $p->gambar4 }}" alt=""
                                                width="100px"></td>
                                        <td><img src="{{ asset('image5') }}/{{ $p->gambar5 }}" alt=""
                                                width="100px"></td>
                                        <td><img src="{{ asset('image6') }}/{{ $p->gambar6 }}" alt=""
                                                width="100px"></td>
                                        <td><img src="{{ asset('image7') }}/{{ $p->gambar7 }}" alt=""
                                                width="100px"></td>
                                        <td><img src="{{ asset('image8') }}/{{ $p->gambar8 }}" alt=""
                                                width="100px"></td>
                                        <td><img src="{{ asset('image9') }}/{{ $p->gambar9 }}" alt=""
                                                width="100px"></td>
                                        <td><img src="{{ asset('image10') }}/{{ $p->gambar10 }}" alt=""
                                                width="100px"></td>
                                        <td>{{ $p->judul }}</td>
                                        <td>{{ $p->isi }}</td>
                                        <td>{{ $p->isi1 }}</td>
                                        <td>{{ $p->isi2 }}</td>
                                        <td>{{ $p->isi3 }}</td>
                                        <td>{{ $p->isi4 }}</td>
                                        <td>{{ $p->isi5 }}</td>
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

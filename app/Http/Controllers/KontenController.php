<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Konten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Konten::all();
        return view('konten.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        return view('konten.create',compact('today'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesan = [
        'required' => ':attribute wajib diisi !',
        'min' => ':attribute harus diisi minimal :min karakter !',
        'max' => ':attribute harus diisi maksimal :max karakter !',
        'numeric' => ':attribute harus diisi angka !',
        ];
        $this->validate($request, [
        'judul' => 'required|unique:kontens',
        'gambar' => 'required',
        'tanggal' => 'required',
        'isi' => 'required',
        ]);

        $image = $request->file('gambar');
        $name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('image'),$name);

        $data = Konten::create([
        'gambar' => $name,
        'judul' => $request->judul,
        'tanggal' => $request->tanggal,
        'isi' => $request->isi,
        ]);
        if($data){
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('konten.index');
        }else{
        Alert::error('Gagal', 'Data Gagal Ditambahkan');
        return redirect()->route('konten.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = konten::find($id);
        return view('konten.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Konten::find($id);
        return view('konten.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'judul' => 'required',
        'gambar' => 'required',
        'tanggal' => 'required',
        'isi' => 'required'
        ]);

        $data = Konten::findOrFail($id);


        if($request->file('gambar') == "") {
        $data->update([
        'judul' => $request->judul,
        'tanggal' => $request->tanggal,
        'isi' => $request->isi
        ]);

        } else {

        Storage::disk('local')->delete('image/'.$data->image);

        $image = $request->file('gambar');
        $name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('image'),$name);

        $data->update([
        'gambar' => $name,
        'judul' => $request->judul,
        'tanggal' => $request->tanggal,
        'isi' => $request->isi
        ]);
        }

        if($data){
        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect()->route('produk.index');
        }else{
        Alert::error('Gagal', 'Data Gagal Dirubah');
        return redirect()->route('produk.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = Konten::find($id);
         $data->delete();
         return back()->with('success', 'Data sudah di hapus');
    }
}

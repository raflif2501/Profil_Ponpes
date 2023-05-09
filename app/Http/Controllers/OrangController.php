<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Santri;
use App\Models\Orang;
use App\Models\Wali;
use RealRashid\SweetAlert\Facades\Alert;

class OrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:superadmin|admin');
    }
    public function index()
    {
        $auth = auth()->user();
        $data = Orang::all();
        return view('orang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Orang::find($id);
        return view('orang.edit', compact('data'));
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
        $pesan = [
            'required' => ':attribute wajib diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
            ];
            $this->validate($request,[
                'ayah' => 'required',
                'tempat1' => 'required',
                'tgl1' => 'required',
                'alamat1' => 'required',
                'telp1' => 'required',
                'pendidikan1' => 'required',
                'pekerjaan1' => 'required',
                'ibu' => 'required',
                'tempat2' => 'required',
                'tgl2' => 'required',
                'alamat2' => 'required',
                'telp2' => 'required',
                'pendidikan2' => 'required',
                'pekerjaan2' => 'required',
            ],$pesan);
        $data = Orang::find($id);
        $data->update($request->all());
        Alert::success('Success', 'Data Berhasil Diproses');
        return redirect()->route('orang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

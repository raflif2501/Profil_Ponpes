<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Santri;
use App\Models\Orang;
use App\Models\Wali;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use PDF;

class SantriController extends Controller
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
        $data = Santri::all();
        return view('santri.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = Carbon::now();
        return view('santri.create', compact('today'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $pesan = [
            'required' => ':attribute wajib diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
            ];
            $this->validate($request,[
                'nama' => 'required',
                'tempat' => 'required',
                'tgl' => 'required',
                'alamat' => 'required',
                'anak' => 'required|numeric',
                'saudara' => 'required|numeric',
                'ijazah' => 'required',
                'nisn' => 'required',
                'diterima' => 'required',
                'kelas' => 'required',
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
                'wali' => 'required',
                'tempat3' => 'required',
                'tgl3' => 'required',
                'alamat3' => 'required',
                'telp3' => 'required',
                'pendidikan3' => 'required',
                'pekerjaan3' => 'required',
            ],$pesan);
            $id = intval("0" . rand(1,9) . rand(0,9) . rand(0,9));
            if($request->nama != null)
            {
                Santri::create([
                    'id' => $id,
                    'nama' => $request->nama,
                    'tempat' => $request->tempat,
                    'tgl' => $request->tgl,
                    'alamat' => $request->alamat,
                    'anak' => $request->anak,
                    'saudara' => $request->saudara,
                    'ijazah' => $request->ijazah,
                    'nisn' => $request->nisn,
                    'diterima' => $request->diterima,
                    'kelas' => $request->kelas,
                ]);
            }else{
                Santri::create([
                    'id' => $id,
                    'nama' => $request->nama,
                    'tempat' => $request->tempat,
                    'tgl' => $request->tgl,
                    'alamat' => $request->alamat,
                    'anak' => $request->anak,
                    'saudara' => $request->saudara,
                    'ijazah' => $request->ijazah,
                    'nisn' => $request->nisn,
                    'diterima' => $request->diterima,
                    'kelas' => $request->kelas,
                ]);
            }
            Orang::create([
                    'id' => $id,
                    'santri_id' => $id,
                    'ayah' => $request->ayah,
                    'tempat1' => $request->tempat1,
                    'tgl1' => $request->tgl1,
                    'alamat1' => $request->alamat1,
                    'telp1' => $request->telp1,
                    'pendidikan1' => $request->pendidikan1,
                    'pekerjaan1' => $request->pekerjaan1,
                    'ibu' => $request->ibu,
                    'tempat2' => $request->tempat2,
                    'tgl2' => $request->tgl2,
                    'alamat2' => $request->alamat2,
                    'telp2' => $request->telp2,
                    'pendidikan2' => $request->pendidikan2,
                    'pekerjaan2' => $request->pekerjaan2,
            ]);
            Wali::create([
                    'id' => $id,
                    'santri_id' => $id,
                    'orang_id' => $id,
                    'wali' => $request->wali,
                    'tempat3' => $request->tempat3,
                    'tgl3' => $request->tgl3,
                    'alamat3' => $request->alamat3,
                    'telp3' => $request->telp3,
                    'pendidikan3' => $request->pendidikan3,
                    'pekerjaan3' => $request->pekerjaan3,
                    'keterangan' => $request->keterangan,
            ]);
            Alert::success('Success', 'Data Berhasil Ditambahkan');
            return redirect()->route('santri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kode = Santri::find($id);
        $data = Santri::select("*")
                    ->whereIn('id',  $kode)
                    ->get();
        // var_dump($data);
        // die;
        $pdf = PDF::loadView('santri.cetakpdf', compact('data'));
        return $pdf->setPaper('a4', 'potrait')->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Santri::find($id);
         return view('santri.edit', compact('data'));
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
        'nama' => 'required',
                'tempat' => 'required',
                'tgl' => 'required',
                'alamat' => 'required',
                'anak' => 'required|numeric',
                'saudara' => 'required|numeric',
                'ijazah' => 'required',
                'nisn' => 'required',
                'diterima' => 'required',
                'kelas' => 'required',
        ],$pesan);
        $data = Santri::find($id);
        $data->update($request->all());
        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect()->route('santri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Santri::find($id);
        $data1 = Orang::find($id);
        $data2 = Wali::where('id',$id)->first();
        // dd($data2);
            if ($data2 != null) {
                $data2->delete();
                if ($data1 != null) {
                    $data1->delete();
                    if ($data != null) {
                        $data->delete();
                        Alert::success('Success', 'Data Berhasil Dihapus');
                        return back();
                    }
                }
            }
    }
}

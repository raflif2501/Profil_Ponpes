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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:superadmin|admin');
    }
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
        $name1 = '';
        $name2 = '';
        $name3 = '';
        $name4 = '';
        $name5 = '';
        $name6 = '';
        $name7 = '';
        $name8 = '';
        $name9 = '';
        $name10 = '';

        $image = $request->file('gambar');
        $name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('image'),$name);

        $image1 = $request->file('gambar1');
        if($image1 != null){
        $name1 = time().'.'.$image1->getClientOriginalExtension();
        $image1->move(public_path('image1'),$name1);
        }

        $image2 = $request->file('gambar2');
        if($image2 != null){
        // dd($image2);
        $name2 = time().'.'.$image2->getClientOriginalExtension();
        $image2->move(public_path('image2'),$name2);
        }

        $image3 = $request->file('gambar3');
        if($image3 != null){
        $name3 = time().'.'.$image3->getClientOriginalExtension();
        $image3->move(public_path('image3'),$name3);
        }

        $image4 = $request->file('gambar4');
        if($image4 != null){
        $name4 = time().'.'.$image4->getClientOriginalExtension();
        $image4->move(public_path('image4'),$name4);
        }

        $image5 = $request->file('gambar5');
        if($image5 != null){
        $name5 = time().'.'.$image5->getClientOriginalExtension();
        $image5->move(public_path('image5'),$name5);
        }

        $image6 = $request->file('gambar6');
        if($image6 != null){
        $name6 = time().'.'.$image6->getClientOriginalExtension();
        $image6->move(public_path('image6'),$name6);
        }

        $image7 = $request->file('gambar7');
        if($image7 != null){
        $name7 = time().'.'.$image7->getClientOriginalExtension();
        $image7->move(public_path('image7'),$name7);
        }

        $image8 = $request->file('gambar8');
        if($image8 != null){
        $name8 = time().'.'.$image8->getClientOriginalExtension();
        $image8->move(public_path('image8'),$name8);
        }

        $image9 = $request->file('gambar9');
        if($image9 != null){
        $name9 = time().'.'.$image9->getClientOriginalExtension();
        $image9->move(public_path('image9'),$name9);
        }

        $image10 = $request->file('gambar10');
        if($image10 != null){
        $name10 = time().'.'.$image10->getClientOriginalExtension();
        $image10->move(public_path('image10'),$name10);
        }

        $data = Konten::create([
        'gambar' => $name,
        'gambar1' => $name1,
        'gambar2' => $name2,
        'gambar3' => $name3,
        'gambar4' => $name4,
        'gambar5' => $name5,
        'gambar6' => $name6,
        'gambar7' => $name7,
        'gambar8' => $name8,
        'gambar9' => $name9,
        'gambar10' => $name10,
        'judul' => $request->judul,
        'tanggal' => $request->tanggal,
        'isi' => $request->isi,
        'isi1' => $request->isi1,
        'isi2' => $request->isi2,
        'isi3' => $request->isi3,
        'isi4' => $request->isi4,
        'isi5' => $request->isi5
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
        'gambar1' => $name1,
        'gambar2' => $name2,
        'gambar3' => $name3,
        'gambar4' => $name4,
        'gambar5' => $name5,
        'gambar6' => $name6,
        'gambar7' => $name7,
        'gambar8' => $name8,
        'gambar9' => $name9,
        'gambar10' => $name10,
        'judul' => $request->judul,
        'tanggal' => $request->tanggal,
        'isi' => $request->isi,
        'isi1' => $request->isi1,
        'isi2' => $request->isi2,
        'isi3' => $request->isi3,
        'isi4' => $request->isi4,
        'isi5' => $request->isi5
        ]);
        }

        if($data){
        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect()->route('konten.index');
        }else{
        Alert::error('Gagal', 'Data Gagal Dirubah');
        return redirect()->route('konten.index');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur;
use App\Models\Konten;

class WelcomeController extends Controller
{
     public function index()
     {
        $data = Struktur::all();
        $data1 = Konten::orderBy('id','DESC')->get();
        return view('welcome',compact('data','data1'));
     }
     public function detail($id){
        $data1 = Konten::find($id);
        return view('detail',compact('data1'));
     }
}

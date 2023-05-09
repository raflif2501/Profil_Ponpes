<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur;
use App\Models\Konten;
use App\Models\Santri;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = auth()->user();

        // if($auth->hasRole('user')){
        //     $data = Struktur::all();
        //     $data1 = Konten::orderBy('id','DESC')->get();
        //     return view('welcome',compact('data','data1'));
        // }elseif($auth->hasRole('superadmin|admin')){
        $data = Struktur::count();
        $data1 = Konten::count();
        $data2 = Santri::count();
        $data3 = User::count();
        return view('admin.index',compact('data','data1','data2','data3'));
    }
}

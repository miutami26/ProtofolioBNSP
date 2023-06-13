<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function showTemplate(){
        return view('template.base');
    }


    public function showBeranda(Request $request, Produk $produk){

        return view('beranda');
    }

}

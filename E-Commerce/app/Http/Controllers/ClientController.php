<?php

namespace App\Http\Controllers;
use App\Models\Promo;
use App\Models\Slide;
use App\Models\Produk;
use App\Models\Kategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{

  public function Template(){
  return view('templatecustomer.base');
  }
    function home(Produk $produk, Request $request,Slide $slide, Promo $promo){
        $data['list_slide']= Slide::all();
         $slide->banner=request('banner');
         if ($request->hasFile('banner')) {
         $image = $request->file('banner');
         $image_path = Storage::disk('public')->put('image', $image);
         $slide->banner = $image_path;
         }

		$data['list_produk'] = produk::all();
         $produk->foto=request('foto');
         if ($request->hasFile('foto')) {
         $image = $request->file('foto');
         $image_path = Storage::disk('public')->put('image', $image);
         $produk->foto = $image_path;
         }

         $data['list_promo'] = Promo::all();
         $promo->foto=request('foto');
         if ($request->hasFile('foto')) {
         $image = $request->file('foto');
         $image_path = Storage::disk('public')->put('image', $image);
         $promo->foto = $image_path;
         }
          $data['list_kategori'] = Kategory::all();
		return view('home', $data);
	}

    public function showCard($id)
    {
        $data['produk'] = Produk::findOrFail($id);
        return view('card', $data);
    }

     public function show($id)
     {
     $data['promo'] = Promo::findOrFail($id);
     return view('show', $data);
     }



	function filter(){
		$Nama_produk = request ('Nama_produk');
		$Stok = explode(",", request('Stok'));
		//$data['harga_min'] = $harga_min = request('harga_min');
		//$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('Nama_produk', 'like', "%$Nama_produk%")->get();
		//$data['list_produk'] = Produk:: whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk:: whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
		//$data['list_produk'] = Produk:: whereNotIn('stok', $stok)->get();
		//$data['list_produk'] = Produk:: whereNotBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk:: whereNull('stok')->get();
		//$data['list_produk'] = Produk:: whereNotNull('stok')->get();
		//$data['list_produk'] = Produk:: whereBetween('stok', [$harga_min, $harga_max])->whereNotIn('stok', [2])->whereYear('created_at', '2020')->get();
		$data['Nama_produk'] = $Nama_produk;
		$data['Stok'] = request('Stok');

		return view('home', $data);
	}
}

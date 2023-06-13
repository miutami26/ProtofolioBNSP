<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    public function index()
    {
        $data['list_promo'] = Promo::all();
        return view('promo.index',$data);
    }
    public function create()
    {
        return view('promo.create');
    }

    public function store(Request $request)
    {
        $request->validate(
        ['foto' =>'required',
         'nama' => 'required',
         'deskripsi' => 'required',
         'stok' => 'required',
         'harga' => 'required',
        ],

        ['foto.required' => 'Wajib di Isi !!!',
         'nama.required' => 'Wajib di Isi !!!',
         'deskripsi.required' => 'Wajib di Isi !!!',
         'stok.required' => 'Wajib di Isi !!!',
         'harga.required' => 'Wajib di Isi !!!',
        ]);
        $prom = 'menunggu';
        $promo= new Promo;
        $promo->foto=request('foto');
        if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $image_path = Storage::disk('public')->put('image', $image);
        $promo->foto = $image_path;
        }
        $promo->nama = request('nama');
        $promo->harga = 10000000.00;
        $harga = $promo->harga;
        $hargaFormatted = number_format($harga, 2, ',', '.');
        $promo->deskripsi = request('deskripsi');
        $promo->stok= request('stok');
        $promo->status = request('status');
        $promo->status=$prom;
        $promo->save();

        return redirect('promo')->with('success','Data berhasil ditambahkan');
    }

    public function show(Promo $promo){
        $data['promo'] = $promo;
        return view('promo.show', $data);
    }

    public function edit(Promo $promo){
        $data['promo'] = $promo;
        return view('promo.edit', $data);
    }

    public function update(Promo $promo, Request $request)
    {
        $promo->foto=request('foto');
        if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $image_path = Storage::disk('public')->put('image', $image);
        $promo->foto = $image_path;      }
        $promo-> nama = request('nama');
        $promo-> harga = request('harga');
        $promo-> deskripsi = request('deskripsi');
        $promo-> stok= request('stok');
        $promo->save();

        return redirect('promo')->with('warning','Data berhasil diupdate');
    }

    public function destroy(Promo $promo)
    {
        Storage::disk('public')->delete($promo->foto);
        $promo->delete();
        return redirect('promo')->with('danger','Data berhasil dihapus');
    }

    public function diterima(Request $request)
    {
        Promo::where('id',$request->delete)->delete();

        Promo::create([
        'id'=> $request->id,
        'foto' => $request->foto,
        'nama' => $request->nama,
        'status' => $request->status,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
        'stok' => $request->stok,
        ]);
        return redirect('promo')->with('success', 'Data Berhasil Diterima');
    }

    public function ditolak(Request $request)
    {
        Promo::where('id',$request->delete)->delete();

        Promo::create([
       'id'=> $request->id,
       'foto' => $request->foto,
       'nama' => $request->nama,
       'status' => $request->status,
       'harga' => $request->harga,
       'deskripsi' => $request->deskripsi,
       'stok' => $request->stok,
        ]);
        return redirect('promo')->with('success', 'Data Promo Ditolak');
    }



}

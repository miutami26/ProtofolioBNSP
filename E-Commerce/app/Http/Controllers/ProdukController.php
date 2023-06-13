<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




class ProdukController extends Controller
{
    function index(){

        $data['list_produk'] = Produk::all();
        return view('produk.index', $data);
    }

    function create(){
        return view('produk.create');
    }

    function store(Request $request){
        $request->validate(
        ['Nama_produk' =>'required',
        'Berat' => 'required',
        'warna' => 'required',
        'Harga' => 'required',
        'warna' => 'required',
        'Stok' => 'required',
        'deskripsi' =>'required',
        'foto' => 'required',
        ],

        ['Nama_produk.required' => 'Wajib di Isi !!!',
        'Berat.required' => 'Wajib di Isi !!!',
        'warna.required' => 'Wajib di Isi !!!',
        'Harga.required' => 'Wajib di Isi !!!',
        'Stok.required' => 'Wajib di Isi !!!',
        'deskripsi.required' => 'Wajib di Isi !!!',
        'foto.required' => 'Wajib di Isi !!!',
        ]);
        $pro = 'menunggu';
        $produk= new Produk;
        $produk-> Nama_produk = request('Nama_produk');
        $produk-> Berat = request('Berat');
         $produk->Harga = 10000000.00;
         $harga = $produk->Harga;
         $hargaFormatted = number_format($harga, 2, ',', '.');
        $produk-> warna = request('warna');
        $produk-> Stok = request('Stok');
        $produk-> deskripsi = request('deskripsi');
        $produk-> status = request('status');
        $produk->foto=request('foto');
         if ($request->hasFile('foto')) {
         $image = $request->file('foto');
         $image_path = Storage::disk('public')->put('image', $image);
         $produk->foto = $image_path;
         }
         $produk->status= $pro;
        $produk->save();
        return redirect('produk')->with('success','Data berhasil ditambahkan');
    }
    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.show', $data);
    }

    function edit(Produk $produk){
        $data['produk'] = $produk;

        return view('produk.edit', $data);
    }

    function update(Produk $produk, Request $request){
        $produk-> Nama_produk = request('Nama_produk');
        $produk-> Berat = request('Berat');
        $produk-> Harga = request('Harga');
        $produk-> warna = request('warna');
        $produk-> Stok = request('Stok');
        $produk-> deskripsi = request('deskripsi');
        $produk->foto=request('foto');
        if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $image_path = Storage::disk('public')->put('image', $image);
        $produk->foto = $image_path;
        }
        $produk->save();


        return redirect('produk')->with('warning','Data berhasil diupdate');
    }

    function destroy(Produk $produk){
        Storage::disk('public')->delete($produk->foto);
        $produk->delete();
        return redirect('produk')->with('danger','Data berhasil dihapus');
    }

    public function terima(Request $request)
    {
        Produk::where('id',$request->delete)->delete();

        Produk::create([
        'id'=> $request->id,
        'Nama_produk' => $request->Nama_produk,
        'Berat' => $request->Berat,
        'status' => $request->status,
        'Harga' => $request->Harga,
        'warna' => $request->warna,
        'Stok' => $request->Stok,
        'deskripsi' => $request->deskripsi,
        'foto' => $request->foto,
        ]);
    return redirect('produk')->with('success', 'Data Berhasil Diterima');
    }

    public function tolak(Request $request)
    {
       Produk::where('id',$request->delete)->delete();

       Produk::create([
       'id'=> $request->id,
       'Nama_produk' => $request->Nama_produk,
       'Berat' => $request->Berat,
       'status' => $request->status,
       'Harga' => $request->Harga,
       'warna' => $request->warna,
       'Stok' => $request->Stok,
       'deskripsi' => $request->deskripsi,
       'foto' => $request->foto,
       ]);
       return redirect('produk')->with('success', 'Data Produk Ditolak');
    }
}

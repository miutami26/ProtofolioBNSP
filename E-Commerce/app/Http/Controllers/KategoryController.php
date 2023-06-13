<?php

namespace App\Http\Controllers;

use App\Models\Kategory;
use Illuminate\Http\Request;

class KategoryController extends Controller
{
    public function index()
    {
        $data['list_kategori'] = Kategory::all();
        return view('kategori.index', $data);
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $kategori = new Kategory;
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect('kategori')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Kategory $kategori)
    {
        $data['kategori'] = $kategori;
        return view('kategori.show', $data);
    }

    public function edit(Kategory $kategori)
    {
        $data['kategori'] = $kategori;
        return view('kategori.edit', $data);
    }

    public function update(Request $request, Kategory $kategori)
    {
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect('kategori')->with('warning', 'Data berhasil diupdate');
    }

    public function destroy(Kategory $kategori)
    {
        $kategori->delete();
        return redirect('kategori')->with('danger', 'Data berhasil dihapus');
    }
}

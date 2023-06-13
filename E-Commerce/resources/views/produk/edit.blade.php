@extends('template.base')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $produk->foto) }}" alt="{{ $produk->foto }}">
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Edit Data Produk
                        <form action="{{ url('produk', $produk->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label" for="">Nama</label>
                            <input type="text" name="Nama_produk" class="form-control"
                                value="{{ $produk->Nama_produk }}">
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label" for="">Foto</label>
                                <input type="file" name="foto" class="form-control" value="{{ $produk->foto }}">
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="">Berat</label>
                                    <input type="text" name="Berat" class="form-control" value="{{ $produk->Berat }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Harga</label>
                                    <input type="text" name="Harga" class="form-control" value="{{ $produk->Harga }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Warna</label>
                                    <input type="text" name="warna" class="form-control" value="{{ $produk->warna }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label" for="">Stok</label>
                                <input type="text" name="Stok" class="form-control" value="{{ $produk->Stok }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control">{{ $produk->deskripsi }}</textarea>
                        </div>
                        <input type="hidden" name="status" value="menunggu">

                        <button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
                        <a href="{{ url('produk') }}" class="float-right btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

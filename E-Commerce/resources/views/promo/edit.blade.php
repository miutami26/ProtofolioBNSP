@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Data Promo
                    </div>
                    <div class="card-body">
                        <form action="{{ url('promo', $promo->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Nama</label>
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ $promo->nama }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Foto</label>
                                        <input type="file" name="foto" class="form-control"
                                            value="{{ $promo->foto }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Harga</label>
                                        <input type="text" name="harga" class="form-control"
                                            value="{{ $promo->harga }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Stok</label>
                                        <input type="text" name="stok" class="form-control"
                                            value="{{ $promo->stok }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $promo->deskripsi }}</textarea>
                            </div>
                            <input type="hidden" name="status" value="menunggu">

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
                                    <a href="{{ url('promo') }}" class="btn btn-secondary float-right">Batal</a>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Tambah Data Promo
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ url('promo') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('nama')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('foto')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Foto</label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('harga')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Harga</label>
                                        <input type="text" name="harga" class="form-control"
                                            value="<?php echo isset($hargaFormatted) ? $hargaFormatted : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('stok')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Stok</label>
                                        <input type="text" name="stok" class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="status" value="menunggu">
                            </div>
                            <div class="form-group">
                                @error('deskripsi')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                                <label class="control-label" for="">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                            </div>
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

@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Detail Data Produk
                    </div>
                    <div class="card-body">
                        <h4>{{ $produk->Nama_produk }}</h4>
                        <div class="card">
                            @if ($produk->status == 'menunggu')
                                @if (auth()->user()->role == 'admin')
                                    <div class="row col-6">
                                        <div class="col-2">
                                            <form action="{{ url('terima') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $produk->id }}">
                                                <input type="hidden" name="Nama_produk" value="{{ $produk->Nama_produk }}">
                                                <input type="hidden" name="Berat" value="{{ $produk->Berat }}">
                                                <input type="hidden" name="Harga" value="{{ $produk->Harga }}">
                                                <input type="hidden" name="warna" value="{{ $produk->warna }}">
                                                <input type="hidden" name="Stok" value="{{ $produk->Stok }}">
                                                <input type="hidden" name="deskripsi" value="{{ $produk->deskripsi }}">
                                                <input type="hidden" name="foto" value="{{ $produk->foto }}">
                                                <input type="hidden" name="delete" value="{{ $produk->id }}">
                                                <input type="hidden" name="status" value="terima">
                                                <button class="btn-success btn-sm">Terima</button>
                                            </form>
                                        </div>
                                        <div class="col-2">
                                            <form action="{{ url('tolak') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $produk->id }}">
                                                <input type="hidden" name="Nama_produk"
                                                    value="{{ $produk->Nama_produk }}">
                                                <input type="hidden" name="Berat" value="{{ $produk->Berat }}">
                                                <input type="hidden" name="Harga" value="{{ $produk->Harga }}">
                                                <input type="hidden" name="warna" value="{{ $produk->warna }}">
                                                <input type="hidden" name="Stok" value="{{ $produk->Stok }}">
                                                <input type="hidden" name="deskripsi" value="{{ $produk->deskripsi }}">
                                                <input type="hidden" name="foto" value="{{ $produk->foto }}">
                                                <input type="hidden" name="delete" value="{{ $produk->id }}">
                                                <input type="hidden" name="status" value="tolak">
                                                <button class="btn-warning btn-sm">Tolak</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            @else
                                @if ($produk->status == 'Terima')
                                    <span class="badge bg-info">{{ $produk->status }}</span>
                                    <h4>Produk Diterima</h4>
                                @else
                                    @if ($produk->status == 'Tolak')
                                        <span class="badge bg-info">{{ $produk->status }}</span>
                                        <p>{{ $produk->keterangan }}</p>
                                    @else
                                    @endif
                                @endif
                            @endif
                        </div>
                        <hr>
                        @include('produk.show.detail')
                        <p>
                            Foto :
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('storage/' . $produk->foto) }}" alt="{{ $produk->foto }}">
                            </div>
                        </div>
                        {!! nl2br($produk->deskripsi) !!}<br>
                        </p>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ url('produk') }}" class="btn btn-dark">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

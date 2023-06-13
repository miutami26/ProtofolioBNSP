@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Detail Data Promo
                    </div>
                    <div class="card">
                        @if ($promo->status == 'menunggu')
                            @if (auth()->user()->role == 'admin')
                                <div class="row col-6">
                                    <div class="col-2">
                                        <form action="{{ url('diterima') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $promo->id }}">
                                            <input type="hidden" name="foto" value="{{ $promo->foto }}">
                                            <input type="hidden" name="nama" value="{{ $promo->nama }}">
                                            <input type="hidden" name="status" value="{{ $promo->status }}">
                                            <input type="hidden" name="harga" value="{{ $promo->harga }}">
                                            <input type="hidden" name="deskripsi" value="{{ $promo->deskripsi }}">
                                            <input type="hidden" name="stok" value="{{ $promo->stok }}">
                                            <input type="hidden" name="delete" value="{{ $promo->id }}">
                                            <input type="hidden" name="status" value="diterima">
                                            <button class="btn-success btn-sm">Terima</button>
                                        </form>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{ url('ditolak') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $promo->id }}">
                                            <input type="hidden" name="foto" value="{{ $promo->foto }}">
                                            <input type="hidden" name="nama" value="{{ $promo->nama }}">
                                            <input type="hidden" name="status" value="{{ $promo->status }}">
                                            <input type="hidden" name="harga" value="{{ $promo->harga }}">
                                            <input type="hidden" name="deskripsi" value="{{ $promo->deskripsi }}">
                                            <input type="hidden" name="stok" value="{{ $promo->stok }}">
                                            <input type="hidden" name="delete" value="{{ $promo->id }}">
                                            <input type="hidden" name="status" value="ditolak">
                                            <button class="btn-primary btn-sm">Tolak</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @else
                            @if ($promo->status == 'Terima')
                                <span class="badge bg-info">{{ $promo->status }}</span>
                                <h4>promo Diterima</h4>
                            @else
                                @if ($promo->status == 'Tolak')
                                    <span class="badge bg-info">{{ $promo->status }}</span>
                                    <p>{{ $promo->keterangan }}</p>
                                @else
                                @endif
                            @endif
                        @endif
                    </div>
                    <div class="card-body">
                        <h4>Nama Produk: {{ $promo->nama }} </h4>
                        <hr>
                        <p>{{ $promo->nama }}</p>
                        <p> <img src="{{ asset('storage/' . $promo->foto) }}" alt="{{ $promo->foto }}" class="rounded"
                                style="width: 50px ">
                        </p>
                        <p>Rp {{ number_format($promo->harga, 2, ',', '.') }}</p>
                        <p>{{ $promo->stok }}</p>
                        <p>{{ $promo->deskripsi }}</p>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ url('promo') }}" class="btn btn-dark">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

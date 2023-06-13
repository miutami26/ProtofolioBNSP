@extends('templatecustomer.base')
@section('hero')
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    @foreach ($list_slide as $index => $data)
                        @if ($data->status == 'aktif')
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"
                                style="background-image: url({{ asset('storage/' . $data->banner) }})">
                                <div class="carousel-container">
                                    <div class="container">
                                        <h2 class="animate__animated animate__fadeInDown">{{ $data->title }}</h2>
                                        <p class="animate__animated animate__fadeInUp">{{ $data->isi }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev"
                    data-bs-target="#heroCarousel">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next"
                    data-bs-target="#heroCarousel">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <br>
    <header class="section-header">
        <h3 class="section-title">Produk</h3>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            <center><b>Kategori Lain</b></center>
                        </h5>
                    </div>
                    <div class="card-body category-list">
                        <ul class="list-group list-group-flush">
                            @foreach ($list_kategori as $data)
                                <li class="list-group-item kategori-item"><a href=""
                                        class="nama-kategori">{{ $data->nama }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach ($list_produk as $data)
                        @if ($data->status == 'terima')
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="{{ asset('storage/' . $data->foto) }}" alt="{{ $data->foto }}"
                                        height="200px">
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $data->Nama_produk }}</h6>
                                        <span class="badge rounded-pill text-bg-primary mt-3 mb-3">
                                            {{ number_format($data->Harga, 2, ',', '.') }}
                                        </span><br>
                                        <a href="{{ url('/card', $data->id) }}" class="btn btn-primary">
                                            Detail
                                        </a>
                                        <a href="#" class="btn btn-warning">
                                            Pesan Sekarang
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
    <header class="section-header">
        <h3 class="section-title">Produk Promo</h3>
    </header>
    <div class="container">
        <div class="row">
            @foreach ($list_promo as $data)
                @if ($data->status == 'diterima')
                    <div class="col-md-3">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('storage/' . $data->foto) }}" alt="{{ $data->foto }}" height="200px">
                                <span class="promo-label">Sale</span>
                            </div>
                            <div class="product-details">
                                <div class="card-header">
                                    <b>{{ $data->nama }}</b>
                                </div>
                                <div class="card-body">
                                    <span class="badge rounded-pill text-bg-primary mt-3 mb-3">
                                        Rp. {{ number_format($data->harga, 2, ',', '.') }}
                                    </span><br>
                                    <a href="{{ url('/show', $data->id) }}"
                                        class="float-start
                                    btn btn-primary">
                                        <i class="fa fa-shopping-cart"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <br>
@endsection

<style>
    .product-card {
        border: 1px solid #a1a0a0;
        border-radius: 5px;
        padding: 2px;
        margin-bottom: 5px;
    }

    .product-image {
        position: relative;
    }

    .product-image img {
        width: 100%;
        height: auto;
    }

    .promo-label {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: red;
        color: white;
        padding: 5px;
        font-size: 14px;
    }

    .product-details {
        margin-top: 10px;
    }

    .product-details .card-header {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .product-details .card-body {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .product-details .price {
        font-size: 14px;
        margin-bottom: 5px;
    }

    .product-details .btn {
        padding: 8px 16px;
        font-size: 14px;
    }

    .nama-kategori {
        color: black;
    }

    .list-group-item {
        border-bottom: 1px solid #eaeaea;
    }

    /* .price {
        background-color: blue;
        color: white;
        display: block;
        padding: 10px;
    } */
</style>

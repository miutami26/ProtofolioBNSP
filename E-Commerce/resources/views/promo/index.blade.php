@extends('template.base')

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Promo Produk</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header mb-4">
                            Stock Produk Promo
                            <a href="{{ url('promo/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus">
                                    Tambah
                                    Data</i></a>
                        </div>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($list_promo as $promo)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('promo', $promo->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('promo', $promo->id) }}/edit" class="btn btn-warning"><i
                                                        class="fa fa-edit"></i></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('promo', $promo->id),
                                                ])
                                            </div>

                                        </td>
                                        <td>{{ $promo->nama }}</td>
                                        <td> <img src="{{ asset('storage/' . $promo->foto) }}" alt="{{ $promo->foto }}"
                                                class="rounded" style="width: 50px ">
                                        </td>
                                        <td>Rp {{ number_format($promo->harga, 2, ',', '.') }}</td>
                                        <td>{{ $promo->stok }}</td>
                                        <td>{{ $promo->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
@endsection

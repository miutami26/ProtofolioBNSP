@extends('template.base')

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">List Produk</h4>
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
                            Product Stock
                            <a href="{{ url('produk/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus">
                                    Tambah Data</i></a>
                        </div>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th width="200px">Aksi</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($list_produk as $produk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('produk', $produk->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('produk', $produk->id) }}/edit" class="btn btn-warning"><i
                                                        class="fa fa-edit"></i></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('produk', $produk->id),
                                                ])
                                            </div>

                                        </td>
                                        <td>{{ $produk->Nama_produk }}</td>
                                        <td>Rp {{ number_format($produk->Harga, 2, ',', '.') }}</td>
                                        <td>{{ $produk->Stok }}</td>
                                        <td>{{ $produk->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div> <!-- end col -->
            </div> <!-- end row -->

        </div>
    </div><!-- container -->
@endsection

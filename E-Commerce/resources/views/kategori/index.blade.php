@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="page-title">Kategori Produk</h4>
                        <button type="button" class="float-right btn btn-dark " data-toggle="modal"
                            data-target="#modal-default">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_kategori as $kategori)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kategori->nama }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#edit{{ $kategori->id }}" data-toggle="modal"
                                                    class="btn btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                @include('template.utils.delete', [
                                                    'url' => url('kategori', $kategori->id),
                                                ])
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="edit{{ $kategori->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Kategori</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ url('kategori', $kategori->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Nama</label>
                                                                    <input type="text" name="nama"
                                                                        value="{{ $kategori->nama }}" id=""
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer ">
                                                            <button class="float-right btn btn-dark mt-3" o><i
                                                                    class="fas fa-save"></i>Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Kategori</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('kategori') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for=""
                                                        class="control-label @error('nama') is-invalid @enderror">Nama</label>
                                                    <input type="text" name="nama" id=""
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer ">
                                            <button class="float-right btn btn-primary mt-3"><i
                                                    class="fas fa-save mx-2"></i>Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>
    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#modal-default').modal('show')
            })
        </script>
    @endif
@endsection

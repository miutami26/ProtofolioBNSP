@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Tambah Data Slide
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

                        <form action="{{ url('slide') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('banner')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Banner</label>
                                        <input type="file" name="banner" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('title')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('isi')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Caption</label>
                                        <input type="text" name="isi" class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="status" value="menunggu">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-dark float-right "><i class="fas fa-save "></i>Simpan</button>
                                    <a href="{{ url('slide') }}" class="btn btn-secondary float-right ">Batal</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

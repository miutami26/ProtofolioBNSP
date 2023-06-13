@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Data slide
                    </div>
                    <div class="card-body">
                        <form action="{{ url('slide', $slide->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Banner</label>
                                        <input type="file" name="banner" class="form-control"
                                            value="{{ $slide->banner }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Title</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $slide->title }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Caption</label>
                                        <input type="text" name="isi" class="form-control"
                                            value="{{ $slide->isi }}">
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

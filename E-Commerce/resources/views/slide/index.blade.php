@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        Data Slide
                        <a href="{{ url('slide/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah
                                Data</i></a>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th width="200px">Aksi</th>
                                    <th>Banner</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_slide as $slide)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('slide', $slide->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('slide', $slide->id) }}/edit" class="btn btn-warning"><i
                                                        class="fa fa-edit"></i></a>

                                                @include('template.utils.delete', [
                                                    'url' => url('slide', $slide->id),
                                                ])
                                            </div>

                                        </td>
                                        <td> <img src="{{ asset('storage/' . $slide->banner) }}" alt="{{ $slide->banner }}"
                                                class="rounded" style="width: 50px ">
                                        </td>
                                        <td>{{ $slide->title }}</td>
                                        <td>{{ $slide->status }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

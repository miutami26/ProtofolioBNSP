@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Detail Data slide
                    </div>

                    <div class="card">
                        @if ($slide->status == 'menunggu')
                            @if (auth()->user()->role == 'admin')
                                <div class="row col-6">
                                    <div class="col-2">
                                        <form action="{{ url('aktif') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $slide->id }}">
                                            <input type="hidden" name="banner" value="{{ $slide->banner }}">
                                            <input type="hidden" name="isi" value="{{ $slide->isi }}">
                                            <input type="hidden" name="title" value="{{ $slide->title }}">
                                            <input type="hidden" name="delete" value="{{ $slide->id }}">
                                            <input type="hidden" name="status" value="aktif">
                                            <button class="btn-success btn-sm">Aktif</button>
                                        </form>
                                    </div>
                                    <div class="col-3">
                                        <form action="{{ url('nonaktif') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $slide->id }}">
                                            <input type="hidden" name="banner" value="{{ $slide->banner }}">
                                            <input type="hidden" name="isi" value="{{ $slide->isi }}">
                                            <input type="hidden" name="title" value="{{ $slide->title }}">
                                            <input type="hidden" name="delete" value="{{ $slide->id }}">
                                            <input type="hidden" name="status" value="nonaktif">
                                            <button class="btn-primary btn-sm">Non-Aktif</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @else
                            @if ($slide->status == 'aktif')
                                <span class="badge bg-info">{{ $slide->status }}</span>
                                <h4>slide Diterima</h4>
                            @else
                                @if ($slide->status == 'nonaktif')
                                    <span class="badge bg-info">{{ $slide->status }}</span>
                                    <p>{{ $slide->keterangan }}</p>
                                @else
                                @endif
                            @endif
                        @endif
                    </div>

                    <div class="card-body">
                        <h4>Bannder {{ $slide->nama }}</h4>
                        <hr>
                        <p>
                            Title {{ $slide->title }} |
                        </p>
                        <p>
                            Caption {{ $slide->isi }}
                        </p>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ url('slide') }}" class="btn btn-dark">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

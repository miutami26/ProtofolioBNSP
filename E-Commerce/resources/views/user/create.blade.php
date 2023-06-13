@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Tambah Data User
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

                        <form action="{{ url('user') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('nama')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @error('jenis_kelamin')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                    <label>Jenis Kelamin </label>
                                    <select name="jenis_kelamin" id="" class="form-control">
                                        <option value="">--- Pilih Jenis Kelamin ---</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('username')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('email')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('no_hp')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">No Hp</label>
                                        <input type="text" name="no_hp" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @error('role')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                    <label>Role </label>
                                    <select name="role" id="" class="form-control">
                                        <option value="">--- Pilih Role---</option>
                                        <option value="staff">Staff</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @error('password')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label class="control-label" for="">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="float-right group">
                                    <a href="{{ url('user') }}" class="btn btn-secondary">Batal</a>
                                    <button class="btn btn-dark "><i class="fas fa-save "></i>Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

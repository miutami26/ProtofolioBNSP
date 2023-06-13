@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Data User
                    </div>
                    <div class="card-body">
                        <form action="{{ url('user', $user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Nama</label>
                                        <input type="text" value="{{ $user->nama }}" name="nama"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Jenis Kelamin </label>
                                    <select name="jenis_kelamin" id="" class="form-control">
                                        <option value="">--- Pilih Jenis Kelamin ---</option>
                                        <option value="Perempuan" @if ($user->jenis_kelamin == 'Perempuan') selected @endif>
                                            Perempuan
                                        </option>
                                        <option value="Laki-Laki" @if ($user->jenis_kelamin == 'Laki-Laki') selected @endif>
                                            Laki-Laki
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Username</label>
                                        <input type="text" value="{{ $user->username }}" name="username"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Email</label>
                                        <input type="text" value="{{ $user->email }}" name="email"
                                            class="form-control">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">No Hp</label>
                                        <input type="text" value="{{ $user->ho_hp }}" name="no_hp"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Role </label>
                                    <select name="role" id="" class="form-control">
                                        <option value="">--- Pilih Role ---</option>
                                        <option value="admin" @if ($user->role == 'admin') selected @endif>
                                            Admin
                                        </option>
                                        <option value="staff" @if ($user->role == 'staf') selected @endif>
                                            Staff
                                        </option>
                                        <option value="user" @if ($user->role == 'user') selected @endif>
                                            User
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="float-right form-group mt-2"><button type="submit"
                                    class="btn btn-dark">Update</button>
                                <a href="{{ url('user') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

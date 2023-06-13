<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/gm.png">

    <!-- App css -->
    <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 ">
            <div class="col-12 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                <div class="auth-logo-box">
                                    <a href="#" class="logo logo-admin"><img
                                            src="{{ url('/') }}/assets/images/gm.png" height="55" alt="logo"
                                            class="auth-logo"></a>
                                </div>
                                <!--end auth-logo-box-->

                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Silahkan Register</h4>
                                </div>
                                <!--end auth-logo-text-->
                                <form action="{{ url('/register') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        @error('nama')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label for="name">Nama</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nama Lengkap"
                                                name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        @error('username')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label for="username">Username</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="username"
                                                name="username">
                                        </div>
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group">
                                        @error('email')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label for="email">Email</label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="email"
                                                name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        @error('no_hp')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label for="email">No Handphone</label>
                                        <div class="input-group mb-3">
                                            <input type="no_hp" class="form-control" placeholder="No Handphone"
                                                name="no_hp">
                                        </div>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        @error('jenis_kelamin')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="" class="form-control">
                                            <option value="">--- Pilih Jenis Kelamin ---</option>
                                            <option value="Perempuan">Perempuan</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        @error('role')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label for="role">Role</label>
                                        <select name="role" id="" class="form-control">
                                            <option value="">--- Pilih Role---</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group">
                                        @error('password')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                        <label for="password">Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="password"
                                                name="password">
                                        </div>
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group">
                                        <label for="conf_password">Confirm Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="conf_password"
                                                placeholder="Enter Confirm Password">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group row mt-4">
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-switch switch-success">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customSwitchSuccess">
                                                <label class="custom-control-label text-muted"
                                                    for="customSwitchSuccess">By registering you agree to the Frogetor
                                                    <a href="#" class="text-primary">Terms of Use</a></label>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button
                                                class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light"
                                                type="submit">Register <i
                                                    class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end form-group-->
                                </form>
                                <!--end form-->
                            </div>
                            <!--end /div-->

                            <div class="m-3 text-center text-muted">
                                <p class="">Sudah Memiliki Akun ? <a href="{{ url('login') }}"
                                        class="text-primary ml-2">Log in</a>
                                </p>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end auth-card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End Log In page -->




    <!-- jQuery  -->
    <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery-ui.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/js/metismenu.min.js"></script>
    <script src="{{ url('/') }}/assets/js/waves.js"></script>
    <script src="{{ url('/') }}/assets/js/feather.min.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.slimscroll.min.js"></script>

    <!-- App js -->
    <script src="{{ url('/') }}/assets/js/app.js"></script>

</body>

</html>

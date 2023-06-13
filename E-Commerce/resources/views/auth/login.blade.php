 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <title>E-Commerce</title>
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
                                             src="{{ url('/') }}/assets/images/gm.png" height="55"
                                             alt="logo" class="auth-logo"></a>
                                 </div>
                                 <!--end auth-logo-box-->

                                 <div class="text-center auth-logo-text">
                                     <h4 class="mt-0 mb-3 mt-5">Selamat Datang | Arkatama Store</h4>
                                 </div>
                                 <!--end auth-logo-text-->

                                 @include('template.utils.notif')
                                 <form action="{{ url('proses_login') }}" method="post">
                                     @csrf
                                     <div class="form-group">
                                         <label for="username">Username</label>
                                         <div class="input-group mb-3">
                                             <input type="text" class="form-control" placeholder="username"
                                                 name="username">
                                         </div>
                                     </div>
                                     <!--end form-group-->

                                     <div class="form-group">
                                         <label for="userpassword">Password</label>
                                         <div class="input-group mb-3">
                                             <input type="password" class="form-control" placeholder="Kata Sandi"
                                                 name="password">
                                         </div>
                                     </div>
                                     <!--end form-group-->

                                     <div class="form-group row mt-4">
                                         <div class="col-sm-6">
                                             <div class="custom-control custom-switch switch-success">
                                                 <input type="checkbox" class="custom-control-input"
                                                     id="customSwitchSuccess">
                                                 <label class="custom-control-label text-muted"
                                                     for="customSwitchSuccess">Ingat Saya</label>
                                             </div>
                                         </div>
                                         <!--end col-->

                                         <!--end col-->
                                     </div>
                                     <!--end form-group-->

                                     <div class="form-group mb-0 row">
                                         <div class="col-12 mt-2">
                                             <button
                                                 class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light"
                                                 type="submit">Masuk <i class="fas fa-sign-in-alt ml-1"></i></button>
                                         </div>
                                         <!--end col-->
                                     </div>
                                     <!--end form-group-->
                                 </form>
                                 <!--end form-->
                             </div>
                             <!--end /div-->

                             <div class="m-3 text-center text-muted">
                                 <p class="">Belum Memiliki Akun ? <a href="{{ url('register') }}"
                                         class="text-primary ml-2">
                                         Register</a></p>
                             </div>
                         </div>
                         <!--end card-body-->
                     </div>

                 </div>
                 <!--end auth-page-->
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

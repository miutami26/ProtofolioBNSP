<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Arkatama | Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/gm.png" />
    <!-- DataTables -->
    <link href="{{ url('/') }}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/') }}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    <!-- App css -->
    <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/jquery-ui.min.css" rel="stylesheet" />
    <link href="{{ url('/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Top Bar Start -->
    @include('template.section.header')
    <!-- Top Bar End -->

    <!-- Left Sidenav -->
    @include('template.section.sidebar')
    <!-- end left-sidenav-->

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            @include('template.utils.notif')
                        </div>
                    </div>
                </div>
                @yield('content')

            </div>
            <!-- container -->
            @include('template.section.footer')


            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- jQuery  -->
    <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/js/metismenu.min.js"></script>
    <script src="{{ url('/') }}/assets/js/waves.js"></script>
    <script src="{{ url('/') }}/assets/js/feather.min.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery-ui.min.js"></script>

    <script src="{{ url('/') }}/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="{{ url('/') }}/assets/pages/jquery.helpdesk-dashboard.init.js"></script>

    <!-- App js -->
    <script src="{{ url('/') }}/assets/js/app.js"></script>

    <!-- Required datatable js -->
    <script src="{{ url('/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- App js -->
    <script src="{{ url('/') }}/assets/js/app.js"></script>
    <script>
        $('#datatable').DataTable();
    </script>
</body>

</html>

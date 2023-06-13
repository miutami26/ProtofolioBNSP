<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Welcome | Arkatama</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/gm.png">
    <link href="{{ url('/') }}/asset/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/asset/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('/') }}/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/') }}/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/') }}/asset/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizPage
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('templatecustomer.section.header')
    <!-- End Header -->

    <!-- ======= hero Section ======= -->
    @yield('hero')

    <!-- End Hero Section -->

    <main id="main">

        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('templatecustomer.section.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="{{ url('/') }}/asset/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ url('/') }}/asset/vendor/aos/aos.js"></script>
    <script src="{{ url('/') }}/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/asset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('/') }}/asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('/') }}/asset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('/') }}/asset/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ url('/') }}/asset/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('/') }}/asset/js/main.js"></script>

</body>

</html>

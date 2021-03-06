<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Karyawan</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('images/favicon.png') }}" type="image/png">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ url('css/slick.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ url('css/LineIcons.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ url('css/default.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ url('css/landing.css') }}">

    <!--====== DataTables CSS ======-->
    <link rel="stylesheet" href="{{ url('css/datatables.min.css') }}">

</head>

<body>
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="images/logo.svg" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo"
                            aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Karyawan</a></li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                @guest
                                <li><a class="solid" href="{{ route('login') }}">Sign in</a></li>
                                @else
                                <li><a class="solid" href="{{ route('login') }}">Ke Admin</a></li>
                                @endguest
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Aplikasi Karyawan</h1>
                                    <p class="text">Dapat melakukan CRUD, SMTP, dan Export ke .xls</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one page-scroll" href="#services">LIHAT TABEL</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="images/slider/1.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Tabel Karyawan</h3>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-features mt-40">
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="MyTables">
                                <thead>
                                    <tr align="center">
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Umur</th>
                                        <th>Gaji</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->age }}</td>
                                        <td>{{ $employee->salary }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div>
        </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="images/logo.svg" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    {{-- <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social --> --}}
                    <div class="footer-support text-center">
                        <span class="number">+6283162241167</span>
                        <span class="mail">farrellp43@gmail.com</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> and
                            Built-with <a rel="nofollow" href="https://ayroui.com">Ayro UI</a> </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{ url('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ url('js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ url('js/slick.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ url('js/ajax-contact.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ url('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('js/isotope.pkgd.min.js') }}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ url('js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('js/scrolling-nav.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ url('js/main.js') }}"></script>

    <!--====== DataTables js ======-->
    <script src="{{ url('js/datatables.min.js') }}"></script>

    <!--====== DataTables script ======-->
    <script>
        $(document).ready(function() {
            $('#MyTables, #Tables').DataTable({
              'paging'      : true,
              'lengthChange': true,
              'searching'   : false,
              'ordering'    : true,
              'info'        : false,
              'autoWidth'   : true
            });
          });
    </script>

</body>

</html>
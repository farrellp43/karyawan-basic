<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karyawan &middot; @yield('title')</title>

    {{-- Icon --}}
    <link rel="shortcut icon" href="{{ url('images/favicon.png') }}" type="image/png">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/datatables.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{ url('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/components.css') }}">

    @stack('scripts')

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Do your best!</div>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="#">Karyawan</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">Kar</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="nav-item {{ (request()->is('home')) ? " active" : '' }}"><a class="nav-link"
                                href="{{ route('home') }}"><i class="fas fa-fire"></i>
                                <span>Dashboard</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title')</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item">@yield('pages')</div>
                            <div class="breadcrumb-item">@yield('title')</div>
                        </div>
                    </div>
                    @include('alert')
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div><a href="#">Muhammad Farrell Denando</a>
                </div>
                <div class="footer-right">
                    Powered by <a href="https://getstisla.com">Stisla</a>
                </div>
            </footer>
        </div>
    </div>

    {{-- Script JS --}}
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/datatables.min.js') }}"></script>
    <script src="{{ url('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('js/buttons.flash.min.js') }}"></script>
    <script src="{{ url('js/select2.full.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('js/stisla.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
    <script src="{{ url('js/jquery-ui.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#DataTables, #Tables').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
          });
    </script>

</body>

</html>
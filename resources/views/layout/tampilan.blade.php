<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PENERIMAAN SISWA BARU | SD Islam Terpadu Hidayah Klaten</title>

    <!-- Ikon Favicon -->
    <link rel="icon" href="{{ asset('favicon-16x16') }}">

    <!-- ... (kode lainnya) ... -->
</head>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }} ">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }} ">
</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="{{ asset('template/dist/img/foto') }} " alt="AdminLTELogo" height="60" width="60">
    </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-warning" style="background-color:seagreen;">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/beranda/profil admin" class="nav-link" style=" font-weight: bold; color: White;">Profil</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block" style="margin-left: 160px;">
                    <a class="nav-link" style=" font-weight: bold; color: White;">PENERIMAAN SISWA BARU | SD Islam Terpadu Hidayah Klaten</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/logout" class="nav-link" style=" font-weight: bold; color: White;">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar" style="background-color:cadetblue;">
            <!-- Brand Logo -->
            <a class="brand-link" style="text-align: center;">
                <span class="brand-text font-weight" style="color:aliceblue;">SD Islam Terpadu Hidayah</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('template/dist/img/user2-128x128.jpg' )}}" class="img-circle elevation-2" alt="User profile picture">
                    </div>

                    <div class="info">
                        @if(session()->has('user'))
                        <?php $user = session('user'); ?>
                        <a class="d-block" style="font-weight: bold; color: white;">{{ $user->name }}</a>
                        @else
                        <p>User not authenticated</p>
                        @endif
                    </div>

                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/beranda" class="nav-link {{ Request::is('beranda') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <p>DASHBOARD</p>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('data/*') ? 'menu-open' : '' }}">
                            <a class="nav-link {{ Request::is('data/*') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <p>
                                    DATA MASTER
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/data/casis" class="nav-link {{ Request::is('data/casis') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Calon Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/data/ortu" class="nav-link {{ Request::is('data/ortu') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Orang Tua Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/data/panitia" class="nav-link {{ Request::is('data/panitia') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Panitia</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item {{ Request::is('pendaftaran') || Request::is('data pembayaran') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('pendaftaran') || Request::is('data pembayaran') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <p>
                                    ADMINISTRASI
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/pendaftaran" class="nav-link {{ Request::is('pendaftaran') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pendaftaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/data pembayaran" class="nav-link {{ Request::is('data pembayaran') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembayaran</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item {{ Request::is('laporan/*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('laporan/*') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                <i class="fa fa-print" aria-hidden="true"></i>
                                <p>
                                    LAPORAN
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/laporan/pendaftaran" class="nav-link {{ Request::is('laporan/pendaftaran') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pendaftaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/laporan/pembayaran" class="nav-link {{ Request::is('laporan/pembayaran') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembayaran</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item {{ Request::is('beranda/*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('beranda/*') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <p>
                                    PENGATURAN
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/beranda/datauser" class="nav-link {{ Request::is('beranda/datauser') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/beranda/tahun ajar" class="nav-link {{ Request::is('beranda/tahun ajar') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tahun Ajar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/beranda/pengaturan" class="nav-link {{ Request::is('beranda/pengaturan') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Landing Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/beranda/pengumuman seleksi" class="nav-link {{ Request::is('beranda/pengumuman seleksi') ? 'active' : '' }}" style="font-weight: bold; color: white;">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengumuman</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <footer class="main-footer">
            <strong><a href="https://adminlte.io"></a>PENERIMAAN SISWA BARU | SD Islam Terpadu Hidayah Klaten</strong>

            <div class="float-right d-none d-sm-inline-block">
                <!-- <b>Versio</b>  -->
            </div>
        </footer>
        <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js')}} "></script>
    <!-- Bootstrap -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}} "></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.js')}}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js')}} "></script>
    <script src="{{ asset('template/plugins/raphael/raphael.min.js')}} "></script>
    <script src="{{ asset('template/plugins/jquery-mapael/jquery.mapael.min.js')}} "></script>
    <script src="{{ asset('template/plugins/jquery-mapael/maps/usa_states.min.js')}} "></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- ChartJS -->
    <script src="{{ asset('template/plugins/chart.js/Chart.min.js')}} "></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('template/dist/js/demo.js')}} "></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('template/dist/js/pages/dashboard2.js')}} "></script>
</body>

</html>
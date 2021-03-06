<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image" href="{{asset('asset/img/logo/logosn.png')}}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.transitions.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/normalize.css')}}">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/meanmenu.min.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/educate-custon-icon.css')}}">
    {{-- <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/morrisjs/morris.css')}}"> --}}
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('asset/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@stack('adduserscript')

        
</head>

<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{url('/login')}}"><img class="main-logo" src="{{asset('/asset/img/logo/logo.png')}}" alt="logo" /></a>
                <strong><a href="{{url('/login')}}"><img src="{{asset('/asset/img/logo/logosn.png')}}" alt="logo" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        //navigasi admin
                        <li @if (Auth::User()->role == "Admin") 
                            style="display: block"
                        @else
                            style="display: none"
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">User</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="User" href="{{url('/user')}}"><span class="mini-sub-pro">Management User</span></a></li>
                            </ul>
                        </li>
                        <li @if (Auth::User()->role == "Admin") 
                            style="display: block"
                        @else
                            style="display: none"
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Personil Sekolah</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Guru" href="{{url('/guru')}}"><span class="mini-sub-pro">Guru</span></a></li>
                                <li><a title="Siswa" href="{{url('/siswa')}}"><span class="mini-sub-pro">Siswa</span></a></li>
                            </ul>
                        </li>
                        <li @if (Auth::User()->role == "Admin") 
                            style="display: block"
                        @else
                            style="display: none"
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Data Akademik</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Mata Pelajaran" href="{{url('/matapelajaran')}}"><span class="mini-sub-pro">Mata Pelajaran</span></a></li>
                                <li><a title="Kelas" href="{{url('/kelas')}}"><span class="mini-sub-pro">Kelas</span></a></li>
                                <li><a title="Kelas Siswa" href="{{url('/kelassiswa')}}"><span class="mini-sub-pro">Kelas Siswa</span></a></li>
                                <li><a title="Nilai" href="{{url('/nilai')}}"><span class="mini-sub-pro">Nilai</span></a></li>
                            </ul>
                        </li>
                        <li @if (Auth::User()->role == "Admin") 
                            style="display: block"
                        @else
                            style="display: none"
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Cetak Laporan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Laporan Siswa" href="{{url('/laporansiswa')}}"><span class="mini-sub-pro">Laporan Siswa</span></a></li>
                                <li><a title="Laporan Guru" href="{{url('/laporanguru')}}"><span class="mini-sub-pro">Laporan Guru</span></a></li>
                                <li><a title="Laporan Kelas" href="{{url('/laporankelas')}}"><span class="mini-sub-pro">Laporan Kelas</span></a></li>
                                <li><a title="Laporan Nilai" href="{{url('/laporannilai')}}"><span class="mini-sub-pro">Laporan Nilai</span></a></li>
                                <li><a title="Laporan Pelajaran" href="{{url('/laporanpelajaran')}}"><span class="mini-sub-pro">Laporan Pelajaran</span></a></li>
                            </ul>
                        </li>
                        <li  @if (Auth::User()->role == "Guru") 
                            style="display: block"
                        @else
                            style="display: none"
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span><span class="mini-click-non">Guru</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Input Nilai Siswa" href="{{url('/inputnilaisiswa')}}"><span class="mini-sub-pro">Input Nilai Siswa</span></a></li>
                            </ul>
                        </li>
                        <li  @if (Auth::User()->role == "Siswa") 
                            style="display: block"
                        @else
                            style="display: none"
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Siswa</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Nilai Raport" href="{{url('/nilairaport')}}"><span class="mini-sub-pro">Nilai Raport</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="{{asset('/asset/img/logo/logo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-advance-area">
            <!-- header area-->
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="{{url('/login')}}" class="nav-link">Home</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="{{asset('/asset/img/product/pro4.jpg')}}" alt="" />
                                                            <span class="admin-name">{{ Auth::User()->email }}</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Ubah Password</a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"><span class="edu-icon edu-locked author-log-ic"></span>Keluar</a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="{{url('/home')}}">Dashboard</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">User<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="{{url('/user')}}">Admin</a>
                                                </li>
                                                <li><a href="{{url('/guru')}}">Guru</a>
                                                </li>
                                                <li><a href="{{url('/siswa')}}">Siswa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Data Akademik<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="{{url('/matapelajaran')}}">Mata Pelajaran</a>
                                                </li>
                                                <li><a href="{{url('/kelas')}}">Kelas</a>
                                                </li>
                                                <li><a href="{{url('/kelassiswa')}}">Kelas Siswa</a>
                                                </li>
                                                <li><a href="{{url('/nilai')}}">Nilai</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Cetak Laporan<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="{{url('/laporansiswa')}}">Laporan Siswa</a>
                                                </li>
                                                <li><a href="{{url('/laporanguru')}}">Laporan Guru</a>
                                                </li>
                                                <li><a href="{{url('/laporankelas')}}">Laporan Kelas</a>
                                                </li>
                                                <li><a href="{{url('/laporannilai')}}">Laporan Nilai</a>
                                                </li>
                                                <li><a href="{{url('/laporanpelajaran')}}">Laporan Pelajaran</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Guru<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="{{url('/inputnilaisiswa')}}">Input Nilai Siswa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Siswa<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="{{url('/nilairaport')}}">Nilai Raport</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
        </div>
      @yield('body')
      @yield('footer')
    </div>
    <!-- jquery
        ============================================ -->
    <script src="{{asset('asset/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{asset('asset/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{asset('asset/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('asset/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('asset/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('asset/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('asset/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('asset/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('asset/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{asset('asset/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('asset/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('asset/js/morrisjs/raphael-min.js')}}"></script>
    {{-- <script src="{{asset('asset/js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('asset/js/morrisjs/morris-active.js')}}"></script> --}}
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('asset/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('asset/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('asset/js/sparkline/sparkline-active.js')}}"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{asset('asset/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('asset/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('asset/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('asset/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('asset/js/main.js')}}"></script>
    {{-- <!-- tawk chat JS
        ============================================ -->
    <script src="{{asset('asset/js/tawk-chat.js')}}"></script> --}}
</body>

</html>
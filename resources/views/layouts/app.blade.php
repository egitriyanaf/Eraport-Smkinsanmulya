<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <li>
                            <a title="Admin" href="{{url('/admin')}}" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">Admin</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Data Akademik</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Mata Pelajaran" href="#"><span class="mini-sub-pro">Mata Pelajaran</span></a></li>
                                <li><a title="Kelas" href="#"><span class="mini-sub-pro">Kelas</span></a></li>
                                <li><a title="Kelas Siswa" href="#"><span class="mini-sub-pro">Kelas Siswa</span></a></li>
                                <li><a title="Nilai" href="#"><span class="mini-sub-pro">Nilai</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Cetak Laporan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Laporan Siswa" href="#"><span class="mini-sub-pro">Laporan Siswa</span></a></li>
                                <li><a title="Laporan Guru" href="#"><span class="mini-sub-pro">Laporan Guru</span></a></li>
                                <li><a title="Laporan Kelas" href="#"><span class="mini-sub-pro">Laporan Kelas</span></a></li>
                                <li><a title="Laporan Nilai" href="#"><span class="mini-sub-pro">Laporan Nilai</span></a></li>
                                <li><a title="Laporan Pelajaran" href="#"><span class="mini-sub-pro">Laporan Pelajaran</span></a></li>
                            </ul>
                        </li>
                        //navigasi guru
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span><span class="mini-click-non">Guru</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Input Nilai Siswa" href="#"><span class="mini-sub-pro">Input Nilai Siswa</span></a></li>
                            </ul>
                        </li>
                        //navigasi siswa
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Siswa</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Nilai Raport" href="#"><span class="mini-sub-pro">Nilai Raport</span></a></li>
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
                                                            <span class="admin-name">{{ Auth::user()->name }}</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Setting Profil</a>
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
                                        <li><a href="#">Dashboard</a></li>

                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Admin <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="#">Data Seluruh Admin</a>
                                                </li>
                                                <li><a href="#">Tambah Admin</a>
                                                </li>
                                                <li><a href="#">Edit Admin</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Guru <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="#">Data Seluruh Guru</a>
                                                </li>
                                                <li><a href="#">Tambah Guru</a>
                                                </li>
                                                <li><a href="#">Edit Guru</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Siswa <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="#">Data Seluruh Siswa</a>
                                                </li>
                                                <li><a href="#">Tambah Siswa</a>
                                                </li>
                                                <li><a href="#">Edit Siswa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="#">All Courses</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="#">Library Asset</a>
                                                </li>
                                                <li><a href="#">Add Library Asset</a>
                                                </li>
                                                <li><a href="#">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="#">Departments List</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="#">Inbox</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="#">Google Map</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="#">Bar Charts</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="#">Static Table</a>
                                                </li>
                                                <li><a href="#">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="#">Basic Form Elements</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="#">Basic Form Elements</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="#">Login</a>
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
      <!--footer-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020. All rights reserved. SMK Insan Mulya Kibin, Kabupaten Serang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
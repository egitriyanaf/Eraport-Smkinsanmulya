@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('body')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                {{-- <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form> --}}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/home')}}">Dashboard</a> <span class="bread-slash"></span>
                                </li>
                                {{-- <li><span class="bread-blod">@yield()</span>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Body-->
<div class="widgets-programs-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Total Admin</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-apps"></i>
                        </div>
                        <div class="m-t-xl widget-cl-1">
                            <h1 class="text-success">{{($Admin->total())}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Active Views</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-professor"></i>
                        </div>
                        <div class="m-t-xl widget-cl-2">
                            <h1 class="text-info">462</h1>
                            <small>
                                        Lorem Ipsum is simply dummy text of the printing and Lorem <strong>typesetting industry</strong> spa.
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Earning</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-department"></i>
                        </div>
                        <div class="m-t-xl widget-cl-3">
                            <h1 class="text-warning">$2000</h1>
                            <small>
                                        Lorem Ipsum is simply dummy text of the printing and Lorem <strong>typesetting industry</strong> spa.
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Messages</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-message"></i>
                        </div>
                        <div class="m-t-xl widget-cl-4">
                            <h1 class="text-danger">680</h1>
                            <small>
                                        Lorem Ipsum is simply dummy text of the printing and Lorem <strong>typesetting industry</strong> spa.
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<!--statistic-->
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>University Earnings</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp graph-rp-dl">
                                    <p>All Earnings are in million $</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline cus-product-sl-rp">
                        <li>
                            <h5><i class="fa fa-circle" style="color: #006DF0;"></i>CSE</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #933EC5;"></i>Accounting</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #65b12d;"></i>Electrical</h5>
                        </li>
                    </ul>
                    <div id="morris-bar-chart" style="height: 356px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="356" version="1.1" width="707" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with RaphaÃ«l 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.859375" y="317" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#eef0f2" d="M45.359375,317H682" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="244" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#eef0f2" d="M45.359375,244H682" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="171" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#eef0f2" d="M45.359375,171H682" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="98" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#eef0f2" d="M45.359375,98H682" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#eef0f2" d="M45.359375,25H682" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="653.0617897727273" y="329.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="537.3089488636364" y="329.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="421.55610795454544" y="329.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="305.80326704545456" y="329.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="190.05042613636363" y="329.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="74.29758522727272" y="329.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><rect x="61.275390625" y="25" width="6.6814630681818175" height="292" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="70.95685369318181" y="54.19999999999999" width="6.6814630681818175" height="262.8" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="80.63831676136363" y="141.8" width="6.6814630681818175" height="175.2" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="119.15181107954545" y="98" width="6.6814630681818175" height="219" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="128.83327414772728" y="127.20000000000002" width="6.6814630681818175" height="189.79999999999998" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="138.5147372159091" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="177.0282315340909" y="171" width="6.6814630681818175" height="146" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="186.70969460227272" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="196.39115767045453" y="229.4" width="6.6814630681818175" height="87.6" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="234.90465198863637" y="98" width="6.6814630681818175" height="219" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="244.5861150568182" y="127.20000000000002" width="6.6814630681818175" height="189.79999999999998" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="254.267578125" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="292.7810724431818" y="171" width="6.6814630681818175" height="146" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="302.4625355113636" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="312.14399857954544" y="229.4" width="6.6814630681818175" height="87.6" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="350.65749289772725" y="98" width="6.6814630681818175" height="219" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="360.33895596590907" y="127.20000000000002" width="6.6814630681818175" height="189.79999999999998" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="370.0204190340909" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="408.53391335227275" y="98" width="6.6814630681818175" height="219" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="418.21537642045456" y="127.20000000000002" width="6.6814630681818175" height="189.79999999999998" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="427.8968394886364" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="466.4103338068182" y="98" width="6.6814630681818175" height="219" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="476.091796875" y="127.20000000000002" width="6.6814630681818175" height="189.79999999999998" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="485.7732599431818" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="524.2867542613636" y="98" width="6.6814630681818175" height="219" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="533.9682173295455" y="127.20000000000002" width="6.6814630681818175" height="189.79999999999998" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="543.6496803977273" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="582.1631747159091" y="98" width="6.6814630681818175" height="219" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="591.844637784091" y="127.20000000000002" width="6.6814630681818175" height="189.79999999999998" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="601.5261008522727" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="640.0395951704545" y="25" width="6.6814630681818175" height="292" rx="0" ry="0" fill="#006df0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="649.7210582386364" y="54.19999999999999" width="6.6814630681818175" height="262.8" rx="0" ry="0" fill="#933ec5" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="659.4025213068181" y="200.2" width="6.6814630681818175" height="116.80000000000001" rx="0" ry="0" fill="#65b12d" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 478.887px; top: 122px; display: none;"><div class="morris-hover-row-label">2013</div><div class="morris-hover-point" style="color: #006DF0">
CSE:
75
</div><div class="morris-hover-point" style="color: #933EC5">
Accounting:
65
</div><div class="morris-hover-point" style="color: #65b12d">
Electrical:
40
</div></div></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Total Visit</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                        </li>
                        <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success">1500</span>
                        </li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Page Views</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                        </li>
                        <li class="text-right graph-two-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple">3000</span>
                        </li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Unique Visitor</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                        </li>
                        <li class="text-right graph-three-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info">5000</span>
                        </li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Bounce Rate</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                        </li>
                        <li class="text-right graph-four-ctn"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="text-danger"><span class="counter">18</span>%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

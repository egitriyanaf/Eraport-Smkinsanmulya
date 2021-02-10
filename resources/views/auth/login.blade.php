    <!DOCTYPE html>
    <html>
    <head>
    <title>Login</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    
         <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
    
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
    
        <!-- Custom Theme files -->
        <link href="{{asset('asset_login/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('asset_login/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!-- //Custom Theme files -->
    
        <!-- web font -->
        <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
        <!-- //web font -->


    </head>
    <body>
    
    <!-- main -->
    <div class="w3layouts-main"> 
        <div class="bg-layer">
            <h1>Login E-Raport SMK Insan Mulya Kibin Kabupaten Serang</h1>
            <div class="header-main">
                <div class="main-icon">
                    <img src="{{ asset('logo.png') }}" width="100px" height="100px" alt="logo">
                </div>
                
                

                {{--  form login  --}}
                <div class="header-left-bottom">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="icon1">
                            <span class="fa fa-user"></span><input type="email" placeholder="Email" id="email" name="email" :value="old('email')" required autofocus/>
                        </div>
                        <div class="icon1">
                            <span class="fa fa-lock"></span><input type="password" placeholder="Password" id="password" name="password" required autocomplete="current-password"/>
                        </div>
                        <div class="login-check">
                             <label class="checkbox"><input type="checkbox" id="remember_me" name="remember"><i> </i> Biarkan Saya Masuk</label>
                        </div>
                        <div class="bottom">
                            <button class="btn">Log In</button>
                        </div>
                       
                    </form>	
                </div>
            </div>
            
            <!-- copyright -->
            <div class="copyright">
                <p>© 2020 SMK Insan Mulya Kibin Kabupaten Serang . All rights reserved</p>
            </div>
            <!-- //copyright --> 
        </div>
    </div>	
    <!-- //main -->
    
    </body>
    </html>
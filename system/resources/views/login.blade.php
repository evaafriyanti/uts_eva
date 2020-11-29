<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{url('public')}}/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/login/css/main.css">
    <script src="{{url('public')}}/alert/sweetalert/dist/sweetalert.min.js"></script>

<!--===============================================================================================-->
</head>
<body>
    
    
    <div class="container-login100" style="background-image: url('{{url('public')}}/login/images/photo1.png');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="{{url('login')}}" method="post">
            @csrf
                <span class="login100-form-title p-b-37">
                    L O G I N
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Username kosong">
                    <input class="input100" type="text" name="username" placeholder="Masukkan Username">
                    <span class="focus-input100" data-symbol="&#xf206;"></span></i>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate="Password kosong">
                   
                   <input class="input100" type="password" name="password" placeholder=" Masukkan Password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <div class="container-login100-form-btn-pull-right">
                    <center>
                    <button class="login100-form-btn">
                        Login
                    </button>
                    </center>
                </div>
                <br>
                <div class="forgot">
                    <a href="{{url('register')}}">Buat Akun Baru?</a>
                </div>
                
                
            </form>

            
        </div>
    </div>
    
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="{{url('public')}}/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('public')}}/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('public')}}/login/vendor/bootstrap/js/popper.js"></script>
    <script src="{{url('public')}}/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('public')}}/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('public')}}/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{url('public')}}/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="{{url('public')}}/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="{{url('public')}}/login/js/main.js"></script>
    <script>
        @if (session('login_error')){
            swal("Username atau Password yang anda masukan Salah")
        }
        @endif
    </script>

</body>
</html>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title> UTS Blog | Artikel</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="{{url('public')}}/style/images/favicon.png">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/style/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/style/color/red.css" media="all">
<link rel="stylesheet" type="text/css" media="screen" href="{{url('public')}}/style/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/style/type/museo.css" media="all">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/style/type/ptsans.css" media="all">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/style/type/charis.css" media="all">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all">
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all">
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all">
<![endif]-->
<script src="{{url('public')}}/style/js/jquery-1.6.2.min.js"></script>
<script src="{{url('public')}}/style/js/ddsmoothmenu.js"></script>
<script src="{{url('public')}}/style/js/transify.js"></script>
<script src="{{url('public')}}/style/js/jquery.prettyPhoto.js"></script>
<script src="{{url('public')}}/style/js/jquery.superbgimage.min.js"></script>
<script src="{{url('public')}}/style/js/jquery.slickforms.js"></script>
<script>
jQuery(document).ready(function($){
  $('.forms').dcSlickForms();
});
</script>
</head>
<body>
<div id="thumbs"> <a href="{{url('public')}}/style/images/art/bg1.jpg">1</a> <a href="{{url('public')}}/style/images/art/bg2.jpg">2</a> <a href="{{url('public')}}/style/images/art/bg3.jpg">3</a> <a href="{{url('public')}}/style/images/art/bg4.jpg">4</a> <a href="{{url('public')}}/style/images/art/bg5.jpg">5</a> <a href="{{url('public')}}/style/images/art/bg6.jpg">6</a> </div>
<div id="superbgimage">
  <div class="scanlines"></div>
</div>
<div id="wrapper">
  <div id="header">
    <div class="logo"><a href="index.html"><img src="{{url('public')}}/style/images/logo ea.png" alt=""></a></div>
    
  </div>
  <div class="clear"></div>
  <div id="menu" class="menu opacity">
    <ul>
      <li><a href="{{url('home')}}">Home</a></li>
      <li><a href="{{url('pengguna')}}">Artikel</a></li>
      <li><a href="{{url('register')}}">Register</a></li>
      <li><a href="{{url('logout')}}">Logout</a></li>
    </ul>
    <br style="clear: left">
  </div>
  <div id="container" class="opacity">
    <div class="full-width">
       @yield('profil')
          @yield('content')

    </div>
    <div class="clear"></div>
    <div id="footer">
      <div class="footer-top"></div>
      
      
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div id="copyright" class="opacity">
    <p>@ Copyright 2020 | Teknik Informatika <a href="">Eva Afriyanti</a>.</p>
  </div>
</div>
<script src="{{url('public')}}/style/js/scripts.js"></script>
</body>
</html>


      
				 

  
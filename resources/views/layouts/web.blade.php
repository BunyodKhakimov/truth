<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Истина</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by gettemplates.co"/>
    <meta name="keywords"
          content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"/>
    <meta name="author" content="gettemplates.co"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet"> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
<!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-page">
    @include('_partials._aside')

    @include('_partials._buttons')

    <div class="container-fluid" id="fh5co-image-grid">
        <div class="grid">
            <div class="grid-sizer"></div>
                @yield('content')
        </div>
    </div>

</div>

<!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>

    <!-- Magnific -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup-options.js')}}"></script>
    <!-- Isotope & imagesLoaded -->
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- GSAP  -->
    <script src="{{asset('js/TweenLite.min.js')}}"></script>
    <script src="{{asset('js/CSSPlugin.min.js')}}"></script>
    <script src="{{asset('js/EasePack.min.js')}}"></script>

    <!-- MAIN JS -->
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>


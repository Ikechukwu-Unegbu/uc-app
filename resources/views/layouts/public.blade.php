<!DOCTYPE html>
<html lang="zxx">


<!--  
  -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}" />
    <title>Bitfonix - Bitcoin And Crypto Currency HTML Template</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Google Font  -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i" rel="stylesheet"> 
    <!-- icofont icon -->
    <!-- <link rel="stylesheet" href="assets/css/icofont.css">	 -->
    <link rel="stylesheet" href="{{asset('css/icofont.css')}}">
    <!-- font awesome icon -->
    <!-- <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">	 -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <!-- animate CSS -->
    <!-- <link rel="stylesheet" href="assets/css/animate.css"> -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!--- meanmenu Css-->
    <!-- <link rel="stylesheet" href="assets/css/meanmenu.min.css" media="all" /> -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}" media="all"/>	
    <!--- owl carousel Css-->
    <!-- <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="{{asset('owl/css/owl.carousel.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css"> -->
    <!-- venobox -->
    <!-- <link rel="stylesheet" href="assets/venobox/css/venobox.css" />	 -->
    <link rel="stylesheet" href="{{asset('veno/css/venobox.css')}}">
    <!-- Style CSS --> 
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive  CSS -->
    <!-- <link rel="stylesheet" href="assets/css/responsive.css"> -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    @yield('head')
</head>

<body>

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="theme-loader">Bitfonix</div>
	</div>
	<!-- END PRELOADER --> 
	
	<!-- START HEADER SECTION -->
	<header class="main-header header-1">
		<!-- START TOP AREA -->
    @include('partials._top')
		<!-- END TOP AREA -->

		<!-- START LOGO AREA -->
		@include('partials._logo_area')
		<!-- END LOGO AREA -->

		<!-- START NAVIGATION AREA -->
    @include('partials._navigation')
		<!-- END NAVIGATION AREA -->	
	</header>
	<!-- END HEADER SECTION -->
  @yield('content')
  
	
    <!-- <script src="assets/js/jquery-2.2.4.min.js"></script> -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <!-- popper js -->
    <!-- <script src="assets/bootstrap/js/popper.min.js"></script> -->
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu min js  -->
    <!-- <script src="assets/js/jquery.meanmenu.min.js"></script> -->
    <script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>

	<!-- Sticky JS -->
    <!-- <script src="assets/js/jquery.sticky.js"></script> -->
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <!-- owl-carousel min js  -->
    <!-- <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>	 -->
    <script src="{{asset('owl/js/owl.carousel.min.js')}}"></script>
    <!-- jquery appear js  -->
    <!-- <script src="assets/js/jquery.appear.js"></script> -->
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <!-- countTo js -->
    <!-- <script src="assets/js/jquery.inview.min.js"></script> -->
    <script src="{{asset('js/jquery.inview.min.js')}}"></script>
    <!-- venobox js -->
    <!-- <script src="assets/venobox/js/venobox.min.js"></script> -->
    <script src="{{asset('veno/js/venobox.min.js')}}"></script>
    <!-- <script src="assets/js/masonry.pkgd.min.js"></script> -->
    <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <!-- scroll to top js -->
    <!-- <script src="assets/js/scrolltopcontrol.js"></script> -->
    <script src="{{asset('js/scrolltopcontrol.js')}}"></script>
    
    <!-- WOW - Reveal Animations When You Scroll -->
    <!-- <script src="assets/js/wow.min.js"></script> -->
    <script src="{{asset('js\wow.min.js')}}"></script>
    <!-- scripts js -->
    <!-- <script src="assets/js/scripts.js"></script> -->
    <script src="{{asset('js/scripts.js')}}"></script>
	<!-- chart js -->
    <!-- <script src="assets/js/canvasjs.min.js"></script> -->
    <script src="{{asset('js\canvasjs.min.js')}}"></script>
    <!-- <script src="assets/js/canvasjs.activeone.js"></script> -->
    <script src="{{asset('js\canvasjs.activeone.js')}}"></script>
</body>



</html>
<!DOCTYPE html>

<html>
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/themify/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/magnific-popup/magnific-popup.css') }}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/slick/slick-theme.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/site/css/style.css') }}">
  
  <!--Favicon-->
  <link rel="icon" href="{{ asset('assets/site/images/favicon.png') }}" type="image/x-icon">

  @yield('styles')

</head>

<body>

<!-- Header Start -->
<header class="navigation">
  <div class="header-top ">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-2 col-md-4">
          <div class="header-top-socials text-center text-lg-left text-md-left">
            <a href="#" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
            <a href="javascript:void(0)" aria-label="github"><i class="fab fa-github"></i></a>
          </div>
        </div>
        <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
          <div class="header-top-info mb-2 mb-md-0">
            <a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
            <a href="mailto:support@gmail.com"><i class="fas fa-envelope mr-2"></i><span>support@gmail.com</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="navbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg px-0 py-4">
            <a class="navbar-brand" href="{{ url('/') }}">
              Mega<span>kit.</span>
            </a>
      
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
              aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars"></span>
            </button>
      
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item @@home">
                  <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item @@contact"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item @@contact"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
              </ul>
      
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header Close -->

@yield('content')

<footer class="footer section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Company</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Quick Links</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Subscribe Us</h4>
          <p>Subscribe to get latest news article and resources </p>

          <form action="#" class="sub-form">
            <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
            <a href="#" class="btn btn-main btn-small">subscribe</a>
          </form>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="widget">
          <div class="logo mb-4">
            <h3>Mega<span>kit.</span></h3>
          </div>
          <h6><a href="mailto:support@gmail.com">Support@megakit.com</a></h6>
          <a href="tel:+23-345-67890"><span class="text-color h4">+23-456-6588</span></a>
        </div>
      </div>
    </div>

    <div class="footer-btm pt-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            Copyright &copy; 2020, Designed &amp; Developed by <a href="https://themefisher.com/"
              >Themefisher</a>
          </div>
        </div>
        <div class="col-lg-6 text-left text-lg-right">
          <ul class="list-inline footer-socials">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p mr-2 "></i>Pinterest</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
  <span class="icon fa fa-angle-up"></span>
</div>


<!-- 
Essential Scripts
=====================================-->
<!-- Main jQuery -->
<script src="{{ asset('assets/site/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4.3.1 -->
<script src="{{ asset('assets/site/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!--  Magnific Popup-->
<script src="{{ asset('assets/site/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('assets/site/plugins/slick/slick.min.js') }}"></script>
<!-- Counterup -->
<script src="{{ asset('assets/site/plugins/counterup/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/site/plugins/counterup/jquery.counterup.min.js') }}"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="{{ asset('assets/site/') }}plugins/google-map/map.js" defer></script>

@yield('scripts')

<script src="{{ asset('assets/site/js/script.js') }}"></script>

</body>

</html>
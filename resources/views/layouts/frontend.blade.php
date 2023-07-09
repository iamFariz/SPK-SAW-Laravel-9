<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Tuku Mobil</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/imgs/logo/logo.png">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom.css">
</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i>
                                        Indonesia <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="assets/imgs/theme/flag-en.png"
                                                    alt="">Inggris</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Ramadhan <b>Special Deals</b> <a href="shop.html">lihat detail</a></li>
                                    <li>Proses Mudah dan Cepat</li>
                                    <li>Dp hanya <b>30 jutaan</b> <a href="shop.html">Pesan Sekarang</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                                <ul>
                                    <li><i class="fi-rs-user"></i>{{ Auth::user()->name }} /
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                        </form>
                                    </li>
                                </ul>
                            @else
                                <ul>
                                    <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Login </a> / <a
                                            href="{{ route('register') }}">Sign Up</a></li>
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="{{route('homepage')}}"><img src="frontend/imgs/logo/logo.png" width="65px" height="60px"
                                    alt="logo"></a>
                        </div>
                        <div class="header-right">
                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li><a href="{{route('home')}}">Beranda </a></li>
                                        <li><a href="{{route('about')}}">Tentang</a></li>
                                        <li><a href="{{route('contact')}}">Kontak</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="main-categori-wrap d-none d-lg-block">
                                <a class="categori-button" href="{{route('spk')}}" >
                                    <span class="fi-rs-apps"></span> Rekomendasi SPK
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-content-area">
                    <div class="mobile-header-info-wrap mobile-header-border">
                        <div class="single-mobile-header-info mt-30">
                            <a href="contact.html"> Our location </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="login.html">Log In </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="register.html">Sign Up</a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="#">(+1) 0000-000-000 </a>
                        </div>
                    </div>
                    <div class="mobile-social-icon">
                        <h5 class="mb-15 text-grey-4">Follow Us</h5>
                        <a href="#"><img src="frontend/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                        <a href="#"><img src="frontend/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                        <a href="#"><img src="frontend/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                        <a href="#"><img src="frontend/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                        <a href="#"><img src="frontend/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main">
            <section class="newsletter p-30 text-white wow fadeIn animated">
                <div class="container">

                </div>
            </section>
            <section class="section-padding footer-mid">
                <div class="container pt-15 pb-20">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="widget-about font-md mb-md-5 mb-lg-0">
                                <div class="logo logo-width-1 wow fadeIn animated">
                                    <a href="index.html"><img src="frontend/imgs/logo/logo.png" alt="logo" width="65" height="60"></a>
                                </div>
                                <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                                <p class="wow fadeIn animated">
                                    <strong>Address: </strong>jl.AR Hakim no 99, Kota Tegal.
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>Phone: </strong>0856-8796-0972
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>Email: </strong>contact@tukumobil.com
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 mob-center">
                            <h5 class="widget-title wow fadeIn animated">Install App</h5>
                            <div class="row">
                                <div class="col-md-8 col-lg-12">
                                    <p class="wow fadeIn animated">From App Store or Google Play</p>
                                    <div class="download-app wow fadeIn animated mob-app">
                                        <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img
                                                src="frontend/imgs/theme/app-store.jpg" alt=""></a>
                                        <a href="#" class="hover-up"><img src="frontend/imgs/theme/google-play.jpg"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2  col-md-3">
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="#"><img src="frontend/imgs/theme/icons/icon-facebook.svg"
                                        alt=""></a>
                                <a href="#"><img src="frontend/imgs/theme/icons/icon-twitter.svg"
                                        alt=""></a>
                                <a href="#"><img src="frontend/imgs/theme/icons/icon-instagram.svg"
                                        alt=""></a>
                                <a href="#"><img src="frontend/imgs/theme/icons/icon-pinterest.svg"
                                        alt=""></a>
                                <a href="#"><img src="frontend/imgs/theme/icons/icon-youtube.svg"
                                        alt=""></a>
                            </div>
                            <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="frontend/imgs/theme/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <div class="container pb-20 wow fadeIn animated mob-center">
                <div class="row">
                    <div class="col-12 mb-20">
                        <div class="footer-bottom"></div>
                    </div>
                    <div class="col-lg-6">
                        <p class="float-md-left font-sm text-muted mb-0">
                            <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-conditions.html">Terms &
                                Conditions</a>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lg-end text-start font-sm text-muted mb-0">
                            &copy; <strong class="text-brand">Tuku Mobil</strong> All rights reserved
                        </p>
                        <p class="text-lg-end text-start font-sm text-muted mb-0">
                            Designed by SurfideMedia Powered By. Fadila Rizka
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Vendor JS-->
        <script src="{{ asset('frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/slick.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.syotimer.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/wow.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery-ui.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/magnific-popup.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/select2.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/waypoints.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/counterup.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/images-loaded.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/isotope.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/scrollup.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.vticker-min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.theia.sticky.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.elevatezoom.js') }}"></script>
        <!-- Template  JS -->
        <script src="{{ asset('frontend/js/main.js?v=3.3') }}"></script>
        <script src="{{ asset('frontend/js/shop.js?v=3.3') }}"></script>
    </body>

    </html>

    {{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>TukuMobil</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}" />
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('frontend/assets/imgs/logo.png')}}" alt="logo" height="65px"
          width="150px"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header-->
@yield('content')
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">
        Copyright &copy; TukuMobil2023
      </p>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
  <!-- Core theme JS-->
  <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html> --}}

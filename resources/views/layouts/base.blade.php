<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--===== Meta Tag =====-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="AcredInvestments - Real Estate Agency">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="business, property, directory, listing, real estate, Real estate, realtor, developer, apartment, broker, real estate agency, map, company, agent, rent house">
    <meta name="author" content="machina@evoton.co.ke">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--CSs Links
 ==================================================================-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">

    <!--====================================================
 Typography links 
 Import Google Fonts
 ======================================================-->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Title -->
    <title>Acred Investments - Real Estate Agency</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/AcredInvLogo3.jpeg') }}">

</head>

<body oncontextmenu="return false;">
    <!-- Start Back to top
=========================================================================-->
    <div id="scroll" style="display: none;"><i class="fa fa-angle-up"></i></div>
    <!-- End Back to top

 ==============================================-->
    <!-- Start Header
=========================================================================-->
    <header class="nav-on-top">
        <div class="top-header bg-secondary border-bottom-1-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9 col-xl-8">
                        <ul class="list-style-1 icon-primary color-white d-flex">
                            <li><i class="fa fa-map-marker"></i>Niarobi, Kenya</li>
                            <li><i class="fa fa-phone"></i> +(254) 790-790-900</li>
                            <li><i class="fa fa-envelope"></i> info@acredinvestments.com</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-3 col-xl-4">
                        <ul class="social-media-1 d-flex color-white-a float-right">
                            <li><a href="https://www.facebook.com/ACRED-1984627011828522/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/acredinvestment?igshid=ybq2y0jylyo0"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" class="nav-header header-four bg-secondary py-10 border-bottom-1-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light px-0">
                            <a class="navbar-brand" href="{{Route('home')}}"><img class="nav-logo" src="{{asset('images/logo/AcredInvLogo2.jpeg')}}" alt="logo"></a>
                            <button class="toggle-btn" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listing</a>
                                        <ul class="dropdown-menu shadow">
                                            <li><a class="dropdown-item" href="{{ route('listing', 'land') }}">Land</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('listing', 'residential') }}">Residential</a></li>
                                            <li><a class="dropdown-item" href="{{ route('listing', 'office') }}">commercial</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                                <ul class="admin-info color-white-a">
                                @guest

                            <li><a href="/">Welcome</a></li>

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                            </ul>
                                <!-- <ul class="admin-info color-white-a">
                                    <li><a href="login.html">Sign In</a></li>
                                    <li><a href="register.html">Sign Up</a></li>
                                </ul> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!--=========================================================================-->
    <!-- content Start
    =========================================================================-->
    @yield('content')
    <!-- End Content
    =========================================================================-->
    <!--  Partners and Subscribe Form Start
==================================================================-->
    <div class="patner-subscribe bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 wow animated slideInDown">
                    <div class="bg-white shadow py-80">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 px-60 border-right">
                                <div class="side-title pb-30">
                                    <span class="small-title color-primary position-relative line-primary">Partners</span>
                                    <h2 class="title mb-20 color-secondary">Our Popular Fellows!</h2>
                                    <p>Working with investors, developers and real estate development companies, we think not only about one-off profit, but also about the long term mutually beneficial business relationship.</p>
                                </div>
                                <form class="news-letter bg-gray mt-30">
                                    <div class="form-group position-relative">
                                        <input class="form-control" type="text" name="email" placeholder="PAtner with us">
                                        <button class="bg-gray color-secondary"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12 col-lg-6 px-60">
                                <div class="side-title pb-30 mt-md-50 text-right">
                                    <span class="small-title color-primary position-relative line-right-primary">Newsletter</span>
                                    <h2 class="title mb-20 color-secondary">Get Update Now!</h2>
                                    <p>Know everything that hits the market!</p>
                                    <P>
                                        Get private announcement and priority content by subscribing to our newsletter.
                                    </p>
                                </div>
                                <form class="news-letter bg-gray mt-30">
                                    <div class="form-group position-relative">
                                        <input class="form-control" type="text" name="email" placeholder="Subscribe">
                                        <button class="bg-gray color-secondary"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Partners and Subscribe Form Start
==================================================================-->
    <!-- Footer Start
    =========================================================================-->
    <footer class="bg-secondary pb-50" style="margin-top: -233px; padding-top: 313px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-6 wow animated slideInLeft">
                    <div class="footer-logo"><a href="#"><img class="logo-bottom" src="{{asset('images/logo/AcredInvLogo2.jpeg')}}" alt="Footer Logo"></a></div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-6 wow animated slideInRight">
                    <ul class="social-media-2 large color-white-a float-right">
                        <li class="mr-20"><strong>Follow Us:</strong></li>
                        <li><a href="https://www.facebook.com/ACRED-1984627011828522/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://instagram.com/acredinvestment?igshid=ybq2y0jylyo0"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <hr class="border-bottom-1 w-100 my-50">
                <div class="col-sm-6 col-md-6 col-lg-3 wow animated slideInUp">
                    <div class="footer-widget color-gray-light mt-sm-30">
                        <h3 class="color-white line-bottom pb-15 mb-20">Have Any Question?</h3>
                        <div class="widget-content color-primary">
                            <ul class="widget-contact">
                                <li>
                                    Call
                                    <span class="color-white">+(254) 790-790-900</span>
                                </li>
                                <li>
                                    Email
                                    <span class="color-white">support@acredinvestments.com</span>
                                </li>
                                <li>
                                    Free Consultation
                                    <span class="color-white">Fill Out Form</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 wow animated slideInDown">
                    <div class="footer-widget color-gray-light mt-sm-30">
                        <h3 class="color-white line-bottom pb-15 mb-20">About</h3>
                        <div class="widget-content hover-white-primary">
                            <ul class="quick-links">
                                <li><a href="{{ route('about') }}">Company</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Carrers</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 wow animated slideInUp">
                    <div class="footer-widget color-gray-light mt-md-30">
                        <h3 class="color-white line-bottom pb-15 mb-20">Quick Links</h3>
                        <div class="widget-content hover-white-primary">
                            <ul class="quick-links">
                                <li><a href="#">For Rent</a></li>
                                <li><a href="#">For Sale</a></li>
                                <li><a href="#">Commercial</a></li>
                                <li><a href="#">Lands</a></li>
                                <li><a href="#">Property Guides</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 wow animated slideInDown">
                    <div class="footer-widget color-gray-light mt-sm-30">
                        <h3 class="color-white line-bottom pb-15 mb-20">Help</h3>
                        <div class="widget-content hover-white-primary">
                            <ul class="quick-links">
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Cancellation</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Report</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright bg-secondary color-white">
        <div class="container">
            <div class="row">
                <hr class="border-top-1-light-gray w-100 m-0">
                <div class="col-md-12 col-lg-12">
                    <div class="py-15 text-center">
                        AcredInvestments @ 2020. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End
=========================================================================-->
    <!-- jquery Links
==================================================================-->
    <script src="{{ asset('js/jquery-v3.4.1.js') }}"></script>
    <script src="{{ asset('js/greensock.js') }}"></script>
    <script src="{{ asset('js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/tmpl.js') }}"></script>
    <script src="{{ asset('js/jquery.dependClass-0.1.js') }}"></script>
    <script src="{{ asset('js/draggable-0.1.js') }}"></script>
    <script src="{{ asset('js/jquery.slider.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/color-settings.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/chart.min.js')}}"></script>
    <script src="{{ asset('js/vue-chartjs.js')}}"></script>
    <script src="{{ asset('js/vue.js')}}"></script>
    <script src="{{ asset('js/jquery.barrating.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlVVUxeZqpBLv-jrgsQO1XQ7wvBS9mlRo"></script>
    <script src="{{ asset('js/map.scripts.js')}}"></script>
    <script>
        // Layer Slider
        //------------------------------------
        $('#slider').layerSlider({
            sliderVersion: '6.2.1',
            type: 'fullwidth',
            responsiveUnder: 0,
            layersContainer: 1200,
            maxRatio: 1,
            parallaxScrollReverse: true,
            hideUnder: 0,
            hideOver: 100000,
            skin: 'v5',
            showBarTimer: false,
            showCircleTimer: false,
            thumbnailNavigation: 'disabled',
            allowRestartOnResize: false,
            skinsPath: "{{asset('images/slider/skins/')}}",
            height: 900
        });
    </script>
    <script>
        document.onkeydown = function(e) {
            if (e.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }

            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
        }
    </script>
</body>


</html>
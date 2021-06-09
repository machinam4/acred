<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--===== Meta Tag =====-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Welcome to the company Acred, a real estate investment company industry expert, specializing in providing tailor made high quality services for home buyers, vendors & landlords of all types, properties, commercial & residential property investments.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="business, property, directory, listing, real estate, Real estate, realtor, developer, apartment, broker, real estate agency, map, company, agent, rent house">
    <meta name="author" content="machina@evoton.co.ke">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{ asset('images/logo/AcredInvLogo3.jpeg')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/logo/AcredInvLogo3.jpeg')}}">
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
    <title>Acred Investment - Real Estate Agency</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/AcredInvLogo3.jpeg') }}">

    {{-- google trcking --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-199178060-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-199178060-1');
</script>

</head>

<body oncontextmenu="return false;">

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="k8JshAIN"></script>
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
                            <li><i class="fa fa-map-marker"></i>Nairobi, Kenya</li>
                            <li><i class="fa fa-phone"></i> +(254) 790-790-900</li>
                            <li><i class="fa fa-envelope"></i> info@acredinvestment.com</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-3 col-xl-4">
                        <ul class="social-media-1 d-flex color-white-a float-right">
                            <li><a target="blank" href="https://www.facebook.com/ACRED-1984627011828522/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="blank" href="https://twitter.com/acredinvestment?s=08"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="blank" href="https://instagram.com/acredinvestment?igshid=ybq2y0jylyo0"><i class="fa fa-instagram"></i></a></li>
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

                            <li></li>

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
                                    <h2 class="title mb-20 color-secondary">Want to work with us?</h2>
                                    <p>Working with investors, developers and real estate development companies, we think not only about one-off profit, but also about the long term mutually beneficial business relationship.</p>
                                </div><br>
                                <div class="btn-position x-center mt-30">
                                    <a class="btn btn-primary position-relative" href="{{Route('contact')}}">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 px-60">
                                <div class="side-title pb-30 mt-md-50 text-right">
                                    <span class="small-title color-primary position-relative line-right-primary">Newsletter</span>
                                    <h2 class="title mb-20 color-secondary">Get Updated Now!</h2>
                                    <p>Know everything that hits the market!</p>
                                    <P>
                                        Get private announcements and priority content by subscribing to our newsletter.
                                    </p>
                                </div>
                                <form class="news-letter bg-gray mt-30" id=contact-form>
                                    <div class="form-group position-relative">
                                        @csrf
                                        <input type="hidden" name="type" value="client">
                                        <input type="hidden" name="name" value="subscriber">
                                        <input type="hidden" name="subject" value="Subscribe to mailing List">
                                        <input type="hidden" name="message" value="I would like to subscribe to mailing list">                                        
                                        <input class="form-control" type="text" name="email" placeholder="Subscribe">
                                        <button class="bg-gray color-secondary" id="send"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                    <div class="error-handel position-relative">
                                        <div id="success">Your email sent Successfully, Thank you.</div>
                                        <div id="error">Error occurred while sending email. Please try again later.</div>
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
                        <li><a target="blank" href="https://www.facebook.com/ACRED-1984627011828522/"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="blank" href="https://twitter.com/acredinvestment?s=08"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="blank" href="https://instagram.com/acredinvestment?igshid=ybq2y0jylyo0"><i class="fa fa-instagram"></i></a></li>
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
                                    <span class="color-white">info@acredinvestment.com</span>
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
                                <li><a href="{{ route('about') }}">News</a></li>
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
                                <li><a href="{{ route('listing', 'residential') }}">For Rent</a></li>
                                <li><a href="{{ route('listing', 'residential') }}">For Sale</a></li>
                                <li><a href="{{ route('listing', 'office') }}">Commercial</a></li>
                                <li><a href="{{ route('listing', 'land') }}">Land</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-6 col-md-6 col-lg-3">
                                         <div class="footer-widget color-gray-light mt-md-30">

                    <div class="fb-page" data-href="https://www.facebook.com/ACRED-1984627011828522/" data-tabs="timeline" data-width="" data-height="360" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ACRED-1984627011828522/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ACRED-1984627011828522/">ACRED</a></blockquote></div>
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
                        AcredInvestment @ 2020. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End
=========================================================================-->

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+254 790 790 900", // WhatsApp number
            call: "+254 790 790 900", // Call phone number
            call_to_action: "Message us", // Call to action
            button_color: "#932C8B", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
            pre_filled_message: "Hello, how may we help you? Just send us a message", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
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
     <script src="{{ asset('js/validate.js') }}"></script>
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
            // if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            //     return false;
            // }

            // if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            //     return false;
            // }
        }
    </script>
</body>


</html>
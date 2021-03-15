@extends('layouts.base')

@section('content')
<!-- Page Banner Start
            ==================================================================-->
<div class="page-banner overlay-black" style="padding: 150px 0">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="page-banner-title color-primary">Contact Us</h1>
                <div class="text-area w-50 mt-15 color-white">
                    <p>Porttitor luctus est sit lacinia non praesent aptent hymenaeos taciti tortor. Sociosq platea
                        porta facilisis vitae dictum bibendun tellus ante fusce vulputate dolor lorem vulputate hac
                        quisque diam etiam.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 py-15 px-0 bg-transparent hover-white-primary">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End
            ==================================================================-->
<!-- Contact us Start
            ==================================================================-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-xl-8">
                <form id="contact-form" action="https://themetrading.com/html/fresher/email.php" method="post">
                    <h3 class="color-secondary line-bottom pb-15 mb-30 wow slideInDown animated">Get in Touch</h3>
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                            <input type="text" name="name" class="form-control bg-gray" placeholder="Your Name*">
                        </div>
                        <div class="form-group col-md-12 col-lg-6 wow slideInLeft animated">
                            <input type="email" name="email" class="form-control bg-gray" placeholder="Email Address*">
                        </div>
                        <div class="form-group col-md-12 col-lg-12 wow slideInLeft animated">
                            <input type="text" id="subject" name="subject" class="form-control bg-gray" placeholder="Subject*">
                        </div>
                        <div class="form-group col-md-12 col-lg-12 wow slideInRight animated">
                            <textarea class="form-control bg-gray" id="message" name="message" rows="7" placeholder="Type Comments..."></textarea>
                        </div>
                        <div class="col-lg-12 wow slideInUp animated"><button type="submit" id="Send" class="btn btn-secondary">Send</button></div>
                    </div>

                    <div class="error-handel position-relative">
                        <div id="success">Your email sent Successfully, Thank you.</div>
                        <div id="error">Error occurred while sending email. Please try again later.</div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-4">
                <h3 class="color-secondary line-bottom pb-15 mb-30 mt-md-50 wow slideInDown animated">Contact With
                    Us</h3>
                <ul class="contact-info icon-font-small icon-primary wow slideInUp animated">
                    <li>
                        <i class="fa fa-phone"></i>
                        <div class="d-inline-block">
                            <strong class="d-block">Phone</strong>
                            <span>+(254) 790-790-900</span>
                            <!-- <span>+(844) 123-456-700</span> -->
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <div class="d-inline-block">
                            <strong class="d-block">Email</strong>
                            <span>support@acredinvestment.com</span>
                            <span>info@acredinvestment.com</span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <div class="d-inline-block">
                            <strong class="d-block">Address</strong>
                            <span>Nairobi, Kenya.</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Contact us End
            ==================================================================-->
@endsection
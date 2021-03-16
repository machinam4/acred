@extends('layouts.base')

@section('content')
    <!-- Page Banner Start
                                    ==================================================================-->
    <div class="page-banner overlay-black" style="padding: 150px 0; background: url(../images/background/acredinvestment5.webp) no-repeat center center / cover;
    width: 100%;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="page-banner-title color-primary">Services</h1>
                    <div class="text-area w-50 mt-15 color-white">
                        <p>Services provided by Acred Investment company evoke positive emotions and lead to the changes in clients lives for the better. 
                             to serve all of our clients’ real estate needs in today’s increasingly fast-paced world, first of all to make them happy while looking for their preferred property investment. </p>
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
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End
                                    ==================================================================-->
    <!-- Services Start
                                    ==================================================================-->
    <section style="background: url(images/background/bg-map.png) center center /cover fixed #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow slideInDown animated">
                    <div class="main-title w-75 mx-auto d-table text-center mb-30">
                        <span class="small-title color-primary position-relative line-2-primary">What We Do?</span>
                        <h2 class="title mb-20 color-secondary">Our Services</h2>
                        <span class="sub-title">Services provided by Acred Investment company evoke positive emotions and lead to the changes in clients lives for the better. .</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow slideInRight animated">
                    <div class="service-item bg-white px-30 py-40 mt-30">
                        <div class="service-info hover-secondery-primary">
                            <span class="flat-large icon-primary"><i class="flaticon-house"></i></span>
                            <a class="my-20 d-table" href="#">
                                <h4>Buying Properties</h4>
                            </a>
                            <p>The purchase of your property is more than just a simple transaction. That is why we pride
                                ourselves on getting to know you well, understanding your way of thinking, priorities and
                                wishes, all this in order to provide you with total support.

                            </p>
                             
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow slideInUp animated">
                    <div class="service-item bg-white px-30 py-40 mt-30">
                        <div class="service-info hover-secondery-primary">
                            <span class="flat-large icon-primary"><i class="flaticon-deal"></i></span>
                            <a class="my-20 d-table" href="#">
                                <h4>Selling Properties</h4>
                            </a>
                            <p>The sale of your property is more than just a simple transaction. That is why we pride
                                ourselves on getting to know you well, understanding your way of thinking, priorities and
                                wishes, all this in order to provide you with total support.

                            </p>
                             
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow slideInLeft animated">
                    <div class="service-item bg-white px-30 py-40 mt-30">
                        <div class="service-info hover-secondery-primary">
                            <span class="flat-large icon-primary"><i class="flaticon-sale"></i></span>
                            <a class="my-20 d-table" href="#">
                                <h4>Rental Properties</h4>
                            </a>
                            <p>Due to our expertise and in-depth knowledge of the luxury property market, entrusting Acred
                                Investment with the rental of your property or finding you an available property to rent is
                                an effortless experience.</p>
                             
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow slideInLeft animated">
                    <div class="service-item bg-white px-30 py-40 mt-30">
                        <div class="service-info hover-secondery-primary">
                            <span class="flat-large icon-primary"><i class="flaticon-money"></i></span>
                            <a class="my-20 d-table" href="#">
                                <h4>Interior Design</h4>
                            </a>
                            <p>Full project design with individual sketches by hand; estimating a design project budget;
                                creating concept and layouts; style design; ventilation, acoustics and lighting solutions.
                            </p>
                             
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow slideInDown animated">
                    <div class="service-item bg-white px-30 py-40 mt-30">
                        <div class="service-info hover-secondery-primary">
                            <span class="flat-large icon-primary"><i class="flaticon-checklists"></i></span>
                            <a class="my-20 d-table" href="#">
                                <h4>Landscaping</h4>
                            </a>
                            <p>Unique elegant landscaping designs and landscape maintanance. Leo conseq dapibus ipsum eleif
                                massa
                                enim potenti at magnis orci molesti praesent ultrices elementum.</p>
                             
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow slideInRight animated">
                    <div class="service-item bg-white px-30 py-40 mt-30">
                        <div class="service-info hover-secondery-primary">
                            <span class="flat-large icon-primary"><i class="flaticon-research"></i></span>
                            <a class="my-20 d-table" href="#">
                                <h4>Project Management</h4>
                            </a>
                            <p>We offer professional assistance in planning, organizing, motivating and controlling
                                investment and construction projects aimed at achieving the best possible result for our
                                clients.</p>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End
                                    ==================================================================-->
    <!-- Working Process Start
                                    ==================================================================-->
    <section class="overlay-secondary overflow-hidden wow slideInDown animated"
        style="background: url(images/background/memphis.html);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="side-title pb-30">
                        <span class="small-title color-primary position-relative line-primary">How We Work!</span>
                        <h2 class="title color-white">Pushing The Boundaries Of What’s Possible.</h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="color-white">
                        <p>Working with Acred Investment we offer you very simple steps to obtain your dream property.
                            From simple manageable steps, Acred gets you to your comfort home.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="position-relative border-full mt-30">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="process-step flat-large icon-primary">
                                    <i class="flaticon-hotel"></i>
                                    <h4 class="color-white my-20">Choose a Category</h4>
                                    <span class="color-primary d-block pb-20">Step - 1</span>
                                    <span class="dotted position-relative"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="process-step flat-large icon-primary mt-sm-50">
                                    <i class="flaticon-home"></i>
                                    <h4 class="color-white my-20">Find Real Estate</h4>
                                    <span class="color-primary d-block pb-20">Step - 2</span>
                                    <span class="dotted position-relative"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="process-step flat-large icon-primary mt-md-50">
                                    <i class="flaticon-sale"></i>
                                    <h4 class="color-white my-20">Selling Property</h4>
                                    <span class="color-primary d-block pb-20">Step - 3</span>
                                    <span class="dotted position-relative"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="process-step flat-large icon-primary mt-md-50">
                                    <i class="flaticon-deal"></i>
                                    <h4 class="color-white my-20">Take The Key</h4>
                                    <span class="color-primary d-block pb-20">Step - 4</span>
                                    <span class="dotted position-relative"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Working Process End
                                    ==================================================================-->
    <!-- Find the best Place Start
                                    ==================================================================-->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow slideInDown animated">
                    <div class="main-title w-75 mx-auto d-table text-center mb-30">
                        <span class="small-title color-primary position-relative line-2-primary">What Are You Looking
                            For?</span>
                        <h2 class="title mb-20 color-secondary">Find the Best Places to you.</h2>
                        <span class="sub-title">At Acred, we help you the ,most suitable investment tailormade and affordable to needs. With a wide variety of properties, we assure to solve all your property needs.</span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="all-property mt-30">
                        <div class="row">
                            <div class="col-md-6 col-lg-2 wow slideInRight animated">
                                <div
                                    class="property-item-type-2 bg-white py-40 px-30 flat-medium icon-primary text-center shadow hover-secondery-primary">
                                    <span class=""><i class="flaticon-house-2"></i></span>
                                    <a class="mt-20 d-block" href="#">
                                        <h6>Apartment</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 wow slideInDown animated">
                                <div class="property-item-type-2 bg-white py-40 px-30 flat-medium icon-primary text-center shadow hover-secondery-primary"
                                    style="margin-top: 90px">
                                    <span class=""><i class="flaticon-rental"></i></span>
                                    <a class="mt-20 d-block" href="#">
                                        <h6>Building</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 wow slideInLeft animated">
                                <div class="property-item-type-2 bg-white py-40 px-30 flat-medium icon-primary text-center shadow hover-secondery-primary"
                                    style="margin-top: 180px">
                                    <span class=""><i class="flaticon-interior-design"></i></span>
                                    <a class="mt-20 d-block" href="#">
                                        <h6>Condominium</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 wow slideInRight animated">
                                <div class="property-item-type-2 bg-white py-40 px-30 flat-medium icon-primary text-center shadow hover-secondery-primary"
                                    style="margin-top: 180px">
                                    <span class=""><i class="flaticon-hotel"></i></span>
                                    <a class="mt-20 d-block" href="#">
                                        <h6>House</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 wow slideInUp animated">
                                <div class="property-item-type-2 bg-white py-40 px-30 flat-medium icon-primary text-center shadow hover-secondery-primary"
                                    style="margin-top: 90px">
                                    <span class=""><i class="flaticon-house"></i></span>
                                    <a class="mt-20 d-block" href="#">
                                        <h6>Office</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 wow slideInLeft animated">
                                <div
                                    class="property-item-type-2 bg-white py-40 px-30 flat-medium icon-primary text-center shadow hover-secondery-primary">
                                    <span class=""><i class="flaticon-rental"></i></span>
                                    <a class="mt-20 d-block" href="#">
                                        <h6>Shop</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Find the best Place End
                                    ==================================================================-->
    <!-- Banner Start
                                    ==================================================================-->
    <div class="bg-primary banner-4 wow slideInUp animated" style="padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <h2 class="color-secondary">Great Experience For Real Estate Property Selling</h2>
                </div>
                <div class="col-md-12 col-lg-4 align-self-center">
                    <a class="btn btn-secondery float-right mt-lg-30" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End
                                    ==================================================================-->
@endsection

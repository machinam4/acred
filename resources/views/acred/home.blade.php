@extends('layouts.base')

@section('content')
<!--=========================================================================-->
<!-- Start Slider
=========================================================================-->
<div id="slider" style="height:900px; margin:0 auto; margin-bottom: 0px;">
    <!-- Slide 1-->
    @if ($properties->count())
    @foreach ($properties->random(2) as $property)
    <div class="ls-slide" data-ls="bgposition:50% 50%; duration:9000; transition2d:4; kenburnsscale:1.2;">

        <img width="1920" height="900" src="{{Storage::url($property->image1)}}" class="ls-bg" alt="" />
        <div style="width:100%; height:100%; background:rgba(36,36,36, 0.8); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationin:1500; durationout:400; parallaxlevel:0; position:fixed;">
        </div>

        <p style="font-weight:600; font-family:'Montserrat'; font-size:2.5rem; line-height:76px; color:#ffffff; top:320px; left:50px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:300; offsetyout:-30; durationout:400; parallaxlevel:0;">
            {{$property->title}}</p>
        <p style="font-weight:600; font-family:'Montserrat'; font-size:2.5rem; line-height:20px; top:290px; left:50px;" class="ls-l color-primary" data-ls="offsetyin:30; durationin:1000; delayin:150 offsetyout:-30; durationout:400; parallaxlevel:0;">
            Discover</p>
        <p style="font-weight:400; font-family:'Roboto'; font-size:15px; line-height:76px; color:#ffffff; top:370px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:600; offsetyout:-30; durationout:400; parallaxlevel:0;">
            {{str_limit($property->description, 100)}}</p>
        <div style="top:440px; left:53px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:2px; width:380px; background:#adadad;" class="ls-l" data-ls="showinfo:1; durationin:1000; delayin:1200; offsetyout:-30; durationout:400; scalexin:0;"></div>
        <p style="font-weight:400; font-family:'Roboto'; font-size:15px; line-height:76px; color:#ffffff; top:430px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:1600; offsetyout:-30; durationout:400; parallaxlevel:0;">
            <i class="fa fa-map-marker color-primary mr-5" aria-hidden="true"></i>{{ $property->address}}, {{ $property->county}}.
        </p>
        <p style="font-weight:400; font-family:'Roboto'; font-size:15px; line-height:76px; color:#ffffff; top:470px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:0; durationin:1000; delayin:2200; offsetyout:-30; durationout:400; parallaxlevel:0;">
            Ksh {{ReadableNumber($property->price)}}</p>
        <a style="" class="ls-l" href="{{ route('details', $property) }}" target="_self" data-ls="offsetyin:30; durationin:1000; delayin:2800; offsetyout:-30; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#242424; parallaxlevel:0;">
            <p style="font-weight: 500; text-align:center; cursor:pointer; padding-top:8px; padding-bottom:7px; font-family:'Montserrat'; font-size:15px; top:560px; left:53px; border-top:2px solid #fff; border-right:2px solid #fff; padding-right:25px; border-bottom:2px solid #fff; border-left:2px solid #fff; padding-left:25px; line-height:30px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; color:#ffffff; background:rgba(0, 0, 0, 0.1); border-radius:0px;" class="ls-button">View Details</p>
        </a>
        <div style="text-align:center; width:100px; height:35px; line-height: 35px; font-family:'Roboto'; font-size:15px; color:#ffffff; border-radius:0px; top:490px; left:260px;" class="ls-l bg-primary" data-ls="delayin:3200; easingin:easeOutElastic; rotateyin:-300; durationout:400; rotateyout:-400; parallaxlevel:0;">
            For {{$property->acquisition}}</div>
    </div>
    @endforeach
    @else
    <div class="ls-slide" data-ls="bgposition:50% 50%; duration:9000; transition2d:4; kenburnsscale:1.2;">

        <img width="1920" height="900" src="images/background/acredinvestment3.webp" class="ls-bg" alt="" />
        <div style="width:100%; height:100%; background:rgba(36,36,36, 0.8); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationin:1500; durationout:400; parallaxlevel:0; position:fixed;">
        </div>

        <p style="font-weight:600; font-family:'Montserrat'; font-size:2.5rem; line-height:76px; color:#ffffff; top:320px; left:50px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:300; offsetyout:-30; durationout:400; parallaxlevel:0;">
            Your Best Place to Live</p>
        <p style="font-weight:600; font-family:'Montserrat'; font-size:2.5rem; line-height:20px; top:290px; left:50px;" class="ls-l color-primary" data-ls="offsetyin:30; durationin:1000; delayin:150 offsetyout:-30; durationout:400; parallaxlevel:0;">
            Discover</p>
        <p style="font-weight:400; font-family:'Roboto'; font-size:15px; line-height:76px; color:#ffffff; top:370px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:600; offsetyout:-30; durationout:400; parallaxlevel:0;">
            Best featured family appartment of this month</p>
        <div style="top:440px; left:53px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:2px; width:380px; background:#adadad;" class="ls-l" data-ls="showinfo:1; durationin:1000; delayin:1200; offsetyout:-30; durationout:400; scalexin:0;"></div>
        <p style="font-weight:400; font-family:'Roboto'; font-size:15px; line-height:76px; color:#ffffff; top:430px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:1600; offsetyout:-30; durationout:400; parallaxlevel:0;">
            <i class="fa fa-map-marker color-primary mr-5" aria-hidden="true"></i>366 Glenmore Ave, Brooklyn, NY
            11207, United States.
        </p>
        <p style="font-weight:400; font-family:'Roboto'; font-size:15px; line-height:76px; color:#ffffff; top:470px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:0; durationin:1000; delayin:2200; offsetyout:-30; durationout:400; parallaxlevel:0;">
            $ 5500.00</p>
        <a style="" class="ls-l" href="{{Route('about')}}" target="_self" data-ls="offsetyin:30; durationin:1000; delayin:2800; offsetyout:-30; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#242424; parallaxlevel:0;">
            <p style="font-weight: 500; text-align:center; cursor:pointer; padding-top:8px; padding-bottom:7px; font-family:'Montserrat'; font-size:15px; top:560px; left:53px; border-top:2px solid #fff; border-right:2px solid #fff; padding-right:25px; border-bottom:2px solid #fff; border-left:2px solid #fff; padding-left:25px; line-height:30px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; color:#ffffff; background:rgba(0, 0, 0, 0.1); border-radius:0px;" class="ls-button">View Details</p>
        </a>
        <div style="text-align:center; width:100px; height:35px; line-height: 35px; font-family:'Roboto'; font-size:15px; color:#ffffff; border-radius:0px; top:490px; left:260px;" class="ls-l bg-primary" data-ls="delayin:3200; easingin:easeOutElastic; rotateyin:-300; durationout:400; rotateyout:-400; parallaxlevel:0;">
            For Rent</div>
    </div>
    @endif
</div>
<!-- End Slider=========================================================================-->
<!--Search Bar Start=========================================================================-->
<div class="mb-50 wow animated slideInDown">
    <div class="header-src-fild bg-secondary py-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <form class="adbanced-form-one amenities-list pt-15" action="{{Route('searchproperty')}}">
                        <div class="row">
                            <div class="form-group col-lg-2 mb-0 position-relative">
                                <div class="custom-radio y-center">
                                    <label>
                                        <input type="radio" name="acquisition" value="Sale">
                                        <span class="design"></span>
                                        <span class="text">Sale</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="acquisition" value="Rent" checked>
                                        <span class="design"></span>
                                        <span class="text">Rent</span>
                                    </label>
                                    <!--<label>
                                        <input type="radio" name="light">
                                        <span class="design"></span>
                                        <span class="text">Sale</span>
                                    </label>-->
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-4">
                                <div class="select-wrapper position-relative">
                                    <select class="select form-control" name="type">
                                        <optgroup label="Residential">
                                            <option value="studio">Studio</option>
                                            <option value="duplex">Duplex</option>
                                            <option value="bungalow">Bungalow</option>
                                            <option value="penthouse">Penthouse</option>
                                            <option value="mansion">Mansion</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="villa">Villa</option>
                                        </optgroup>
                                        <optgroup label="Commercial">
                                            <option value="office">Office</option>
                                            <option value="building">Building</option>
                                            <option value="warehouse">Warehouse</option>
                                        </optgroup>
                                        <option value="land">Land</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-4 col-md-5">
                                <input class="form-control mt-sm-15" type="text" name="address" placeholder="Address, State/City, Zip Code, Location" value=''>
                            </div>
                            <div class="form-group col-md-3 col-lg-2">
                                <input class="btn btn-primary w-100 mt-sm-15" type="submit" name="search" value="Search">
                            </div>
                            <span class="formicon mb-50">
                                <a class="checkbox_collapse" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"></a>
                            </span>
                            <div class="col-md-12 col-lg-12">
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body bg-secondary color-white pt-20">
                                        <div class="row">
                                            <div class="form-group col-lg-3 col-md-6 pt-15">
                                                <input class="form-control" type="number" min="20" name="min-area" placeholder="Min Area (sqft)" >
                                            </div>
                                            <div class="form-group col-lg-3 col-md-6 pt-15">
                                                <input class="form-control" type="number" min="20" name="max-area" placeholder="Max Area (sqft)" >
                                            </div>
                                            <div class="form-group col-lg-3 col-md-6 pt-15">
                                                <input class="form-control" type="number" min="1000" name="min-price" placeholder="Min Price" >
                                            </div>
                                            <div class="form-group col-lg-3 col-md-6 pt-15">
                                                <input class="form-control" type="number" min="1001" name="max-price" placeholder="Max Price">
                                            </div>
                                            <div class="form-group mb-0 col-lg-12">
                                                <ul class="list-bottom amenities select-option mt-15 p-0">
                                                    <li>
                                                        <input id="feature-1" class="d-none" type="checkbox">
                                                        <label for="feature-1">Gym</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-2" class="d-none" type="checkbox">
                                                        <label for="feature-2">Pool</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-3" class="d-none" type="checkbox">
                                                        <label for="feature-3">Chilren's play area</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-8" class="d-none" type="checkbox">
                                                        <label for="feature-8">Conference Room</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-11" class="d-none" type="checkbox">
                                                        <label for="feature-11">Parking</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-12" class="d-none" type="checkbox">
                                                        <label for="feature-12">CCTV & Video Security</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Search Bar End=========================================================================-->
<!-- New & sale Home Start=========================================================================-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 wow animated slideInRight">
                <div class="row">
                    <div class="thumbnail-angle-one overflow-hidden position-relative bg- pt-50 px-50 pb-100 text-center flat-large icon-primary color-white">
                        <span><i class="flaticon-home"></i></span>
                        <h4 class="my-30 color-dark">Looking for a new home?</h4>
                        <p class="color-dark">Welcome to the company Acred, a real estate investment company industry expert, specializing in providing tailor made high quality services for home buyers, vendors & landlords of all types, properties, commercial & residential property investments. All aspects of property maintenance and management in one of the most...</p>
                        <div class="btn-position x-center">
                            <a class="btn btn-primary position-relative" href="{{Route('about')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 wow animated slideInLeft">
                <div class="row">
                    <div class="thumbnail-angle-two overflow-hidden position-relative bg- pt-50 px-50 pb-100 mt-md-50 text-center flat-large icon-primary color-white">
                        <span><i class="flaticon-house"></i></span>
                        <h4 class="my-30 color-dark">Want to buy your home?</h4>
                        <p class="color-dark">We believe that no matter how beautiful the mission is, it should be clear, specific and based on life’s realities. The mission of Acred Investment is simple – to serve all of our clients’ real estate needs in today’s increasingly fast-paced world, first of all to make them happy while looking for their preferred...</p>
                        <div class="btn-position x-center">
                            <a class="btn btn-primary position-relative" href="{{Route('about')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- New & sale Home End=========================================================================-->


<!-- Properties Thumbnail Start=========================================================================-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 wow animated slideInUp">
                <div class="main-title w-75 mx-auto d-table text-center mb-30">
                    <span class="small-title color-primary position-relative line-2-primary">New Arrival
                        Properties</span>
                    <h2 class="title mb-20 color-secondary">Recent Properties</h2>
                </div>
            </div>
            @if ($recentproperties->count())
                                     @foreach ($recentproperties as $property)
            <div class="col-md-12 col-lg-6 col-xl-4 wow animated slideInRight">
                <div class="property-thumbnail mt-30">
                    <div class="property-img position-relative overflow-hidden overlay-secondary-4">
                        <img src="{{Storage::url($property->image2)}}" alt="image">
                        <div class="thumbnail-content z-index-1 color-white-a color-white">
                            <span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For
                                {{$property->acquisition}}</span>
                                @if ($property->furnishing=='furnished')
                            <span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Furnished</span>
                           
                                @endif
                            <ul class="hover-option position-absolute icon-white z-index-1">
                                <li>
                                    <a data-toggle="tooltip" data-placement="top" title="Like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                            <div class="hover-content py-30 px-20 overlay-hover-gradient">
                                <div class="thumbnail-title z-index-1 position-relative">
                                    <span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">Ksh
                                        {{ReadableNumber($property->price)}}</span>
                                    <a class="color-secondary mb-5" href="{{ route('details', $property) }}">
                                        <h4>{{$property->title}}</h4>
                                    </a>
                                    <span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>
                                        {{$property->address}}, {{$property->county}}</span>
                                </div>
                                <ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
                                    <li><span class="color-primary">{{$property->size}}</span> sqft</li>
                                    <li><span class="color-primary">{{$property->bedrooms}}</span> Bedrooms</li>
                                    <li><span class="color-primary">{{$property->bathrooms}}</span> Bathrooms</li>
                                    <li><span class="color-primary">{{$property->parking}}</span> Garage</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             @endforeach
                                 @else
                                     <p>There are no properties available yet</p>
                                 @endif
        </div>
    </div>
</section>
<!-- Properties Thumbnail End 
                                    =========================================================================-->
<!--Neighborhoods Start
                                    =========================================================================-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 wow animated slideInDown">
                <div class="main-title w-50 mx-auto d-table text-center mb-30">
                    <span class="small-title color-primary position-relative line-2-primary">Explore</span>
                    <h2 class="title mb-20 color-secondary">Neighborhoods</h2>
                    <span class="sub-title">With Acred, we get you the best neighborhoods favorable for your lifestyle and comfort.</span>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="owl-carousel neighborhoods owl-dots-none mt-30 owl-loaded owl-drag">
                    <div class="neighborhoods-thumbnail wow animated slideInDown">
                        <a href="#"><img src="images/explore/westlands.webp" alt="images"></a>
                        <h6 class="place-name py-5 px-30 bg-secondary position-absolute color-white">Westlands</h6>
                        
                    </div>
                    <div class="neighborhoods-thumbnail wow animated slideInUp">
                        <a href="#"><img src="images/explore/kilimani.webp" alt="images"></a>
                        <h6 class="place-name py-5 px-30 bg-secondary position-absolute color-white">Kilimani</h6>
                        
                    </div>
                    <div class="neighborhoods-thumbnail wow animated slideInDown">
                        <a href="#"><img src="images/explore/upperhill.webp" alt="images"></a>
                        <h6 class="place-name py-5 px-30 bg-secondary position-absolute color-white">UpperHill</h6>
                        
                    </div>
                    <div class="neighborhoods-thumbnail">
                        <a href="#"><img src="images/explore/kiambu.webp" alt="images"></a>
                        <h6 class="place-name py-5 px-30 bg-secondary position-absolute color-white">Kiambu</h6>
                        
                    </div>
                    <div class="neighborhoods-thumbnail">
                        <a href="#"><img src="images/explore/parklands.webp" alt="images"></a>
                        <h6 class="place-name py-5 px-30 bg-secondary position-absolute color-white">Parklands</h6>

                    </div>
                    <div class="neighborhoods-thumbnail">
                        <a href="#"><img src="images/explore/mombasard.webp" alt="images"></a>
                        <h6 class="place-name py-5 px-30 bg-secondary position-absolute color-white">Mombasa Road</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Neighborhoods End
                                    =========================================================================-->
<!-- Why Choose Us Start
                                    =========================================================================-->
<section class="position-relative" style="background: url(images/background/acredinvestment2.webp) no-repeat bottom center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 wow animated slideInDown">
                <div class="bg-white p-50">
                    <div class="row">
                        <div class="col-md-12 col-lg-10">
                            <div class="side-title mb-30">
                                <span class="small-title color-primary position-relative line-primary">Want A Better
                                    Life?</span>
                                <h2 class="title mb-20 color-secondary">Buy A Property and Lead A Happy Life.</h2>
                                <p>What are some of the factors to consider when looking for a suitable home?</p>
                            </div>
                            <div class="why-us mt-30 flat-medium icon-primary">
                                <ul>
                                    <li>
                                        <span class="float-left mr-15"><i class="flaticon-home"></i></span>
                                        <div class="d-table">
                                            <h4 class="color-secondary mb-15">Location of the House</h4>
                                            <p>schools, hospitals, daily commutes, nearby amenities, property value, security.</p>
                                        </div>
                                    </li>
                                    <li class="mt-30">
                                        <span class="float-left mr-15"><i class="flaticon-parking-area"></i></span>
                                        <div class="d-table">
                                            <h4 class="color-secondary mb-15">Parking Lot Size</h4>
                                            <p>parking space, angles in consideration to vehicle turnover, accessibility and distance to house,
landscape design, drainage.</p>
                                        </div>
                                    </li>
                                    <li class="mt-30">
                                        <span class="float-left mr-15"><i class="flaticon-house-2"></i></span>
                                        <div class="d-table">
                                            <h4 class="color-secondary mb-15">Amenities in the House</h4>
                                            <p>Built-in freestanding appliances, kitchen counters, sinks, space in the kitchen, outside access,
fireplace, heated floors, sitting or office area, AC or ceiling fans, solar heating.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us Start
                                    =========================================================================-->
                                   <!-- Feautred Properties Start
                                    =========================================================================-->
<section class="featured-properties" style="background: url(images/others/made-1.png) center center /cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow animated slideInDown">
                <div class="main-title w-75 mx-auto d-table text-center mb-30">
                    <span class="small-title color-primary position-relative line-2-primary">Find Out the Best
                        One</span>
                    <h2 class="title mb-20 color-secondary">Furnished Properties</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-carousel slide-3 owl-nav-side owl-dots-none mt-30 owl-loaded owl-drag">
                    @if ($furnishedproperties->count())
                                     @foreach ($furnishedproperties as $property)
                    <div class="property-item wow animated slideInDown">
                        <div class="property-img position-relative overflow-hidden overlay-secondary-4">
                            <img src="{{Storage::url($property->image2)}}" alt="image">
                            <span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">Furnished</span>
                            <ul class="hover-option position-absolute icon-white z-index-1">
                                <li>
                                    <a data-toggle="tooltip" data-placement="top" title="Like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                            <div class="meta-property icon-primary color-white z-index-1">
                                <ul>
                                    <li><i class="fa fa-calendar"></i> {{ $property->updated_at->toDateString()}}</li>
                                    <li><i class="fa fa-user"></i>Acred Inv</li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-content bg-white pt-30 pb-50 px-30">
                            <a class="color-secondary mb-5" href="{{ route('details', $property) }}">
                                <h4>{{$property->title}}.</h4>
                            </a>
                            <span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>{{$property->address}}, {{$property->county}}.</span>
                            <ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
                                <li><i class="flaticon-fit-screen"></i>{{$property->size}} sqft</li>
                                <li><i class="flaticon-hotel"></i>{{$property->bedrooms}} Bedrooms</li>
                                <li><i class="flaticon-bathtub"></i>{{$property->bathrooms}} Bathrooms</li>
                                <li><i class="flaticon-garage"></i>{{$property->parking}} Garage</li>
                            </ul>
                            <div class="property-cost color-white list-half w-100">
                                <ul>
                                    <li class="bg-primary">For {{$property->acquisition}}</li>
                                    <li>Ksh {{ReadableNumber($property->price)}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     @endforeach
                                 @else
                                     <p>There are no properties available yet</p>
                                 @endif

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feautred Properties End
                                    =========================================================================-->
<!-- Testimonial Start 
=========================================================================-->
<section class="bg-gray pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 wow animated slideInUp">
                <div class="main-title w-50 mx-auto d-table text-center mb-60">
                    <span class="small-title color-primary position-relative line-2-primary">Testimonial</span>
                    <h2 class="title mb-20 color-secondary">What Our Client's Say</h2>

                </div>
            </div>
            <!-- Slider HTML markup -->
            <div class="wow animated slideInDown" id="layer-testimonial" style="width:1280px;height:360px;margin:0 auto;margin-bottom: 0px; background-color: #242424">


                <!-- Slide 1-->
                <div class="ls-slide" data-ls="duration:4000; kenburnsscale:1.2;">
                    <img width="160" height="160" src="images/background/acred_avatar_male.webp" class="ls-l" alt="" style="border-radius:50%; top:60px; left:501px;" data-ls="offsetyin:-100; durationin:800; delayin:600; easingin:easeOutExpo; scaleyin:0.8; offsetyout:-300; durationout:400; parallaxlevel:0;">
                    <h3 style="line-height:36px; font-family: 'Montserrat'; top:87px; left:165px; color: #fff" class="ls-l" data-ls="offsetyin:-130; durationin:700; delayin:700; easingin:easeOutExpo; durationout:400; parallaxlevel:0;">
                        Joseph Mwangi</h3>
                    <p style="width:320px; font-size:16px; font-family: 'Roboto'; line-height:30px; top:135px; left:163px; white-space:normal; color: #fff" class="ls-l" data-ls="offsetyin:-100; durationin:800; delayin:800; easingin:easeOutExpo; durationout:400; parallaxlevel:0;">
                        "I'm really happy to have purchased a property with you. It will be the base of my future project"</p>
                    <img width="160" height="160" src="images/background/acred_avatar_female.webp" class="ls-l" alt="" style="border-radius:50%; top:140px; left:619px;" data-ls="offsetyin:100; durationin:800; delayin:1300; easingin:easeOutExpo; scaleyin:0.8; offsetyout:300; durationout:400; parallaxlevel:0;">
                    <h3 style="line-height:36px; font-family: 'Montserrat'; top:167px; left:812px; color: #fff" class="ls-l" data-ls="offsetyin:100; durationin:700; delayin:1400; easingin:easeOutExpo; durationout:400; parallaxlevel:0;">
                        Everlyne Wanjiku</h3>
                    <p style="width:330px; font-size:16px; font-family: 'Roboto'; line-height:30px; top:215px; left:810px; white-space:normal; color: #fff" class="ls-l" data-ls="offsetyin:100; durationin:800; delayin:1500; easingin:easeOutExpo; durationout:400; parallaxlevel:0;">
                        "Guys you are fantastic! You are quick to respond to clients needs!"</p>
                </div>


                <!-- Slide 2-->
                <div class="ls-slide" data-ls="duration:4000; kenburnsscale:1.2;">
                    <img width="160" height="160" src="images/background/acred_avatar_male.webp" class="ls-l" alt="" style="border-radius:50%; top:140px; left:501px;" data-ls="offsetyin:100; durationin:800; delayin:600; easingin:easeOutExpo; scaleyin:0.8; offsetyout:300; durationout:400; parallaxlevel:0;">
                    <h3 style="line-height:36px; font-family: 'Montserrat'; top:167px; left:145px; color: #fff" class="ls-l" data-ls="offsetyin:100; durationin:700; delayin:700; easingin:easeOutExpo; durationout:400; parallaxlevel:0;">
                        Geoffery Owino</h3>
                    <p style="width:330px; font-size:16px; font-family: 'Roboto'; line-height:30px; top:215px; left:145px; white-space:normal; color: #fff" class="ls-l" data-ls="offsetyin:100; durationin:800; delayin:800; easingin:easeOutExpo; durationout:400; parallaxlevel:0;">
                        "Absolutely the best Agency I have used! Thank you for such a great
                        design experience!"</p>
                    <img width="160" height="160" src="images/background/acred_avatar_female.webp" class="ls-l" alt="" style="border-radius:50%; top:60px; left:619px;" data-ls="offsetyin:-100; durationin:800; delayin:1300; easingin:easeOutExpo; scaleyin:0.8; offsetyout:-300; durationout:400; parallaxlevel:0;">
                    <h3 style="line-height:36px; font-family: 'Montserrat'; top:88px; left:810px; color: #fff" class="ls-l" data-ls="offsetyin:-100; durationin:700; delayin:1400; easingin:easeOutExpo; durationout:400; parallaxlevel:0;">
                        Mary Wambua</h3>
                    <p style="width:330px; font-size:16px; font-family: 'Roboto'; line-height:25px; top:138px; left:810px; white-space:normal; color: #fff" class="ls-l" data-ls="offsetyin:-100; durationin:800; delayin:1500; easingin:easeOutExpo; durationout:400; parallaxlevel:0;">
                        "The most interactive team i've ever met! Incredible advice and support!"</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial End 
=========================================================================-->
<!-- Best place & faq Start
                                    =========================================================================-->
{{-- <section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 wow animated slideInUp">
                <div class="side-title mb-30">
                    <span class="small-title color-primary position-relative line-primary">What Are You Looking
                        For?</span>
                    <h2 class="title mb-20 color-secondary">Find the Best Places to you.</h2>
                    <p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq.
                        Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin
                        magna.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-6 mt-50 py-80 px-60" style="background: url(images/background/9.png) center center /cover; height: fit-content;">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-6 wow animated slideInUp">
                        <div class="property-item-type bg-dark py-20 px-30 flat-medium icon-primary d-flex">
                            <span class="float-left mr-20"><i class="flaticon-house-2"></i></span>
                            <h4 class="color-hover-white color-gray-a align-self-center"><a href="#">Apartment</a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow animated slideInRight">
                        <div class="property-item-type bg-dark py-20 px-30 flat-medium icon-primary d-flex mt-lg-30">
                            <span class="float-left mr-20"><i class="flaticon-rental"></i></span>
                            <h4 class="color-hover-white color-gray-a align-self-center"><a href="#">Building</a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow animated slideInDown">
                        <div class="property-item-type bg-dark py-20 px-30 flat-medium icon-primary d-flex mt-30">
                            <span class="float-left mr-20"><i class="flaticon-interior-design"></i></span>
                            <h4 class="color-hover-white color-gray-a align-self-center"><a href="#">Condominium</a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow animated slideInLeft">
                        <div class="property-item-type bg-dark py-20 px-30 flat-medium icon-primary d-flex mt-30">
                            <span class="float-left mr-20"><i class="flaticon-hotel"></i></span>
                            <h4 class="color-hover-white color-gray-a align-self-center"><a href="#">House</a></h4>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow animated slideInUp">
                        <div class="property-item-type bg-dark py-20 px-30 flat-medium icon-primary d-flex mt-30">
                            <span class="float-left mr-20"><i class="flaticon-house"></i></span>
                            <h4 class="color-hover-white color-gray-a align-self-center"><a href="#">Office</a></h4>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow animated slideInDown">
                        <div class="property-item-type bg-dark py-20 px-30 flat-medium icon-primary d-flex mt-30">
                            <span class="float-left mr-20"><i class="flaticon-rental"></i></span>
                            <h4 class="color-hover-white color-gray-a align-self-center"><a href="#">Shop</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 bg-white py-80 px-60 wow animated slideInUp">
                <div class="side-title mb-30">
                    <span class="small-title color-primary position-relative line-primary">Faq</span>
                    <h2 class="title mb-20 color-secondary">Our Frequently popular questions.</h2>
                    <p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq.
                        Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin
                        magna.</p>
                </div>
                <div id="accordion" class="accordion-style-one">
                    <div class="card border-0">
                        <div class="st-top d-inline-block position-relative card-header px-0 border-0 rounded-0 bg-transparent" id="headingone">
                            <h5 class="mb-0">
                                <button class="d-block border-0 bg-transparent p-0 text-left" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
                                    Primis elementum nostra ad augue aliquet.
                                </button>
                            </h5>
                        </div>

                        <div id="collapseone" class="collapse show" aria-labelledby="headingone" data-parent="#accordion">
                            <div class="card-body mb-15">
                                Rutrum arcu integer consectetuer integer turpis lacus cras vestibul pulvin odio
                                torque dui tellus ridiculus penatibu ut scelerisque felis metus. Habitant metus
                                justo magnami Parturient litora habitant Torquent pharetra cum. Quis imperdie
                                egestas litora, potenti augue aliquam at Gravida fames bibendum.
                            </div>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="st-top d-inline-block position-relative card-header px-0 rounded-0 border-0 bg-transparent" id="headingtwo">
                            <h5 class="mb-0">
                                <button class="border-0 bg-transparent collapsed p-0 text-left" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                                    Tortor consectetuer potenti ultrices.
                                </button>
                            </h5>
                        </div>
                        <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
                            <div class="card-body mb-15">
                                Rutrum arcu integer consectetuer integer turpis lacus cras vestibul pulvin odio
                                torque dui tellus ridiculus penatibu ut scelerisque felis metus. Habitant metus
                                justo magnami Parturient litora habitant Torquent pharetra cum. Quis imperdie
                                egestas litora, potenti augue aliquam at Gravida fames bibendum.
                            </div>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="st-top d-inline-block position-relative card-header px-0 rounded-0 border-0 bg-transparent" id="headingthree">
                            <h5 class="mb-0">
                                <button class="border-0 bg-transparent collapsed p-0 text-left" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                    Tellus sagittis duis hendrerit semper aliquam.
                                </button>
                            </h5>
                        </div>
                        <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
                            <div class="card-body mb-15">
                                Rutrum arcu integer consectetuer integer turpis lacus cras vestibul pulvin odio
                                torque dui tellus ridiculus penatibu ut scelerisque felis metus. Habitant metus
                                justo magnami Parturient litora habitant Torquent pharetra cum. Quis imperdie
                                egestas litora, potenti augue aliquam at Gravida fames bibendum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Best place & faq End
=========================================================================-->
@endsection
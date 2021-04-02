@extends('layouts.base')

@section('content')
    <!-- Page Banner Start
                ==================================================================-->
    <div class="page-banner overlay-black" style="padding: 150px 0;background: url({{Storage::url($property->image2)}}) no-repeat center center / cover;
  width: 100%;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="page-banner-title color-primary">{{ str_limit($property->title, 20)}}</h1>
                    <div class="text-area w-50 mt-15 color-white">
                        <p>{{ str_limit($property->description, 255)}}</p>
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
                            <li class="breadcrumb-item"><a href="{{$property->home}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('listing', $property->type)}}">Listing</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Property Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End
                ==================================================================-->
    <!-- Single Property Start
                ==================================================================-->
    <section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="mb-30">
					<div class="row">
						<div class="col-md-12 col-lg-8 wow slideInRight animated">
							<div class="single-property position-relative">
								<span class="bg-secondary color-white z-index-1 px-15 py-5 mr-20">For {{$property->acquisition}}</span>
								<strong class="color-primary f-20">Ksh {{ReadableNumber($property->price)}}</strong>
								<h3 class="color-secondary mt-15">{{$property->title}}</h3>
								<span class="address icon-primary f-14 mt-5"><i class="fa fa-map-marker"></i>{{$property->address}}, {{$property->county}}.</span>
								<ul class="property-features icon-primary d-table f-14 mt-15">
									<li><i class="flaticon-fit-screen"></i>{{$property->size}} sqft</li>
									<li><i class="flaticon-hotel"></i>{{$property->bedrooms}} Bedrooms</li>
									<li><i class="flaticon-bathtub"></i>{{$property->bathrooms}} Bathrooms</li>
									<li><i class="flaticon-garage"></i>{{$property->parking}} Garage</li>
								</ul>
							</div>
						</div>
						<div class="col-md-12 col-lg-4 wow slideInLeft animated">
							<div class="thumbnail-content float-right">
								<ul class="hover-option icon-white z-index-1 position-relative mt-md-30" style="opacity: 1; top: 0; right: 0;">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Like"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Print" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
									</li>
								</ul>
								<!-- Nav tabs -->
								<ul class="nav nav-tabs border-0 float-right navbar-tab-view mt-15 sm-mt-0" role="tablist" style="line-height: 20px;">
								  <li class="nav-item">
								    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="flaticon-location"></i></a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false"><i class="flaticon-street-view"></i></a>
								  </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid wow slideInUp animated">
		<div class="row d-flow-root">
			<div class="product-slider">
				<div class="tab-content">
				  	<div class="tab-pane active position-relative" id="home" role="tabpanel" aria-labelledby="home-tab">
					  	<div class="service-images owl-carousel slide-1 dot-on-slider">							
							<img src="{{Storage::url($property->image1)}}" alt="image">
                            <img src="{{Storage::url($property->image3)}}" alt="image">
                            <img src="{{Storage::url($property->image4)}}" alt="image">
                            <img src="{{Storage::url($property->image5)}}" alt="image">
						</div>
				  	</div>
				  	<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  		<div id="map" class="canvas" style="height: 600px"></div>
				  	</div>
				  	<div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
				  		<div class="mapimageview">{!! $property->streetview!!}</div>
				  	</div>
			  	</div> 	
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<div class="text-area mt-50 wow slideInLeft animated">
                    <h3 class="color-secondary line-bottom pb-15 mb-20">Description</h3>
                        <p>
                            {{ str_limit($property->description, 500)}}
                            @if (strlen($property->description) > 500)
                            <div class="agent-more-details color-secondary-a">
                                <a class="color-secondary position-relative plus-minus my-15 pl-15 d-block" data-toggle="collapse" href="#multiCollapse1" role="button" aria-expanded="false" aria-controls="multiCollapse1">More Details</a>
                                <div class="collapse" id="multiCollapse1">
                                    <p class="my-15">{{ substr($property->description, 500) }}.</p>
                                </div>
                            </div>
                            @endif
                        </p>					
				</div>
				<div class="border-top-1-gray py-30 wow slideInRight animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Property Details</h3>
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<ul class="list-by-tag">
								<li>Bedrooms : <span>{{$property->bedrooms}}</span></li>
                            <li>Bathrooms : <span>{{$property->bathrooms}}</span></li>
								<li>Type : <span>{{$property->type}}</span></li>
							</ul>
						</div>
						<div class="col-md-12 col-lg-6">
							<ul class="list-by-tag hover-secondery-primary">
                            <li>Garages : <span>{{$property->parking}}</span></li>
								<li>Area : <span> {{$property->size}} Sqft</span></li>
								<li>Kitchens : <span>1</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top-1-gray py-30 wow slideInUp animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Property Video</h3>
					<div class="property-video bg-img-3 position-relative">
						<a data-fancybox="" class="video-popup xy-center bg-primary color-white" href="{{$property->video}}"><i class="fa fa-play" aria-hidden="true"></i></a>
						<div class="loader xy-center">
							<div class="loader-inner ball-scale-multiple">
								<div></div>
								<div></div>
								<div></div>
							</div>
						</div>
					</div>
				</div>
				<div class="border-top-1-gray py-30 wow slideInDown animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Floor Plan</h3>
					<div id="accordion" class="accordion-style-two">
					  	<div class="card border-0 mb-10">
						    <div class="st-top border-0 d-inline-block position-relative card-header p-0 bg-light" id="headingone">
						        <button class="d-block border-0 bg-gray px-30 py-15 w-100 text-left" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
						          First Floor
						        </button>
						    </div>

						    <div id="collapseone" class="collapse show" aria-labelledby="headingone" data-parent="#accordion">
					      		<div class="card-body">
					         		<img src="{{Storage::url($property->floorplan)}}" alt="">    
						      	</div>
						    </div>
					  	</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30 wow slideInUp animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Contact Us</h3>
					
					<form id="contact-form" class="mt-30">
						<div class="row">
							@csrf
                        <input type="hidden" name="type" value="client">
							<div class="form-group col-md-12">
								<input type="text" name="name" class="form-control bg-gray" placeholder="Your Name">
							</div>
							<div class="form-group col-md-12">
								<input type="email" name="email" class="form-control bg-gray" placeholder="Email Address">
							</div>
							<div class="form-group col-md-12">
								<input type="text" name="subject" class="form-control bg-gray" placeholder="Subject">
							</div>
							<div class="form-group col-md-12">
								<textarea class="form-control bg-gray" name="message" rows="4" placeholder="Type Your Massage"></textarea>
							</div>
							<div class="col-lg-12"><button type="submit" id="send" class="btn btn-primary w-100">Send Message</button></div>
						</div>
						<div class="error-handel position-relative">
							<div id="success">Your email sent Successfully, Thank you.</div>
							<div id="error">Error occurred while sending email. Please try again later.</div>
                    	</div>
					</form>
				</div>
				<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30 wow slideInDown animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Latest Properties</h3>
					<div class="owl-carousel slide-1 owl-dots-none">
						@if ($recentproperties->count())
                                     @foreach ($recentproperties as $property)
                    <div class="property-item wow animated slideInDown">
                        <div class="property-img position-relative overflow-hidden overlay-secondary-4">
                            <img src="{{Storage::url($property->image1)}}" alt="image">
                            <span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">Featured</span>
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
                                    <li>Ksh {{ReadableNumber($property->price)}} <sub>/Month</sub></li>
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
	</div>
</section>
<!-- Single Property End
==================================================================-->
@endsection

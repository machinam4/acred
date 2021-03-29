 @extends('layouts.base')

 @section('content')
     <!-- Page Banner Start
            ==================================================================-->
     <div class="page-banner overlay-black" style="padding: 150px 0; background: url(../images/background/acredinvestment4.webp) no-repeat center center / cover;
    width: 100%;">
         <div class="container h-100">
             <div class="row h-100 align-items-center">
                 <div class="col-lg-12">
                     <h1 class="page-banner-title color-primary">Property Grid</h1>
                     <div class="text-area w-50 mt-15 color-white">
                         <p>Land, Residential and Commercial Properties</p>
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
                             <li class="breadcrumb-item"><a href="#">Home</a></li>
                             <li class="breadcrumb-item"><a href="#">Listing</a></li>
                             <li class="breadcrumb-item"><a href="#">Property</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Property Grid Full Width</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
     <!-- Page Banner End
            ==================================================================-->
     <!-- Property Grid Start
            ==================================================================-->
     <section class="bg-light">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-lg-12 wow slideInDown animated">
                     <div class="top-filter pb-15">
                         <div class="row">
                             <div class="col-md-3 col-lg-6 col-xl-7">
                                 <label>1-12 of 85 results</label>
                             </div>
                             <div class="col-md-9 col-lg-6 col-xl-5">
                                 <div class="row">
                                     <div class="col-md-8 col-lg-7">
                                         <form>
                                             <div class="form-group d-flex mb-0">
                                                 <label class="w-50">Short By :</label>
                                                 <div class="select-wrapper position-relative w-100">
                                                     <select class="select form-control">
                                                         <option>Default</option>
                                                         <option>Newest</option>
                                                         <option>Oldest</option>
                                                         <option>Random</option>
                                                     </select>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                     <div class="col-md-4 col-lg-5">
                                         <ul class="nav nav-tabs border-0 float-right navbar-tab-view mt-sm-15" id="myTab"
                                             role="tablist" style="line-height: 20px;">
                                             <li class="nav-item">
                                                 <a class="nav-link active" id="threerow-tab" data-toggle="tab" href="#threerow"
                                                     role="tab" aria-controls="threerow" aria-selected="true"><i
                                                         class="fa fa-th" aria-hidden="true"></i></a>
                                             </li>
                                             <li class="nav-item">
                                                 <a class="nav-link" id="listrow-tab" data-toggle="tab" href="#listrow"
                                                     role="tab" aria-controls="listrow" aria-selected="false"><i
                                                         class="fa fa-list" aria-hidden="true"></i></a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-12 col-lg-12 wow slideInUp animated">
                     <form class="adbanced-form-two amenities-list border-top-1-gray">
                         <div class="row">
                             <div class="form-group col-lg-3 col-md-6 col-12 pt-15">
                                 <div class="select-wrapper position-relative">
                                     <select class="select form-control">
                                         <option>Select Country</option>
                                         <option>USA</option>
                                         <option>Australia</option>
                                         <option>Russia</option>
                                         <option>France</option>
                                         <option>Cyprus</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="form-group col-lg-3 col-md-6 col-6 pt-15">
                                 <div class="select-wrapper position-relative">
                                     <select class="select form-control">
                                         <option>Select Location</option>
                                         <option>Newyork</option>
                                         <option>London</option>
                                         <option>Dubai</option>
                                         <option>Melbourne</option>
                                         <option>Sydney</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="form-group col-lg-3 col-md-6 col-6 pt-15">
                                 <div class="select-wrapper position-relative">
                                     <select class="select form-control has-val">
                                         <option>Beds</option>
                                         <option>One</option>
                                         <option>Two</option>
                                         <option>Three</option>
                                         <option>Four</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="form-group mb-0 col-lg-3 col-md-6 col-6 py-15">
                                 <div class="select-wrapper position-relative">
                                     <select class="select form-control has-val">
                                         <option>Baths</option>
                                         <option>One</option>
                                         <option>Two</option>
                                         <option>Three</option>
                                         <option>Four</option>
                                     </select>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
                 <div class="col-md-12 col-lg-12">
                     <div class="tab-content  border-top-1-gray" id="myTabContent">
                         <div class="tab-pane fade show active" id="threerow" role="tabpanel" aria-labelledby="threerow-tab">
                             <div class="row">
                                 @if ($properties->count())
                                     @foreach ($properties as $property)
                                         <div class="col-md-12 col-lg-6 col-xl-4 wow slideInRight animated">
                                        <div class="property-item position-relative mt-30">
                                            <div class="property-img position-relative overflow-hidden overlay-secondary-4">
                                                <img src="{{Storage::url($property->image2)}}" alt="image">
                                                <span
                                                    class="thum-category category-1 bg-secondary color-white z-index-1 px-15">Featured</span>
                                                {{-- <span
                                                    class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span> --}}
                                                <ul class="hover-option position-absolute icon-white z-index-1">
                                                    <li>
                                                        <a data-toggle="tooltip" data-placement="top" title="Like"
                                                            href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tooltip" data-placement="top" title="Compare"
                                                            href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="meta-property icon-primary color-white z-index-1">
                                                    <ul>
                                                        <li><i class="fa fa-calendar"></i> {{ $property->updated_at->toDateString()}}</li>
                                                        <li><i class="fa fa-user"></i> Acred Inv</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="property-content bg-white pt-30 pb-50 px-30">
                                                <a class="color-secondary mb-5" href="{{ route('details', $property) }}">
                                                    <h4>{{ $property->title}}</h4>
                                                </a>
                                                <span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>{{ $property->address}}, {{ $property->county}}</span>
                                                <ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
                                                    <li><i class="flaticon-fit-screen"></i>{{ $property->size}}</li>
                                                    <li><i class="flaticon-hotel"></i>{{ $property->bedrooms}} Bedrooms</li>
                                                    <li><i class="flaticon-bathtub"></i>{{ $property->bathrooms}} Bathrooms</li>
                                                    <li><i class="flaticon-garage"></i>{{ $property->parking}} Garage</li>
                                                </ul>
                                                <div class="property-cost color-white list-half w-100">
                                                    <ul>
                                                        <li class="bg-primary">For {{ $property->acquisition}}</li>
                                                        <li>Ksh {{ ReadableHumanNumber($property->price)}} <sub>/Month</sub></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                 @else
                                     <p>There are no properties available yet</p>
                                 @endif
                                 <div class="col-lg-12 wow slideInDown animated">
                                     <div class="mx-auto d-table">
                                         {{$properties->links('vendor.pagination.custom')}}
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="tab-pane fade" id="listrow" role="tabpanel" aria-labelledby="listrow-tab">
                             <div class="row">
                                  @if ($properties->count())
                                     @foreach ($properties as $property)
                                 <div class="col-md-12 col-lg-12 wow slideInDown animated">
                                     <div class="property-list mt-30">
                                         <div class="property-item d-flex">
                                             <div
                                                 class="property-img position-relative overflow-hidden overlay-secondary-4">
                                                 <img src="{{Storage::url($property->image2)}}" alt="image">
                                                 <ul class="hover-option position-absolute icon-white z-index-1">
                                                     <li>
                                                         <a data-toggle="tooltip" data-placement="top" title="Like"
                                                             href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                     </li>
                                                     <li>
                                                         <a data-toggle="tooltip" data-placement="top" title="Compare"
                                                             href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                     </li>
                                                 </ul>
                                                 <div class="meta-property icon-primary color-white z-index-1">
                                                     <ul>
                                                         <li><i class="fa fa-calendar"></i> {{ $property->updated_at->toDateString()}}</li>
                                                         <li><i class="fa fa-user"></i> Acred Inv</li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
                                                 <a class="color-secondary mb-5" href="{{ route('details', $property) }}">
                                                     <h4>{{$property->title}}.</h4>
                                                 </a>
                                                 <span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>
                                                    {{$property->address}}, {{$property->county}}
                                                     </span>
                                                 <ul class="about-property icon-primary d-table mt-20">
                                                     <li><i class="flaticon-fit-screen"></i>{{$property->size}} sqft</li>
                                                     <li><i class="flaticon-hotel"></i>{{$property->bedrooms}} Bedrooms</li>
                                                     <li><i class="flaticon-bathtub"></i>{{$property->bathrooms}} Bathrooms</li>
                                                     <li><i class="flaticon-garage"></i>{{$property->parking}} Garage</li>
                                                 </ul>
                                                 <span class="tags color-gray mb-30 d-block">{{$property->type}} </span>
                                                 <div class="property-cost color-white list-half w-100">
                                                     <ul>
                                                         <li class="bg-primary">For Rent</li>
                                                         <li>Ksh {{ReadableHumanNumber($property->price)}} </li>
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
                                 <div class="col-lg-12 wow slideInDown animated">
                                     {{$properties->links('vendor.pagination.custom')}}
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Property Grid End
            ==================================================================-->

 @endsection

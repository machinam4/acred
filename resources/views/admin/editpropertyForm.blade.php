@extends('layouts.base')

@section('content')
    <!-- Page Banner Start
==================================================================-->
<div class="bg-secondary">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb m-0 py-15 px-0 bg-transparent hover-white-primary">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Submit Property</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Page Banner End
==================================================================-->
<!-- Submit Property Start
==================================================-->
<section class="submit-property bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
            <form class="property-submit-form" action="{{route('admin.editproperty', $property)}}" method="post" enctype="multipart/form-data">
                @csrf    
                @method('PATCH')
                <div class="property-info bg-white py-40 px-30 wow slideInDown animated">
						<div class="row">
							<div class="form-group col-lg-6">
                            <label>Property Title</label>                                
                            <input class ="form-control bg-gray @error('title') is-invalid @enderror" type="text" name="title" value="{{$property->title}}" reqiured>
                                @error('title') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
								<label>Property Category</label>
								<div class="select-wrapper position-relative">
									<select class="select form-control bg-gray @error('category') is-invalid @enderror" name="category" value="{{$property->category}}" reqiured>
                                        <option value="land">Land</option>
										<option value="residential">Residential</option>
										<option value="commercial">Commercial</option>
                                    </select>
                                    @error('category') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                    @enderror
                                </div>                                
							</div>
							<div class="form-group col-lg-6">
								<label>Property Type</label>
								<div class="select-wrapper position-relative">
									<select class="select form-control bg-gray @error('type') is-invalid @enderror" name="type" value="{{$property->type}}" reqiured>
                                        <option value="Land">Land</option>
										<option value="Apartment">Apartment</option>
										<option value="BUngalow">Bungalow</option>
										<option value="Mansion">Mansion</option>
										<option value="Office"> Office</option>
                                    </select>
                                    @error('type') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                    @enderror
                                </div>                                
							</div>
							<div class="form-group col-lg-6">
								<label>Acquisition</label>
								<div class="select-wrapper position-relative">
									<select class="select form-control bg-gray @error('acquisition') is-invalid @enderror" name="acquisition" value="{{$property->acquisition}}" reqiured>
                                        <option value="Rent">Rent</option>
										<option value="Sale">Sale</option>
										<option value="Rent/Sale">Rent/Sale</option>
									</select>                                
                                @error('acquisition') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
								</div>
							</div>
							<div class="form-group col-lg-6">
								<label>Price</label>
                                <input class="form-control bg-gray @error('price') is-invalid @enderror" type="number" name="price" value="{{$property->price}}" reqiured>
                                @error('price') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>Size</label>
                                <input class="form-control bg-gray @error('size') is-invalid @enderror" type="text" name="size" value="{{$property->size}}" reqiured>
                                @error('size') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>Furnishing</label>
								<div class="select-wrapper position-relative">
									<select class="select form-control bg-gray @error('furnishing') is-invalid @enderror" name="furnishing" value="{{$property->furnished}}" reqiured>
                                        <option value="furnished">Furnished</option>
										<option value="unfurnished">Unfurnished</option>
									</select>
                                @error('furnishing') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
								</div>
							</div>
							<div class="form-group col-lg-12">
								<label>Property Description</label>
                                <textarea class="form-control bg-gray @error('description') is-invalid @enderror" rows="7" name="description">{{$property->description}}</textarea>
                                @error('description') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
						</div>
					</div>

					<div class="property-location mt-30 bg-white py-40 px-30 wow slideInUp animated">
						<div class="row">
							<div class="form-group col-lg-6">
								<label>Address</label>
                                <input class="form-control bg-gray @error('address') is-invalid @enderror" type="text" name="address" value="{{$property->address}}" reqiured>
                                @error('address') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>County/State</label>
                                <input class="form-control bg-gray @error('county') is-invalid @enderror" type="text" name="county" value="{{$property->county}}" reqiured>
                                @error('county') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>Neighborhood</label>
                                <input class="form-control bg-gray @error('neighborhood') is-invalid @enderror" type="text" name="neighborhood" value="{{$property->neighborhood}}" reqiured>
                                @error('neighborhood') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>GooGle Maps Location (for Google Maps)</label>
                                <input class="form-control bg-gray @error('googlelocation') is-invalid @enderror" type="text" name="googlelocation" value="{{$property->googlelocation}}" reqiured>
                                @error('googlelocation') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-4">
								<label>Google Map Street View</label>
								<input class="form-control bg-gray @error('streetview') is-invalid @enderror" type="text" name="streetview" value="{{$property->streetview}}" reqiured>
                                @error('streetview') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
						</div>
					</div>

					<div class="property-info mt-30 bg-white py-40 px-30 wow slideInDown animated">
						<div class="row">
							<div class="form-group col-lg-4">
								<label>Bedrooms</label>
                                <input class="form-control bg-gray @error('bedrooms') is-invalid @enderror" type="number" name="bedrooms" value="{{$property->bedrooms}}" reqiured>
                                @error('bedrooms') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-4">
								<label>Bathrooms</label>
                                <input class="form-control bg-gray @error('bathrooms') is-invalid @enderror" type="number" name="bathrooms" value="{{$property->bathrooms}}" reqiured>
                                @error('bathrooms') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-4">
								<label>Garages</label>
                                <input class="form-control bg-gray @error('parking') is-invalid @enderror" type="number" name="parking" value="{{$property->parking}}" reqiured>
                                @error('parking') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
						</div>
					</div>

					<div class="property-info property-media mt-30 bg-white py-40 px-30 wow slideInUp animated">
                        <div class="form-group col-lg-12">
								<label>Upload Floor Plan Image</label>
								<div class="d-flex">
                                    <input type="file" class="@error('floorplan') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="floorplan" value="{{$property->floorplan}}" reqiured>
                                 @error('floorplan') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
								</div>
							</div>
                        <div class="row">
							<div class="form-group col-lg-12">
								<label>Upload Images</label>
								<div class="d-flex">
									{{-- <input class="form-control upload-path bg-gray mr-30" type="text" name="upload-path"> --}}
                                    <input type="file" class="@error('image1') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image1" value="{{$property->image1}}" reqiured>
                                    <input type="file" class="@error('image2') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image2" value="{{$property->image2}}" reqiured>
                                    <input type="file" class="@error('image3') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image3" value="{{$property->image3}}" reqiured>
                                    <input type="file" class="@error('image4') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image4" value="{{$property->image4}}" reqiured>
                                    <input type="file" class="@error('image5') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image5" value="{{$property->image5}}" reqiured>
                                 @error('image1') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
								</div>
							</div>
							<div class="form-group col-lg-4">
								<label>video URL</label>
                                <input class="form-control bg-gray @error('video') is-invalid @enderror" type="url" name="video" value="{{$property->video}}" reqiured>
                                 @error('video') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="col-lg-12">
								<a class="btn btn-primary" type="reset" href="{{route('admin')}} ">cancel</a>
								<button class="btn btn-primary float-right" type="submit">Save</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
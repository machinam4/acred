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
				    <li class="breadcrumb-item active" aria-current="page">Submint Property</li>
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
            <form class="property-submit-form" action="{{route('admin.addproperty')}}" method="post" enctype="multipart/form-data">
                @csrf    
                <div class="property-info bg-white py-40 px-30 wow slideInDown animated">
						<div class="row">
							<div class="form-group col-lg-6">
                            <label>Property Title</label>                                
                            <input class ="form-control bg-gray @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}" reqiured>
                                @error('title') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
								<label>Property Category</label>
								<div class="select-wrapper position-relative">
									<select class="select form-control bg-gray @error('category') is-invalid @enderror" name="category" value="{{old('category')}}" reqiured>
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
									<select class="select form-control bg-gray @error('type') is-invalid @enderror" name="type" value="{{old('type')}}" reqiured>
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
									<select class="select form-control bg-gray @error('acquisition') is-invalid @enderror" name="acquisition" value="{{old('acquisition')}}" reqiured>
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
                                <input class="form-control bg-gray @error('price') is-invalid @enderror" type="number" name="price" value="{{old('price')}}" reqiured>
                                @error('price') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>Size</label>
                                <input class="form-control bg-gray @error('size') is-invalid @enderror" type="number" name="size" value="{{old('size')}}" reqiured>
                                @error('size') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>Furnishing</label>
								<div class="select-wrapper position-relative">
									<select class="select form-control bg-gray @error('furnishing') is-invalid @enderror" name="furnishing" value="{{old('furnished')}}" reqiured>
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
                                <textarea class="form-control bg-gray @error('description') is-invalid @enderror" rows="7" name="description">{{old('description')}}</textarea>
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
                                <input class="form-control bg-gray @error('address') is-invalid @enderror" type="text" name="address" value="{{old('address')}}" reqiured>
                                @error('address') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>County/State</label>
                                <input class="form-control bg-gray @error('county') is-invalid @enderror" type="text" name="county" value="{{old('county')}}" reqiured>
                                @error('county') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>Neighborhood</label>
                                <input class="form-control bg-gray @error('neighborhood') is-invalid @enderror" type="text" name="neighborhood" value="{{old('neighborhood')}}" reqiured>
                                @error('neighborhood') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-6">
								<label>GooGle Maps Location (for Google Maps)</label>
                                <input class="form-control bg-gray @error('googlelocation') is-invalid @enderror" type="text" name="googlelocation" value="{{old('googlelocation')}}" reqiured>
                                @error('googlelocation') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-12">
								<label>Google Map Street View</label>
								<input class="form-control bg-gray @error('streetview') is-invalid @enderror" type="text" name="streetview" value="{{old('streetview')}}" reqiured>
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
                                <input class="form-control bg-gray @error('bedrooms') is-invalid @enderror" type="number" name="bedrooms" value="{{old('bedrooms')}}" reqiured>
                                @error('bedrooms') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-4">
								<label>Bathrooms</label>
                                <input class="form-control bg-gray @error('bathrooms') is-invalid @enderror" type="number" name="bathrooms" value="{{old('bathrooms')}}" reqiured>
                                @error('bathrooms') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
							</div>
							<div class="form-group col-lg-4">
								<label>Garages</label>
                                <input class="form-control bg-gray @error('parking') is-invalid @enderror" type="number" name="parking" value="{{old('parking')}}" reqiured>
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
                                    <input type="file" class="@error('floorplan') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="floorplan" value="{{old('floorplan')}}" reqiured>
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
                                    <input type="file" class="@error('image1') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image1" value="{{old('image1')}}" reqiured>
                                    <input type="file" class="@error('image2') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image2" value="{{old('image2')}}" reqiured>
                                    <input type="file" class="@error('image3') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image3" value="{{old('image3')}}" reqiured>
                                    <input type="file" class="@error('image4') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image4" value="{{old('image4')}}" reqiured>
                                    <input type="file" class="@error('image5') is-invalid @enderror" accept="image/jpg, image/jpeg, image/png" name="image5" value="{{old('image5')}}" reqiured>
                                 @error('image1') 
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>                                   
                                @enderror
								</div>
							</div>
							<div class="form-group col-lg-4">
								<label>video URL</label>
                                <input class="form-control bg-gray @error('video') is-invalid @enderror" type="url" name="video" value="{{old('video')}}" reqiured>
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
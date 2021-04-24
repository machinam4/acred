@extends('layouts.base')

@section('content')
<!-- Page Banner Start
==================================================================-->
<div class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 py-15 px-0 bg-transparent hover-white-primary">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Property List</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8">
                <ul class="d-flex color-white-a float-right">
                <li><a class="btn btn-primary position-relative" href="{{route('admin.propertyform')}}">Add Property</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End
==================================================================-->
<!-- Booking Request List Start
==================================================================-->
<section class="booking-request bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="booking-property px-50 w-100">
                    <table class="w-100 items-list bg-transparent">
                        <thead>
                            <tr class="bg-secondary color-white wow slideInDown animated">
                                <th>Rquested Properties</th>
                                <th>Added Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($properties->count())
                            @foreach ($properties as $property)
                            <tr class="wow slideInUp animated">
                                <td><img src="{{Storage::url($property->image1)}}" alt="image">
                                    <div class="property-info d-table icon-primary">
                                        <h4 class="inner-title mb-15 color-secondary">{{ $property->title}}</h4>
                                        <span><i class="fa fa-map-marker mr-5"></i> {{ $property->address}},
                                            {{ $property->county}}</span>
                                        <div class="price mt-15"> <span class="color-primary">Ksh
                                                {{ ReadableHumanNumber($property->price)}}</span> <span></span> </div>
                                    </div>
                                </td>
                                <td>{{ $property->updated_at->toDateString()}}</td>
                                <td>
                                    <a class="btn-round bg-secondary mr-5 mb-5" href="{{route('admin.editpropertyform', $property->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                    <div>
                                        <form action="{{route('admin.deleteproperty', $property)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-round bg-secondary mb-5 text-white" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>                                    
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr class="wow slideInUp animated">
                                <td>There are no Properties Available
                                </td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                    
                    <div class="mx-auto d-table wow slideInUp animated">
                        {{$properties->links('vendor.pagination.custom')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
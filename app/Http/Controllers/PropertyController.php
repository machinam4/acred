<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properies = Property::paginate(10);
        return view('admin.listProperty', [
            'properties' => $properies
        ]);
    }

    /**
     * Image manipulation Function...Resize The images.
     *
     * @return \Illuminate\Http\Response
     */
    public function imgResize($image, $width = 1920, $height = 990)
    {
        $input['imagename'] = time() . rand(9999, null) . '.' . $image->extension();

        $filePath = Storage::path('/public/uploads');
        $img = Image::make($image);
        $img->resize($width, $height)->save($filePath . '/' . $input['imagename']);

        // $filePath = public_path('/storage/uploads');
        // $img->move($filePath, $input['imagename']);

        return '/uploads' . '/' . $input['imagename'];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.propertyForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'type' => 'required',
            'acquisition' => 'required',
            'category' => 'required',
            'price' => 'required',
            'size' => 'required',
            'furnishing' => 'required',
            'description' => 'required',
            'address' => 'required',
            'county' => 'required',
            'neighborhood' => 'required',
            'googlelocation' => 'required',
            'streetview' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'parking' => 'required',
            'floorplan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'required',
        ]);


        Property::firstOrCreate(
            ['title' => $request->title],
            [
                'type' => $request->type,
                'acquisition' => $request->acquisition,
                'category' => $request->category,
                'price' => $request->price,
                'size' => $request->size,
                'furnishing' => $request->furnishing,
                'description' => $request->description,
                'address' => $request->address,
                'county' => $request->county,
                'neighborhood' => $request->neighborhood,
                'googlelocation' => $request->googlelocation,
                'streetview' => $request->streetview,
                'bedrooms' => $request->bedrooms,
                'bathrooms' => $request->bathrooms,
                'parking' => $request->parking,
                'floorplan' => $this->imgResize($request->file('floorplan')),
                'image1' => $this->imgResize($request->file('image1')),
                'image2' => $this->imgResize($request->file('image2'), 725, 635),
                'image3' => $this->imgResize($request->file('image3')),
                'image4' => $this->imgResize($request->file('image4')),
                'image5' => $this->imgResize($request->file('image5')),
                'video' => $request->video,
            ]
        );
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::findorFail($id);
        return view('admin.editpropertyForm', [
            'property' => $property
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property $property)
    {
        Storage::delete(['/storage' . $property->image1, '/storage' . $property->image2, '/storage' . $property->image3, '/storage' . $property->image4, '/storage' . $property->image5, '/storage' . $property->floorplan]);
        $property->title = $request->title;
        $property->type = $request->type;
        $property->acquisition = $request->acquisition;
        $property->category = $request->category;
        $property->price = $request->price;
        $property->size = $request->size;
        $property->furnishing = $request->furnishing;
        $property->description = $request->description;
        $property->address = $request->address;
        $property->county = $request->county;
        $property->neighborhood = $request->neighborhood;
        $property->googlelocation = $request->googlelocation;
        $property->streetview = $request->streetview;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->parking = $request->parking;
        $property->floorplan = $this->imgResize($request->file('floorplan'));
        $property->image1 = $this->imgResize($request->file('image1'));
        $property->image2 = $this->imgResize($request->file('image2'), 725, 635);
        $property->image3 = $this->imgResize($request->file('image3'));
        $property->image4 = $this->imgResize($request->file('image4'));
        $property->image5 = $this->imgResize($request->file('image5'));
        $property->video = $request->video;
        $property->save();
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        Storage::delete(['/storage' . $property->image1, '/storage' . $property->image2, '/storage' . $property->image3, '/storage' . $property->image4, '/storage' . $property->image5, '/storage' . $property->floorplan]);
        $property->delete();
        return back();
    }
}

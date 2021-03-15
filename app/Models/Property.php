<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'acquisition',
        'price',
        'size',
        'furnishing',
        'description',
        'address',
        'county',
        'neighborhood',
        'category',
        'googlelocation',
        'streetview',
        'bedrooms',
        'bathrooms',
        'parking',
        'floorplan',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'video'
    ];
}

<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionMail;
use App\Models\Property;
use App\Models\SubscriptionMail as ModelsSubscriptionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        $properties = Property::paginate(10);
        $recentproperties = Property::latest()->paginate(3);
        $furnishedproperties = Property::where('furnishing', 'furnished')->paginate(5);
        // ->random(5);
        return view('acred.home', [
            'properties' => $properties,
            'recentproperties' => $recentproperties,
            'furnishedproperties' => $furnishedproperties
        ]);
    }

    public function Listing($category)
    {
        $properties = Property::where('category', $category)
            ->paginate(9);
        return view('acred.listing', [
            'properties' => $properties,
        ]);
    }

    public function Details(Property $property)
    {
        $recentproperties = Property::latest()->where('category', $property->category)->paginate(5);

        return view('acred.propertyDetail', [
            'property' => $property,
            'recentproperties' => $recentproperties
        ]);
    }

    public function SubscribeMail(Request $request)
    {
        ModelsSubscriptionMail::firstOrCreate(
            ['email' => $request->email],
            [
                'type' => $request->type,
                'name' => $request->name,
                'subject' => $request->subject,
                'message' => $request->message,
            ]
        );
        $mailInfo = [
            'title' => $request->subject,
            'body' => $request->message,
        ];
        Mail::to($request->email)->send(new SubscriptionMail($mailInfo));
        return "success";
    }
}

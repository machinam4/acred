<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionMail;
use App\Mail\SubscriberMail;
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

        $mailerInfo = [
                'email' => $request->email,
                'type' => $request->type,
                'name' => $request->name,
                'subject' => $request->subject,
                'message' => $request->message,
        ];
        Mail::to('paulinevike@gmail.com')->send(new SubscriberMail($mailerInfo));
        return "success";
    }

    public function SearchProperty(Request $request)
    {
        $min_area = $request->query('min-area');
        $min_price = $request->query('min-price');
        if ($min_area == null ) $min_area = 0;
        if ($min_price == null ) $min_price = 0;

        $max_area = $request->query('max-area');
        $max_price = $request->query('max-price');
        if ($max_area == null ) $max_area = 100000000000000;
        if ($max_price == null ) $max_price = 100000000000000;
        $properties = Property::where('acquisition', $request->query('acquisition'))                                
                                ->where('type', $request->query('type'))
                                ->whereBetween('size', [$min_area, $max_area])
                                ->whereBetween('price', [$min_price, $max_price])
                                ->where(function($query) use ($request) {
                                    $query->where('address', 'LIKE', '%'.$request->query('address').'%')
                                        ->orWhere('county', 'LIKE', '%'.$request->query('address').'%')
                                        ->orWhere('neighborhood', 'LIKE', '%'.$request->query('address').'%');})
                                ->paginate(9);
        // dd($request->query('max-price'));
        return view('acred.listing', [
            'properties' => $properties,
        ]);
    }
}
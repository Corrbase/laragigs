<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use MongoDB\Driver\Session;

class ListingController extends Controller
{

    // show all listings
    public function index(Request $request)
    {
//        dd($request['tag']);
        return view('listings.index', [
            'heading' => 'lastes lisenings',
            'listings' => Listing::latest()->filter(\request(['tag']))->get(),
        ]);
    }

    // show create form

    public function create()
    {
        return view('listings.create');
    }

    // show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //store listing data
    public function store(Request $request)
    {
        $formfields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'tags' => 'required',
            'description' => 'required',
        ]);

        Listing::create($formfields);



        return redirect('/')->with('message', 'Listing created successfully!');
    }
}

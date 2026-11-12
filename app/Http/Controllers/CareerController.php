<?php

namespace App\Http\Controllers;

use App\Models\CareerListing;

class CareerController extends Controller
{
    public function index()
    {
        $listings = CareerListing::active()->orderBy('sort_order')->get();
        return view('pages.careers.index', compact('listings'));
    }

    public function show(string $slug)
    {
        $listing = CareerListing::active()->where('slug', $slug)->firstOrFail();
        return view('pages.careers.show', compact('listing'));
    }
}

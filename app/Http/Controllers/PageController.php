<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ExportCountry;
use App\Models\Partner;

class PageController extends Controller
{
    public function about()
    {
        $partners = Partner::active()->orderBy('sort_order')->get();
        return view('pages.about', compact('partners'));
    }

    public function industries()
    {
        $products = Product::active()->orderBy('sort_order')->get();
        return view('pages.industries', compact('products'));
    }

    public function quality()
    {
        return view('pages.quality');
    }

    public function export()
    {
        $countries = ExportCountry::active()->orderBy('region')->orderBy('sort_order')->get();
        return view('pages.export', compact('countries'));
    }
}


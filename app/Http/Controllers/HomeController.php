<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::active()->featured()->orderBy('sort_order')->take(6)->get();
        $allProducts = Product::active()->orderBy('sort_order')->get();

        $stats = [
            'years_experience' => 42, // Since 1984
            'products_count' => Product::active()->count(),
            'countries_exported' => '15+',
            'happy_clients' => '500+',
        ];

        return view('home', compact('featuredProducts', 'allProducts', 'stats'));
    }
}


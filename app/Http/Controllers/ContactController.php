<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::active()->orderBy('sort_order')->get();
        $selectedProductId = $request->query('product_id');

        return view('contact', compact('products', 'selectedProductId'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'company' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'product_id' => 'nullable|exists:products,id',
            'message' => 'required|string|max:5000',
        ]);

        Inquiry::create($validated);

        return redirect()->back()->with('success', 'Thank you for reaching out! Your inquiry has been received. Our sales & technical team will contact you shortly.');
    }
}


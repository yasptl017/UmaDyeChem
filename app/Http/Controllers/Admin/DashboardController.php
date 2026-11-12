<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_products' => Product::count(),
            'active_products' => Product::active()->count(),
            'total_inquiries' => Inquiry::count(),
            'unread_inquiries' => Inquiry::unread()->count(),
        ];

        $recentInquiries = Inquiry::with('product')->latest()->take(6)->get();
        $products = Product::orderBy('sort_order')->take(8)->get();

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'products'));
    }
}


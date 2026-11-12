<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query()->orderBy('sort_order');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('cas_number', 'like', "%{$search}%");
        }

        $products = $query->paginate(15);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $product = new Product([
            'is_active' => true,
            'is_featured' => false,
            'sort_order' => 0,
        ]);
        return view('admin.products.form', compact('product'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateProduct($request);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        } else {
            $validated['slug'] = Str::slug($validated['slug']);
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.form', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $this->validateProduct($request, $product->id);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        } else {
            $validated['slug'] = Str::slug($validated['slug']);
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }

    private function validateProduct(Request $request, $id = null): array
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:products,slug,' . $id,
            'category' => 'nullable|string|max:255',
            'short_description' => 'nullable|string|max:1000',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:4096',
            'cas_number' => 'nullable|string|max:50',
            'molecular_formula' => 'nullable|string|max:100',
            'molecular_weight' => 'nullable|string|max:50',
            'appearance' => 'nullable|string|max:255',
            'grade' => 'nullable|string|max:100',
            'concentration' => 'nullable|string|max:100',
            'ph_value' => 'nullable|string|max:50',
            'specific_gravity' => 'nullable|string|max:50',
            'so2_content' => 'nullable|string|max:50',
            'packaging' => 'nullable|string|max:255',
            'applications' => 'nullable|string',
            'industries' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
        ]);
    }
}


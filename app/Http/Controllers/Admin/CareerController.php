<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerListing;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $query = CareerListing::query()->orderBy('sort_order')->orderByDesc('id');

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $listings = $query->paginate(15);
        return view('admin.careers.index', compact('listings'));
    }

    public function create()
    {
        $listing = new CareerListing([
            'is_active' => true,
            'employment_type' => 'Full-time',
            'location' => 'Unjha, Gujarat, India',
            'sort_order' => 0,
        ]);
        return view('admin.careers.form', compact('listing'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateListing($request);
        $validated['slug'] = $validated['slug'] ? Str::slug($validated['slug']) : Str::slug($validated['title']);

        CareerListing::create($validated);

        return redirect()->route('admin.careers.index')->with('success', 'Job listing created successfully.');
    }

    public function edit(CareerListing $career)
    {
        return view('admin.careers.form', ['listing' => $career]);
    }

    public function update(Request $request, CareerListing $career)
    {
        $validated = $this->validateListing($request, $career->id);
        $validated['slug'] = $validated['slug'] ? Str::slug($validated['slug']) : Str::slug($validated['title']);

        $career->update($validated);

        return redirect()->route('admin.careers.index')->with('success', 'Job listing updated successfully.');
    }

    public function destroy(CareerListing $career)
    {
        $career->delete();
        return redirect()->route('admin.careers.index')->with('success', 'Job listing deleted successfully.');
    }

    private function validateListing(Request $request, $id = null): array
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:career_listings,slug,' . $id,
            'department' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'employment_type' => 'nullable|string|max:100',
            'experience_level' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'requirements' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);
    }
}

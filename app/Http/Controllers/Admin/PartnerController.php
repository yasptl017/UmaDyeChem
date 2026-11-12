<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::query()->orderBy('sort_order')->paginate(20);
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        $partner = new Partner(['is_active' => true, 'avatar_color' => 'brand-700']);
        return view('admin.partners.form', compact('partner'));
    }

    public function store(Request $request)
    {
        $validated = $this->validatePartner($request);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('partners', 'public');
        }

        Partner::create($validated);

        return redirect()->route('admin.partners.index')->with('success', 'Partner added successfully.');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.form', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $validated = $this->validatePartner($request);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('partners', 'public');
        }

        $partner->update($validated);

        return redirect()->route('admin.partners.index')->with('success', 'Partner updated successfully.');
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('admin.partners.index')->with('success', 'Partner removed successfully.');
    }

    private function validatePartner(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'photo' => 'nullable|image|max:4096',
            'initials' => 'nullable|string|max:4',
            'avatar_color' => 'nullable|string|max:50',
            'bio' => 'nullable|string|max:1000',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);
    }
}

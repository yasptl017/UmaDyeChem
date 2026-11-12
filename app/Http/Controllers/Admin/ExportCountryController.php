<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExportCountry;
use Illuminate\Http\Request;

class ExportCountryController extends Controller
{
    public function index()
    {
        $countries = ExportCountry::query()->orderBy('region')->orderBy('sort_order')->paginate(25);
        return view('admin.export-countries.index', compact('countries'));
    }

    public function create()
    {
        $country = new ExportCountry(['is_active' => true]);
        return view('admin.export-countries.form', compact('country'));
    }

    public function store(Request $request)
    {
        ExportCountry::create($this->validateCountry($request));
        return redirect()->route('admin.export-countries.index')->with('success', 'Export country added successfully.');
    }

    public function edit(ExportCountry $export_country)
    {
        return view('admin.export-countries.form', ['country' => $export_country]);
    }

    public function update(Request $request, ExportCountry $export_country)
    {
        $export_country->update($this->validateCountry($request));
        return redirect()->route('admin.export-countries.index')->with('success', 'Export country updated successfully.');
    }

    public function destroy(ExportCountry $export_country)
    {
        $export_country->delete();
        return redirect()->route('admin.export-countries.index')->with('success', 'Export country removed successfully.');
    }

    private function validateCountry(Request $request): array
    {
        $validated = $request->validate([
            'country_name' => 'required|string|max:255',
            'country_code' => 'required|string|size:2',
            'region' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:500',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $validated['country_code'] = strtoupper($validated['country_code']);

        return $validated;
    }
}

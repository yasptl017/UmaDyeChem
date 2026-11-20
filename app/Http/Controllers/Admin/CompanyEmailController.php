<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyEmail;
use Illuminate\Http\Request;

class CompanyEmailController extends Controller
{
    public function index()
    {
        $companyEmails = CompanyEmail::query()->orderBy('sort_order')->paginate(20);
        return view('admin.company-emails.index', compact('companyEmails'));
    }

    public function create()
    {
        $companyEmail = new CompanyEmail(['is_active' => true]);
        return view('admin.company-emails.form', compact('companyEmail'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateCompanyEmail($request);

        CompanyEmail::create($validated);

        return redirect()->route('admin.company-emails.index')->with('success', 'Company email added successfully.');
    }

    public function edit(CompanyEmail $companyEmail)
    {
        return view('admin.company-emails.form', compact('companyEmail'));
    }

    public function update(Request $request, CompanyEmail $companyEmail)
    {
        $validated = $this->validateCompanyEmail($request);

        $companyEmail->update($validated);

        return redirect()->route('admin.company-emails.index')->with('success', 'Company email updated successfully.');
    }

    public function destroy(CompanyEmail $companyEmail)
    {
        $companyEmail->delete();
        return redirect()->route('admin.company-emails.index')->with('success', 'Company email removed successfully.');
    }

    private function validateCompanyEmail(Request $request): array
    {
        return $request->validate([
            'label' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);
    }
}

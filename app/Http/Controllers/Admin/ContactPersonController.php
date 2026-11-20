<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactPerson;
use Illuminate\Http\Request;

class ContactPersonController extends Controller
{
    public function index()
    {
        $contactPersons = ContactPerson::query()->orderBy('sort_order')->paginate(20);
        return view('admin.contact-persons.index', compact('contactPersons'));
    }

    public function create()
    {
        $contactPerson = new ContactPerson(['is_active' => true]);
        return view('admin.contact-persons.form', compact('contactPerson'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateContactPerson($request);

        ContactPerson::create($validated);

        return redirect()->route('admin.contact-persons.index')->with('success', 'Contact person added successfully.');
    }

    public function edit(ContactPerson $contactPerson)
    {
        return view('admin.contact-persons.form', compact('contactPerson'));
    }

    public function update(Request $request, ContactPerson $contactPerson)
    {
        $validated = $this->validateContactPerson($request);

        $contactPerson->update($validated);

        return redirect()->route('admin.contact-persons.index')->with('success', 'Contact person updated successfully.');
    }

    public function destroy(ContactPerson $contactPerson)
    {
        $contactPerson->delete();
        return redirect()->route('admin.contact-persons.index')->with('success', 'Contact person removed successfully.');
    }

    private function validateContactPerson(Request $request): array
    {
        return $request->validate([
            'name' => 'nullable|string|max:255',
            'label' => 'required|string|max:255',
            'phone' => 'nullable|string|max:30',
            'email' => 'nullable|email|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);
    }
}

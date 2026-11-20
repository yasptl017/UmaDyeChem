@extends('layouts.admin')

@section('title', $contactPerson->exists ? 'Edit ' . $contactPerson->label : 'Add Contact Person')
@section('page_title', $contactPerson->exists ? 'Edit Contact Person' : 'Add Contact Person')
@section('page_subtitle', 'This entry appears in the Manufacturing Works & Office section of the public Contact Us page.')

@section('header_actions')
    <a href="{{ route('admin.contact-persons.index') }}" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-700 hover:bg-slate-100 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to Contact Persons
    </a>
@endsection

@section('content')

<form action="{{ $contactPerson->exists ? route('admin.contact-persons.update', $contactPerson->id) : route('admin.contact-persons.store') }}" method="POST" class="space-y-6">
    @csrf
    @if($contactPerson->exists)
        @method('PUT')
    @endif

    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Contact Person's Name</label>
                <input type="text" name="name" value="{{ old('name', $contactPerson->name) }}" placeholder="e.g. Mr. Setu Patel" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Label / Department *</label>
                <input type="text" name="label" value="{{ old('label', $contactPerson->label) }}" required placeholder="e.g. Domestic Inquiry, Export Inquiry, Accounts, Information" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
                @error('label') <span class="text-[11px] text-rose-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Phone / Mobile</label>
                <input type="text" name="phone" value="{{ old('phone', $contactPerson->phone) }}" placeholder="e.g. +91 97252 45799" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email', $contactPerson->email) }}" placeholder="e.g. export@umadyechem.com" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
                @error('email') <span class="text-[11px] text-rose-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="flex items-center gap-2 pt-4">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $contactPerson->is_active ?? true) ? 'checked' : '' }} class="rounded border-slate-300 text-brand-700 focus:ring-0">
                <label for="is_active" class="text-xs font-bold text-slate-800 cursor-pointer">Visible on Contact Us Page</label>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Display Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $contactPerson->sort_order ?? 0) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit" class="px-6 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
            <i class="fa-solid fa-floppy-disk"></i> Save Contact Person
        </button>
        <a href="{{ route('admin.contact-persons.index') }}" class="px-4 py-2.5 rounded-xl border border-slate-300 text-xs font-semibold text-slate-600 hover:bg-slate-100 transition-colors">
            Cancel
        </a>
    </div>
</form>

@endsection

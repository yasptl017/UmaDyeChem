@extends('layouts.admin')

@section('title', 'Company & Website Settings')
@section('page_title', 'Company Profile & SEO Configuration')
@section('page_subtitle', 'Update corporate address, telephone contacts, and global search engine meta tags.')

@section('content')

<form action="{{ route('admin.settings.update') }}" method="POST" class="max-w-4xl space-y-6">
    @csrf

    <!-- Card 1: Company Contact Details -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">1. Company Profile & Official Contacts</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Company Trade Name</label>
                <input type="text" name="company_name" value="{{ old('company_name', $settings['company_name']) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Company Tagline / Subtitle</label>
                <input type="text" name="company_tagline" value="{{ old('company_tagline', $settings['company_tagline']) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Primary Plant Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $settings['phone']) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Alternative Phone Line</label>
                <input type="text" name="phone_alt" value="{{ old('phone_alt', $settings['phone_alt']) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Official Inquiry Email</label>
                <input type="email" name="email" value="{{ old('email', $settings['email']) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">WhatsApp Number (digits with country code only, e.g. 919825012345)</label>
                <input type="text" name="whatsapp_number" value="{{ old('whatsapp_number', $settings['whatsapp_number']) }}" placeholder="919825012345" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 font-mono">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Factory Works Address</label>
            <textarea name="address" rows="3" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">{{ old('address', $settings['address']) }}</textarea>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Postal Address</label>
                <textarea name="postal_address" rows="2" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">{{ old('postal_address', $settings['postal_address']) }}</textarea>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Working Hours</label>
                <input type="text" name="working_hours" value="{{ old('working_hours', $settings['working_hours']) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>
    </div>

    <!-- Card 2: Global SEO Meta Settings -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">2. Search Engine Optimization (SEO)</h3>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Default Meta Title</label>
            <input type="text" name="meta_title" value="{{ old('meta_title', $settings['meta_title']) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Default Meta Description</label>
            <textarea name="meta_description" rows="3" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">{{ old('meta_description', $settings['meta_description']) }}</textarea>
        </div>
    </div>

    <button type="submit" class="px-6 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
        <i class="fa-solid fa-floppy-disk"></i> Save Settings
    </button>
</form>

@endsection


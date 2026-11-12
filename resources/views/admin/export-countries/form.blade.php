@extends('layouts.admin')

@section('title', $country->exists ? 'Edit ' . $country->country_name : 'Add Export Country')
@section('page_title', $country->exists ? 'Edit Export Country' : 'Add Export Country')
@section('page_subtitle', 'This country will be highlighted on the public interactive world map.')

@section('header_actions')
    <a href="{{ route('admin.export-countries.index') }}" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-700 hover:bg-slate-100 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to Export Network
    </a>
@endsection

@section('content')

<form action="{{ $country->exists ? route('admin.export-countries.update', $country->id) : route('admin.export-countries.store') }}" method="POST" class="space-y-6">
    @csrf
    @if($country->exists)
        @method('PUT')
    @endif

    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="sm:col-span-2">
                <label class="block text-xs font-semibold text-slate-700 mb-1">Country Name *</label>
                <input type="text" name="country_name" value="{{ old('country_name', $country->country_name) }}" required placeholder="e.g. United Arab Emirates" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">ISO Code (2 letters) *</label>
                <input type="text" name="country_code" value="{{ old('country_code', $country->country_code) }}" required maxlength="2" placeholder="e.g. AE" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 font-mono uppercase">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Region / Group</label>
                <input type="text" name="region" value="{{ old('region', $country->region) }}" placeholder="e.g. Middle East / GCC" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Display Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $country->sort_order ?? 0) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Notes (optional)</label>
            <textarea name="notes" rows="2" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700" placeholder="e.g. Served via Jebel Ali port, regular monthly shipments">{{ old('notes', $country->notes) }}</textarea>
        </div>

        <div class="flex items-center gap-2 pt-2">
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $country->is_active ?? true) ? 'checked' : '' }} class="rounded border-slate-300 text-brand-700 focus:ring-0">
            <label for="is_active" class="text-xs font-bold text-slate-800 cursor-pointer">Highlighted on Map & Website</label>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit" class="px-6 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
            <i class="fa-solid fa-floppy-disk"></i> Save Country
        </button>
        <a href="{{ route('admin.export-countries.index') }}" class="px-4 py-2.5 rounded-xl border border-slate-300 text-xs font-semibold text-slate-600 hover:bg-slate-100 transition-colors">
            Cancel
        </a>
    </div>
</form>

@endsection

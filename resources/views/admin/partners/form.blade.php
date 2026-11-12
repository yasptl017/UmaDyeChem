@extends('layouts.admin')

@section('title', $partner->exists ? 'Edit ' . $partner->name : 'Add Partner / Team Member')
@section('page_title', $partner->exists ? 'Edit Partner / Team Member' : 'Add Partner / Team Member')
@section('page_subtitle', 'This card appears in the Leadership & Management section of the About Us page.')

@section('header_actions')
    <a href="{{ route('admin.partners.index') }}" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-700 hover:bg-slate-100 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to Partners
    </a>
@endsection

@section('content')

<form action="{{ $partner->exists ? route('admin.partners.update', $partner->id) : route('admin.partners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if($partner->exists)
        @method('PUT')
    @endif

    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Full Name *</label>
                <input type="text" name="name" value="{{ old('name', $partner->name) }}" required placeholder="e.g. Mr. Rameshbhai Patel" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Designation / Role</label>
                <input type="text" name="designation" value="{{ old('designation', $partner->designation) }}" placeholder="e.g. Partner / Founder" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Short Bio</label>
            <textarea name="bio" rows="2" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700" placeholder="One line about their role and experience...">{{ old('bio', $partner->bio) }}</textarea>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Photo (optional)</label>
                <input type="file" name="photo" accept="image/*" class="w-full text-xs">
                @if($partner->photo)
                    <img src="{{ asset('storage/' . $partner->photo) }}" class="h-16 w-16 object-cover rounded-full mt-2 border border-slate-200">
                @endif
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Fallback Avatar Initials</label>
                <input type="text" name="initials" value="{{ old('initials', $partner->initials) }}" maxlength="4" placeholder="e.g. RP" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 font-mono uppercase">
                <p class="text-[11px] text-slate-400 mt-1">Shown when no photo is uploaded.</p>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Avatar Color</label>
                <select name="avatar_color" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
                    @foreach(['brand-700' => 'Brand Blue', 'brand-800' => 'Deep Blue', 'navy-800' => 'Navy', 'cyan-700' => 'Cyan', 'emerald-700' => 'Emerald'] as $value => $label)
                        <option value="{{ $value }}" {{ old('avatar_color', $partner->avatar_color) == $value ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="flex items-center gap-2 pt-4">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $partner->is_active ?? true) ? 'checked' : '' }} class="rounded border-slate-300 text-brand-700 focus:ring-0">
                <label for="is_active" class="text-xs font-bold text-slate-800 cursor-pointer">Visible on About Us Page</label>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Display Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $partner->sort_order ?? 0) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit" class="px-6 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
            <i class="fa-solid fa-floppy-disk"></i> Save Partner
        </button>
        <a href="{{ route('admin.partners.index') }}" class="px-4 py-2.5 rounded-xl border border-slate-300 text-xs font-semibold text-slate-600 hover:bg-slate-100 transition-colors">
            Cancel
        </a>
    </div>
</form>

@endsection

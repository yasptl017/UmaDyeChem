@extends('layouts.admin')

@section('title', $listing->exists ? 'Edit ' . $listing->title : 'Add New Job Listing')
@section('page_title', $listing->exists ? 'Edit Job Listing' : 'Add New Job Listing')
@section('page_subtitle', 'Define the role, responsibilities, and requirements for this position.')

@section('header_actions')
    <a href="{{ route('admin.careers.index') }}" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-700 hover:bg-slate-100 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to Careers
    </a>
@endsection

@section('content')

<form action="{{ $listing->exists ? route('admin.careers.update', $listing->id) : route('admin.careers.store') }}" method="POST" class="space-y-6">
    @csrf
    @if($listing->exists)
        @method('PUT')
    @endif

    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">1. Job Details</h3>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="sm:col-span-2">
                <label class="block text-xs font-semibold text-slate-700 mb-1">Job Title *</label>
                <input type="text" name="title" value="{{ old('title', $listing->title) }}" required placeholder="e.g. Production Chemist" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Department</label>
                <input type="text" name="department" value="{{ old('department', $listing->department) }}" placeholder="e.g. Production" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">URL Slug (auto if blank)</label>
                <input type="text" name="slug" value="{{ old('slug', $listing->slug) }}" placeholder="e.g. production-chemist" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 font-mono">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Location</label>
                <input type="text" name="location" value="{{ old('location', $listing->location ?? 'Unjha, Gujarat, India') }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Employment Type</label>
                <select name="employment_type" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
                    @foreach(['Full-time', 'Part-time', 'Internship', 'Contract'] as $type)
                        <option value="{{ $type }}" {{ old('employment_type', $listing->employment_type) == $type ? 'selected' : '' }}>{{ $type }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Experience Level</label>
                <input type="text" name="experience_level" value="{{ old('experience_level', $listing->experience_level) }}" placeholder="e.g. 2-5 Years" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Job Description</label>
            <textarea name="description" rows="4" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">{{ old('description', $listing->description) }}</textarea>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Key Responsibilities (one per line)</label>
                <textarea name="responsibilities" rows="5" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">{{ old('responsibilities', $listing->responsibilities) }}</textarea>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Requirements / Qualifications (one per line)</label>
                <textarea name="requirements" rows="5" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">{{ old('requirements', $listing->requirements) }}</textarea>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">2. Visibility</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="flex items-center gap-2 pt-4">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $listing->is_active ?? true) ? 'checked' : '' }} class="rounded border-slate-300 text-brand-700 focus:ring-0">
                <label for="is_active" class="text-xs font-bold text-slate-800 cursor-pointer">Open / Active on Website</label>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Display Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $listing->sort_order ?? 0) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit" class="px-6 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
            <i class="fa-solid fa-floppy-disk"></i> Save Job Listing
        </button>
        <a href="{{ route('admin.careers.index') }}" class="px-4 py-2.5 rounded-xl border border-slate-300 text-xs font-semibold text-slate-600 hover:bg-slate-100 transition-colors">
            Cancel
        </a>
    </div>
</form>

@endsection

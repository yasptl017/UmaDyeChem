@extends('layouts.admin')

@section('title', $faq->exists ? 'Edit FAQ' : 'Add New FAQ')
@section('page_title', $faq->exists ? 'Edit FAQ' : 'Add New FAQ')
@section('page_subtitle', 'Manage questions and answers shown on the public FAQ page.')

@section('header_actions')
    <a href="{{ route('admin.faqs.index') }}" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-700 hover:bg-slate-100 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to FAQs
    </a>
@endsection

@section('content')

<form action="{{ $faq->exists ? route('admin.faqs.update', $faq->id) : route('admin.faqs.store') }}" method="POST" class="space-y-6">
    @csrf
    @if($faq->exists)
        @method('PUT')
    @endif

    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Question *</label>
            <input type="text" name="question" value="{{ old('question', $faq->question) }}" required placeholder="e.g. What packaging sizes are available?" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Answer *</label>
            <textarea name="answer" rows="5" required class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">{{ old('answer', $faq->answer) }}</textarea>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Category</label>
                <input type="text" name="category" value="{{ old('category', $faq->category ?? 'General') }}" placeholder="e.g. Products, Shipping, General" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Display Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $faq->sort_order ?? 0) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div class="flex items-center gap-2 pt-6">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $faq->is_active ?? true) ? 'checked' : '' }} class="rounded border-slate-300 text-brand-700 focus:ring-0">
                <label for="is_active" class="text-xs font-bold text-slate-800 cursor-pointer">Active on Website</label>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit" class="px-6 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
            <i class="fa-solid fa-floppy-disk"></i> Save FAQ
        </button>
        <a href="{{ route('admin.faqs.index') }}" class="px-4 py-2.5 rounded-xl border border-slate-300 text-xs font-semibold text-slate-600 hover:bg-slate-100 transition-colors">
            Cancel
        </a>
    </div>
</form>

@endsection

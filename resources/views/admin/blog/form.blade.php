@extends('layouts.admin')

@section('title', $post->exists ? 'Edit ' . $post->title : 'Add New Blog Post')
@section('page_title', $post->exists ? 'Edit Blog Post' : 'Add New Blog Post')
@section('page_subtitle', 'Write and publish company news and chemical industry insights.')

@section('header_actions')
    <a href="{{ route('admin.blog.index') }}" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-700 hover:bg-slate-100 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to Blog
    </a>
@endsection

@section('content')

<form action="{{ $post->exists ? route('admin.blog.update', $post->id) : route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if($post->exists)
        @method('PUT')
    @endif

    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">1. Post Details</h3>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="sm:col-span-2">
                <label class="block text-xs font-semibold text-slate-700 mb-1">Post Title *</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}" required placeholder="e.g. 5 Industrial Uses of Ammonium Bisulphite" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Category</label>
                <input type="text" name="category" value="{{ old('category', $post->category) }}" placeholder="e.g. Industry Insights" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">URL Slug (leave blank to auto-generate)</label>
                <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" placeholder="e.g. uses-of-ammonium-bisulphite" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 font-mono">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Author Name</label>
                <input type="text" name="author_name" value="{{ old('author_name', $post->author_name ?? 'Uma Dye Chem') }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Featured Image</label>
            <input type="file" name="featured_image" accept="image/*" class="w-full text-xs">
            @if($post->featured_image)
                <img src="{{ asset('storage/' . $post->featured_image) }}" class="h-20 mt-2 rounded-lg border border-slate-200">
            @endif
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Excerpt (short summary for listing cards)</label>
            <textarea name="excerpt" rows="2" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Full Content (HTML supported)</label>
            <textarea name="content" rows="12" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 font-mono">{{ old('content', $post->content) }}</textarea>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">2. Publishing & SEO</h3>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="flex items-center gap-2 pt-4">
                <input type="hidden" name="is_published" value="0">
                <input type="checkbox" name="is_published" id="is_published" value="1" {{ old('is_published', $post->is_published ?? true) ? 'checked' : '' }} class="rounded border-slate-300 text-brand-700 focus:ring-0">
                <label for="is_published" class="text-xs font-bold text-slate-800 cursor-pointer">Published</label>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Publish Date</label>
                <input type="date" name="published_at" value="{{ old('published_at', $post->published_at?->format('Y-m-d')) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">SEO Meta Title</label>
                <input type="text" name="meta_title" value="{{ old('meta_title', $post->meta_title) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">SEO Meta Keywords</label>
                <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $post->meta_keywords) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">SEO Meta Description</label>
            <textarea name="meta_description" rows="2" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">{{ old('meta_description', $post->meta_description) }}</textarea>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit" class="px-6 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
            <i class="fa-solid fa-floppy-disk"></i> Save Blog Post
        </button>
        <a href="{{ route('admin.blog.index') }}" class="px-4 py-2.5 rounded-xl border border-slate-300 text-xs font-semibold text-slate-600 hover:bg-slate-100 transition-colors">
            Cancel
        </a>
    </div>

</form>

@endsection

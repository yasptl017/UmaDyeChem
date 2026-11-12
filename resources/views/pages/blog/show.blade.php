@extends('layouts.app')

@section('title', ($post->meta_title ?: $post->title . ' | Uma Dye Chem Blog'))
@section('meta_description', ($post->meta_description ?: $post->excerpt))
@section('meta_keywords', ($post->meta_keywords))

@section('content')

<!-- Breadcrumb Bar -->
<div class="bg-slate-100 border-b border-slate-200 text-xs py-3 text-slate-600">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-brand-700">Home</a>
        <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
        <a href="{{ route('blog.index') }}" class="hover:text-brand-700">Blog</a>
        <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
        <span class="text-slate-900 font-semibold truncate">{{ $post->title }}</span>
    </div>
</div>

<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
            @if($post->category)
                <span class="font-bold px-2.5 py-0.5 rounded-full bg-brand-50 text-brand-700 uppercase tracking-wide">{{ $post->category }}</span>
            @endif
            <span>{{ $post->published_at?->format('d M Y') }}</span>
            <span>&bull;</span>
            <span>By {{ $post->author_name }}</span>
        </div>

        <h1 class="text-2xl sm:text-3xl font-extrabold font-display text-navy-900 mb-6">
            {{ $post->title }}
        </h1>

        @if($post->featured_image)
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto rounded-2xl border border-slate-200 mb-8">
        @endif

        <div class="prose prose-slate max-w-none text-sm leading-relaxed text-slate-700">
            {!! $post->content !!}
        </div>
    </div>
</section>

@if($relatedPosts->count())
<section class="py-14 bg-slate-50 border-t border-slate-200">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-xl font-bold font-display text-navy-900 mb-6">More Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($relatedPosts as $related)
                <div class="bg-white rounded-2xl border border-slate-200 shadow-xs p-5">
                    <h3 class="font-bold text-slate-900 text-sm mb-2">
                        <a href="{{ route('blog.show', $related->slug) }}" class="hover:text-brand-700">{{ $related->title }}</a>
                    </h3>
                    <p class="text-xs text-slate-500 line-clamp-2">{{ $related->excerpt }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

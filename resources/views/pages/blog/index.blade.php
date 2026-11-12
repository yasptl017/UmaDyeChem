@extends('layouts.app')

@section('title', 'Blog & Industry Insights | Uma Dye Chem')
@section('meta_description', 'Read company news, chemical industry insights, and technical articles from Uma Dye Chem, a leading Ammonium Bisulphite manufacturer in Gujarat, India.')

@section('content')

<!-- Header Banner -->
<section class="bg-navy-950 text-white py-14 border-b border-navy-800">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-400 text-xs font-semibold mb-3">
                <i class="fa-solid fa-newspaper"></i> Company News & Insights
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-display text-white">
                Blog & Industry Insights
            </h1>
            <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                Technical articles, chemical industry trends, and the latest news from Uma Dye Chem's manufacturing operations.
            </p>
        </div>
    </div>
</section>

<section class="py-14 bg-slate-50">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden flex flex-col product-card-hover">
                    <a href="{{ route('blog.show', $post->slug) }}" class="block h-44 bg-slate-100 overflow-hidden">
                        @if($post->featured_image)
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-300">
                                <i class="fa-solid fa-flask text-4xl"></i>
                            </div>
                        @endif
                    </a>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 text-[11px] text-slate-500 mb-2">
                            @if($post->category)
                                <span class="font-bold px-2.5 py-0.5 rounded-full bg-brand-50 text-brand-700 uppercase tracking-wide">{{ $post->category }}</span>
                            @endif
                            <span>{{ $post->published_at?->format('d M Y') }}</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">
                            <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-brand-700 transition-colors">{{ $post->title }}</a>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed mb-4 line-clamp-3 flex-grow">
                            {{ $post->excerpt }}
                        </p>
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-xs font-bold text-brand-700 hover:text-brand-900 flex items-center gap-1.5">
                            <span>Read Article</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 bg-white rounded-2xl border border-slate-200 p-8">
                    <i class="fa-solid fa-newspaper text-4xl text-slate-300 mb-3"></i>
                    <h3 class="text-lg font-bold text-slate-700">No blog posts yet</h3>
                    <p class="text-slate-500 text-xs mt-1">Check back soon for industry insights and company news.</p>
                </div>
            @endforelse
        </div>

        @if($posts->hasPages())
            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</section>

@endsection

@extends('layouts.app')

@section('title', $listing->title . ' | Careers at Uma Dye Chem')
@section('meta_description', $listing->description ?: ($listing->title . ' job opening at Uma Dye Chem, Unjha, Gujarat.'))

@section('content')

<!-- Breadcrumb Bar -->
<div class="bg-slate-100 border-b border-slate-200 text-xs py-3 text-slate-600">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-brand-700">Home</a>
        <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
        <a href="{{ route('careers.index') }}" class="hover:text-brand-700">Careers</a>
        <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
        <span class="text-slate-900 font-semibold truncate">{{ $listing->title }}</span>
    </div>
</div>

<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center gap-2 mb-4">
            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-brand-50 text-brand-700 uppercase tracking-wide">{{ $listing->department ?? 'General' }}</span>
            <span class="text-[11px] font-semibold px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700">{{ $listing->employment_type }}</span>
            @if($listing->experience_level)
                <span class="text-[11px] font-semibold px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-600">{{ $listing->experience_level }} Experience</span>
            @endif
        </div>

        <h1 class="text-2xl sm:text-3xl font-extrabold font-display text-navy-900 mb-3">
            {{ $listing->title }}
        </h1>
        <p class="text-sm text-slate-500 flex items-center gap-1.5 mb-8">
            <i class="fa-solid fa-location-dot text-brand-400"></i> {{ $listing->location }}
        </p>

        @if($listing->description)
            <p class="text-sm text-slate-700 leading-relaxed mb-8">{{ $listing->description }}</p>
        @endif

        @if(count($listing->responsibilities_list))
            <div class="mb-8">
                <h2 class="text-base font-bold text-navy-900 mb-3">Key Responsibilities</h2>
                <ul class="space-y-2 text-sm text-slate-700">
                    @foreach($listing->responsibilities_list as $item)
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-brand-600 mt-1 text-xs"></i>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(count($listing->requirements_list))
            <div class="mb-10">
                <h2 class="text-base font-bold text-navy-900 mb-3">Requirements & Qualifications</h2>
                <ul class="space-y-2 text-sm text-slate-700">
                    @foreach($listing->requirements_list as $item)
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-brand-600 mt-1 text-xs"></i>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-brand-50 border border-brand-200 rounded-2xl p-6 text-center">
            <h3 class="font-bold text-navy-900 mb-2">Interested in this role?</h3>
            <p class="text-sm text-slate-600 mb-4">Send your resume and we'll get back to you.</p>
            <a href="mailto:umadyechem.industries@gmail.com?subject=Job%20Application%3A%20{{ urlencode($listing->title) }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-semibold text-sm rounded-xl shadow-md transition-colors">
                <i class="fa-solid fa-paper-plane text-xs"></i> Apply via Email
            </a>
        </div>
    </div>
</section>

@endsection

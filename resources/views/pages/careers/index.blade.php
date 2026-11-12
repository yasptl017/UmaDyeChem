@extends('layouts.app')

@section('title', 'Careers & Job Openings | Uma Dye Chem')
@section('meta_description', 'Explore current job openings at Uma Dye Chem, a leading chemical manufacturer in Unjha, Gujarat. Build your career in chemical manufacturing.')

@section('content')

<!-- Header Banner -->
<section class="bg-navy-950 text-white py-14 border-b border-navy-800">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-400 text-xs font-semibold mb-3">
                <i class="fa-solid fa-briefcase"></i> Join Our Team
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-display text-white">
                Careers at Uma Dye Chem
            </h1>
            <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                Build your career with a 40+ year old chemical manufacturer trusted by industries across the globe. Explore our current openings below.
            </p>
        </div>
    </div>
</section>

<section class="py-14 bg-slate-50">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @forelse($listings as $listing)
                <div class="bg-white rounded-2xl border border-slate-200 shadow-xs p-6 product-card-hover flex flex-col">
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-brand-50 text-brand-700 uppercase tracking-wide">
                            {{ $listing->department ?? 'General' }}
                        </span>
                        <span class="text-[11px] font-semibold px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700">
                            {{ $listing->employment_type }}
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">
                        <a href="{{ route('careers.show', $listing->slug) }}" class="hover:text-brand-700 transition-colors">{{ $listing->title }}</a>
                    </h3>
                    <p class="text-slate-600 text-xs leading-relaxed mb-4 line-clamp-2 flex-grow">
                        {{ $listing->description }}
                    </p>
                    <div class="flex items-center justify-between text-xs text-slate-500 pt-4 border-t border-slate-100">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-location-dot text-brand-400"></i> {{ $listing->location }}</span>
                        <a href="{{ route('careers.show', $listing->slug) }}" class="font-bold text-brand-700 hover:text-brand-900 flex items-center gap-1.5">
                            View Details <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            @empty
                <div class="md:col-span-2 text-center py-12 bg-white rounded-2xl border border-slate-200 p-8">
                    <i class="fa-solid fa-briefcase text-4xl text-slate-300 mb-3"></i>
                    <h3 class="text-lg font-bold text-slate-700">No open positions right now</h3>
                    <p class="text-slate-500 text-xs mt-1">Check back soon, or send us your resume via the Contact page.</p>
                    <a href="{{ route('contact') }}" class="inline-block mt-4 px-4 py-2 bg-brand-700 text-white text-xs font-semibold rounded-lg">
                        Contact Us
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</section>

@endsection

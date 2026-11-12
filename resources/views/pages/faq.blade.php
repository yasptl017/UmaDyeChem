@extends('layouts.app')

@section('title', 'Frequently Asked Questions | Uma Dye Chem')
@section('meta_description', 'Answers to common questions about Uma Dye Chem\'s Ammonium Bisulphite products, packaging, shipping, quality standards, and ordering process.')

@section('content')

<!-- Header Banner -->
<section class="bg-navy-950 text-white py-14 border-b border-navy-800">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-400 text-xs font-semibold mb-3">
                <i class="fa-solid fa-circle-question"></i> Help Center
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-display text-white">
                Frequently Asked Questions
            </h1>
            <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                Quick answers about our chemical products, packaging, quality standards, and ordering process.
            </p>
        </div>
    </div>
</section>

<section class="py-14 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        @forelse($faqs as $category => $items)
            <div>
                <h2 class="text-lg font-bold font-display text-navy-900 mb-4 border-l-2 border-brand-500 pl-3">
                    {{ $category }}
                </h2>
                <div class="space-y-3">
                    @foreach($items as $faq)
                        <details class="group bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
                            <summary class="flex items-center justify-between gap-4 px-5 py-4 cursor-pointer font-semibold text-sm text-slate-800 hover:text-brand-700">
                                <span>{{ $faq->question }}</span>
                                <i class="fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-200 group-open:rotate-180"></i>
                            </summary>
                            <div class="px-5 pb-4 text-sm text-slate-600 leading-relaxed">
                                {{ $faq->answer }}
                            </div>
                        </details>
                    @endforeach
                </div>
            </div>
        @empty
            <div class="text-center py-12 bg-white rounded-2xl border border-slate-200 p-8">
                <i class="fa-solid fa-circle-question text-4xl text-slate-300 mb-3"></i>
                <h3 class="text-lg font-bold text-slate-700">No FAQs published yet</h3>
                <p class="text-slate-500 text-xs mt-1">Please reach out via our Contact page for any questions.</p>
            </div>
        @endforelse

        <div class="bg-brand-50 border border-brand-200 rounded-2xl p-6 text-center">
            <p class="text-sm text-slate-700 mb-3">Still have a question about our products or services?</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-semibold text-sm rounded-xl shadow-md transition-colors">
                <i class="fa-solid fa-paper-plane text-xs"></i> Contact Our Team
            </a>
        </div>
    </div>
</section>

@endsection

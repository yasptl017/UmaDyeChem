@extends('layouts.app')

@section('title', 'Quality Assurance & Laboratory Standards | Uma Dye Chem')
@section('meta_description', 'Discover Uma Dye Chem\'s uncompromising quality control standards, in-house analytical lab testing, and batch COA verification protocols.')

@section('content')

<!-- Header Banner -->
<section class="bg-navy-950 text-white py-14 border-b border-navy-800">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-400 text-xs font-semibold mb-3">
                <i class="fa-solid fa-vial-circle-check"></i> Quality First Policy
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-display text-white">
                Quality Assurance & Laboratory Protocols
            </h1>
            <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                Chemical consistency is the cornerstone of trust. At Uma Dye Chem, every batch of Ammonium Bisulphite undergoes multi-stage laboratory verification before release.
            </p>
        </div>
    </div>
</section>

<!-- Quality Policy Overview -->
<section class="py-16 bg-white">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-5">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                    Quality Commitment
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy-900 leading-tight">
                    Zero Compromise on Chemical Purity & Batch Consistency
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    At <strong>Uma Dye Chem</strong>, quality control is not merely a final inspection step—it is embedded into every stage of synthesis, starting with high-purity sulfur dioxide, anhydrous ammonia gas, and treated process water.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Our dedicated in-house analytical testing laboratory at Unava, Gujarat operates under strict standard operating procedures (SOPs). Every batch produced is assigned a unique tracking number, analyzed against tight tolerance bands, and archived for full traceability.
                </p>
            </div>

            <div class="lg:col-span-6">
                <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200 space-y-4">
                    <h3 class="text-lg font-bold text-navy-900 border-b border-slate-200 pb-3">The Uma Dye Chem Quality Pledge</h3>
                    
                    <div class="space-y-3 text-xs text-slate-700">
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                            <span><strong>100% Pre-Dispatch Testing:</strong> No tanker or container leaves our premises without an approved Certificate of Analysis.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                            <span><strong>Low Heavy Metal Control:</strong> Specialized purification for food-grade and catalyst solutions ensures minimal iron and lead traces.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                            <span><strong>12-Month Sample Retention:</strong> Representative sealed samples of every batch are stored in our climate-controlled sample bank.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                            <span><strong>Tamper-Evident Packaging:</strong> Drums and IBC totes are sealed with individual security tags to prevent contamination in transit.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Laboratory Testing Regimen -->
<section class="py-16 bg-slate-50 border-t border-slate-200">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-cyan-600 bg-cyan-50 px-3 py-1 rounded-full border border-cyan-200">
                Analytical Capabilities
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy-900 mt-3">
                Laboratory Testing Regimen
            </h2>
            <p class="text-slate-600 text-sm mt-2">
                Standard analytical methods executed on all outgoing batches.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center text-lg font-bold">
                    <i class="fa-solid fa-flask"></i>
                </div>
                <h4 class="font-bold text-slate-900 text-sm">Iodometric Titration</h4>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Determines exact active assay and SO2 equivalent using standardized iodine volumetric titration against starch indicator.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center text-lg font-bold">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>
                <h4 class="font-bold text-slate-900 text-sm">Specific Gravity & Density</h4>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Measured using high-precision digital density meters and calibrated hydrometers corrected to 20°C standard reference temperature.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg font-bold">
                    <i class="fa-solid fa-water"></i>
                </div>
                <h4 class="font-bold text-slate-900 text-sm">pH Potentiometry</h4>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Dual-junction electrode pH meters calibrated with NIST buffers ensure pH is controlled between 4.0 and 5.5 to avoid SO2 outgassing.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-lg font-bold">
                    <i class="fa-solid fa-atom"></i>
                </div>
                <h4 class="font-bold text-slate-900 text-sm">Trace Metal & Impurities</h4>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Spectrophotometric screening of Iron (Fe &lt; 5 ppm) and heavy metals (Pb, As) for Food Grade and sensitive catalysis applications.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Certificate of Analysis Request Callout -->
<section class="py-14 bg-white border-t border-slate-200">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-2xl font-bold font-display text-navy-900">Need a Sample Certificate of Analysis (COA)?</h3>
        <p class="text-slate-600 text-xs sm:text-sm mt-2 max-w-xl mx-auto">
            We provide comprehensive batch COA, Safety Data Sheets (SDS/MSDS), and technical documentation for any of our 10 products upon request.
        </p>
        <div class="mt-6 flex justify-center gap-4">
            <a href="{{ route('contact') }}" class="px-6 py-3 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-all">
                Request COA & Specifications
            </a>
        </div>
    </div>
</section>

@endsection


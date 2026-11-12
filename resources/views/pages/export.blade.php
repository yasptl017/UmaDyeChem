@extends('layouts.app')

@section('title', 'Global Export Network & Logistics | Uma Dye Chem')
@section('meta_description', 'Uma Dye Chem exports Ammonium Bisulphite solutions globally through Mundra, Kandla, and Nhava Sheva ports in UN-approved drums and IBC totes.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css">
    <style>
        #export-world-map { height: 460px; }
        #export-world-map svg { width: 100%; height: 100%; }
        .jvm-tooltip { background-color: #0c61dd !important; font-family: inherit; font-size: 0.8125rem; padding: 6px 10px; border-radius: 6px; }
        .jvm-zoom-btn { background-color: #0c61dd !important; }
        /* Highlight exported countries in brand blue, driven dynamically from the admin-managed list */
        @foreach($countries as $country)
        #export-world-map .jvm-region[data-code="{{ $country->country_code }}"] {
            fill: #0c61dd !important;
        }
        #export-world-map .jvm-region[data-code="{{ $country->country_code }}"]:hover {
            fill: #104eb3 !important;
        }
        @endforeach
    </style>
@endpush

@section('content')

<!-- Header Banner -->
<section class="bg-navy-950 text-white py-14 border-b border-navy-800">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-400 text-xs font-semibold mb-3">
                <i class="fa-solid fa-earth-americas"></i> International Shipping
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-display text-white">
                Global Export & Shipping Network
            </h1>
            <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                Positioned strategically in Gujarat, India—minutes from the national highway artery and close to India's largest container seaports for rapid maritime transit across the globe.
            </p>
        </div>
    </div>
</section>

<!-- Interactive World Export Map -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                Worldwide Reach
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy-900 mt-3">
                Countries We Currently Export To
            </h2>
            <p class="text-slate-600 text-sm mt-2">
                Hover over a highlighted country to see where our Ammonium Bisulphite and Oxygen Scavenger solutions are delivered today.
            </p>
        </div>

        <div class="bg-slate-50 rounded-3xl border border-slate-200 p-4 sm:p-6">
            <div id="export-world-map"></div>
        </div>

        @if($countries->count())
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($countries->groupBy('region') as $region => $items)
                    <div>
                        <h3 class="text-xs font-bold uppercase tracking-wider text-brand-700 mb-3 border-l-2 border-brand-500 pl-3">
                            {{ $region ?: 'Other' }}
                        </h3>
                        <ul class="space-y-2 text-sm text-slate-600">
                            @foreach($items as $item)
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-brand-600"></span> {{ $item->country_name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

<!-- Export Advantage Section -->
<section class="py-16 bg-white">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-5">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                    Logistical Advantage
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy-900 leading-tight">
                    Fast Sea Freight Dispatches from Gujarat's Gateway Ports
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Our Unava (Mehsana) plant enjoys ideal connectivity to India's premier deep-water container gateways: <strong>Mundra Port, Kandla Port, Pipavav Port, and Nhava Sheva (JNPT)</strong>.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed">
                    With typical plant-to-port road haulage completed within 24 to 36 hours, export containers are loaded, sealed, and put on board international container vessels with minimal dwell time.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-2 text-xs">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <div class="font-bold text-slate-900 text-sm">Mundra Port</div>
                        <div class="text-slate-500 mt-1">Direct ocean links to Middle East, Europe & Southeast Asia</div>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <div class="font-bold text-slate-900 text-sm">Nhava Sheva (JNPT)</div>
                        <div class="text-slate-500 mt-1">High frequency sailings to Americas, Africa & Mediterranean</div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="bg-navy-900 text-white rounded-3xl p-8 space-y-6 shadow-xl border border-slate-800">
                    <h3 class="text-lg font-bold border-b border-slate-800 pb-3">Standard Container Stuffing Formats</h3>
                    
                    <div class="space-y-4 text-xs text-slate-300">
                        <div class="p-4 rounded-xl bg-navy-950 border border-slate-800 flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-brand-600/30 text-cyan-400 flex items-center justify-center text-lg font-bold flex-shrink-0">
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </div>
                            <div>
                                <div class="font-bold text-white text-sm">1000 Litre IBC Totes (18 to 20 IBCs per 20' FCL)</div>
                                <div class="text-slate-400 mt-1">Approx. 24.5 to 26 Metric Tons net per container. Heavy-duty composite IBCs with UN certification and palletized base.</div>
                            </div>
                        </div>

                        <div class="p-4 rounded-xl bg-navy-950 border border-slate-800 flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-brand-600/30 text-cyan-400 flex items-center justify-center text-lg font-bold flex-shrink-0">
                                <i class="fa-solid fa-drum"></i>
                            </div>
                            <div>
                                <div class="font-bold text-white text-sm">250 kg Virgin HDPE Drums (80 Drums per 20' FCL)</div>
                                <div class="text-slate-400 mt-1">20.0 Metric Tons net per 20' container. Palletized and stretch-wrapped or loose loaded with heavy dunnage bags for cargo safety.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Global Export Documentation -->
<section class="py-16 bg-slate-50 border-t border-slate-200">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                Documentation & Compliance
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy-900 mt-3">
                Full International Trade Documentation
            </h2>
            <p class="text-slate-600 text-sm mt-2">
                Our export documentation team coordinates directly with international forwarders and customs brokers to provide seamless clearance.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                <i class="fa-solid fa-file-contract text-2xl text-brand-700 mb-2"></i>
                <div class="font-bold text-xs text-slate-900">Certificate of Analysis</div>
                <div class="text-[11px] text-slate-500 mt-0.5">Batch-wise laboratory report</div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                <i class="fa-solid fa-stamp text-2xl text-brand-700 mb-2"></i>
                <div class="font-bold text-xs text-slate-900">Certificate of Origin</div>
                <div class="text-[11px] text-slate-500 mt-0.5">Chamber of Commerce legalized</div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                <i class="fa-solid fa-file-shield text-2xl text-brand-700 mb-2"></i>
                <div class="font-bold text-xs text-slate-900">GHS Safety Data Sheet</div>
                <div class="text-[11px] text-slate-500 mt-0.5">Global SDS / MSDS compliance</div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                <i class="fa-solid fa-file-invoice-dollar text-2xl text-brand-700 mb-2"></i>
                <div class="font-bold text-xs text-slate-900">Commercial Invoices & BL</div>
                <div class="text-[11px] text-slate-500 mt-0.5">FOB / CIF / CFR terms supported</div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof jsVectorMap === 'undefined' || !document.getElementById('export-world-map')) return;

            const exportCountries = @json($countries->mapWithKeys(fn($c) => [$c->country_code => $c->country_name]));

            new jsVectorMap({
                selector: '#export-world-map',
                map: 'world',
                zoomButtons: true,
                zoomOnScroll: false,
                regionsSelectable: false,
                regionStyle: {
                    initial: { fill: '#CBD5E1', stroke: '#ffffff', strokeWidth: 0.5 },
                    hover: { fill: '#8ed2ff' },
                },
                onRegionTooltipShow: function (event, tooltip, code) {
                    if (exportCountries[code]) {
                        tooltip.text(exportCountries[code] + ' &bull; Active Export Market', true);
                    }
                },
            });
        });
    </script>
@endpush

@endsection


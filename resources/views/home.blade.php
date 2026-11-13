@extends('layouts.app')

@section('title', 'Uma Dye Chem | Ammonium Bisulphite Manufacturer in Gujarat, India (Est. 1984)')
@section('meta_description', 'Uma Dye Chem is a leading Indian manufacturer & exporter of Ammonium Bisulphite 70%, 65%, 60%, 40%, Food Grade, Oxygen Scavenger, and Nickel/Cobalt catalyzed solutions based in Unjha, Gujarat.')

@section('content')

<!-- Hero Section -->
<section class="relative hero-pattern text-white overflow-hidden py-20 lg:py-28 border-b border-navy-800">
    <div class="absolute inset-0 bg-gradient-to-r from-navy-950/90 via-navy-900/80 to-transparent pointer-events-none"></div>
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Badges -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/80 border border-cyan-500/30 text-cyan-300 text-xs font-semibold tracking-wide shadow-inner">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                    <span>PIONEER CHEMICAL MANUFACTURER &bull; GUJARAT, INDIA</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-display tracking-tight text-white leading-tight">
                    High Purity <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-brand-300 to-white">Ammonium Bisulphite</span> & Specialty Solutions
                </h1>

                <!-- Subtitle -->
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl leading-relaxed">
                    Trusted partner since <strong>1984</strong> for global oilfield operations, municipal water treatment, food caramel coloring, and textile manufacturing. Delivering high-assay solutions in bulk tankers, IBC totes, and HDPE drums.
                </p>

                <!-- Action Buttons -->
                <div class="pt-2 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                    <a href="{{ route('products.index') }}" class="px-7 py-3.5 bg-gradient-to-r from-brand-600 to-brand-700 hover:from-brand-700 hover:to-brand-800 text-white font-bold text-sm rounded-xl shadow-lg shadow-brand-900/50 hover:shadow-brand-700/50 transition-all flex items-center gap-2.5">
                        <i class="fa-solid fa-flask"></i> Explore All 10 Products
                    </a>
                    <a href="{{ route('contact') }}" class="px-7 py-3.5 bg-white/10 hover:bg-white/20 text-white border border-white/20 font-semibold text-sm rounded-xl transition-all flex items-center gap-2">
                        <i class="fa-solid fa-file-invoice"></i> Request Commercial Quote
                    </a>
                </div>

                <!-- Trust Points -->
                <div class="pt-6 grid grid-cols-3 gap-4 border-t border-slate-700/60 max-w-lg mx-auto lg:mx-0">
                    <div>
                        <div class="text-2xl font-bold font-display text-cyan-400">40+</div>
                        <div class="text-xs text-slate-400 font-medium">Years in Business</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold font-display text-brand-400">100%</div>
                        <div class="text-xs text-slate-400 font-medium">Quality Testing</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold font-display text-amber-400">15+</div>
                        <div class="text-xs text-slate-400 font-medium">Export Countries</div>
                    </div>
                </div>
            </div>

            <!-- Hero Graphic / Highlight Card -->
            <div class="lg:col-span-5">
                <div class="bg-gradient-to-b from-navy-800/90 to-navy-900/90 backdrop-blur-md rounded-2xl border border-cyan-500/20 p-6 sm:p-8 shadow-2xl relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-44 h-44 rounded-full bg-cyan-500/10 blur-2xl pointer-events-none"></div>
                    
                    <div class="flex items-center justify-between pb-5 border-b border-slate-700/60">
                        <div>
                            <span class="text-xs font-semibold uppercase tracking-wider text-cyan-400">Flagship Manufacturing</span>
                            <h3 class="text-xl font-bold text-white">Ammonium Bisulphite 70%</h3>
                        </div>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-brand-500/20 text-cyan-300 border border-cyan-400/30">
                            Highest Assay
                        </span>
                    </div>

                    <div class="py-5 space-y-3.5 text-xs text-slate-300">
                        <div class="flex justify-between items-center py-1.5 border-b border-slate-800">
                            <span class="text-slate-400">Chemical Formula</span>
                            <span class="font-mono font-semibold text-white">NH₄HSO₃</span>
                        </div>
                        <div class="flex justify-between items-center py-1.5 border-b border-slate-800">
                            <span class="text-slate-400">CAS Number</span>
                            <span class="font-mono text-cyan-300">10192-30-0</span>
                        </div>
                        <div class="flex justify-between items-center py-1.5 border-b border-slate-800">
                            <span class="text-slate-400">Active Assay</span>
                            <span class="font-bold text-emerald-400">70.0% ± 2.0% (w/w)</span>
                        </div>
                        <div class="flex justify-between items-center py-1.5 border-b border-slate-800">
                            <span class="text-slate-400">Specific Gravity @ 20°C</span>
                            <span class="text-white">1.38 – 1.42</span>
                        </div>
                        <div class="flex justify-between items-center py-1.5 border-b border-slate-800">
                            <span class="text-slate-400">Iron Content (Fe)</span>
                            <span class="text-emerald-300 font-semibold">&lt; 5 ppm (Ultra-Low)</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="{{ route('products.show', 'ammonium-bisulphite-70') }}" class="w-full inline-flex justify-center items-center gap-2 py-3 bg-cyan-600 hover:bg-cyan-500 text-white font-bold text-xs rounded-xl shadow-md transition-colors">
                            <span>View Full Specifications & COA</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Uma Dye Chem Highlights -->
<section class="py-12 bg-white border-b border-slate-200">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center flex-shrink-0 text-xl shadow-xs">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-sm">40+ Years Legacy</h3>
                    <p class="text-xs text-slate-500 mt-1">Established in 1984 in Unjha, Gujarat with four decades of chemical synthesis authority.</p>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 text-xl shadow-xs">
                    <i class="fa-solid fa-vial-circle-check"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-sm">Stringent Quality Control</h3>
                    <p class="text-xs text-slate-500 mt-1">Dedicated in-house laboratory verifying active assay, SO2 content, and heavy metals batch-wise.</p>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center flex-shrink-0 text-xl shadow-xs">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-sm">Bulk Logistics & Packing</h3>
                    <p class="text-xs text-slate-500 mt-1">Prompt dispatches in 250kg HDPE drums, 1000L IBC totes, and dedicated stainless steel tankers.</p>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0 text-xl shadow-xs">
                    <i class="fa-solid fa-earth-americas"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-sm">Global Export Network</h3>
                    <p class="text-xs text-slate-500 mt-1">Supplying chemical importers, oilfield service companies & distributors across the globe.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                    Product Portfolio
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy-900 mt-3">
                    Our Core Chemical Formulations
                </h2>
                <p class="text-slate-600 text-sm max-w-2xl mt-2">
                    Manufactured under strict formulation parameters to ensure consistent concentration, minimal impurities, and peak industrial performance.
                </p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-700 hover:text-brand-900">
                    <span>View All 10 Products</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts as $product)
                <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs product-card-hover flex flex-col justify-between">
                    <div class="p-6">
                        <!-- Category Badge & CAS -->
                        <div class="flex items-center justify-between gap-2 mb-3">
                            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full bg-slate-100 text-slate-700 uppercase tracking-wide">
                                {{ $product->category }}
                            </span>
                            @if($product->cas_number)
                                <span class="text-[11px] font-mono font-medium text-slate-500">
                                    CAS: {{ $product->cas_number }}
                                </span>
                            @endif
                        </div>

                        <!-- Product Title -->
                        <h3 class="text-lg font-bold text-navy-900 mb-2">
                            <a href="{{ route('products.show', $product->slug) }}" class="hover:text-brand-700 transition-colors">
                                {{ $product->name }}
                            </a>
                        </h3>

                        <!-- Short Description -->
                        <p class="text-slate-600 text-xs leading-relaxed mb-4 line-clamp-3">
                            {{ $product->short_description }}
                        </p>

                        <!-- Key Specs Snippet -->
                        <div class="bg-slate-50 rounded-xl p-3 space-y-1.5 text-xs border border-slate-100">
                            @if($product->concentration)
                                <div class="flex justify-between">
                                    <span class="text-slate-500 font-medium">Assay:</span>
                                    <span class="font-bold text-slate-800">{{ $product->concentration }}</span>
                                </div>
                            @endif
                            @if($product->specific_gravity)
                                <div class="flex justify-between">
                                    <span class="text-slate-500 font-medium">Sp. Gravity:</span>
                                    <span class="font-semibold text-slate-800">{{ $product->specific_gravity }}</span>
                                </div>
                            @endif
                            @if($product->ph_value)
                                <div class="flex justify-between">
                                    <span class="text-slate-500 font-medium">pH Range:</span>
                                    <span class="text-slate-700">{{ $product->ph_value }}</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Card Footer Actions -->
                    <div class="px-6 py-4 bg-slate-50/70 border-t border-slate-100 flex items-center justify-between">
                        <a href="{{ route('products.show', $product->slug) }}" class="text-xs font-bold text-brand-700 hover:text-brand-900 flex items-center gap-1.5">
                            <span>Technical Details</span>
                            <i class="fa-solid fa-angle-right text-[11px]"></i>
                        </a>
                        <a href="{{ route('contact', ['product_id' => $product->id]) }}" class="px-3 py-1.5 rounded-lg bg-brand-50 hover:bg-brand-100 text-brand-700 text-xs font-semibold transition-colors">
                            Inquire Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Comprehensive Product Matrix (Quick Access to all 10 Products) -->
<section class="py-16 bg-white border-y border-slate-200">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-cyan-600 bg-cyan-50 px-3 py-1 rounded-full border border-cyan-200">
                Complete Catalogue
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy-900 mt-3">
                Full Spectrum of Ammonium Bisulphite & Scavengers
            </h2>
            <p class="text-slate-600 text-sm mt-2">
                Click any chemical product below for complete technical data sheets, typical analysis, and packing options.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach($allProducts as $p)
                <a href="{{ route('products.show', $p->slug) }}" class="p-4 rounded-xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/40 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="w-8 h-8 rounded-lg bg-brand-100 text-brand-700 flex items-center justify-center text-sm font-bold mb-3 group-hover:bg-brand-700 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-flask"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-xs group-hover:text-brand-700 transition-colors leading-snug">
                            {{ $p->name }}
                        </h4>
                        <p class="text-[11px] text-slate-500 mt-1 line-clamp-2">
                            {{ $p->short_description }}
                        </p>
                    </div>
                    <div class="mt-3 pt-2 border-t border-slate-100 text-[11px] font-semibold text-brand-700 flex items-center justify-between">
                        <span>Details</span>
                        <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>

<!-- Industries Served -->
<section class="py-16 lg:py-24 bg-navy-950 text-white relative overflow-hidden">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 bg-cyan-950 px-3 py-1 rounded-full border border-cyan-800">
                End-Use Applications
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-display text-white mt-3">
                Industries We Power Worldwide
            </h2>
            <p class="text-slate-400 text-sm mt-2">
                Our reducing agents and oxygen scavengers perform critical roles across severe industrial duty cycles.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Industry 1: Oil & Gas -->
            <div class="bg-navy-900/90 rounded-2xl p-6 border border-slate-800 hover:border-cyan-500/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-2xl mb-4">
                    <i class="fa-solid fa-oil-well"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Oil & Gas / Petroleum</h3>
                <p class="text-xs text-slate-400 leading-relaxed mb-4">
                    Deoxygenation of seawater in offshore injection lines, produced water re-injection, hydrostatic testing, and downhole corrosion inhibition.
                </p>
                <div class="text-xs font-semibold text-cyan-400 flex items-center gap-1.5">
                    <span>Key: Ammonium Bisulphite 70%, Nickel/Cobalt Catalyzed</span>
                </div>
            </div>

            <!-- Industry 2: Water Treatment -->
            <div class="bg-navy-900/90 rounded-2xl p-6 border border-slate-800 hover:border-cyan-500/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center text-2xl mb-4">
                    <i class="fa-solid fa-droplet"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Water & Wastewater Treatment</h3>
                <p class="text-xs text-slate-400 leading-relaxed mb-4">
                    Rapid dechlorination of municipal drinking water, industrial effluent discharge, and RO reverse osmosis membrane protection against free chlorine oxidation.
                </p>
                <div class="text-xs font-semibold text-cyan-400 flex items-center gap-1.5">
                    <span>Key: Ammonium Bisulphite 65%, 60%, 40%</span>
                </div>
            </div>

            <!-- Industry 3: Food & Beverage -->
            <div class="bg-navy-900/90 rounded-2xl p-6 border border-slate-800 hover:border-cyan-500/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-400 flex items-center justify-center text-2xl mb-4">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Food Processing & Caramel Color</h3>
                <p class="text-xs text-slate-400 leading-relaxed mb-4">
                    Essential reactant for producing Class III and Class IV Ammonia Caramel Colorings (E150c/E150d) for beverages, soy sauce, and confectionary.
                </p>
                <div class="text-xs font-semibold text-cyan-400 flex items-center gap-1.5">
                    <span>Key: Food Grade Ammonium Bisulphite</span>
                </div>
            </div>

            <!-- Industry 4: Textile & Dyes -->
            <div class="bg-navy-900/90 rounded-2xl p-6 border border-slate-800 hover:border-cyan-500/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center text-2xl mb-4">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Textile Dyeing & Intermediates</h3>
                <p class="text-xs text-slate-400 leading-relaxed mb-4">
                    Antichlor agent after hypochlorite bleaching, reducing agent in vat dyeing, and chemical building block for dye intermediates synthesis.
                </p>
                <div class="text-xs font-semibold text-cyan-400 flex items-center gap-1.5">
                    <span>Key: Ammonium Bisulphite 65%, 60%</span>
                </div>
            </div>

            <!-- Industry 5: Pulp & Paper -->
            <div class="bg-navy-900/90 rounded-2xl p-6 border border-slate-800 hover:border-cyan-500/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-2xl mb-4">
                    <i class="fa-solid fa-scroll"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Pulp & Paper Processing</h3>
                <p class="text-xs text-slate-400 leading-relaxed mb-4">
                    Sulphite pulping of wood chips, lignin dissolution, and post-chlorine bleaching antichlor agent to prevent fiber degradation.
                </p>
                <div class="text-xs font-semibold text-cyan-400 flex items-center gap-1.5">
                    <span>Key: Ammonium Sulphite 40%, ABS 65%</span>
                </div>
            </div>

            <!-- Industry 6: Thermal Power & Boilers -->
            <div class="bg-navy-900/90 rounded-2xl p-6 border border-slate-800 hover:border-cyan-500/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-rose-500/10 text-rose-400 flex items-center justify-center text-2xl mb-4">
                    <i class="fa-solid fa-fire"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Boiler Systems & Steam Generation</h3>
                <p class="text-xs text-slate-400 leading-relaxed mb-4">
                    Dissolved oxygen removal from boiler feedwater, preventing pitting corrosion in economizers, steam drums, and condensate return loops.
                </p>
                <div class="text-xs font-semibold text-cyan-400 flex items-center gap-1.5">
                    <span>Key: Oxygen Scavenger, ABS 70%</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- About Company Section -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                    Corporate Profile
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-display text-navy-900 leading-tight">
                    Four Decades of Excellence in Sulfur Chemical Manufacturing
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Founded in <strong>1984</strong> at Unjha-Unava in Mehsana district, Gujarat, <strong>Uma Dye Chem</strong> has grown from a specialized manufacturer into one of India's prominent producers and global exporters of Ammonium Bisulphite solutions.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Guided by visionary leaders including <strong>Mr. Rameshbhai Patel and Mr. Vishnubhai Patel</strong>, we maintain dedicated production lines with automated reaction monitoring to ensure every liter shipped satisfies rigorous global quality specifications.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <div class="text-lg font-bold text-navy-900">Factory Address</div>
                        <div class="text-xs text-slate-500 mt-1">Survey No. 1283/1291, Mehsana Highway Plant with large bulk tank farm</div>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <div class="text-lg font-bold text-navy-900">Global Reach</div>
                        <div class="text-xs text-slate-500 mt-1">Containerized maritime exports via Mundra, Kandla, and Nhava Sheva ports</div>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-700 hover:text-brand-900">
                        <span>Learn More About Our Facility & Leadership</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="relative bg-gradient-to-tr from-brand-900 to-navy-900 rounded-3xl p-8 sm:p-10 text-white shadow-xl">
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center text-3xl text-cyan-400">
                                <i class="fa-solid fa-microscope"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">In-House QC & Assay Testing</h3>
                                <p class="text-xs text-slate-300">Equipped for iodometric titration, specific gravity, pH & ICP metal traces</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center text-3xl text-brand-400">
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Standardized Packaging</h3>
                                <p class="text-xs text-slate-300">50kg / 250kg virgin HDPE drums, 1000L UN-certified IBCs & Road tankers</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center text-3xl text-amber-400">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Direct Manufacturer Pricing</h3>
                                <p class="text-xs text-slate-300">Eliminate middlemen margins with direct supply from our Gujarat manufacturing facility</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Quick Inquiry Call to Action -->
<section class="py-16 bg-slate-100 border-t border-slate-200">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-navy-900 to-brand-950 rounded-3xl p-8 sm:p-12 shadow-2xl text-white">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <div class="lg:col-span-7 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">
                        Get In Touch With Our Technical Sales Team
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-bold font-display text-white">
                        Require Bulk Samples, COA, or Commercial Quotations?
                    </h2>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        We supply Ammonium Bisulphite in custom concentrations and packaging configurations tailored to your specific project needs. Call our Gujarat sales office or submit an inquiry.
                    </p>
                    <div class="flex flex-wrap items-center gap-6 pt-2 text-xs">
                        <span class="flex items-center gap-2"><i class="fa-solid fa-phone text-cyan-400"></i> +91-2767-255893</span>
                        <span class="flex items-center gap-2"><i class="fa-solid fa-envelope text-cyan-400"></i> umadyechem.industries@gmail.com</span>
                    </div>
                </div>

                <div class="lg:col-span-5 flex flex-col sm:flex-row lg:flex-col gap-3 justify-center">
                    <a href="{{ route('contact') }}" class="px-8 py-4 bg-gradient-to-r from-brand-600 to-cyan-500 hover:from-brand-700 hover:to-cyan-600 text-white font-bold text-center text-sm rounded-xl shadow-lg transition-all">
                        <i class="fa-solid fa-envelope mr-2"></i> Submit Inquiry Online
                    </a>
                    <a href="tel:+912767255893" class="px-8 py-4 bg-white/10 hover:bg-white/20 text-white border border-white/20 font-semibold text-center text-sm rounded-xl transition-all">
                        <i class="fa-solid fa-phone mr-2"></i> Call Sales Desk
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection


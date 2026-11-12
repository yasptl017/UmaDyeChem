@extends('layouts.app')

@section('title', ($product->meta_title ?: $product->name . ' | Uma Dye Chem Gujarat'))
@section('meta_description', ($product->meta_description ?: $product->short_description))
@section('meta_keywords', ($product->meta_keywords ?: $product->name . ', chemical manufacturer, ammonium bisulphite, Uma Dye Chem'))

@section('content')

<!-- Breadcrumb Bar -->
<div class="bg-slate-100 border-b border-slate-200 text-xs py-3 text-slate-600">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-brand-700">Home</a>
        <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
        <a href="{{ route('products.index') }}" class="hover:text-brand-700">Products</a>
        <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
        <span class="text-slate-900 font-semibold truncate">{{ $product->name }}</span>
    </div>
</div>

<!-- Product Header / Overview Hero -->
<section class="bg-navy-950 text-white py-12 lg:py-16 border-b border-navy-800">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <div class="lg:col-span-8 space-y-4">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="text-xs font-bold px-3 py-1 rounded-full bg-cyan-950 text-cyan-400 border border-cyan-800 uppercase tracking-wide">
                        {{ $product->category }}
                    </span>
                    @if($product->grade)
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-slate-800 text-slate-300">
                            Grade: {{ $product->grade }}
                        </span>
                    @endif
                    @if($product->is_featured)
                        <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-amber-500/20 text-amber-300 border border-amber-500/30">
                            <i class="fa-solid fa-star text-[10px]"></i> High Volume Demand
                        </span>
                    @endif
                </div>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-display text-white">
                    {{ $product->name }}
                </h1>

                <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-3xl">
                    {{ $product->short_description }}
                </p>

                <!-- Chemical Identity Badges -->
                <div class="pt-2 flex flex-wrap items-center gap-4 text-xs font-mono">
                    @if($product->cas_number)
                        <div class="bg-slate-900/90 px-3.5 py-2 rounded-xl border border-slate-700 flex items-center gap-2">
                            <span class="text-slate-400">CAS:</span>
                            <span class="text-cyan-300 font-bold">{{ $product->cas_number }}</span>
                        </div>
                    @endif
                    @if($product->molecular_formula)
                        <div class="bg-slate-900/90 px-3.5 py-2 rounded-xl border border-slate-700 flex items-center gap-2">
                            <span class="text-slate-400">Formula:</span>
                            <span class="text-white font-bold">{{ $product->molecular_formula }}</span>
                        </div>
                    @endif
                    @if($product->molecular_weight)
                        <div class="bg-slate-900/90 px-3.5 py-2 rounded-xl border border-slate-700 flex items-center gap-2">
                            <span class="text-slate-400">Mol. Wt:</span>
                            <span class="text-slate-200">{{ $product->molecular_weight }}</span>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Quick Action Box -->
            <div class="lg:col-span-4 bg-navy-900/90 rounded-2xl p-6 border border-slate-700/80 shadow-xl space-y-4">
                <div class="text-xs font-semibold uppercase tracking-wider text-cyan-400">
                    Commercial Supply Inquiry
                </div>
                <div class="space-y-2 text-xs text-slate-300">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-check text-emerald-400"></i> Free Batch COA & Technical Data Sheet
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-check text-emerald-400"></i> Bulk Tanker & Containerized Sea Freight
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-check text-emerald-400"></i> Direct Manufacturer Guarantee (Est. 1984)
                    </div>
                </div>

                <div class="pt-2 flex flex-col gap-2.5">
                    <a href="#inquiry-section" class="w-full py-3 bg-gradient-to-r from-brand-600 to-brand-700 hover:from-brand-700 hover:to-brand-800 text-white font-bold text-xs rounded-xl text-center shadow-md transition-all">
                        <i class="fa-solid fa-paper-plane mr-1.5"></i> Request Quotation for this Chemical
                    </a>
                    <a href="tel:+912767255893" class="w-full py-3 bg-white/10 hover:bg-white/20 text-white font-semibold text-xs rounded-xl text-center border border-white/20 transition-all">
                        <i class="fa-solid fa-phone mr-1.5"></i> Call Plant: +91-2767-255893
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Main Details & Specifications Section -->
<section class="py-12 lg:py-16 bg-slate-50">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- Left 8 Columns: Technical Specifications, Applications & Safety -->
            <div class="lg:col-span-8 space-y-8">
                
                <!-- Quick Key Parameters Cards -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs">
                        <span class="block text-[11px] font-semibold text-slate-400 uppercase">Assay / Concentration</span>
                        <span class="block text-base font-extrabold text-brand-700 mt-1">{{ $product->concentration ?? 'Standard' }}</span>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs">
                        <span class="block text-[11px] font-semibold text-slate-400 uppercase">Specific Gravity</span>
                        <span class="block text-base font-bold text-slate-800 mt-1">{{ $product->specific_gravity ?? 'Custom' }}</span>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs">
                        <span class="block text-[11px] font-semibold text-slate-400 uppercase">pH Value (Neat)</span>
                        <span class="block text-base font-bold text-slate-800 mt-1">{{ $product->ph_value ?? '4.0 - 5.5' }}</span>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs">
                        <span class="block text-[11px] font-semibold text-slate-400 uppercase">Physical State</span>
                        <span class="block text-base font-bold text-slate-800 mt-1">Aqueous Liquid</span>
                    </div>
                </div>

                <!-- Product In-Depth Description -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-xs">
                    <h2 class="text-xl font-bold font-display text-navy-900 mb-4 pb-3 border-b border-slate-100 flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-info text-brand-700"></i> Product Overview & Chemical Characteristics
                    </h2>
                    <div class="prose prose-sm text-slate-600 max-w-none space-y-4 leading-relaxed whitespace-pre-line text-sm">
                        {{ $product->description }}
                    </div>
                </div>

                <!-- Technical Specification Sheet Table -->
                <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
                    <div class="p-6 bg-slate-900 text-white flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-bold font-display">Technical Data Sheet (TDS) & Specifications</h3>
                            <p class="text-xs text-slate-400 mt-0.5">Typical factory batch parameters verified by in-house laboratory</p>
                        </div>
                        <span class="text-xs px-2.5 py-1 rounded-md bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 font-semibold">
                            Batch Tested
                        </span>
                    </div>

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-xs border-collapse">
                                <thead>
                                    <tr class="border-b border-slate-200 text-slate-400 uppercase tracking-wider font-semibold">
                                        <th class="py-2.5 px-3">Parameter / Property</th>
                                        <th class="py-2.5 px-3">Guaranteed Specification</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-slate-700">
                                    <tr>
                                        <td class="py-2.5 px-3 font-semibold text-slate-900">Chemical Name</td>
                                        <td class="py-2.5 px-3">{{ $product->name }}</td>
                                    </tr>
                                    @if($product->molecular_formula)
                                        <tr>
                                            <td class="py-2.5 px-3 font-semibold text-slate-900">Chemical Formula</td>
                                            <td class="py-2.5 px-3 font-mono">{{ $product->molecular_formula }}</td>
                                        </tr>
                                    @endif
                                    @if($product->cas_number)
                                        <tr>
                                            <td class="py-2.5 px-3 font-semibold text-slate-900">CAS Registry Number</td>
                                            <td class="py-2.5 px-3 font-mono">{{ $product->cas_number }}</td>
                                        </tr>
                                    @endif
                                    @if($product->appearance)
                                        <tr>
                                            <td class="py-2.5 px-3 font-semibold text-slate-900">Physical Appearance</td>
                                            <td class="py-2.5 px-3">{{ $product->appearance }}</td>
                                        </tr>
                                    @endif
                                    @if($product->concentration)
                                        <tr>
                                            <td class="py-2.5 px-3 font-semibold text-slate-900">Active Assay / Content</td>
                                            <td class="py-2.5 px-3 font-bold text-brand-700">{{ $product->concentration }}</td>
                                        </tr>
                                    @endif
                                    @if($product->specific_gravity)
                                        <tr>
                                            <td class="py-2.5 px-3 font-semibold text-slate-900">Specific Gravity @ 20°C</td>
                                            <td class="py-2.5 px-3">{{ $product->specific_gravity }}</td>
                                        </tr>
                                    @endif
                                    @if($product->ph_value)
                                        <tr>
                                            <td class="py-2.5 px-3 font-semibold text-slate-900">pH Value (Neat)</td>
                                            <td class="py-2.5 px-3">{{ $product->ph_value }}</td>
                                        </tr>
                                    @endif
                                    @if($product->so2_content)
                                        <tr>
                                            <td class="py-2.5 px-3 font-semibold text-slate-900">SO2 Content Equiv.</td>
                                            <td class="py-2.5 px-3 font-semibold text-slate-800">{{ $product->so2_content }}</td>
                                        </tr>
                                    @endif
                                    @if($product->specifications_json && is_array($product->specifications_json))
                                        @foreach($product->specifications_json as $specKey => $specVal)
                                            <tr>
                                                <td class="py-2.5 px-3 font-semibold text-slate-900">{{ $specKey }}</td>
                                                <td class="py-2.5 px-3">{{ $specVal }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    @if($product->packaging)
                                        <tr>
                                            <td class="py-2.5 px-3 font-semibold text-slate-900">Standard Packaging</td>
                                            <td class="py-2.5 px-3">{{ $product->packaging }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Industrial Applications & Use Cases -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-xs">
                    <h2 class="text-xl font-bold font-display text-navy-900 mb-4 pb-3 border-b border-slate-100 flex items-center gap-2.5">
                        <i class="fa-solid fa-gears text-brand-700"></i> Primary Applications & Field Deployments
                    </h2>
                    
                    @if($product->applications_list && count($product->applications_list) > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            @foreach($product->applications_list as $app)
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-slate-50 border border-slate-100 text-xs text-slate-700">
                                    <i class="fa-solid fa-circle-check text-brand-600 mt-0.5"></i>
                                    <span>{{ $app }}</span>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-xs text-slate-500">Contact our technical department for custom application guidelines.</p>
                    @endif
                </div>

                <!-- Industries Served -->
                @if($product->industries_list && count($product->industries_list) > 0)
                    <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-xs">
                        <h2 class="text-xl font-bold font-display text-navy-900 mb-4 pb-3 border-b border-slate-100 flex items-center gap-2.5">
                            <i class="fa-solid fa-industry text-brand-700"></i> Industries Served
                        </h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach($product->industries_list as $ind)
                                <span class="px-3.5 py-1.5 rounded-lg bg-brand-50 border border-brand-200 text-brand-800 text-xs font-semibold flex items-center gap-2">
                                    <i class="fa-solid fa-building text-[10px]"></i> {{ $ind }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Packaging & Safety Handling -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-xs">
                    <h2 class="text-xl font-bold font-display text-navy-900 mb-4 pb-3 border-b border-slate-100 flex items-center gap-2.5">
                        <i class="fa-solid fa-box-open text-brand-700"></i> Packaging Formats & Storage Guidelines
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs text-slate-600">
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="font-bold text-slate-900 mb-1 flex items-center gap-2">
                                <i class="fa-solid fa-drum text-brand-700"></i> HDPE Drums
                            </div>
                            <p>50 kg carboys and 250 kg UN-approved virgin polymer drums. Leak-proof sealed with tamper evident bungs.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="font-bold text-slate-900 mb-1 flex items-center gap-2">
                                <i class="fa-solid fa-boxes-stacked text-brand-700"></i> 1000L IBC Tanks
                            </div>
                            <p>Heavy duty galvanized steel cage IBC totes (1000 Litres / ~1.35 Metric Tons net). Stackable for sea shipping.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="font-bold text-slate-900 mb-1 flex items-center gap-2">
                                <i class="fa-solid fa-truck text-brand-700"></i> Road Tankers
                            </div>
                            <p>Bulk tanker loads (20 to 30 Metric Ton capacity) with dedicated acid/bisulphite linings for domestic Indian dispatch.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right 4 Columns: Direct Product Inquiry Form & Related Products -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Inquiry Form Card -->
                <div id="inquiry-section" class="bg-white rounded-2xl border border-slate-200 shadow-md p-6 sticky top-24">
                    <div class="mb-4 pb-3 border-b border-slate-100">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-brand-700">Direct Inquiries</span>
                        <h3 class="text-lg font-bold text-navy-900 mt-1">Get Quote for {{ $product->name }}</h3>
                        <p class="text-xs text-slate-500 mt-1">Send your required quantity and delivery location for instant pricing.</p>
                    </div>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-3.5">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="subject" value="Commercial Inquiry for {{ $product->name }}">

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Your Full Name *</label>
                            <input type="text" name="name" required class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs focus:outline-none focus:border-brand-500" placeholder="e.g. John Doe">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Business Email *</label>
                            <input type="email" name="email" required class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs focus:outline-none focus:border-brand-500" placeholder="e.g. john@company.com">
                        </div>

                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Phone / WhatsApp</label>
                                <input type="text" name="phone" class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs focus:outline-none focus:border-brand-500" placeholder="+91 ...">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Company</label>
                                <input type="text" name="company" class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs focus:outline-none focus:border-brand-500" placeholder="Company Name">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Quantity / Requirements *</label>
                            <textarea name="message" rows="3" required class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs focus:outline-none focus:border-brand-500" placeholder="Please specify monthly volume, packaging preference (Drums/IBC), and port of delivery.">I am interested in procuring {{ $product->name }}. Please send specifications and quotation for bulk delivery.</textarea>
                        </div>

                        <button type="submit" class="w-full py-3 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane"></i> Submit Quotation Request
                        </button>
                    </form>

                    <div class="mt-4 pt-3 border-t border-slate-100 text-center">
                        <span class="text-[11px] text-slate-400">Or reach sales directly:</span>
                        <div class="text-xs font-bold text-brand-700 mt-1">
                            <a href="tel:+912767255893">+91-2767-255893</a> &bull; <a href="mailto:umadyechem.industries@gmail.com">Email Us</a>
                        </div>
                    </div>
                </div>

                <!-- Related Products -->
                @if($relatedProducts->count() > 0)
                    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs">
                        <h4 class="font-bold text-sm text-navy-900 mb-3 pb-2 border-b border-slate-100">
                            Complementary Formulations
                        </h4>
                        <div class="space-y-3">
                            @foreach($relatedProducts as $rel)
                                <a href="{{ route('products.show', $rel->slug) }}" class="block p-2.5 rounded-xl hover:bg-slate-50 transition-colors border border-transparent hover:border-slate-200">
                                    <div class="font-semibold text-xs text-slate-900 hover:text-brand-700">{{ $rel->name }}</div>
                                    <div class="text-[11px] text-slate-500 mt-0.5 truncate">{{ $rel->short_description }}</div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </div>
</section>

@endsection


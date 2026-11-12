@extends('layouts.app')

@section('title', 'Ammonium Bisulphite Products | Uma Dye Chem Gujarat')
@section('meta_description', 'Explore our comprehensive range of Ammonium Bisulphite solutions (70%, 65%, 60%, 40%, Food Grade), Oxygen Scavengers, and Catalyzed formulations.')

@section('content')

<!-- Header Banner -->
<section class="bg-navy-950 text-white py-14 border-b border-navy-800">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-400 text-xs font-semibold mb-3">
                <i class="fa-solid fa-flask"></i> Complete Manufacturing Portfolio
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-display text-white">
                Industrial Chemical Formulations
            </h1>
            <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                Explore our full line of aqueous Ammonium Bisulphite solutions, catalyzed oxygen scavengers, and specialty sulfur chemicals. Available in high-assay concentrations, technical & food grades, and customized blends.
            </p>
        </div>
    </div>
</section>

<!-- Filter & Product Grid Section -->
<section class="py-12 bg-slate-50">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Search & Filter Bar -->
        <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-xs mb-8 flex flex-col md:flex-row gap-4 items-center justify-between">
            <form action="{{ route('products.index') }}" method="GET" class="w-full md:w-auto flex-grow max-w-lg">
                <div class="relative">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products by name, CAS number, application..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-brand-500 text-sm text-slate-800">
                    <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
                </div>
            </form>

            <div class="flex items-center gap-2 w-full md:w-auto overflow-x-auto pb-1 md:pb-0">
                <a href="{{ route('products.index') }}" class="px-3.5 py-2 rounded-xl text-xs font-semibold whitespace-nowrap {{ !request('category') ? 'bg-brand-700 text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    All ({{ $products->count() }})
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('products.index', ['category' => $cat]) }}" class="px-3.5 py-2 rounded-xl text-xs font-semibold whitespace-nowrap {{ request('category') === $cat ? 'bg-brand-700 text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($products as $product)
                <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden flex flex-col justify-between product-card-hover">
                    <div class="p-6">
                        <div class="flex items-center justify-between gap-2 mb-3">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-brand-50 text-brand-700 uppercase tracking-wide">
                                {{ $product->category }}
                            </span>
                            @if($product->cas_number)
                                <span class="text-[11px] font-mono text-slate-500">
                                    CAS: {{ $product->cas_number }}
                                </span>
                            @endif
                        </div>

                        <h3 class="text-xl font-bold text-navy-900 mb-2">
                            <a href="{{ route('products.show', $product->slug) }}" class="hover:text-brand-700 transition-colors">
                                {{ $product->name }}
                            </a>
                        </h3>

                        <p class="text-slate-600 text-base leading-relaxed mb-4 line-clamp-3">
                            {{ $product->short_description }}
                        </p>

                        <!-- Specification Table Snippet -->
                        <div class="bg-slate-50 rounded-xl p-3.5 space-y-1.5 text-xs border border-slate-100">
                            @if($product->molecular_formula)
                                <div class="flex justify-between">
                                    <span class="text-slate-500">Formula:</span>
                                    <span class="font-mono font-semibold text-slate-800">{{ $product->molecular_formula }}</span>
                                </div>
                            @endif
                            @if($product->concentration)
                                <div class="flex justify-between">
                                    <span class="text-slate-500">Concentration / Assay:</span>
                                    <span class="font-bold text-brand-700">{{ $product->concentration }}</span>
                                </div>
                            @endif
                            @if($product->specific_gravity)
                                <div class="flex justify-between">
                                    <span class="text-slate-500">Specific Gravity:</span>
                                    <span class="font-semibold text-slate-800">{{ $product->specific_gravity }}</span>
                                </div>
                            @endif
                            @if($product->grade)
                                <div class="flex justify-between">
                                    <span class="text-slate-500">Standard Grade:</span>
                                    <span class="text-slate-700">{{ $product->grade }}</span>
                                </div>
                            @endif
                        </div>

                        <!-- Industries Tags -->
                        @if($product->industries_list)
                            <div class="mt-4 flex flex-wrap gap-1.5">
                                @foreach(array_slice($product->industries_list, 0, 3) as $ind)
                                    <span class="text-[10px] bg-slate-100 text-slate-600 px-2 py-0.5 rounded-md font-medium">
                                        {{ $ind }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- Footer Action Links -->
                    <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
                        <a href="{{ route('products.show', $product->slug) }}" class="text-xs font-bold text-brand-700 hover:text-brand-900 flex items-center gap-1.5">
                            <span>View Full Specs</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                        <a href="{{ route('contact', ['product_id' => $product->id]) }}" class="px-3.5 py-1.5 rounded-lg bg-brand-700 hover:bg-brand-800 text-white text-xs font-semibold shadow-xs transition-colors">
                            Request Quote
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 bg-white rounded-2xl border border-slate-200 p-8">
                    <i class="fa-solid fa-flask-vial text-4xl text-slate-300 mb-3"></i>
                    <h3 class="text-lg font-bold text-slate-700">No products found</h3>
                    <p class="text-slate-500 text-xs mt-1">Try resetting your search query or category filter.</p>
                    <a href="{{ route('products.index') }}" class="inline-block mt-4 px-4 py-2 bg-brand-700 text-white text-xs font-semibold rounded-lg">
                        View All Products
                    </a>
                </div>
            @endforelse
        </div>

        <!-- Chemical Comparison Matrix Table -->
        <div class="mt-16 bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
            <div class="p-6 bg-slate-900 text-white">
                <h3 class="text-lg font-bold font-display">Ammonium Bisulphite & Scavengers &bull; Specification Matrix</h3>
                <p class="text-xs text-slate-400 mt-1">Side-by-side comparison of active concentrations, specific gravities, and typical industrial usages.</p>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-slate-100 text-slate-700 font-bold border-b border-slate-200">
                            <th class="py-3 px-4">Product Name</th>
                            <th class="py-3 px-4">Chemical Formula</th>
                            <th class="py-3 px-4">Active Assay</th>
                            <th class="py-3 px-4">Specific Gravity</th>
                            <th class="py-3 px-4">pH (Neat)</th>
                            <th class="py-3 px-4">Primary Uses</th>
                            <th class="py-3 px-4 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach($products as $p)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3 px-4 font-bold text-slate-900">
                                    <a href="{{ route('products.show', $p->slug) }}" class="hover:text-brand-700">
                                        {{ $p->name }}
                                    </a>
                                </td>
                                <td class="py-3 px-4 font-mono text-slate-600">{{ $p->molecular_formula ?? 'NH4HSO3' }}</td>
                                <td class="py-3 px-4 font-semibold text-brand-700">{{ $p->concentration ?? '-' }}</td>
                                <td class="py-3 px-4">{{ $p->specific_gravity ?? '-' }}</td>
                                <td class="py-3 px-4">{{ $p->ph_value ?? '4.0 - 5.5' }}</td>
                                <td class="py-3 px-4 max-w-xs truncate text-slate-500">{{ $p->short_description }}</td>
                                <td class="py-3 px-4 text-right">
                                    <a href="{{ route('products.show', $p->slug) }}" class="text-brand-700 hover:text-brand-900 font-bold">
                                        Specs <i class="fa-solid fa-angle-right text-[10px]"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@endsection


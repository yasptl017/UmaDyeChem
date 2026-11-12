@extends('layouts.admin')

@section('title', $product->exists ? 'Edit ' . $product->name : 'Add New Product')
@section('page_title', $product->exists ? 'Edit Chemical Product' : 'Add New Product')
@section('page_subtitle', 'Configure technical specifications, chemical formulas, and SEO meta tags.')

@section('header_actions')
    <a href="{{ route('admin.products.index') }}" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-700 hover:bg-slate-100 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to Catalog
    </a>
@endsection

@section('content')

<form action="{{ $product->exists ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if($product->exists)
        @method('PUT')
    @endif

    <!-- Card 1: Core Chemical Identity -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">1. Basic Product Information</h3>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="sm:col-span-2">
                <label class="block text-xs font-semibold text-slate-700 mb-1">Product Name *</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}" required placeholder="e.g. Ammonium Bisulphite - 70%" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Category</label>
                <input type="text" name="category" value="{{ old('category', $product->category ?? 'Ammonium Bisulphite Solutions') }}" placeholder="e.g. Ammonium Bisulphite Solutions" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">URL Slug (leave blank to auto-generate)</label>
                <input type="text" name="slug" value="{{ old('slug', $product->slug) }}" placeholder="e.g. ammonium-bisulphite-70" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 font-mono">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Standard Grade</label>
                <input type="text" name="grade" value="{{ old('grade', $product->grade) }}" placeholder="e.g. Industrial / Technical / Food Grade" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Short Description (for cards and catalog summary)</label>
            <textarea name="short_description" rows="2" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700" placeholder="Brief 1-2 sentence summary of this chemical formulation...">{{ old('short_description', $product->short_description) }}</textarea>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Full Technical Description & Advantages</label>
            <textarea name="description" rows="5" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700" placeholder="Detailed product overview, chemical mechanism, reaction formulas, and technical advantages...">{{ old('description', $product->description) }}</textarea>
        </div>
    </div>

    <!-- Card 2: Technical Specifications & Chemistry -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">2. Chemical Parameters & TDS Values</h3>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Active Concentration / Assay</label>
                <input type="text" name="concentration" value="{{ old('concentration', $product->concentration) }}" placeholder="e.g. 70.0% ± 2.0% (w/w)" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">CAS Registry Number</label>
                <input type="text" name="cas_number" value="{{ old('cas_number', $product->cas_number) }}" placeholder="e.g. 10192-30-0" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 font-mono">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Chemical / Molecular Formula</label>
                <input type="text" name="molecular_formula" value="{{ old('molecular_formula', $product->molecular_formula) }}" placeholder="e.g. NH4HSO3" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 font-mono">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Molecular Weight</label>
                <input type="text" name="molecular_weight" value="{{ old('molecular_weight', $product->molecular_weight) }}" placeholder="e.g. 99.10 g/mol" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Specific Gravity @ 20°C</label>
                <input type="text" name="specific_gravity" value="{{ old('specific_gravity', $product->specific_gravity) }}" placeholder="e.g. 1.38 - 1.42" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">pH Value (Neat)</label>
                <input type="text" name="ph_value" value="{{ old('ph_value', $product->ph_value) }}" placeholder="e.g. 4.0 - 5.5" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Equivalent SO2 Content</label>
                <input type="text" name="so2_content" value="{{ old('so2_content', $product->so2_content) }}" placeholder="e.g. 43.5% - 46.0%" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Physical Appearance</label>
                <input type="text" name="appearance" value="{{ old('appearance', $product->appearance) }}" placeholder="e.g. Clear, colorless to pale yellow liquid" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Standard Packaging Formats</label>
                <input type="text" name="packaging" value="{{ old('packaging', $product->packaging) }}" placeholder="e.g. 50kg/250kg HDPE Drums, 1000L IBC Totes, Road Tankers" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>
    </div>

    <!-- Card 3: Applications & Industries -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">3. Applications & Target Industries</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Key Applications (One per line)</label>
                <textarea name="applications" rows="4" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700" placeholder="Dissolved Oxygen Scavenger in Oil & Gas&#10;Dechlorination of municipal water&#10;Antichlor in textile bleaching...">{{ old('applications', $product->applications) }}</textarea>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Industries Served (One per line)</label>
                <textarea name="industries" rows="4" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700" placeholder="Oil & Gas Upstream&#10;Water Treatment Utilities&#10;Textile & Dyeing Mills&#10;Food & Beverage...">{{ old('industries', $product->industries) }}</textarea>
            </div>
        </div>
    </div>

    <!-- Card 4: Visibility & SEO Meta Tags -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">4. Visibility & SEO Search Optimization</h3>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="flex items-center gap-2 pt-4">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }} class="rounded border-slate-300 text-brand-700 focus:ring-0">
                <label for="is_active" class="text-xs font-bold text-slate-800 cursor-pointer">Active on Public Website</label>
            </div>

            <div class="flex items-center gap-2 pt-4">
                <input type="hidden" name="is_featured" value="0">
                <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured', $product->is_featured ?? false) ? 'checked' : '' }} class="rounded border-slate-300 text-brand-700 focus:ring-0">
                <label for="is_featured" class="text-xs font-bold text-slate-800 cursor-pointer">Feature on Homepage</label>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Display Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $product->sort_order ?? 0) }}" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">SEO Meta Title</label>
                <input type="text" name="meta_title" value="{{ old('meta_title', $product->meta_title) }}" placeholder="e.g. Ammonium Bisulphite 70% Manufacturer | Uma Dye Chem" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">SEO Meta Keywords</label>
                <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $product->meta_keywords) }}" placeholder="ammonium bisulphite, oxygen scavenger, CAS 10192-30-0" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">SEO Meta Description</label>
            <textarea name="meta_description" rows="2" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700" placeholder="Brief search snippet shown on Google results...">{{ old('meta_description', $product->meta_description) }}</textarea>
        </div>
    </div>

    <!-- Submit Buttons -->
    <div class="flex items-center gap-3">
        <button type="submit" class="px-6 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
            <i class="fa-solid fa-floppy-disk"></i> Save Chemical Product
        </button>
        <a href="{{ route('admin.products.index') }}" class="px-4 py-2.5 rounded-xl border border-slate-300 text-xs font-semibold text-slate-600 hover:bg-slate-100 transition-colors">
            Cancel
        </a>
    </div>

</form>

@endsection


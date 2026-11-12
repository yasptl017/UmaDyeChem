@extends('layouts.admin')

@section('title', 'Manage Chemical Products')
@section('page_title', 'Chemical Products Catalog')
@section('page_subtitle', 'Add, update specifications, and manage product catalog visibility.')

@section('header_actions')
    <a href="{{ route('admin.products.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-xs transition-colors">
        <i class="fa-solid fa-plus"></i> Add New Product
    </a>
@endsection

@section('content')

<!-- Search & Filters -->
<div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-xs mb-6 flex flex-col sm:flex-row gap-4 items-center justify-between">
    <form action="{{ route('admin.products.index') }}" method="GET" class="w-full sm:w-80">
        <div class="relative">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name or CAS number..." class="w-full pl-9 pr-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-slate-400 text-xs"></i>
        </div>
    </form>

    <div class="text-xs text-slate-500 font-medium">
        Total Products: <strong>{{ $products->total() }}</strong>
    </div>
</div>

<!-- Products Table -->
<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <th class="py-3 px-4">Order</th>
                    <th class="py-3 px-4">Product Name & Category</th>
                    <th class="py-3 px-4">CAS Number</th>
                    <th class="py-3 px-4">Assay / Concentration</th>
                    <th class="py-3 px-4">Sp. Gravity</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                @forelse($products as $prod)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4 font-mono text-slate-400">{{ $prod->sort_order }}</td>
                        <td class="py-3 px-4">
                            <div class="font-bold text-slate-900 text-sm">
                                <a href="{{ route('admin.products.edit', $prod->id) }}" class="hover:text-brand-700">
                                    {{ $prod->name }}
                                </a>
                            </div>
                            <div class="text-[11px] text-slate-500 mt-0.5">
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 font-medium">{{ $prod->category }}</span>
                                @if($prod->is_featured)
                                    <span class="px-2 py-0.5 rounded-full bg-amber-50 text-amber-700 font-bold ml-1">Featured</span>
                                @endif
                            </div>
                        </td>
                        <td class="py-3 px-4 font-mono text-slate-600">{{ $prod->cas_number ?? 'N/A' }}</td>
                        <td class="py-3 px-4 font-bold text-brand-700">{{ $prod->concentration ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $prod->specific_gravity ?? '-' }}</td>
                        <td class="py-3 px-4">
                            @if($prod->is_active)
                                <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">Active</span>
                            @else
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-500 font-bold text-[10px]">Inactive</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-right space-x-2">
                            <a href="{{ route('products.show', $prod->slug) }}" target="_blank" class="p-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-600 inline-block" title="View Public Page">
                                <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                            </a>
                            <a href="{{ route('admin.products.edit', $prod->id) }}" class="p-1.5 rounded-lg bg-brand-50 hover:bg-brand-100 text-brand-700 inline-block" title="Edit">
                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                            </a>
                            <form action="{{ route('admin.products.destroy', $prod->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-1.5 rounded-lg bg-rose-50 hover:bg-rose-100 text-rose-600" title="Delete">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-8 text-center text-slate-500">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($products->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $products->links() }}
        </div>
    @endif
</div>

@endsection


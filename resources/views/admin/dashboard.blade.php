@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page_title', 'Dashboard Overview')
@section('page_subtitle', 'System summary, active chemical products and incoming client inquiries.')

@section('header_actions')
    <a href="{{ route('admin.products.create') }}" class="inline-flex items-center gap-2 px-4 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-xs transition-colors">
        <i class="fa-solid fa-plus"></i> Add New Product
    </a>
@endsection

@section('content')

<!-- Statistics Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    
    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs flex items-center justify-between">
        <div>
            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Products</span>
            <div class="text-3xl font-extrabold text-slate-900 mt-1">{{ $stats['total_products'] }}</div>
            <span class="text-[11px] text-emerald-600 font-semibold mt-1 inline-flex items-center gap-1">
                <i class="fa-solid fa-check"></i> {{ $stats['active_products'] }} Active on Site
            </span>
        </div>
        <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center text-xl">
            <i class="fa-solid fa-flask"></i>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs flex items-center justify-between">
        <div>
            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Customer Inquiries</span>
            <div class="text-3xl font-extrabold text-slate-900 mt-1">{{ $stats['total_inquiries'] }}</div>
            <span class="text-[11px] text-slate-500 mt-1 inline-block">Lifetime inquiries received</span>
        </div>
        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl">
            <i class="fa-solid fa-inbox"></i>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs flex items-center justify-between">
        <div>
            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Unread Inquiries</span>
            <div class="text-3xl font-extrabold {{ $stats['unread_inquiries'] > 0 ? 'text-rose-600' : 'text-slate-900' }} mt-1">
                {{ $stats['unread_inquiries'] }}
            </div>
            <span class="text-[11px] text-slate-500 mt-1 inline-block">Require sales response</span>
        </div>
        <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-xl">
            <i class="fa-solid fa-envelope"></i>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs flex items-center justify-between">
        <div>
            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Operating History</span>
            <div class="text-3xl font-extrabold text-slate-900 mt-1">1984</div>
            <span class="text-[11px] text-amber-600 font-semibold mt-1 inline-flex items-center gap-1">
                <i class="fa-solid fa-award"></i> 40+ Years in Gujarat
            </span>
        </div>
        <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl">
            <i class="fa-solid fa-industry"></i>
        </div>
    </div>

</div>

<!-- Recent Inquiries & Products Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
    
    <!-- Left 7 Cols: Recent Customer Inquiries -->
    <div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="p-5 border-b border-slate-200 flex items-center justify-between">
            <h2 class="font-bold text-sm text-slate-900">Recent Customer Inquiries</h2>
            <a href="{{ route('admin.inquiries.index') }}" class="text-xs font-semibold text-brand-700 hover:text-brand-900">
                View All Inquiries &rarr;
            </a>
        </div>

        <div class="divide-y divide-slate-100">
            @forelse($recentInquiries as $inq)
                <div class="p-4 hover:bg-slate-50 transition-colors flex items-start justify-between gap-4">
                    <div class="space-y-1">
                        <div class="flex items-center gap-2">
                            <span class="font-bold text-xs text-slate-900">{{ $inq->name }}</span>
                            @if(!$inq->is_read)
                                <span class="text-[10px] px-2 py-0.5 rounded-full bg-rose-100 text-rose-700 font-bold uppercase">New</span>
                            @endif
                        </div>
                        <div class="text-[11px] text-slate-500">
                            {{ $inq->email }} &bull; {{ $inq->phone ?? 'No Phone' }}
                            @if($inq->company) &bull; <strong>{{ $inq->company }}</strong> @endif
                        </div>
                        @if($inq->product)
                            <div class="text-[11px] text-brand-700 font-semibold">
                                <i class="fa-solid fa-flask text-[10px]"></i> {{ $inq->product->name }}
                            </div>
                        @endif
                        <p class="text-xs text-slate-600 line-clamp-1 italic mt-0.5">
                            "{{ $inq->message }}"
                        </p>
                    </div>

                    <div class="text-right flex-shrink-0">
                        <span class="text-[11px] text-slate-400 block mb-1">{{ $inq->created_at->diffForHumans() }}</span>
                        <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="inline-flex items-center gap-1 text-xs px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-brand-50 text-brand-700 font-semibold transition-colors">
                            View <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            @empty
                <div class="p-8 text-center text-slate-500 text-xs">
                    No customer inquiries received yet. Inquiries submitted on the website will appear here instantly.
                </div>
            @endforelse
        </div>
    </div>

    <!-- Right 5 Cols: Quick Products Status -->
    <div class="lg:col-span-5 bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="p-5 border-b border-slate-200 flex items-center justify-between">
            <h2 class="font-bold text-sm text-slate-900">Chemical Products Catalog</h2>
            <a href="{{ route('admin.products.index') }}" class="text-xs font-semibold text-brand-700 hover:text-brand-900">
                Manage ({{ $products->count() }}) &rarr;
            </a>
        </div>

        <div class="divide-y divide-slate-100 max-h-[420px] overflow-y-auto">
            @foreach($products as $prod)
                <div class="p-3.5 hover:bg-slate-50 transition-colors flex items-center justify-between gap-3 text-xs">
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full {{ $prod->is_active ? 'bg-emerald-500' : 'bg-slate-300' }}"></span>
                        <div>
                            <div class="font-bold text-slate-900 hover:text-brand-700">
                                <a href="{{ route('admin.products.edit', $prod->id) }}">{{ $prod->name }}</a>
                            </div>
                            <div class="text-[10px] text-slate-500">
                                {{ $prod->concentration ?? 'Aqueous Solution' }} &bull; CAS: {{ $prod->cas_number ?? 'N/A' }}
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2">
                        <a href="{{ route('products.show', $prod->slug) }}" target="_blank" class="text-slate-400 hover:text-slate-700" title="View Public Page">
                            <i class="fa-solid fa-eye text-xs"></i>
                        </a>
                        <a href="{{ route('admin.products.edit', $prod->id) }}" class="text-brand-700 hover:text-brand-900" title="Edit Product">
                            <i class="fa-solid fa-pen-to-square text-xs"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

@endsection


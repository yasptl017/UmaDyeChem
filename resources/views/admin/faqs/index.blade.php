@extends('layouts.admin')

@section('title', 'Manage FAQs')
@section('page_title', 'Frequently Asked Questions')
@section('page_subtitle', 'Manage the questions and answers shown on the public FAQ page.')

@section('header_actions')
    <a href="{{ route('admin.faqs.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-xs transition-colors">
        <i class="fa-solid fa-plus"></i> Add New FAQ
    </a>
@endsection

@section('content')

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <th class="py-3 px-4">Order</th>
                    <th class="py-3 px-4">Question & Category</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                @forelse($faqs as $faq)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4 font-mono text-slate-400">{{ $faq->sort_order }}</td>
                        <td class="py-3 px-4">
                            <div class="font-bold text-slate-900 text-sm">
                                <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="hover:text-brand-700">{{ $faq->question }}</a>
                            </div>
                            <div class="text-[11px] text-slate-500 mt-0.5">
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 font-medium">{{ $faq->category }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-4">
                            @if($faq->is_active)
                                <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">Active</span>
                            @else
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-500 font-bold text-[10px]">Inactive</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-right space-x-2">
                            <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="p-1.5 rounded-lg bg-brand-50 hover:bg-brand-100 text-brand-700 inline-block" title="Edit">
                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                            </a>
                            <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this FAQ?');">
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
                        <td colspan="4" class="py-8 text-center text-slate-500">No FAQs found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($faqs->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $faqs->links() }}
        </div>
    @endif
</div>

@endsection

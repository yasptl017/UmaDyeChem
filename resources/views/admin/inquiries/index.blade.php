@extends('layouts.admin')

@section('title', 'Customer Inquiries & Quotes')
@section('page_title', 'Customer Inquiries & RFQs')
@section('page_subtitle', 'Commercial quote requests and technical questions submitted by prospective clients.')

@section('header_actions')
    <div class="flex items-center gap-2">
        <a href="{{ route('admin.inquiries.index') }}" class="px-3 py-1.5 rounded-lg text-xs font-semibold {{ !request('unread') ? 'bg-brand-700 text-white' : 'bg-white border border-slate-200 text-slate-700' }}">
            All Inquiries
        </a>
        <a href="{{ route('admin.inquiries.index', ['unread' => 1]) }}" class="px-3 py-1.5 rounded-lg text-xs font-semibold {{ request('unread') ? 'bg-brand-700 text-white' : 'bg-white border border-slate-200 text-slate-700' }}">
            Unread Only
        </a>
    </div>
@endsection

@section('content')

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Date</th>
                    <th class="py-3 px-4">Client Name & Company</th>
                    <th class="py-3 px-4">Contact Info</th>
                    <th class="py-3 px-4">Product Inquired</th>
                    <th class="py-3 px-4">Message Snippet</th>
                    <th class="py-3 px-4 text-right">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                @forelse($inquiries as $inq)
                    <tr class="hover:bg-slate-50 transition-colors {{ !$inq->is_read ? 'bg-blue-50/40 font-medium' : '' }}">
                        <td class="py-3 px-4">
                            @if(!$inq->is_read)
                                <span class="px-2 py-0.5 rounded-full bg-rose-100 text-rose-700 font-bold text-[10px] uppercase">New</span>
                            @else
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-600 text-[10px]">Read</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-slate-500 whitespace-nowrap">{{ $inq->created_at->format('M d, Y') }}</td>
                        <td class="py-3 px-4">
                            <div class="font-bold text-slate-900">{{ $inq->name }}</div>
                            @if($inq->company)
                                <div class="text-[11px] text-slate-500">{{ $inq->company }}</div>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div><a href="mailto:{{ $inq->email }}" class="text-brand-700 hover:underline">{{ $inq->email }}</a></div>
                            @if($inq->phone)
                                <div class="text-slate-500 text-[11px]">{{ $inq->phone }}</div>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if($inq->product)
                                <span class="font-semibold text-brand-700">{{ $inq->product->name }}</span>
                            @else
                                <span class="text-slate-400">General</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate text-slate-600">
                            {{ $inq->message }}
                        </td>
                        <td class="py-3 px-4 text-right whitespace-nowrap space-x-1">
                            <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="p-1.5 rounded-lg bg-brand-50 hover:bg-brand-100 text-brand-700 inline-block font-semibold" title="View Details">
                                <i class="fa-solid fa-eye"></i> View
                            </a>
                            <form action="{{ route('admin.inquiries.destroy', $inq->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this inquiry?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-1.5 rounded-lg bg-rose-50 hover:bg-rose-100 text-rose-600" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-8 text-center text-slate-500">No inquiries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($inquiries->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $inquiries->links() }}
        </div>
    @endif
</div>

@endsection


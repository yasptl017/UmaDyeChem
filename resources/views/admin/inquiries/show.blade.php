@extends('layouts.admin')

@section('title', 'Inquiry from ' . $inquiry->name)
@section('page_title', 'Inquiry Details')
@section('page_subtitle', 'Submitted on ' . $inquiry->created_at->format('F d, Y \a\t h:i A'))

@section('header_actions')
    <div class="flex items-center gap-2">
        <a href="{{ route('admin.inquiries.index') }}" class="px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-700 hover:bg-slate-100 transition-colors">
            <i class="fa-solid fa-arrow-left"></i> Back to Inquiries
        </a>
        <a href="mailto:{{ $inquiry->email }}?subject=Re:%20{{ urlencode($inquiry->subject ?: 'Your inquiry to Uma Dye Chem') }}" class="px-4 py-1.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-lg shadow-xs transition-colors flex items-center gap-1.5">
            <i class="fa-solid fa-reply"></i> Reply via Email
        </a>
    </div>
@endsection

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
    
    <!-- Left 8 Cols: Message & Details -->
    <div class="lg:col-span-8 bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-xs space-y-6">
        
        <div>
            <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Subject</span>
            <h2 class="text-lg font-bold text-navy-900 mt-1">
                {{ $inquiry->subject ?: 'General Chemical Inquiry / Product RFQ' }}
            </h2>
        </div>

        @if($inquiry->product)
            <div class="p-4 rounded-xl bg-brand-50 border border-brand-200 flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-bold text-brand-700 uppercase">Chemical Product Inquired:</span>
                    <div class="font-bold text-slate-900 text-sm mt-0.5">{{ $inquiry->product->name }}</div>
                </div>
                <a href="{{ route('products.show', $inquiry->product->slug) }}" target="_blank" class="text-xs font-semibold text-brand-700 hover:underline">
                    View Specifications &rarr;
                </a>
            </div>
        @endif

        <div>
            <span class="text-xs font-semibold uppercase tracking-wider text-slate-400 block mb-2">Client Message</span>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-800 leading-relaxed whitespace-pre-line">
                {{ $inquiry->message }}
            </div>
        </div>

        <!-- Quick Status Update -->
        <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
            <form action="{{ route('admin.inquiries.status', $inquiry->id) }}" method="POST" class="flex items-center gap-3">
                @csrf
                @method('PATCH')
                <label class="text-xs font-semibold text-slate-700">Inquiry Status:</label>
                <select name="status" onchange="this.form.submit()" class="px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-800 bg-white">
                    <option value="new" {{ $inquiry->status === 'new' ? 'selected' : '' }}>New</option>
                    <option value="in_progress" {{ $inquiry->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="resolved" {{ $inquiry->status === 'resolved' ? 'selected' : '' }}>Resolved</option>
                </select>
            </form>

            <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Delete this inquiry?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-xs text-rose-600 hover:text-rose-800 font-semibold flex items-center gap-1">
                    <i class="fa-solid fa-trash"></i> Delete Inquiry
                </button>
            </form>
        </div>

    </div>

    <!-- Right 4 Cols: Contact Details Card -->
    <div class="lg:col-span-4 bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">Client Contact Information</h3>

        <div class="space-y-3 text-xs">
            <div>
                <span class="text-slate-400 block text-[11px]">Contact Person</span>
                <span class="font-bold text-slate-900 text-sm">{{ $inquiry->name }}</span>
            </div>

            <div>
                <span class="text-slate-400 block text-[11px]">Email Address</span>
                <a href="mailto:{{ $inquiry->email }}" class="font-semibold text-brand-700 hover:underline">{{ $inquiry->email }}</a>
            </div>

            <div>
                <span class="text-slate-400 block text-[11px]">Phone / WhatsApp</span>
                @if($inquiry->phone)
                    <a href="tel:{{ $inquiry->phone }}" class="font-semibold text-slate-800">{{ $inquiry->phone }}</a>
                @else
                    <span class="text-slate-400">Not provided</span>
                @endif
            </div>

            <div>
                <span class="text-slate-400 block text-[11px]">Company Name</span>
                <span class="font-semibold text-slate-800">{{ $inquiry->company ?? 'Not specified' }}</span>
            </div>

            <div>
                <span class="text-slate-400 block text-[11px]">Received At</span>
                <span class="text-slate-700">{{ $inquiry->created_at->toDayDateTimeString() }}</span>
            </div>
        </div>

        <div class="pt-3 border-t border-slate-100">
            @if($inquiry->phone)
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}?text=Hello%20{{ urlencode($inquiry->name) }},%20thank%20you%20for%20contacting%20Uma%20Dye%20Chem" target="_blank" class="w-full py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-xl flex items-center justify-center gap-2 shadow-xs transition-colors">
                    <i class="fa-brands fa-whatsapp text-sm"></i> WhatsApp Client
                </a>
            @endif
        </div>
    </div>

</div>

@endsection


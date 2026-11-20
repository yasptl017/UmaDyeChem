@extends('layouts.admin')

@section('title', 'Manage Company Emails')
@section('page_title', 'Company Department Emails')
@section('page_subtitle', 'Manage general company email addresses (not tied to a specific person) shown on the public Contact Us page.')

@section('header_actions')
    <a href="{{ route('admin.company-emails.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-xs transition-colors">
        <i class="fa-solid fa-plus"></i> Add Company Email
    </a>
@endsection

@section('content')

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <th class="py-3 px-4">Order</th>
                    <th class="py-3 px-4">Label</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                @forelse($companyEmails as $item)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4 font-mono text-slate-400">{{ $item->sort_order }}</td>
                        <td class="py-3 px-4">
                            <div class="font-bold text-slate-900 text-sm">
                                <a href="{{ route('admin.company-emails.edit', $item->id) }}" class="hover:text-brand-700">{{ $item->label }}</a>
                            </div>
                        </td>
                        <td class="py-3 px-4">{{ $item->email }}</td>
                        <td class="py-3 px-4">
                            @if($item->is_active)
                                <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">Visible</span>
                            @else
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-500 font-bold text-[10px]">Hidden</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-right space-x-2">
                            <a href="{{ route('admin.company-emails.edit', $item->id) }}" class="p-1.5 rounded-lg bg-brand-50 hover:bg-brand-100 text-brand-700 inline-block" title="Edit">
                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                            </a>
                            <form action="{{ route('admin.company-emails.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Remove this email from the Contact Us page?');">
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
                        <td colspan="5" class="py-8 text-center text-slate-500">No company emails added yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($companyEmails->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $companyEmails->links() }}
        </div>
    @endif
</div>

@endsection

@extends('layouts.admin')

@section('title', 'Manage Export Countries')
@section('page_title', 'Global Export Network / World Map')
@section('page_subtitle', 'Manage the countries highlighted on the interactive export map shown on the public Global Network page.')

@section('header_actions')
    <a href="{{ route('admin.export-countries.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-xs transition-colors">
        <i class="fa-solid fa-plus"></i> Add Export Country
    </a>
@endsection

@section('content')

<div class="bg-brand-50 border border-brand-200 text-brand-800 text-xs rounded-xl p-4 mb-6 flex items-start gap-2.5">
    <i class="fa-solid fa-circle-info mt-0.5"></i>
    <span>Countries added here are automatically highlighted on the interactive world map at <a href="{{ route('export') }}" target="_blank" class="font-bold underline">/export-network</a>. Use the standard 2-letter ISO country code (e.g. AE for United Arab Emirates, RU for Russia, AU for Australia).</span>
</div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <th class="py-3 px-4">Order</th>
                    <th class="py-3 px-4">Country</th>
                    <th class="py-3 px-4">ISO Code</th>
                    <th class="py-3 px-4">Region</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                @forelse($countries as $country)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4 font-mono text-slate-400">{{ $country->sort_order }}</td>
                        <td class="py-3 px-4">
                            <div class="font-bold text-slate-900 text-sm">
                                <a href="{{ route('admin.export-countries.edit', $country->id) }}" class="hover:text-brand-700">{{ $country->country_name }}</a>
                            </div>
                        </td>
                        <td class="py-3 px-4 font-mono font-bold text-brand-700">{{ $country->country_code }}</td>
                        <td class="py-3 px-4">
                            <span class="px-2 py-0.5 rounded-full bg-slate-100 font-medium">{{ $country->region ?? 'Unassigned' }}</span>
                        </td>
                        <td class="py-3 px-4">
                            @if($country->is_active)
                                <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">Highlighted</span>
                            @else
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-500 font-bold text-[10px]">Hidden</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-right space-x-2">
                            <a href="{{ route('admin.export-countries.edit', $country->id) }}" class="p-1.5 rounded-lg bg-brand-50 hover:bg-brand-100 text-brand-700 inline-block" title="Edit">
                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                            </a>
                            <form action="{{ route('admin.export-countries.destroy', $country->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Remove this country from the export map?');">
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
                        <td colspan="6" class="py-8 text-center text-slate-500">No export countries added yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($countries->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $countries->links() }}
        </div>
    @endif
</div>

@endsection

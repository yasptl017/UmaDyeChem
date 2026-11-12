@extends('layouts.admin')

@section('title', 'Manage Partners & Leadership')
@section('page_title', 'Partners & Leadership Team')
@section('page_subtitle', 'Manage the leadership cards shown on the public About Us page.')

@section('header_actions')
    <a href="{{ route('admin.partners.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-xs transition-colors">
        <i class="fa-solid fa-plus"></i> Add Partner / Team Member
    </a>
@endsection

@section('content')

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <th class="py-3 px-4">Order</th>
                    <th class="py-3 px-4">Name & Designation</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                @forelse($partners as $partner)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4 font-mono text-slate-400">{{ $partner->sort_order }}</td>
                        <td class="py-3 px-4">
                            <div class="flex items-center gap-3">
                                @if($partner->photo)
                                    <img src="{{ asset('storage/' . $partner->photo) }}" class="w-9 h-9 rounded-full object-cover border border-slate-200">
                                @else
                                    <div class="w-9 h-9 rounded-full bg-{{ $partner->avatar_color }} text-white font-bold text-xs flex items-center justify-center">
                                        {{ $partner->initials }}
                                    </div>
                                @endif
                                <div>
                                    <div class="font-bold text-slate-900 text-sm">
                                        <a href="{{ route('admin.partners.edit', $partner->id) }}" class="hover:text-brand-700">{{ $partner->name }}</a>
                                    </div>
                                    <div class="text-[11px] text-slate-500">{{ $partner->designation }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-4">
                            @if($partner->is_active)
                                <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">Visible</span>
                            @else
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-500 font-bold text-[10px]">Hidden</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-right space-x-2">
                            <a href="{{ route('admin.partners.edit', $partner->id) }}" class="p-1.5 rounded-lg bg-brand-50 hover:bg-brand-100 text-brand-700 inline-block" title="Edit">
                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                            </a>
                            <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Remove this person from the leadership page?');">
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
                        <td colspan="4" class="py-8 text-center text-slate-500">No partners or team members added yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($partners->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $partners->links() }}
        </div>
    @endif
</div>

@endsection

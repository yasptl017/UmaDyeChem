@extends('layouts.admin')

@section('title', 'My Account')
@section('page_title', 'My Account & Security')
@section('page_subtitle', 'Change your admin login email and password.')

@section('content')

<div class="max-w-2xl space-y-6">

    <!-- Card 1: Account Details -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">Account Details</h3>

        <form action="{{ route('admin.profile.account.update') }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Full Name</label>
                <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
                @error('name', 'account') <span class="text-[11px] text-rose-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Login Email (Username)</label>
                <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
                @error('email', 'account') <span class="text-[11px] text-rose-500">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="px-5 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
                <i class="fa-solid fa-floppy-disk"></i> Save Account Details
            </button>
        </form>
    </div>

    <!-- Card 2: Change Password -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
        <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-2">Change Password</h3>

        <form action="{{ route('admin.profile.password.update') }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Current Password</label>
                <input type="password" name="current_password" required class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
                @error('current_password', 'password') <span class="text-[11px] text-rose-500">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">New Password</label>
                    <input type="password" name="password" required minlength="8" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
                    @error('password', 'password') <span class="text-[11px] text-rose-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Confirm New Password</label>
                    <input type="password" name="password_confirmation" required minlength="8" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
                </div>
            </div>

            <button type="submit" class="px-5 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center gap-2">
                <i class="fa-solid fa-key"></i> Update Password
            </button>
        </form>
    </div>

</div>

@endsection

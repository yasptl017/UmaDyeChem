@extends('layouts.app')

@section('title', 'Contact Us & Request Chemical Quote | Uma Dye Chem Unjha')
@section('meta_description', 'Get in touch with Uma Dye Chem. Factory address in Unava, Unjha, Gujarat. Phone: +91-2767-255893, Email: umadyechem.industries@gmail.com.')

@section('content')

<!-- Header Banner -->
<section class="bg-navy-950 text-white py-14 border-b border-navy-800">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-400 text-xs font-semibold mb-3">
                <i class="fa-solid fa-headset"></i> Direct Manufacturer Inquiries
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-display text-white">
                Contact Sales & Plant Operations
            </h1>
            <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                Connect directly with our chemical sales engineers for price quotations, bulk tanker dispatches, export inquiries, or product technical data sheets.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Details Section -->
<section class="py-16 bg-slate-50">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- Left 7 Columns: Interactive Inquiry Form -->
            <div class="lg:col-span-7 bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                <div class="mb-6 pb-4 border-b border-slate-100">
                    <h2 class="text-xl font-bold font-display text-navy-900">Send an Inquiry or Quote Request</h2>
                    <p class="text-xs text-slate-500 mt-1">Our sales department typically responds within 2-4 business hours.</p>
                </div>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Full Name *</label>
                            <input type="text" name="name" value="{{ old('name') }}" required placeholder="e.g. Rajesh Patel" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-500 @error('name') border-rose-500 @enderror">
                            @error('name') <span class="text-[11px] text-rose-500">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Business Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}" required placeholder="e.g. rajesh@company.com" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-500 @error('email') border-rose-500 @enderror">
                            @error('email') <span class="text-[11px] text-rose-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Phone / WhatsApp Number</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+91 98250 XXXXX" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-500">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Company / Organization</label>
                            <input type="text" name="company" value="{{ old('company') }}" placeholder="Your Company Name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-500">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Product of Interest</label>
                            <select name="product_id" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-500 bg-white">
                                <option value="">-- General Inquiry / Multiple Products --</option>
                                @foreach($products as $prod)
                                    <option value="{{ $prod->id }}" {{ (isset($selectedProductId) && $selectedProductId == $prod->id) ? 'selected' : '' }}>
                                        {{ $prod->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Subject / Requirement Type</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="e.g. Price Quote for 20 MT FCL" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Message / Specification Details *</label>
                        <textarea name="message" rows="5" required placeholder="Please describe required volume (e.g. 1 FCL, Tanker load), packaging format (Drums/IBCs), destination port/city, and required delivery timeline." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-500 @error('message') border-rose-500 @enderror">{{ old('message') }}</textarea>
                        @error('message') <span class="text-[11px] text-rose-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full sm:w-auto px-8 py-3.5 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane"></i> Submit Inquiry to Sales Desk
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right 5 Columns: Direct Company Information -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="bg-navy-950 text-white rounded-3xl p-8 border border-navy-800 shadow-md space-y-6">
                    <h3 class="text-lg font-bold font-display border-b border-slate-800 pb-3 text-cyan-400">
                        Manufacturing Works & Office
                    </h3>

                    <div class="space-y-4 text-xs">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-navy-800 text-cyan-400 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-industry"></i>
                            </div>
                            <div>
                                <div class="font-bold text-white">Factory Works Address:</div>
                                <div class="text-slate-300 mt-0.5 leading-relaxed">
                                    {{ $siteSettings['address'] }}
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-navy-800 text-cyan-400 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                            <div>
                                <div class="font-bold text-white">Postal Address:</div>
                                <div class="text-slate-300 mt-0.5">
                                    {{ $siteSettings['postal_address'] }}
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-navy-800 text-cyan-400 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <div class="font-bold text-white">Landline Telephones:</div>
                                <div class="text-slate-300 mt-0.5 space-y-0.5">
                                    <div>{{ $siteSettings['phone'] }}</div>
                                    @if($siteSettings['phone_alt'])
                                        <div>{{ $siteSettings['phone_alt'] }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-navy-800 text-cyan-400 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-at"></i>
                            </div>
                            <div>
                                <div class="font-bold text-white">Official Email:</div>
                                <div class="text-cyan-300 font-semibold mt-0.5 break-all">
                                    {{ $siteSettings['email'] }}
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-navy-800 text-cyan-400 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div>
                                <div class="font-bold text-white">Working Hours:</div>
                                <div class="text-slate-300 mt-0.5">
                                    {{ $siteSettings['working_hours'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Map Embed Card -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
                    <div class="p-4 bg-slate-100 border-b border-slate-200 text-xs font-bold text-slate-700 flex items-center gap-2">
                        <i class="fa-solid fa-location-dot text-brand-700"></i> Plant Location: Unava, Unjha (Gujarat)
                    </div>
                    <div class="aspect-video w-full">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116773.71960205809!2d72.31688629726562!3d23.8058223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c52c2dc8c8d8b%3A0x6b63c9bbfbd871db!2sUnava%2C%20Gujarat%20384160!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection


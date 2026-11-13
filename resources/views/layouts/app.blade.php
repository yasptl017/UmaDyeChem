<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Uma Dye Chem | Ammonium Bisulphite Manufacturer in Gujarat, India')</title>
    <meta name="description" content="@yield('meta_description', 'Uma Dye Chem is India\'s premier manufacturer & exporter of Ammonium Bisulphite solutions (70%, 65%, 60%, 40%, Food Grade), Oxygen Scavengers, and catalyzed solutions since 1984.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Ammonium Bisulphite, Ammonium Bisulphite 70%, Oxygen Scavenger, Ammonium Sulphite Solution, chemical manufacturer Gujarat, industrial chemicals India, Uma Dye Chem')">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Uma Dye Chem | Specialty Chemical Manufacturers')">
    <meta property="og:description" content="@yield('meta_description', 'Pioneer manufacturers of Ammonium Bisulphite Solutions, Oxygen Scavengers and Sulfur chemicals since 1984.')">
    <meta property="og:image" content="{{ asset('logo.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Flag Icons (language switcher) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/7.2.3/css/flag-icons.min.css">
    
    <!-- Tailwind CSS (CDN for guaranteed instant styling + modern CSS variables) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif'],
                    },
                    fontSize: {
                        xs: ['0.9375rem', { lineHeight: '1.5' }],
                        sm: ['0.9375rem', { lineHeight: '1.55' }],
                        base: ['1.0625rem', { lineHeight: '1.65' }],
                        lg: ['1.1875rem', { lineHeight: '1.65' }],
                        xl: ['1.3125rem', { lineHeight: '1.5' }],
                        '2xl': ['1.5625rem', { lineHeight: '1.4' }],
                        '3xl': ['1.9375rem', { lineHeight: '1.3' }],
                        '4xl': ['2.3125rem', { lineHeight: '1.2' }],
                        '5xl': ['3.0625rem', { lineHeight: '1.15' }],
                        '6xl': ['3.875rem', { lineHeight: '1.1' }],
                        '7xl': ['4.625rem', { lineHeight: '1.05' }],
                    },
                    colors: {
                        brand: {
                            50: '#eef8ff',
                            100: '#d9efff',
                            200: '#bce3ff',
                            300: '#8ed2ff',
                            400: '#57b8ff',
                            500: '#2d98fc',
                            600: '#157af0',
                            700: '#0c61dd',
                            800: '#104eb3',
                            900: '#13438d',
                            950: '#0b2656',
                        },
                        navy: {
                            800: '#0B1E38',
                            900: '#071527',
                            950: '#040C18',
                        },
                        accent: {
                            amber: '#F59E0B',
                            teal: '#0D9488',
                            cyan: '#06B6D4',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .hero-pattern {
            background-color: #071527;
            background-image: radial-gradient(rgba(14, 165, 233, 0.15) 1px, transparent 1px), radial-gradient(rgba(14, 165, 233, 0.1) 1px, #071527 1px);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
        }
        .product-card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .product-card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(12, 97, 221, 0.12), 0 8px 10px -6px rgba(12, 97, 221, 0.08);
        }
        /* Enforce a 0.9375rem (15px) minimum for all content text, overriding any smaller arbitrary utility sizes */
        .text-\[9px\], .text-\[10px\], .text-\[11px\], .text-\[13px\] {
            font-size: 0.9375rem;
        }
        /* Top contact bar keeps its original compact size, unaffected by the site-wide font increase */
        #top-info-bar, #top-info-bar * {
            font-size: 0.75rem !important;
        }
        /* Hide the native disclosure marker on mobile nav accordions (About / Products) across all browsers */
        #mobile-menu summary::-webkit-details-marker {
            display: none;
        }
        #mobile-menu summary {
            list-style: none;
        }
        /* Google Translate widget runs in the background only — our own dropdown is the visible UI.
           Positioned off-screen (not display:none) so its internal <select> still initializes correctly. */
        #google_translate_element {
            position: absolute;
            left: -9999px;
            top: -9999px;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }
        .goog-te-banner-frame,
        .goog-te-gadget-icon,
        .goog-tooltip,
        .goog-tooltip:hover,
        .goog-text-highlight,
        #goog-gt-tt,
        .skiptranslate iframe {
            display: none !important;
            visibility: hidden !important;
        }
        body, html {
            top: 0 !important;
            position: static !important;
        }
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased flex flex-col min-h-screen">

    <!-- Top Contact Bar -->
    <div id="top-info-bar" class="bg-navy-950 text-slate-300 text-xs py-2.5 border-b border-navy-800/80">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="hidden sm:flex flex-wrap items-center gap-4 text-center sm:text-left justify-center sm:justify-start">
                <span class="inline-flex items-center gap-1.5 text-cyan-400 font-semibold">
                    <i class="fa-solid fa-award"></i> Established 1984 &bull; 40+ Years of Manufacturing Excellence
                </span>
                <span class="hidden md:inline text-slate-600">|</span>
                <span class="hidden md:inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-location-dot text-brand-400"></i> Unjha-Unava, Gujarat, India
                </span>
            </div>
            <div class="flex items-center gap-4">
                <a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings['phone']) }}" class="hover:text-white transition-colors inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-phone text-brand-400"></i> {{ $siteSettings['phone'] }}
                </a>
                <span class="hidden sm:inline text-slate-600">|</span>
                <a href="mailto:{{ $siteSettings['email'] }}" class="hidden sm:inline-flex hover:text-white transition-colors items-center gap-1.5">
                    <i class="fa-solid fa-envelope text-brand-400"></i> <span class="hidden sm:inline">{{ $siteSettings['email'] }}</span>
                </a>
                <span class="hidden sm:inline text-slate-600">|</span>
                <a href="{{ route('admin.login') }}" class="hidden sm:inline-flex text-slate-400 hover:text-white transition-colors items-center gap-1">
                    <i class="fa-solid fa-lock text-xs"></i> Admin
                </a>
                <span class="text-slate-600">|</span>

                <!-- Language Switcher -->
                <div class="relative group">
                    <button type="button" class="inline-flex items-center gap-1.5 hover:text-white transition-colors" aria-haspopup="true" aria-expanded="false">
                        <span id="current-lang-flag" class="fi fi-gb rounded-[2px]"></span>
                        <span id="current-lang">English</span>
                        <i class="fa-solid fa-chevron-down text-[9px] opacity-70"></i>
                    </button>
                    <div class="absolute right-0 top-full pt-2 w-48 opacity-0 translate-y-1 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-150 z-[60]">
                        <div class="bg-white text-slate-700 rounded-lg shadow-xl border border-slate-100 py-1.5 text-xs font-medium overflow-hidden max-h-80 overflow-y-auto">
                            <button type="button" data-gtcode="en" data-flag="fi-gb" data-lang-label="English" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-gb rounded-[2px]"></span> English</button>
                            <button type="button" data-gtcode="hi" data-flag="fi-in" data-lang-label="हिन्दी" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-in rounded-[2px]"></span> हिन्दी <span class="text-slate-400 font-normal">(Hindi)</span></button>
                            <button type="button" data-gtcode="gu" data-flag="fi-in" data-lang-label="ગુજરાતી" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-in rounded-[2px]"></span> ગુજરાતી <span class="text-slate-400 font-normal">(Gujarati)</span></button>
                            <div class="my-1 border-t border-slate-100"></div>
                            <button type="button" data-gtcode="zh-CN" data-flag="fi-cn" data-lang-label="中文" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-cn rounded-[2px]"></span> 中文 <span class="text-slate-400 font-normal">(Chinese)</span></button>
                            <button type="button" data-gtcode="ar" data-flag="fi-sa" data-lang-label="العربية" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-sa rounded-[2px]"></span> العربية <span class="text-slate-400 font-normal">(Arabic)</span></button>
                            <button type="button" data-gtcode="fr" data-flag="fi-fr" data-lang-label="Français" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-fr rounded-[2px]"></span> Français <span class="text-slate-400 font-normal">(French)</span></button>
                            <button type="button" data-gtcode="de" data-flag="fi-de" data-lang-label="Deutsch" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-de rounded-[2px]"></span> Deutsch <span class="text-slate-400 font-normal">(German)</span></button>
                            <button type="button" data-gtcode="es" data-flag="fi-es" data-lang-label="Español" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-es rounded-[2px]"></span> Español <span class="text-slate-400 font-normal">(Spanish)</span></button>
                            <button type="button" data-gtcode="ru" data-flag="fi-ru" data-lang-label="Русский" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-ru rounded-[2px]"></span> Русский <span class="text-slate-400 font-normal">(Russian)</span></button>
                            <button type="button" data-gtcode="pt" data-flag="fi-br" data-lang-label="Português" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-br rounded-[2px]"></span> Português <span class="text-slate-400 font-normal">(Portuguese)</span></button>
                            <button type="button" data-gtcode="ja" data-flag="fi-jp" data-lang-label="日本語" class="lang-option w-full text-left px-3.5 py-2 hover:bg-brand-50 hover:text-brand-700 transition-colors inline-flex items-center gap-2.5"><span class="fi fi-jp rounded-[2px]"></span> 日本語 <span class="text-slate-400 font-normal">(Japanese)</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-50 glass-header border-b border-slate-200/80 shadow-sm transition-all duration-300">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo & Brand Info -->
                <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                    <div class="h-14 w-auto flex items-center justify-center">
                        <img src="{{ asset('logo.png') }}" alt="Uma Dye Chem Logo" class="h-12 w-auto object-contain" onerror="this.src='https://via.placeholder.com/150x50?text=Uma+Dye+Chem'">
                    </div>
                    <span class="block text-xl sm:text-2xl font-extrabold font-display leading-none tracking-tight whitespace-nowrap">
                        <span class="text-navy-900 group-hover:text-brand-800 transition-colors">UMA DYE</span>
                        <span class="text-brand-600 group-hover:text-brand-700 transition-colors">CHEM</span>
                    </span>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden xl:flex items-center gap-1 font-medium text-slate-700 text-sm">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg transition-colors hover:text-brand-700 hover:bg-brand-50 {{ request()->routeIs('home') ? 'text-brand-700 font-semibold bg-brand-50/80' : '' }}">
                        Home
                    </a>
                    <!-- About Dropdown -->
                    <div class="relative group">
                        <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg inline-flex items-center gap-1.5 transition-colors hover:text-brand-700 hover:bg-brand-50 {{ request()->routeIs('about', 'quality') ? 'text-brand-700 font-semibold bg-brand-50/80' : '' }}">
                            <span>About Us</span>
                            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180 text-slate-400 group-hover:text-brand-700"></i>
                        </a>

                        <div class="absolute left-0 top-full pt-2 w-56 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 z-50">
                            <div class="bg-white rounded-xl shadow-xl border border-slate-100 p-2.5">
                                <a href="{{ route('about') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition-colors">
                                    <i class="fa-solid fa-building w-4 text-center text-brand-500"></i> Company Overview
                                </a>
                                <a href="{{ route('quality') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition-colors">
                                    <i class="fa-solid fa-vial-circle-check w-4 text-center text-brand-500"></i> Quality Standards
                                </a>
                                <a href="{{ route('careers.index') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition-colors">
                                    <i class="fa-solid fa-briefcase w-4 text-center text-brand-500"></i> Careers
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Products Dropdown -->
                    <div class="relative group">
                        <a href="{{ route('products.index') }}" class="px-3 py-2 rounded-lg inline-flex items-center gap-1.5 transition-colors hover:text-brand-700 hover:bg-brand-50 {{ request()->routeIs('products.*') ? 'text-brand-700 font-semibold bg-brand-50/80' : '' }}">
                            <span>Products</span>
                            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180 text-slate-400 group-hover:text-brand-700"></i>
                        </a>

                        <!-- Dropdown Menu -->
                        <div class="absolute left-0 top-full pt-2 w-80 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 z-50">
                            <div class="bg-white rounded-xl shadow-xl border border-slate-100 p-2.5 divide-y divide-slate-100">
                                <div class="pb-2">
                                    <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 py-1">Core Ammonium Bisulphite</div>
                                    <a href="{{ route('products.show', 'ammonium-bisulphite-70') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition-colors">
                                        <span class="w-2 h-2 rounded-full bg-brand-500"></span> Ammonium Bisulphite - 70%
                                    </a>
                                    <a href="{{ route('products.show', 'ammonium-bisulphite-65') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition-colors">
                                        <span class="w-2 h-2 rounded-full bg-brand-400"></span> Ammonium Bisulphite - 65%
                                    </a>
                                    <a href="{{ route('products.show', 'ammonium-bisulphite-60') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition-colors">
                                        <span class="w-2 h-2 rounded-full bg-brand-300"></span> Ammonium Bisulphite - 60%
                                    </a>
                                    <a href="{{ route('products.show', 'ammonium-bisulphite-food-grade') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-amber-50 hover:text-amber-800 transition-colors">
                                        <span class="w-2 h-2 rounded-full bg-amber-500"></span> Food Grade Ammonium Bisulphite
                                    </a>
                                </div>
                                <div class="pt-2">
                                    <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 py-1">Specialties & Catalyzed</div>
                                    <a href="{{ route('products.show', 'oxygen-scavenger') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-cyan-50 hover:text-cyan-800 transition-colors">
                                        <span class="w-2 h-2 rounded-full bg-cyan-500"></span> Oxygen Scavenger Formulation
                                    </a>
                                    <a href="{{ route('products.show', 'ammonium-sulphite-solution-40') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition-colors">
                                        <span class="w-2 h-2 rounded-full bg-indigo-500"></span> Ammonium Sulphite Solution 40%
                                    </a>
                                    <a href="{{ route('products.show', 'ammonium-bisulphite-nickel') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-800 transition-colors">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Nickel Catalyzed Bisulphite
                                    </a>
                                    <a href="{{ route('products.show', 'ammonium-bisulphite-cobalt') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-rose-50 hover:text-rose-800 transition-colors">
                                        <span class="w-2 h-2 rounded-full bg-rose-500"></span> Cobalt Catalyzed Bisulphite
                                    </a>
                                </div>
                                <div class="pt-2">
                                    <a href="{{ route('products.index') }}" class="block text-center text-xs font-bold text-brand-700 hover:text-brand-900 py-1.5 bg-slate-50 hover:bg-brand-50 rounded-lg transition-colors">
                                        View All 10 Products <i class="fa-solid fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('industries') }}" class="px-3 py-2 rounded-lg transition-colors hover:text-brand-700 hover:bg-brand-50 {{ request()->routeIs('industries') ? 'text-brand-700 font-semibold bg-brand-50/80' : '' }}">
                        Industries Served
                    </a>
                    <a href="{{ route('export') }}" class="px-3 py-2 rounded-lg transition-colors hover:text-brand-700 hover:bg-brand-50 {{ request()->routeIs('export') ? 'text-brand-700 font-semibold bg-brand-50/80' : '' }}">
                        Global Network
                    </a>
                    <a href="{{ route('blog.index') }}" class="px-3 py-2 rounded-lg transition-colors hover:text-brand-700 hover:bg-brand-50 {{ request()->routeIs('blog.*') ? 'text-brand-700 font-semibold bg-brand-50/80' : '' }}">
                        Blog
                    </a>
                    <a href="{{ route('faq') }}" class="px-3 py-2 rounded-lg transition-colors hover:text-brand-700 hover:bg-brand-50 {{ request()->routeIs('faq') ? 'text-brand-700 font-semibold bg-brand-50/80' : '' }}">
                        FAQ
                    </a>
                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded-lg transition-colors hover:text-brand-700 hover:bg-brand-50 {{ request()->routeIs('contact') ? 'text-brand-700 font-semibold bg-brand-50/80' : '' }}">
                        Contact Us
                    </a>
                </nav>

                <!-- Right Actions: Request Quote CTA & Mobile Menu Toggle -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('contact') }}" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-semibold text-sm rounded-xl shadow-md hover:shadow-lg transition-all duration-200">
                        <i class="fa-solid fa-paper-plane text-xs"></i>
                        <span>Request Quote</span>
                    </a>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="xl:hidden p-2.5 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none" aria-label="Toggle Navigation">
                        <i id="menu-icon" class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Overlay -->
    <div id="mobile-menu-overlay" class="hidden xl:hidden fixed inset-0 bg-navy-950/60 z-[100] opacity-0 transition-opacity duration-300"></div>

    <!-- Mobile Navigation Panel (slides in from left) -->
    <div id="mobile-menu" class="xl:hidden fixed top-0 left-0 h-full w-[80%] max-w-xs bg-white shadow-2xl z-[110] -translate-x-full transition-transform duration-300 ease-out overflow-y-auto">
        <div class="flex items-center justify-between px-4 h-16 border-b border-slate-200">
            <span class="text-lg font-bold font-display text-navy-900">Menu</span>
            <button id="mobile-menu-close" class="p-2 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-100" aria-label="Close Navigation">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        <nav class="flex flex-col gap-1 text-slate-700 font-medium text-sm px-4 pt-3 pb-6">
            <a href="{{ route('home') }}" class="px-3 py-2.5 rounded-lg hover:bg-brand-50 hover:text-brand-700 {{ request()->routeIs('home') ? 'bg-brand-50 font-bold text-brand-700' : '' }}">Home</a>

            <!-- About Dropdown (mobile accordion) -->
            <details class="group">
                <summary class="flex items-center justify-between px-3 py-2.5 rounded-lg hover:bg-brand-50 hover:text-brand-700 cursor-pointer list-none {{ request()->routeIs('about', 'quality') ? 'bg-brand-50 font-bold text-brand-700' : '' }}">
                    <span>About Us</span>
                    <i class="fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-200 group-open:rotate-180"></i>
                </summary>
                <div class="pl-4 pb-1 flex flex-col gap-1">
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700 {{ request()->routeIs('about') ? 'text-brand-700 font-semibold' : '' }}">Company Overview</a>
                    <a href="{{ route('quality') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700 {{ request()->routeIs('quality') ? 'text-brand-700 font-semibold' : '' }}">Quality Standards</a>
                    <a href="{{ route('careers.index') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700 {{ request()->routeIs('careers.*') ? 'text-brand-700 font-semibold' : '' }}">Careers</a>
                </div>
            </details>

            <!-- Products Dropdown (mobile accordion) -->
            <details class="group">
                <summary class="flex items-center justify-between px-3 py-2.5 rounded-lg hover:bg-brand-50 hover:text-brand-700 cursor-pointer list-none {{ request()->routeIs('products.*') ? 'bg-brand-50 font-bold text-brand-700' : '' }}">
                    <span>Our Products (10)</span>
                    <i class="fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-200 group-open:rotate-180"></i>
                </summary>
                <div class="pl-4 pb-1 flex flex-col gap-1">
                    <a href="{{ route('products.show', 'ammonium-bisulphite-70') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700">Ammonium Bisulphite - 70%</a>
                    <a href="{{ route('products.show', 'ammonium-bisulphite-65') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700">Ammonium Bisulphite - 65%</a>
                    <a href="{{ route('products.show', 'ammonium-bisulphite-60') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700">Ammonium Bisulphite - 60%</a>
                    <a href="{{ route('products.show', 'ammonium-bisulphite-food-grade') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700">Food Grade Ammonium Bisulphite</a>
                    <a href="{{ route('products.show', 'oxygen-scavenger') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700">Oxygen Scavenger Formulation</a>
                    <a href="{{ route('products.show', 'ammonium-sulphite-solution-40') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700">Ammonium Sulphite Solution 40%</a>
                    <a href="{{ route('products.show', 'ammonium-bisulphite-nickel') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700">Nickel Catalyzed Bisulphite</a>
                    <a href="{{ route('products.show', 'ammonium-bisulphite-cobalt') }}" class="px-3 py-2 rounded-lg text-sm hover:bg-brand-50 hover:text-brand-700">Cobalt Catalyzed Bisulphite</a>
                    <a href="{{ route('products.index') }}" class="px-3 py-2 rounded-lg text-sm font-bold text-brand-700 hover:bg-brand-50">View All 10 Products <i class="fa-solid fa-arrow-right ml-1 text-[10px]"></i></a>
                </div>
            </details>

            <a href="{{ route('industries') }}" class="px-3 py-2.5 rounded-lg hover:bg-brand-50 hover:text-brand-700 {{ request()->routeIs('industries') ? 'bg-brand-50 font-bold text-brand-700' : '' }}">Industries Served</a>
            <a href="{{ route('export') }}" class="px-3 py-2.5 rounded-lg hover:bg-brand-50 hover:text-brand-700 {{ request()->routeIs('export') ? 'bg-brand-50 font-bold text-brand-700' : '' }}">Global Export</a>
            <a href="{{ route('blog.index') }}" class="px-3 py-2.5 rounded-lg hover:bg-brand-50 hover:text-brand-700 {{ request()->routeIs('blog.*') ? 'bg-brand-50 font-bold text-brand-700' : '' }}">Blog</a>
            <a href="{{ route('faq') }}" class="px-3 py-2.5 rounded-lg hover:bg-brand-50 hover:text-brand-700 {{ request()->routeIs('faq') ? 'bg-brand-50 font-bold text-brand-700' : '' }}">FAQ</a>
            <a href="{{ route('contact') }}" class="px-3 py-2.5 rounded-lg hover:bg-brand-50 hover:text-brand-700 {{ request()->routeIs('contact') ? 'bg-brand-50 font-bold text-brand-700' : '' }}">Contact Us</a>
            <div class="pt-3">
                <a href="{{ route('contact') }}" class="w-full inline-flex justify-center items-center gap-2 px-5 py-3 bg-brand-700 text-white font-semibold text-sm rounded-xl shadow-md">
                    <i class="fa-solid fa-paper-plane text-xs"></i> Request a Quote
                </a>
            </div>
        </nav>
    </div>

    <!-- Flash Notifications -->
    @if(session('success'))
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-800 p-4 rounded-r-lg shadow-sm flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-check text-emerald-500 text-lg"></i>
                    <p class="text-sm font-medium">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-700">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-800 p-4 rounded-r-lg shadow-sm flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-exclamation text-rose-500 text-lg"></i>
                    <p class="text-sm font-medium">{{ session('error') }}</p>
                </div>
                <button onclick="this.parentElement.remove()" class="text-rose-500 hover:text-rose-700">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    @endif

    <!-- Main Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Quick WhatsApp / Call Floating CTA -->
    <aside aria-label="Quick Contact Actions" class="fixed bottom-6 right-6 z-40 flex flex-col gap-3">
        <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] }}?text=Hello%20Uma%20Dye%20Chem,%20I%20am%20interested%20in%20your%20Ammonium%20Bisulphite%20products" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-13 h-13 rounded-full bg-emerald-500 text-white shadow-xl hover:bg-emerald-600 hover:scale-110 transition-all duration-200 p-3.5" title="Chat on WhatsApp">
            <i class="fa-brands fa-whatsapp text-2xl"></i>
        </a>
        <a href="{{ route('contact') }}" class="flex items-center justify-center w-13 h-13 rounded-full bg-brand-700 text-white shadow-xl hover:bg-brand-800 hover:scale-110 transition-all duration-200 p-3.5" title="Request Chemical Quotation">
            <i class="fa-solid fa-comment-dots text-xl"></i>
        </a>
    </aside>

    <!-- Modern Corporate Footer -->
    <footer class="bg-navy-950 text-slate-300 pt-16 pb-8 border-t border-navy-800">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-navy-800/80">
                
                <!-- Col 1: About Company -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="bg-white p-1 rounded-lg">
                            <img src="{{ asset('logo.png') }}" alt="Uma Dye Chem" class="h-10 w-auto object-contain">
                        </div>
                        <span class="text-xl font-extrabold font-display leading-none tracking-tight whitespace-nowrap">
                            <span class="text-white">UMA DYE</span><span class="text-brand-400"> CHEM</span>
                        </span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Pioneer manufacturer, supplier & global exporter of high-purity Ammonium Bisulphite solutions, Oxygen Scavengers, and specialty sulfur chemicals. Operating continuously since 1984 in Gujarat, India.
                    </p>
                    <div class="pt-2 flex items-center gap-3 text-cyan-400 text-xs font-semibold">
                        <i class="fa-solid fa-shield-halved text-brand-400"></i> ISO Compliant &bull; Quality Assured
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h3 class="text-white font-semibold text-sm uppercase tracking-wider mb-4 border-l-2 border-brand-500 pl-3">
                        Quick Navigation
                    </h3>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> About Our Company</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> All Chemical Products</a></li>
                        <li><a href="{{ route('industries') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> Industries Served</a></li>
                        <li><a href="{{ route('quality') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> Quality & Laboratory</a></li>
                        <li><a href="{{ route('export') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> Global Export Network</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> Blog & Insights</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> FAQs</a></li>
                        <li><a href="{{ route('careers.index') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> Careers</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-brand-500"></i> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Key Products -->
                <div>
                    <h3 class="text-white font-semibold text-sm uppercase tracking-wider mb-4 border-l-2 border-brand-500 pl-3">
                        Core Products
                    </h3>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="{{ route('products.show', 'ammonium-bisulphite-70') }}" class="hover:text-cyan-400 transition-colors">Ammonium Bisulphite - 70%</a></li>
                        <li><a href="{{ route('products.show', 'ammonium-bisulphite-65') }}" class="hover:text-cyan-400 transition-colors">Ammonium Bisulphite - 65%</a></li>
                        <li><a href="{{ route('products.show', 'ammonium-bisulphite-60') }}" class="hover:text-cyan-400 transition-colors">Ammonium Bisulphite - 60%</a></li>
                        <li><a href="{{ route('products.show', 'ammonium-bisulphite-40') }}" class="hover:text-cyan-400 transition-colors">Ammonium Bisulphite - 40%</a></li>
                        <li><a href="{{ route('products.show', 'ammonium-bisulphite-food-grade') }}" class="hover:text-cyan-400 transition-colors">Ammonium Bisulphite Food Grade</a></li>
                        <li><a href="{{ route('products.show', 'ammonium-sulphite-solution-40') }}" class="hover:text-cyan-400 transition-colors">Ammonium Sulphite Solution - 40%</a></li>
                        <li><a href="{{ route('products.show', 'oxygen-scavenger') }}" class="hover:text-cyan-400 transition-colors">Oxygen Scavenger Formulation</a></li>
                        <li><a href="{{ route('products.show', 'ammonium-bisulphite-nickel') }}" class="hover:text-cyan-400 transition-colors">Ammonium Bisulphite Nickel</a></li>
                        <li><a href="{{ route('products.show', 'ammonium-bisulphite-cobalt') }}" class="hover:text-cyan-400 transition-colors">Ammonium Bisulphite Cobalt</a></li>
                    </ul>
                </div>

                <!-- Col 4: Factory & Contact Info -->
                <div>
                    <h3 class="text-white font-semibold text-sm uppercase tracking-wider mb-4 border-l-2 border-brand-500 pl-3">
                        Manufacturing Works
                    </h3>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-industry text-brand-400 mt-1"></i>
                            <span>{{ $siteSettings['address'] }}</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-phone text-brand-400"></i>
                            <span>{{ $siteSettings['phone'] }}@if($siteSettings['phone_alt']), {{ $siteSettings['phone_alt'] }}@endif</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-envelope text-brand-400"></i>
                            <span class="break-all">{{ $siteSettings['email'] }}</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-clock text-brand-400"></i>
                            <span>{{ $siteSettings['working_hours'] }}</span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} <strong>Uma Dye Chem</strong>. All rights reserved. Trusted Chemical Manufacturing Since 1984.</p>
                <div class="flex items-center gap-4">
                    <span>Unjha, Gujarat (India)</span>
                    <span>&bull;</span>
                    <a href="{{ route('admin.login') }}" class="text-slate-500 hover:text-slate-300 transition-colors">Staff Login</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const menuIcon = document.getElementById('menu-icon');

        function openMobileMenu() {
            mobileMenuOverlay.classList.remove('hidden');
            requestAnimationFrame(() => {
                mobileMenuOverlay.classList.remove('opacity-0');
                mobileMenu.classList.remove('-translate-x-full');
            });
            menuIcon.classList.remove('fa-bars');
            menuIcon.classList.add('fa-xmark');
            document.body.classList.add('overflow-hidden');
        }

        function closeMobileMenu() {
            mobileMenuOverlay.classList.add('opacity-0');
            mobileMenu.classList.add('-translate-x-full');
            menuIcon.classList.remove('fa-xmark');
            menuIcon.classList.add('fa-bars');
            document.body.classList.remove('overflow-hidden');
            setTimeout(() => mobileMenuOverlay.classList.add('hidden'), 300);
        }

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                const isOpen = !mobileMenu.classList.contains('-translate-x-full');
                isOpen ? closeMobileMenu() : openMobileMenu();
            });
            mobileMenuClose?.addEventListener('click', closeMobileMenu);
            mobileMenuOverlay?.addEventListener('click', closeMobileMenu);
        }

        // Language Switcher — drives the hidden Google Translate widget directly (no reload, no cookie quirks)
        function fireChangeEvent(el) {
            try {
                const evt = document.createEvent('HTMLEvents');
                evt.initEvent('change', true, true);
                el.dispatchEvent(evt);
            } catch (e) {
                el.dispatchEvent(new Event('change'));
            }
        }

        function applyTranslation(code, attempt) {
            attempt = attempt || 0;
            const combo = document.querySelector('select.goog-te-combo');
            if (!combo) {
                if (attempt < 40) { setTimeout(() => applyTranslation(code, attempt + 1), 250); }
                return;
            }
            combo.value = code;
            fireChangeEvent(combo);
        }

        document.querySelectorAll('.lang-option').forEach((option) => {
            option.addEventListener('click', () => {
                const code = option.getAttribute('data-gtcode');
                const label = option.getAttribute('data-lang-label');
                const flag = option.getAttribute('data-flag');

                const currentLangEl = document.getElementById('current-lang');
                const currentFlagEl = document.getElementById('current-lang-flag');
                if (currentLangEl) currentLangEl.textContent = label;
                if (currentFlagEl && flag) currentFlagEl.className = 'fi ' + flag + ' rounded-[2px]';

                localStorage.setItem('preferredLangLabel', label);
                localStorage.setItem('preferredLangFlag', flag);
                localStorage.setItem('preferredLangCode', code);

                applyTranslation(code);
            });
        });

        // Re-apply the saved language choice on every new page load, and restore the dropdown's flag/label
        (function restoreLangOnLoad() {
            const savedLabel = localStorage.getItem('preferredLangLabel');
            const savedFlag = localStorage.getItem('preferredLangFlag');
            const savedCode = localStorage.getItem('preferredLangCode');
            const currentLangEl = document.getElementById('current-lang');
            const currentFlagEl = document.getElementById('current-lang-flag');
            if (savedLabel && currentLangEl) currentLangEl.textContent = savedLabel;
            if (savedFlag && currentFlagEl) currentFlagEl.className = 'fi ' + savedFlag + ' rounded-[2px]';
            if (savedCode && savedCode !== 'en') {
                applyTranslation(savedCode);
            }
        })();
    </script>

    <!-- Google Translate (background engine for the language switcher above) -->
    <div id="google_translate_element"></div>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', autoDisplay: false }, 'google_translate_element');
        }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    @stack('scripts')
</body>
</html>


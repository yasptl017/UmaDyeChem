<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | Uma Dye Chem Administration</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eef8ff',
                            100: '#d9efff',
                            600: '#157af0',
                            700: '#0c61dd',
                            800: '#104eb3',
                            900: '#13438d',
                            950: '#0b2656',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans antialiased min-h-screen flex flex-col">

    <!-- Top Admin Header -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-30 shadow-xs">
        <div class="px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <div class="flex items-center gap-2 sm:gap-4">
                <!-- Sidebar Toggle (mobile) -->
                <button id="admin-sidebar-btn" class="md:hidden p-2 -ml-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none" aria-label="Toggle Sidebar">
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                    <img src="{{ asset('logo.png') }}" alt="Uma Dye Chem" class="h-9 w-auto">
                    <span class="font-bold text-lg text-slate-900 hidden sm:inline">Uma Dye Chem <span class="text-xs font-semibold px-2 py-0.5 rounded-full bg-brand-50 text-brand-700 border border-brand-200">Admin Control</span></span>
                </a>
            </div>

            <div class="flex items-center gap-2 sm:gap-4">
                <a href="{{ route('home') }}" target="_blank" class="text-xs font-semibold text-slate-600 hover:text-brand-700 flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-slate-200 hover:border-brand-300 transition-colors">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i> <span class="hidden sm:inline">View Website</span>
                </a>

                <div class="h-6 w-px bg-slate-200 hidden sm:block"></div>

                <a href="{{ route('admin.profile.edit') }}" class="flex items-center gap-3 hover:opacity-80 transition-opacity" title="My Account & Security">
                    <div class="w-8 h-8 rounded-full bg-brand-700 text-white font-bold flex items-center justify-center text-xs">
                        {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                    </div>
                    <span class="text-sm font-medium text-slate-700 hidden md:inline">{{ auth()->user()->name ?? 'Admin' }}</span>
                </a>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-xs text-rose-600 hover:text-rose-800 font-semibold px-2.5 py-1.5 rounded hover:bg-rose-50 transition-colors flex items-center gap-1">
                        <i class="fa-solid fa-right-from-bracket"></i> <span class="hidden sm:inline">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Sidebar Overlay (mobile) -->
    <div id="admin-sidebar-overlay" class="hidden md:hidden fixed inset-0 bg-slate-900/60 z-[100] opacity-0 transition-opacity duration-300"></div>

    <div class="flex-grow flex">
        <!-- Sidebar Navigation -->
        <aside id="admin-sidebar" class="w-64 bg-slate-900 text-slate-300 flex-shrink-0 fixed md:static top-0 left-0 h-full md:h-auto z-[110] -translate-x-full md:translate-x-0 transition-transform duration-300 ease-out overflow-y-auto">
            <div class="flex items-center justify-between px-4 h-16 border-b border-slate-800 md:hidden">
                <span class="font-bold text-white">Menu</span>
                <button id="admin-sidebar-close" class="p-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800" aria-label="Close Sidebar">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
            <div class="p-4 space-y-1">
                <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 py-2">Management</div>
                
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <i class="fa-solid fa-gauge w-5 text-center"></i>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('admin.products.index') }}" class="flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.products.*') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-flask w-5 text-center"></i>
                        <span>Chemical Products</span>
                    </div>
                    <span class="text-xs px-2 py-0.5 rounded-full bg-slate-800 text-slate-300 font-bold">10</span>
                </a>

                <a href="{{ route('admin.inquiries.index') }}" class="flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.inquiries.*') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope w-5 text-center"></i>
                        <span>Customer Inquiries</span>
                    </div>
                    @php $unreadCount = \App\Models\Inquiry::unread()->count(); @endphp
                    @if($unreadCount > 0)
                        <span class="text-xs px-2 py-0.5 rounded-full bg-rose-500 text-white font-bold">{{ $unreadCount }}</span>
                    @endif
                </a>

                <div class="pt-4 text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 py-2">Content</div>

                <a href="{{ route('admin.blog.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.blog.*') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <i class="fa-solid fa-newspaper w-5 text-center"></i>
                    <span>Blog & Articles</span>
                </a>

                <a href="{{ route('admin.faqs.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.faqs.*') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <i class="fa-solid fa-circle-question w-5 text-center"></i>
                    <span>FAQs</span>
                </a>

                <a href="{{ route('admin.careers.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.careers.*') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <i class="fa-solid fa-briefcase w-5 text-center"></i>
                    <span>Careers</span>
                </a>

                <a href="{{ route('admin.export-countries.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.export-countries.*') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <i class="fa-solid fa-earth-americas w-5 text-center"></i>
                    <span>Export Network Map</span>
                </a>

                <a href="{{ route('admin.partners.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.partners.*') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <i class="fa-solid fa-user-tie w-5 text-center"></i>
                    <span>Partners & Leadership</span>
                </a>

                <div class="pt-4 text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 py-2">Configuration</div>

                <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.settings.*') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <i class="fa-solid fa-sliders w-5 text-center"></i>
                    <span>Company & SEO Settings</span>
                </a>

                <a href="{{ route('admin.profile.edit') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.profile.*') ? 'bg-brand-700 text-white shadow-sm' : 'hover:bg-slate-800 hover:text-white' }}">
                    <i class="fa-solid fa-user-shield w-5 text-center"></i>
                    <span>My Account & Security</span>
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-grow p-4 sm:p-6 lg:p-8 overflow-y-auto">
            <!-- Breadcrumbs & Heading -->
            <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">@yield('page_title', 'Dashboard')</h1>
                    <p class="text-sm text-slate-500 mt-1">@yield('page_subtitle', 'Manage Uma Dye Chem website content, products and client inquiries.')</p>
                </div>
                <div>
                    @yield('header_actions')
                </div>
            </div>

            <!-- Alerts -->
            @if(session('success'))
                <div class="mb-6 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-800 p-4 rounded-r-lg shadow-xs flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-emerald-500"></i>
                        <span class="text-sm font-medium">{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-700">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 bg-rose-50 border-l-4 border-rose-500 text-rose-800 p-4 rounded-r-lg shadow-xs">
                    <div class="flex items-center gap-3 mb-2 font-semibold text-sm">
                        <i class="fa-solid fa-circle-exclamation text-rose-500"></i>
                        <span>Please correct the following errors:</span>
                    </div>
                    <ul class="list-disc list-inside text-xs space-y-1 text-rose-700">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        const sidebarBtn = document.getElementById('admin-sidebar-btn');
        const sidebar = document.getElementById('admin-sidebar');
        const sidebarClose = document.getElementById('admin-sidebar-close');
        const sidebarOverlay = document.getElementById('admin-sidebar-overlay');

        function openSidebar() {
            sidebarOverlay.classList.remove('hidden');
            requestAnimationFrame(() => {
                sidebarOverlay.classList.remove('opacity-0');
                sidebar.classList.remove('-translate-x-full');
            });
            document.body.classList.add('overflow-hidden');
        }

        function closeSidebar() {
            sidebarOverlay.classList.add('opacity-0');
            sidebar.classList.add('-translate-x-full');
            document.body.classList.remove('overflow-hidden');
            setTimeout(() => sidebarOverlay.classList.add('hidden'), 300);
        }

        if (sidebarBtn && sidebar) {
            sidebarBtn.addEventListener('click', () => {
                const isOpen = !sidebar.classList.contains('-translate-x-full');
                isOpen ? closeSidebar() : openSidebar();
            });
            sidebarClose?.addEventListener('click', closeSidebar);
            sidebarOverlay?.addEventListener('click', closeSidebar);
        }
    </script>

    @stack('scripts')
</body>
</html>


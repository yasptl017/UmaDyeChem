<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Uma Dye Chem</title>
    
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
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
<body class="bg-slate-900 min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full">
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center bg-white p-2.5 rounded-2xl shadow-xl mb-4">
                <img src="{{ asset('logo.png') }}" alt="Uma Dye Chem" class="h-16 w-auto object-contain">
            </div>
            <h1 class="text-2xl font-bold font-display text-white">UMA DYE CHEM</h1>
            <p class="text-xs text-slate-400 mt-1">Administration & Content Management System</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-3xl p-8 shadow-2xl border border-slate-100">
            <h2 class="text-lg font-bold text-slate-900 mb-6">Staff Authentication</h2>

            @if($errors->any())
                <div class="mb-4 p-3 rounded-lg bg-rose-50 text-rose-700 text-xs border border-rose-200">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Email Address</label>
                    <div class="relative">
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full pl-9 pr-3 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 text-slate-800">
                        <i class="fa-solid fa-envelope absolute left-3 top-3.5 text-slate-400 text-xs"></i>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Password</label>
                    <div class="relative">
                        <input type="password" name="password" required class="w-full pl-9 pr-3 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700 text-slate-800">
                        <i class="fa-solid fa-lock absolute left-3 top-3.5 text-slate-400 text-xs"></i>
                    </div>
                </div>

                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center gap-2 text-slate-600 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded border-slate-300 text-brand-700 focus:ring-0">
                        <span>Remember session</span>
                    </label>
                </div>

                <button type="submit" class="w-full py-3 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-right-to-bracket"></i> Sign In to Admin Panel
                </button>
            </form>

            <div class="mt-6 pt-4 border-t border-slate-100 text-center">
                <a href="{{ route('home') }}" class="text-xs text-slate-500 hover:text-brand-700 font-semibold flex items-center justify-center gap-1.5">
                    <i class="fa-solid fa-arrow-left text-[10px]"></i> Back to Public Website
                </a>
            </div>
        </div>

        <div class="text-center text-xs text-slate-500 mt-6">
            &copy; {{ date('Y') }} Uma Dye Chem. All rights reserved.
        </div>
    </div>

</body>
</html>


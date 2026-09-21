<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Admin Portal | Angels Home Health of Florida' }}</title>
    <meta name="description" content="Angels Home Health Admin Management Portal">

    <!-- Google Fonts: Plus Jakarta Sans & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Remix Icon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        [x-cloak] { display: none !important; }

        body {
            font-family: 'Inter', 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #fafafa;
            color: #09090b;
            -webkit-font-smoothing: antialiased;
        }

        .font-heading {
            font-family: 'Inter', 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body x-data="{ sidebarOpen: false, sidebarCollapsed: false }" class="antialiased min-h-screen bg-zinc-50/50 text-zinc-950 selection:bg-zinc-900 selection:text-zinc-50 flex flex-col">

    <!-- MOBILE SIDEBAR BACKDROP -->
    <div x-show="sidebarOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false"
         x-cloak
         class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-40 lg:hidden"></div>

    <div class="flex flex-1 min-h-screen">
        
        <!-- SLEEK MINIMAL SIDEBAR -->
        <livewire:admin.sidebar />

        <!-- MAIN WRAPPER -->
        <div class="flex-1 flex flex-col min-w-0 transition-all duration-300 lg:pl-64" x-bind:class="sidebarCollapsed ? 'lg:pl-20' : 'lg:pl-64'">
            
            <!-- SLEEK MINIMAL HEADER -->
            <livewire:admin.header />

            <!-- MAIN CONTENT AREA -->
            <main class="flex-1 p-4 sm:p-6 lg:p-8 max-w-7xl w-full mx-auto space-y-8">
                @yield('content', $slot ?? '')
            </main>

            <!-- MINIMAL FOOTER -->
            <footer class="bg-white border-t border-zinc-200/80 py-4 px-6 text-center sm:text-left text-xs text-zinc-500">
                <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3">
                    <p class="font-normal text-zinc-500">© {{ date('Y') }} Angels Home Health of Florida. All rights reserved.</p>
                    <div class="flex items-center gap-4 text-xs font-medium">
                        <span class="inline-flex items-center gap-1.5 text-zinc-700 bg-zinc-100 px-2.5 py-0.5 rounded-full text-[11px] border border-zinc-200 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            <span>System Active</span>
                        </span>
                        <span class="text-zinc-400 font-mono text-[11px]">v2.4.0</span>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    @livewireScripts
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Staff Authentication | Angels Home Health of Florida' }}</title>
    <meta name="description" content="Angels Home Health Staff Portal Login">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

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
            background-color: #000000;
            color: #ffffff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .font-heading {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>
<body class="antialiased selection:bg-[#C8A14F] selection:text-[#000000] min-h-screen bg-[#000000] text-white flex items-center justify-center p-4 sm:p-6 relative overflow-x-hidden">

    <!-- Subtle Ambient Radial Gold Glow -->
    <div class="fixed inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_40%,rgba(200,161,79,0.12)_0,transparent_70%)] pointer-events-none"></div>

    <main class="w-full max-w-md my-auto relative z-10 flex flex-col items-center justify-center">
        @yield('content', $slot ?? '')
    </main>

    @livewireScripts
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Angels Home Health of Florida | Mount Dora & Statewide In-Home Care' }}</title>
    <meta name="description" content="Angels Home Health of Florida delivers compassionate, personalized home health care in Mount Dora and across Florida. Skilled Nursing, Physical Therapy, Behavioral Health & Chronic Disease Management.">

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

        /* CSS Variables with Primary Color #C8A14F & Pure Pitch Black Dark Theme */
        :root {
            --primary-color: #C8A14F;
            --primary-hover: #d8b260;
            --primary-light: #e4c67d;
            --primary-dark: #ab8b25;
            --primary-muted: rgba(200, 161, 79, 0.15);
            --primary-border: rgba(200, 161, 79, 0.35);

            --color-bg-black: #000000;
            --color-bg-surface: #0a0a0a;
            --color-bg-card: #121212;
            --color-bg-elevated: #1a1a1a;

            --text-primary: #ffffff;
            --text-secondary: #a1a1aa;
            --text-muted: #71717a;

            --border-dark: #27272a;
        }

        body {
            background-color: var(--color-bg-black);
            color: var(--text-primary);
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .font-heading, .font-display {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .font-outfit {
            font-family: 'Outfit', sans-serif;
        }

        /* Pure Black Dark Theme Classes */
        .bg-pure-black { background-color: var(--color-bg-black); }
        .bg-surface-dark { background-color: var(--color-bg-surface); }
        .bg-card-dark { background-color: var(--color-bg-card); }
        .bg-elevated-dark { background-color: var(--color-bg-elevated); }

        .text-primary-gold { color: var(--primary-color); }
        .bg-primary-gold { background-color: var(--primary-color); }
        .bg-primary-hover:hover { background-color: var(--primary-hover); }
        .border-primary-gold { border-color: var(--primary-color); }
        .border-gold-subtle { border-color: var(--primary-border); }
        .border-dark-subtle { border-color: var(--border-dark); }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #000000;
        }
        ::-webkit-scrollbar-thumb {
            background: #27272a;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }

        /* Progress Bar Animation for Slider */
        @keyframes slideProgress {
            0% { width: 0%; }
            100% { width: 100%; }
        }
        .animate-progress {
            animation: slideProgress 5s linear infinite;
        }
    </style>
</head>
<body class="antialiased selection:bg-[#C8A14F] selection:text-[#000000] min-h-screen flex flex-col justify-between bg-[#000000] text-white">

    <livewire:public.header />

    <main class="flex-grow">
        @yield('content', $slot ?? '')
    </main>

    <!-- Floating Sticky WhatsApp Circular Icon Button -->
    <a href="{{ whatsapp_url() }}"
       target="_blank"
       rel="noopener noreferrer"
       class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-emerald-500 hover:bg-emerald-400 text-white flex items-center justify-center shadow-2xl transition-all transform hover:scale-110 border border-emerald-400/40 group"
       title="Chat on WhatsApp"
       aria-label="Chat on WhatsApp">
        <i class="ri-whatsapp-fill text-3xl text-white"></i>
        <span class="absolute -inset-0.5 rounded-full bg-emerald-500 opacity-75 animate-ping pointer-events-none -z-10"></span>
    </a>

    @livewireScripts
</body>
</html>

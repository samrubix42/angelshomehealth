<div>
    <!-- 1. TOP UTILITY INFORMATION BAR -->
    <div class="bg-[#050505] border-b border-[#1f1f23] py-2.5 px-4 text-xs">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-2 text-[#a1a1aa]">
            <div class="flex items-center gap-4 flex-wrap justify-center md:justify-start">
                <span class="inline-flex items-center gap-1.5 text-[#C8A14F] font-semibold">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    3400, CR 19-A, Mt Dora, FL 32757
                </span>
                <span class="hidden sm:inline text-[#27272a]">|</span>
                <span>ACHC Accredited & Licensed Home Health Provider</span>
            </div>
            <div class="flex items-center gap-5 text-[#cbd5e1]">
                <a href="tel:13527292727" class="hover:text-[#C8A14F] transition-colors flex items-center gap-1.5 font-medium">
                    <svg class="w-3.5 h-3.5 text-[#C8A14F]" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                    +1 352 729 2727
                </a>
                <span class="text-[#27272a]">|</span>
                <a href="mailto:info@angelshomehealthfl.com" class="hover:text-[#C8A14F] transition-colors">
                    info@angelshomehealthfl.com
                </a>
            </div>
        </div>
    </div>

    <!-- 2. MAIN STICKY NAVIGATION BAR -->
    <header class="sticky top-0 z-50 bg-[#000000] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-24 sm:h-28">
                <!-- Brand Logo (Image ONLY - Prominent & Increased Size) -->
                <a href="#" class="flex items-center py-2 group">
                    <img src="/logo.png" alt="Angels Home Health Logo" class="h-16 sm:h-20 w-auto object-contain transition-transform group-hover:scale-105">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-8 text-sm font-heading font-medium text-[#a1a1aa]">
                    <a href="#home" class="text-[#C8A14F] font-semibold hover:text-[#d8b260] transition-colors">Home</a>
                    <a href="#why-us" class="hover:text-[#C8A14F] transition-colors">Why Choose Us</a>
                    <a href="#difference" class="hover:text-[#C8A14F] transition-colors">What Makes Us Different</a>
                    <a href="#services" class="hover:text-[#C8A14F] transition-colors">Services</a>
                    <a href="#mission" class="hover:text-[#C8A14F] transition-colors">Mission & Vision</a>
                    <a href="#consultation" class="hover:text-[#C8A14F] transition-colors">Contact</a>
                </nav>

                <!-- Header CTA Action -->
                <div class="hidden sm:flex items-center gap-4">
                    <a href="#consultation" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-6 py-3 rounded text-sm transition-colors uppercase tracking-wider">
                        Schedule Consultation
                    </a>
                </div>

                <!-- Mobile Menu Toggle Button -->
                <button wire:click="toggleMobileMenu" type="button" class="lg:hidden text-[#a1a1aa] hover:text-[#C8A14F] p-2 focus:outline-none" aria-label="Toggle menu">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        @if($mobileMenuOpen)
            <div class="lg:hidden bg-[#0a0a0a] border-b border-[#27272a] px-4 pt-3 pb-6 space-y-3 text-sm font-heading font-medium">
                <a href="#home" wire:click="toggleMobileMenu" class="block text-[#C8A14F] py-2">Home</a>
                <a href="#why-us" wire:click="toggleMobileMenu" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2">Why Choose Us</a>
                <a href="#difference" wire:click="toggleMobileMenu" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2">What Makes Us Different</a>
                <a href="#services" wire:click="toggleMobileMenu" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2">Services</a>
                <a href="#mission" wire:click="toggleMobileMenu" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2">Mission & Vision</a>
                <a href="#consultation" wire:click="toggleMobileMenu" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2">Contact Us</a>
                <div class="pt-3">
                    <a href="#consultation" wire:click="toggleMobileMenu" class="block text-center bg-[#C8A14F] text-[#000000] font-bold py-2.5 rounded">Schedule Consultation</a>
                </div>
            </div>
        @endif
    </header>
</div>
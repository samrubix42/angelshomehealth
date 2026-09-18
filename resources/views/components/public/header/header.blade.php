<div>
    <!-- 1. TOP UTILITY INFORMATION BAR -->
    <div class="bg-[#050505] border-b border-[#1f1f23] py-2 px-4 text-[11px] sm:text-xs">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-3 text-[#a1a1aa]">
            <!-- Left Info (Location & Accreditation) -->
            <div class="flex items-center gap-2 sm:gap-4 truncate">
                <span class="inline-flex items-center gap-1.5 text-[#C8A14F] font-semibold truncate">
                    <i class="ri-map-pin-line text-xs sm:text-sm shrink-0"></i>
                    <span class="truncate">Mt Dora, FL 32757</span>
                </span>
                <span class="hidden md:inline text-[#27272a]">|</span>
                <span class="hidden md:inline text-[#8e8e93]">ACHC Accredited & Licensed Provider</span>
            </div>

            <!-- Right Info (Phone & Email) -->
            <div class="flex items-center gap-3 sm:gap-5 text-[#cbd5e1] shrink-0">
                <a href="tel:13527292727" class="hover:text-[#C8A14F] transition-colors flex items-center gap-1.5 font-semibold text-[#C8A14F] sm:text-[#cbd5e1]">
                    <i class="ri-phone-line text-xs sm:text-sm text-[#C8A14F]"></i>
                    <span>+1 352 729 2727</span>
                </a>
                <span class="hidden sm:inline text-[#27272a]">|</span>
                <a href="mailto:info@angelshomehealthfl.com" class="hidden sm:flex hover:text-[#C8A14F] transition-colors items-center gap-1.5">
                    <i class="ri-mail-line text-xs sm:text-sm text-[#C8A14F]"></i>
                    <span>info@angelshomehealthfl.com</span>
                </a>
            </div>
        </div>
    </div>

    <!-- 2. MAIN STICKY NAVIGATION BAR WITH ALPINE MOBILE DRAWER -->
    <header x-data="{ mobileOpen: false }" class="sticky top-0 z-50 bg-[#000000]/95 backdrop-blur-md border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 sm:h-24">
                <!-- Brand Logo (Image ONLY) -->
                <a href="#" class="flex items-center py-2 group">
                    <img src="/logo.png" alt="Angels Home Health Logo" class="h-10 sm:h-14 w-auto object-contain transition-transform group-hover:scale-105">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-7 text-sm font-heading font-medium text-[#a1a1aa]">
                    <a href="#home" class="text-[#C8A14F] font-semibold hover:text-[#d8b260] transition-colors">Home</a>
                    <a href="#why-us" class="hover:text-[#C8A14F] transition-colors">Why Choose Us</a>
                    <a href="#difference" class="hover:text-[#C8A14F] transition-colors">What Makes Us Different</a>
                    <a href="#services" class="hover:text-[#C8A14F] transition-colors">Services</a>
                    <a href="#mission" class="hover:text-[#C8A14F] transition-colors">Mission & Vision</a>
                    <a href="#consultation" class="hover:text-[#C8A14F] transition-colors">Contact</a>
                </nav>

                <!-- Header CTA Action -->
                <div class="hidden sm:flex items-center gap-4">
                    <a href="#consultation" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-6 py-2.5 sm:px-7 sm:py-3 rounded-full text-xs sm:text-sm transition-all transform hover:scale-105 uppercase tracking-wider shadow-lg">
                        Schedule Consultation
                    </a>
                </div>

                <!-- Mobile Menu Toggle Button -->
                <button @click="mobileOpen = !mobileOpen" type="button" class="lg:hidden text-[#a1a1aa] hover:text-[#C8A14F] p-2 focus:outline-none" aria-label="Toggle menu">
                    <i :class="mobileOpen ? 'ri-close-line' : 'ri-menu-3-line'" class="text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu Drawer -->
        <div x-show="mobileOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             @click.away="mobileOpen = false"
             class="lg:hidden bg-[#0a0a0a] border-b border-[#27272a] px-4 pt-3 pb-6 space-y-3 text-sm font-heading font-medium shadow-2xl">
            <a href="#home" @click="mobileOpen = false" class="block text-[#C8A14F] py-2 border-b border-[#1f1f23]">Home</a>
            <a href="#why-us" @click="mobileOpen = false" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2 border-b border-[#1f1f23]">Why Choose Us</a>
            <a href="#difference" @click="mobileOpen = false" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2 border-b border-[#1f1f23]">What Makes Us Different</a>
            <a href="#services" @click="mobileOpen = false" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2 border-b border-[#1f1f23]">Services</a>
            <a href="#mission" @click="mobileOpen = false" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2 border-b border-[#1f1f23]">Mission & Vision</a>
            <a href="#consultation" @click="mobileOpen = false" class="block text-[#a1a1aa] hover:text-[#C8A14F] py-2">Contact Us</a>
            <div class="pt-3">
                <a href="#consultation" @click="mobileOpen = false" class="block text-center bg-[#C8A14F] text-[#000000] font-bold py-3 rounded-full uppercase tracking-wider text-xs">Schedule Consultation</a>
            </div>
        </div>
    </header>
</div>
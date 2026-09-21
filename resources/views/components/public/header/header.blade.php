<div x-data="{ 
            mobileOpen: false, 
            mobileServicesOpen: false,
            servicesOpen: false
        }">
    <!-- 1. TOP UTILITY INFORMATION BAR -->
    <div class="bg-[#050505] border-b border-[#1f1f23] py-1.5 px-4 text-[11px] sm:text-xs">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-3 text-[#a1a1aa]">
            <!-- Left Info (Location & Accreditation) -->
            <div class="flex items-center gap-2 sm:gap-4 truncate">
                <span class="inline-flex items-center gap-1.5 text-[#C8A14F] font-semibold truncate">
                    <i class="ri-map-pin-line text-xs sm:text-sm shrink-0"></i>
                    <span class="truncate">{{ setting('location', 'Mt Dora, FL 32757') }}</span>
                </span>
                <span class="hidden md:inline text-[#27272a]">|</span>
                <span class="hidden md:inline text-[#8e8e93]">ACHC Accredited & Licensed Provider</span>
            </div>

            <!-- Right Info (Phone, WhatsApp & Email) -->
            <div class="flex items-center gap-3 sm:gap-5 text-[#cbd5e1] shrink-0">
                <a href="{{ phone_url() }}" class="hover:text-[#C8A14F] transition-colors flex items-center gap-1.5 font-semibold text-[#C8A14F] sm:text-[#cbd5e1]">
                    <i class="ri-phone-line text-xs sm:text-sm text-[#C8A14F]"></i>
                    <span>{{ setting('phone', '+1 352 729 2727') }}</span>
                </a>
                @if (setting('whatsapp'))
                    <span class="hidden sm:inline text-[#27272a]">|</span>
                    <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="hidden sm:flex hover:text-emerald-400 transition-colors items-center gap-1 text-emerald-400 font-medium">
                        <i class="ri-whatsapp-line text-xs sm:text-sm"></i>
                        <span>WhatsApp</span>
                    </a>
                @endif
                <span class="hidden sm:inline text-[#27272a]">|</span>
                <a href="mailto:{{ setting('email', 'info@angelshomehealthfl.com') }}" class="hidden sm:flex hover:text-[#C8A14F] transition-colors items-center gap-1.5">
                    <i class="ri-mail-line text-xs sm:text-sm text-[#C8A14F]"></i>
                    <span>{{ setting('email', 'info@angelshomehealthfl.com') }}</span>
                </a>
            </div>
        </div>
    </div>

    <!-- 2. MAIN STICKY NAVIGATION BAR -->
    <header class="sticky top-0 z-40 bg-[#000000]/95 backdrop-blur-md border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-14 sm:h-16 lg:h-18">
                
                <!-- Brand Logo (Image ONLY) -->
                <a href="/" class="flex items-center py-1 group">
                    <img src="/logo.png" alt="Angels Home Health Logo" class="h-9 sm:h-11 w-auto object-contain transition-transform group-hover:scale-105">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-8 text-sm font-heading font-medium text-[#a1a1aa]">
                    <!-- Home -->
                    <a href="/" class="{{ request()->is('/') ? 'text-[#C8A14F] font-semibold' : 'hover:text-[#C8A14F]' }} transition-colors">
                        Home
                    </a>

                    <!-- About Us Link -->
                    <a href="/about" class="{{ request()->is('about*') ? 'text-[#C8A14F] font-semibold' : 'hover:text-[#C8A14F]' }} transition-colors">
                        About Us
                    </a>

                    <!-- Services Dropdown ONLY (Text Only, No Icons) -->
                    <div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                        <a href="/services" 
                           class="flex items-center gap-1.5 {{ request()->is('services*') ? 'text-[#C8A14F] font-semibold' : 'hover:text-[#C8A14F]' }} transition-colors py-2">
                            <span>Services</span>
                            <i class="ri-arrow-down-s-line text-base transition-transform duration-200" :class="servicesOpen ? 'rotate-180 text-[#C8A14F]' : ''"></i>
                        </a>

                        <div x-show="servicesOpen"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             x-cloak
                             class="absolute left-0 mt-0 w-64 bg-[#0a0a0a] border border-[#27272a] rounded-2xl shadow-2xl p-2 z-50 space-y-1">
                            <a href="/services" class="block px-4 py-2.5 rounded-xl hover:bg-[#121212] hover:text-[#C8A14F] text-xs font-bold text-[#C8A14F] border-b border-[#1f1f23] transition-colors">
                                All Services Overview
                            </a>
                            <a href="/services/skilled-nursing" class="block px-4 py-2 rounded-xl hover:bg-[#121212] hover:text-[#C8A14F] text-xs text-[#d4d4d8] transition-colors">
                                Skilled Nursing & Rehab
                            </a>
                            <a href="/services/physical-therapy" class="block px-4 py-2 rounded-xl hover:bg-[#121212] hover:text-[#C8A14F] text-xs text-[#d4d4d8] transition-colors">
                                Physical & Occupational Therapy
                            </a>
                            <a href="/services/behavioral-health" class="block px-4 py-2 rounded-xl hover:bg-[#121212] hover:text-[#C8A14F] text-xs text-[#d4d4d8] transition-colors">
                                Behavioral Health Services
                            </a>
                            <a href="/services/chronic-disease-management" class="block px-4 py-2 rounded-xl hover:bg-[#121212] hover:text-[#C8A14F] text-xs text-[#d4d4d8] transition-colors">
                                Chronic Disease Management
                            </a>
                            <a href="/services/memory-care" class="block px-4 py-2 rounded-xl hover:bg-[#121212] hover:text-[#C8A14F] text-xs text-[#d4d4d8] transition-colors">
                                Alzheimer's & Memory Care
                            </a>
                        </div>
                    </div>

                    <!-- Blog Link -->
                    <a href="/blog" class="{{ request()->is('blog*') ? 'text-[#C8A14F] font-semibold' : 'hover:text-[#C8A14F]' }} transition-colors">
                        Blog
                    </a>

                    <!-- Contact Link -->
                    <a href="/contact" class="{{ request()->is('contact*') ? 'text-[#C8A14F] font-semibold' : 'hover:text-[#C8A14F]' }} transition-colors">
                        Contact
                    </a>
                </nav>

                <!-- Header CTA Action -->
                <div class="hidden sm:flex items-center gap-4">
                    <a href="/contact" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-5 py-2 rounded-full text-xs transition-all transform hover:scale-105 uppercase tracking-wider shadow-lg">
                        Schedule Consultation
                    </a>
                </div>

                <!-- Mobile Menu Toggle Button -->
                <button @click="mobileOpen = true" type="button" class="lg:hidden text-[#a1a1aa] hover:text-[#C8A14F] p-1.5 focus:outline-none" aria-label="Open mobile menu">
                    <i class="ri-menu-3-line text-2xl"></i>
                </button>

            </div>
        </div>
    </header>

    <!-- 3. MOBILE BACKDROP OVERLAY (Z-[9998]) -->
    <div x-show="mobileOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="mobileOpen = false"
         x-cloak
         class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[9998] lg:hidden"></div>

    <!-- 4. RIGHT-TO-LEFT SLIDING MOBILE SIDEBAR DRAWER (Z-[9999]) -->
    <div x-show="mobileOpen" 
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         x-cloak
         class="fixed top-0 right-0 bottom-0 w-[85%] sm:w-[360px] h-full z-[9999] bg-[#000000] border-l border-[#27272a] flex flex-col justify-between p-6 sm:p-8 overflow-y-auto lg:hidden shadow-2xl">
        
        <!-- Top Bar: Logo & Close Button -->
        <div class="flex items-center justify-between pb-6 border-b border-[#27272a]">
            <a href="/" @click="mobileOpen = false" class="flex items-center">
                <img src="/logo.png" alt="Angels Home Health Logo" class="h-9 w-auto object-contain">
            </a>
            <button @click="mobileOpen = false" type="button" class="w-9 h-9 rounded-full bg-[#121212] border border-[#27272a] text-[#a1a1aa] hover:text-[#C8A14F] hover:border-[#C8A14F] flex items-center justify-center transition-all focus:outline-none" aria-label="Close menu">
                <i class="ri-close-line text-xl"></i>
            </button>
        </div>

        <!-- Main Navigation Links -->
        <div class="py-6 space-y-4 flex-grow">
            
            <!-- Home Link -->
            <div>
                <a href="/" @click="mobileOpen = false" class="block font-heading font-bold text-xl text-[#C8A14F] transition-colors">
                    Home
                </a>
            </div>

            <!-- About Us Link -->
            <div class="border-t border-[#1f1f23] pt-3.5">
                <a href="/about" @click="mobileOpen = false" class="block font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                    About Us
                </a>
            </div>

            <!-- Services Accordion (Text Only, No Icons) -->
            <div class="border-t border-[#1f1f23] pt-3.5">
                <button @click="mobileServicesOpen = !mobileServicesOpen" type="button" class="w-full flex items-center justify-between font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors text-left focus:outline-none">
                    <span>Services</span>
                    <i class="ri-arrow-down-s-line text-xl text-[#C8A14F] transition-transform duration-200" :class="mobileServicesOpen ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="mobileServicesOpen" x-collapse class="pl-3 pt-3 space-y-2.5 font-medium text-xs text-[#a1a1aa]">
                    <a href="/services" @click="mobileOpen = false" class="block text-[#C8A14F] font-bold py-1 border-b border-[#1f1f23]">All Services Overview</a>
                    <a href="/services/skilled-nursing" @click="mobileOpen = false" class="block hover:text-[#C8A14F] py-1 border-b border-[#1f1f23]">Skilled Nursing & Rehab</a>
                    <a href="/services/physical-therapy" @click="mobileOpen = false" class="block hover:text-[#C8A14F] py-1 border-b border-[#1f1f23]">Physical & Occupational Therapy</a>
                    <a href="/services/behavioral-health" @click="mobileOpen = false" class="block hover:text-[#C8A14F] py-1 border-b border-[#1f1f23]">Behavioral Health Services</a>
                    <a href="/services/chronic-disease-management" @click="mobileOpen = false" class="block hover:text-[#C8A14F] py-1 border-b border-[#1f1f23]">Chronic Disease Management</a>
                    <a href="/services/memory-care" @click="mobileOpen = false" class="block hover:text-[#C8A14F] py-1">Alzheimer's & Memory Care</a>
                </div>
            </div>

            <!-- Blog Link -->
            <div class="border-t border-[#1f1f23] pt-3.5">
                <a href="/blog" @click="mobileOpen = false" class="block font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                    Blog
                </a>
            </div>

            <!-- Contact Link -->
            <div class="border-t border-[#1f1f23] pt-3.5">
                <a href="/contact" @click="mobileOpen = false" class="block font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                    Contact
                </a>
            </div>

        </div>

        <!-- Bottom Contact Details & CTA Button -->
        <div class="pt-5 border-t border-[#27272a] space-y-4">
            <div class="space-y-2 text-xs text-[#a1a1aa]">
                <a href="{{ phone_url() }}" class="flex items-center gap-2 text-[#C8A14F] font-bold">
                    <i class="ri-phone-fill"></i>
                    <span>{{ setting('phone', '+1 352 729 2727') }}</span>
                </a>
                @if (setting('whatsapp'))
                    <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-emerald-400 font-bold">
                        <i class="ri-whatsapp-fill"></i>
                        <span>WhatsApp Chat</span>
                    </a>
                @endif
                <div class="flex items-center gap-2 text-[11px]">
                    <i class="ri-map-pin-line text-[#C8A14F]"></i>
                    <span class="truncate">{{ setting('address', '3400, CR 19-A, Mount Dora, FL') }}</span>
                </div>
            </div>
            <a href="/contact" @click="mobileOpen = false" class="block text-center bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold py-3.5 rounded-full uppercase tracking-wider text-xs shadow-xl transition-all">
                Schedule Consultation
            </a>
        </div>

    </div>
</div>
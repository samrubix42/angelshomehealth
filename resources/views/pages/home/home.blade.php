<div>
    <!-- 3. MODERN FULL SCREEN AUTO-SLIDER HERO SECTION -->
    <section id="home" 
             x-data="{ 
                 currentSlide: 0, 
                 totalSlides: 3, 
                 timer: null,
                 startAutoSlide() {
                     this.timer = setInterval(() => {
                         this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                     }, 5000);
                 },
                 stopAutoSlide() {
                     clearInterval(this.timer);
                 },
                 goTo(index) {
                     this.currentSlide = index;
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 next() {
                     this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 prev() {
                     this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 }
             }"
             x-init="startAutoSlide()"
             @mouseenter="stopAutoSlide()"
             @mouseleave="startAutoSlide()"
             class="relative bg-[#000000] border-b border-[#27272a] overflow-hidden min-h-screen flex flex-col justify-between">
        
        <!-- Hero Full Screen Slider Slides Wrapper -->
        <div class="relative flex-grow flex items-center justify-center">
            
            <!-- SLIDE 1 -->
            <div x-show="currentSlide === 0" 
                 x-transition:enter="transition ease-out duration-700"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute inset-0 flex items-center">
                <!-- Background Image with Pitch Black Solid Overlay (No Gradient) -->
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=1920&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-[#000000]/85"></div>

                <!-- Slide Content -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-16 lg:py-24">
                    <div class="grid lg:grid-cols-12 gap-12 items-center">
                        <div class="lg:col-span-8 space-y-6">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded bg-[#0a0a0a] border border-[#C8A14F]/50 text-[#C8A14F] text-xs font-heading font-bold uppercase tracking-widest">
                                <span class="w-2 h-2 rounded-full bg-[#C8A14F] animate-pulse"></span>
                                Home Health Care You Can Trust
                            </div>
                            <h1 class="font-heading font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white leading-none tracking-tight">
                                Dedicated In-Home Care in <span class="text-[#C8A14F]">Mount Dora, FL</span> & Around
                            </h1>
                            <p class="text-[#a1a1aa] text-base sm:text-xl leading-relaxed max-w-2xl font-medium">
                                Angels Home Health of Florida delivers a full spectrum of skilled nursing, physical therapy, behavioral health, and chronic disease management right in the comfort of your home.
                            </p>
                            <div class="pt-4 flex flex-col sm:flex-row gap-4">
                                <a href="#consultation" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-8 py-4 rounded text-sm tracking-wider uppercase text-center transition-colors shadow-lg">
                                    Schedule Free Consultation
                                </a>
                                <a href="#services" class="bg-[#0a0a0a] hover:bg-[#121212] text-white border border-[#27272a] hover:border-[#C8A14F]/60 font-heading font-semibold px-8 py-4 rounded text-sm tracking-wider uppercase text-center transition-colors">
                                    Explore Our Services
                                </a>
                            </div>
                        </div>

                        <!-- Side Feature Summary Box -->
                        <div class="hidden lg:block lg:col-span-4">
                            <div class="bg-[#0a0a0a]/95 rounded-xl border border-[#C8A14F]/40 p-8 space-y-5">
                                <div class="flex items-center justify-between border-b border-[#27272a] pb-4">
                                    <div class="flex items-center gap-3">
                                        <img src="/logo.png" alt="Logo" class="h-10 w-auto">
                                        <span class="font-heading font-bold text-sm text-white">Care Assurance</span>
                                    </div>
                                    <span class="text-[10px] text-[#C8A14F] font-bold uppercase bg-[#121212] px-2.5 py-1 rounded border border-[#C8A14F]/30">Licensed & Accredited</span>
                                </div>
                                <ul class="space-y-3.5 text-xs text-[#cbd5e1] font-medium">
                                    <li class="flex items-center gap-3">
                                        <svg class="w-4 h-4 text-[#C8A14F] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                        <span><strong>Skilled Nursing:</strong> IV therapy & wound care.</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg class="w-4 h-4 text-[#C8A14F] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                        <span><strong>Physical Therapy:</strong> Mobility rehabilitation.</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg class="w-4 h-4 text-[#C8A14F] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                        <span><strong>Behavioral Health:</strong> Emotional & cognitive care.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div x-show="currentSlide === 1" 
                 x-transition:enter="transition ease-out duration-700"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute inset-0 flex items-center">
                <!-- Background Image with Pitch Black Solid Overlay -->
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=1920&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-[#000000]/85"></div>

                <!-- Slide Content -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-16 lg:py-24">
                    <div class="grid lg:grid-cols-12 gap-12 items-center">
                        <div class="lg:col-span-8 space-y-6">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded bg-[#0a0a0a] border border-[#C8A14F]/50 text-[#C8A14F] text-xs font-heading font-bold uppercase tracking-widest">
                                <span class="w-2 h-2 rounded-full bg-[#C8A14F] animate-pulse"></span>
                                Tailored Patient Solutions
                            </div>
                            <h1 class="font-heading font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white leading-none tracking-tight">
                                Personalized Care Plans <span class="text-[#C8A14F]">Tailored to You</span>
                            </h1>
                            <p class="text-[#a1a1aa] text-base sm:text-xl leading-relaxed max-w-2xl font-medium">
                                We design customized care plans that meet the unique needs of each individual, ensuring comfort, dignity, and independence. From daily personal care to 24-hour support.
                            </p>
                            <div class="pt-4 flex flex-col sm:flex-row gap-4">
                                <a href="#why-us" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-8 py-4 rounded text-sm tracking-wider uppercase text-center transition-colors shadow-lg">
                                    Why Choose Us
                                </a>
                                <a href="tel:13527292727" class="bg-[#0a0a0a] hover:bg-[#121212] text-white border border-[#27272a] hover:border-[#C8A14F]/60 font-heading font-semibold px-8 py-4 rounded text-sm tracking-wider uppercase text-center transition-colors">
                                    Call +1 352 729 2727
                                </a>
                            </div>
                        </div>

                        <!-- Side Feature Summary Box -->
                        <div class="hidden lg:block lg:col-span-4">
                            <div class="bg-[#0a0a0a]/95 rounded-xl border border-[#C8A14F]/40 p-8 space-y-4">
                                <h3 class="font-heading font-bold text-base text-white border-b border-[#27272a] pb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#C8A14F]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    Flexible Schedules
                                </h3>
                                <div class="space-y-2.5 text-xs">
                                    <div class="bg-[#121212] p-3 rounded border border-[#27272a]">
                                        <span class="block font-semibold text-[#C8A14F] uppercase">Temporary Recovery</span>
                                        <span class="text-[#a1a1aa]">Post-surgery & short-term care.</span>
                                    </div>
                                    <div class="bg-[#121212] p-3 rounded border border-[#27272a]">
                                        <span class="block font-semibold text-[#C8A14F] uppercase">24/7 RN Dispatch</span>
                                        <span class="text-[#a1a1aa]">Round-the-clock registered nurses.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div x-show="currentSlide === 2" 
                 x-transition:enter="transition ease-out duration-700"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute inset-0 flex items-center">
                <!-- Background Image with Pitch Black Solid Overlay -->
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=1920&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-[#000000]/85"></div>

                <!-- Slide Content -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-16 lg:py-24">
                    <div class="grid lg:grid-cols-12 gap-12 items-center">
                        <div class="lg:col-span-8 space-y-6">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded bg-[#0a0a0a] border border-[#C8A14F]/50 text-[#C8A14F] text-xs font-heading font-bold uppercase tracking-widest">
                                <span class="w-2 h-2 rounded-full bg-[#C8A14F] animate-pulse"></span>
                                Complex Medical Support
                            </div>
                            <h1 class="font-heading font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white leading-none tracking-tight">
                                Trusted Support for <span class="text-[#C8A14F]">Complex Health Needs</span>
                            </h1>
                            <p class="text-[#a1a1aa] text-base sm:text-xl leading-relaxed max-w-2xl font-medium">
                                Specialized care for Alzheimer’s, Parkinson’s, post-surgery recovery, and chronic health conditions led by board-certified registered nurses and therapists.
                            </p>
                            <div class="pt-4 flex flex-col sm:flex-row gap-4">
                                <a href="#services" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-8 py-4 rounded text-sm tracking-wider uppercase text-center transition-colors shadow-lg">
                                    Medical Services
                                </a>
                                <a href="#consultation" class="bg-[#0a0a0a] hover:bg-[#121212] text-white border border-[#27272a] hover:border-[#C8A14F]/60 font-heading font-semibold px-8 py-4 rounded text-sm tracking-wider uppercase text-center transition-colors">
                                    Speak With a Nurse
                                </a>
                            </div>
                        </div>

                        <!-- Side Feature Summary Box -->
                        <div class="hidden lg:block lg:col-span-4">
                            <div class="bg-[#0a0a0a]/95 rounded-xl border border-[#C8A14F]/40 p-8 space-y-4">
                                <h3 class="font-heading font-bold text-base text-white border-b border-[#27272a] pb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#C8A14F]" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                    Specialized Programs
                                </h3>
                                <div class="space-y-2 text-xs">
                                    <div class="bg-[#121212] p-2.5 rounded border border-[#27272a] flex items-center justify-between">
                                        <span class="text-white font-medium">Alzheimer's & Memory</span>
                                        <span class="text-[#C8A14F] font-bold">Specialized</span>
                                    </div>
                                    <div class="bg-[#121212] p-2.5 rounded border border-[#27272a] flex items-center justify-between">
                                        <span class="text-white font-medium">Parkinson's Disease</span>
                                        <span class="text-[#C8A14F] font-bold">Specialized</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider Controls & Animated Progress Bar Bar at Bottom of Hero -->
        <div class="relative z-30 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-6 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-[#27272a]/60 bg-[#000000]/90">
            <!-- Slide Indicators Tabs -->
            <div class="flex items-center gap-3">
                <button type="button" @click="goTo(0)" 
                        :class="currentSlide === 0 ? 'bg-[#C8A14F] text-[#000000]' : 'bg-[#0a0a0a] text-[#a1a1aa] hover:text-[#C8A14F] border border-[#27272a]'" 
                        class="text-xs font-heading font-bold px-4 py-2 rounded transition-all">01. Overview</button>
                <button type="button" @click="goTo(1)" 
                        :class="currentSlide === 1 ? 'bg-[#C8A14F] text-[#000000]' : 'bg-[#0a0a0a] text-[#a1a1aa] hover:text-[#C8A14F] border border-[#27272a]'" 
                        class="text-xs font-heading font-bold px-4 py-2 rounded transition-all">02. Customized Care</button>
                <button type="button" @click="goTo(2)" 
                        :class="currentSlide === 2 ? 'bg-[#C8A14F] text-[#000000]' : 'bg-[#0a0a0a] text-[#a1a1aa] hover:text-[#C8A14F] border border-[#27272a]'" 
                        class="text-xs font-heading font-bold px-4 py-2 rounded transition-all">03. Complex Needs</button>
            </div>

            <!-- Navigation Arrow Controls -->
            <div class="flex items-center gap-2">
                <button type="button" @click="prev()" class="p-2.5 rounded bg-[#0a0a0a] text-white hover:bg-[#C8A14F] hover:text-[#000000] border border-[#27272a] transition-colors" aria-label="Previous Slide">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button type="button" @click="next()" class="p-2.5 rounded bg-[#0a0a0a] text-white hover:bg-[#C8A14F] hover:text-[#000000] border border-[#27272a] transition-colors" aria-label="Next Slide">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>

    </section>

    <!-- 4. KEY METRICS BAR -->
    <section class="bg-[#0a0a0a] py-10 border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-5 bg-[#121212] rounded border border-[#27272a]">
                    <span class="block font-heading font-extrabold text-3xl lg:text-4xl text-[#C8A14F]">100%</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-medium uppercase tracking-wider mt-1 block">Patient-Centered Care</span>
                </div>
                <div class="p-5 bg-[#121212] rounded border border-[#27272a]">
                    <span class="block font-heading font-extrabold text-3xl lg:text-4xl text-[#C8A14F]">24 / 7</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-medium uppercase tracking-wider mt-1 block">Flexible Scheduling</span>
                </div>
                <div class="p-5 bg-[#121212] rounded border border-[#27272a]">
                    <span class="block font-heading font-extrabold text-3xl lg:text-4xl text-[#C8A14F]">Mount Dora</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-medium uppercase tracking-wider mt-1 block">Florida & Surrounding Areas</span>
                </div>
                <div class="p-5 bg-[#121212] rounded border border-[#27272a]">
                    <span class="block font-heading font-extrabold text-3xl lg:text-4xl text-[#C8A14F]">Full Spectrum</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-medium uppercase tracking-wider mt-1 block">Skilled Nursing & Therapy</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. WHAT MAKES US DIFFERENT? SECTION -->
    <section id="difference" class="py-20 md:py-28 bg-[#000000] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-heading font-bold uppercase tracking-widest text-[#C8A14F] bg-[#0a0a0a] px-4 py-1.5 rounded border border-[#C8A14F]/30 inline-block">
                    OUR DISTINCTIVE STANDARDS
                </span>
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    What Makes Us Different?
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    At Angels Home Health of Florida, we elevate standard home health care into a compassionate, clinical partnership tailored to your family.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Pillar 1 -->
                <div class="bg-[#0a0a0a] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4">
                    <div class="w-12 h-12 rounded bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Led by Medical Expertise</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        Our experienced team brings decades of hands-on experience and clinical insight, ensuring every care plan is grounded in medical excellence and tailored to individual needs.
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div class="bg-[#0a0a0a] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4">
                    <div class="w-12 h-12 rounded bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m3 0h1m-1-4h.01M9 16h.01M9 12h.01M9 8h.01M15 16h.01M15 12h.01M15 8h.01"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Comprehensive In-Home Services</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        From skilled nursing and physical therapy to behavioral health and chronic disease management, we offer a full spectrum of care — all delivered in the comfort of your home.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div class="bg-[#0a0a0a] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4">
                    <div class="w-12 h-12 rounded bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Patient-Centered Approach</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        We treat every patient like family, focusing on dignity, respect, and personalized attention that fosters trust, comfort, and healing.
                    </p>
                </div>

                <!-- Pillar 4 -->
                <div class="bg-[#0a0a0a] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4">
                    <div class="w-12 h-12 rounded bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Statewide Reach, Local Touch</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        Though based in Mount Dora, our services extend across Florida, combining broad accessibility with the warmth of community-based care.
                    </p>
                </div>

                <!-- Pillar 5 -->
                <div class="bg-[#0a0a0a] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4 md:col-span-2 lg:col-span-2">
                    <div class="w-12 h-12 rounded bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Commitment to Continuity</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        We prioritize consistent care and communication, ensuring patients and families always feel supported, informed, and empowered throughout their health journey.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. WHY CHOOSE US? (6 CORE VALUE CARDS) -->
    <section id="why-us" class="py-20 md:py-28 bg-[#0a0a0a] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-heading font-bold uppercase tracking-widest text-[#C8A14F] bg-[#000000] px-4 py-1.5 rounded border border-[#C8A14F]/30 inline-block">
                    PROVEN ADVANTAGES
                </span>
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    Why Choose Us?
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    We provide compassionate, personalized care that ensures your loved ones receive the support they deserve. With experienced caregivers, flexible scheduling, and a wide range of services, we’re committed to improving quality of life and offering peace of mind every step of the way.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-3">
                    <div class="text-[#C8A14F] font-heading font-bold text-xs uppercase tracking-wider">01. Personalized Care</div>
                    <h3 class="font-heading font-bold text-xl text-white">Personalized Care Plans Tailored to You</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        We design customized care plans that meet the unique needs of each individual, ensuring comfort, dignity, and independence.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-3">
                    <div class="text-[#C8A14F] font-heading font-bold text-xs uppercase tracking-wider">02. Expert Caregivers</div>
                    <h3 class="font-heading font-bold text-xl text-white">Highly Trained & Compassionate Caregivers</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        Our caregivers are not only skilled but also compassionate, providing respectful and empathetic care that feels like family.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-3">
                    <div class="text-[#C8A14F] font-heading font-bold text-xs uppercase tracking-wider">03. Full Spectrum</div>
                    <h3 class="font-heading font-bold text-xl text-white">Comprehensive Services for Complete Peace of Mind</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        From daily personal care to specialized medical support, we offer a full range of services to keep your loved ones safe and comfortable.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-3">
                    <div class="text-[#C8A14F] font-heading font-bold text-xs uppercase tracking-wider">04. Flexible Scheduling</div>
                    <h3 class="font-heading font-bold text-xl text-white">Flexible Care Options to Fit Your Schedule</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        Whether you need temporary assistance or 24-hour care, our flexible scheduling ensures we’re there when you need us most.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-3">
                    <div class="text-[#C8A14F] font-heading font-bold text-xs uppercase tracking-wider">05. Specialized Support</div>
                    <h3 class="font-heading font-bold text-xl text-white">Trusted Support for Complex Medical Needs</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        Our team has experience in providing care for Alzheimer’s, Parkinson’s, post-surgery recovery, and other complex health conditions, ensuring the highest standard of care.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-3">
                    <div class="text-[#C8A14F] font-heading font-bold text-xs uppercase tracking-wider">06. Holistic Care</div>
                    <h3 class="font-heading font-bold text-xl text-white">Dedicated Emotional and Social Support</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        We go beyond physical care by offering companionship, encouraging social activities, and providing emotional support to promote mental and emotional well-being.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. MISSION & VISION SECTION -->
    <section id="mission" class="py-20 md:py-28 bg-[#000000] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-10">
                <!-- Our Mission -->
                <div class="bg-[#0a0a0a] p-8 sm:p-10 rounded-xl border border-[#C8A14F]/40 space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                        </div>
                        <h2 class="font-heading font-extrabold text-3xl text-white">Our Mission</h2>
                    </div>
                    <p class="text-[#cbd5e1] text-base sm:text-lg leading-relaxed font-medium">
                        Angels Home Health of Florida delivers compassionate, personalized care across the state. We provide skilled nursing, physical therapy, behavioral health, and chronic disease management in the comfort of your home. Our mission is to enhance lives with dignity, respect, and exceptional in-home healthcare services.
                    </p>
                </div>

                <!-- Our Vision -->
                <div class="bg-[#0a0a0a] p-8 sm:p-10 rounded-xl border border-[#C8A14F]/40 space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                        </div>
                        <h2 class="font-heading font-extrabold text-3xl text-white">Our Vision</h2>
                    </div>
                    <p class="text-[#cbd5e1] text-base sm:text-lg leading-relaxed font-medium">
                        Angels Home Health of Florida envisions a future where every individual receives high-quality, compassionate care at home. We aim to redefine home health services by fostering independence, dignity, and wellness. Our vision is to be Florida’s most trusted provider of personalized, patient-centered healthcare solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. SERVICES BREAKDOWN SECTION -->
    <section id="services" class="py-20 md:py-28 bg-[#0a0a0a] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-heading font-bold uppercase tracking-widest text-[#C8A14F] bg-[#000000] px-4 py-1.5 rounded border border-[#C8A14F]/30 inline-block">
                    COMPREHENSIVE CARE
                </span>
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    Our In-Home Health Services
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    We offer a comprehensive range of services, from personal care and medication management to companionship and light housekeeping. Our dedicated team ensures your loved ones receive the support they need to live comfortably, safely, and with dignity at home.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Personal Care & Assistance</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Assistance with daily activities including bathing, dressing, grooming, mobility, and hygiene with complete dignity.</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Medication Management</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Timely medication reminders, prescription management, and administration supervised by experienced caregivers.</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Companionship</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Meaningful conversation, emotional support, social interaction, and engaging activities for mental well-being.</p>
                </div>

                <!-- Service 4 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Light Housekeeping</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Keeping the home safe and clean with meal preparation, laundry, dusting, and light tidying services.</p>
                </div>

                <!-- Service 5 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Skilled Nursing & Rehab</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Advanced clinical nursing, wound care, post-surgical rehabilitation, and physical therapy at home.</p>
                </div>

                <!-- Service 6 -->
                <div class="bg-[#121212] p-8 rounded-lg border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Chronic Disease Management</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Support for Alzheimer’s, Parkinson’s, diabetes, cardiac conditions, and chronic illness care.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CONSULTATION & CONTACT FORM -->
    <section id="consultation" class="py-20 md:py-28 bg-[#000000]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-5 space-y-6">
                    <span class="text-xs font-heading font-bold uppercase tracking-widest text-[#C8A14F] bg-[#0a0a0a] px-4 py-1.5 rounded border border-[#C8A14F]/30 inline-block">
                        GET IN TOUCH
                    </span>
                    <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                        Request a Personalized Care Plan
                    </h2>
                    <p class="text-[#a1a1aa] text-base leading-relaxed">
                        Our care coordinators in Mount Dora are ready to discuss your family's unique requirements. Fill out the form or contact us directly.
                    </p>
                    
                    <div class="space-y-4 pt-4 border-t border-[#27272a]">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div>
                                <span class="block text-xs text-[#a1a1aa] uppercase font-heading font-semibold">Address</span>
                                <span class="text-sm text-white font-medium">3400, CR 19-A, Mt Dora, FL 32757</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                            </div>
                            <div>
                                <span class="block text-xs text-[#a1a1aa] uppercase font-heading font-semibold">Direct Dispatch</span>
                                <a href="tel:13527292727" class="text-sm text-[#C8A14F] font-bold hover:underline">+1 352 729 2727</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="lg:col-span-7">
                    <div class="bg-[#0a0a0a] rounded-xl border border-[#C8A14F]/40 p-8 sm:p-10 space-y-6">
                        <h3 class="font-heading font-bold text-xl text-white border-b border-[#27272a] pb-4">
                            Schedule Your Free Consultation
                        </h3>

                        @if($formSubmitted)
                            <div class="bg-[#121212] border border-[#C8A14F] text-[#C8A14F] p-4 rounded text-sm font-medium">
                                ✓ Thank you! Your consultation request has been received. Our Mount Dora care coordinator will contact you shortly.
                            </div>
                        @else
                            <form wire:submit="submitConsultation" class="space-y-4">
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-heading font-semibold uppercase text-[#a1a1aa] mb-1.5">Full Name</label>
                                        <input type="text" wire:model="name" placeholder="John Doe" class="w-full bg-[#000000] border border-[#27272a] rounded px-4 py-2.5 text-sm text-white placeholder-[#52525b] focus:outline-none focus:border-[#C8A14F]">
                                        @error('name') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-xs font-heading font-semibold uppercase text-[#a1a1aa] mb-1.5">Phone Number</label>
                                        <input type="tel" wire:model="phone" placeholder="(352) 000-0000" class="w-full bg-[#000000] border border-[#27272a] rounded px-4 py-2.5 text-sm text-white placeholder-[#52525b] focus:outline-none focus:border-[#C8A14F]">
                                        @error('phone') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-heading font-semibold uppercase text-[#a1a1aa] mb-1.5">Email Address</label>
                                        <input type="email" wire:model="email" placeholder="john@example.com" class="w-full bg-[#000000] border border-[#27272a] rounded px-4 py-2.5 text-sm text-white placeholder-[#52525b] focus:outline-none focus:border-[#C8A14F]">
                                        @error('email') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-xs font-heading font-semibold uppercase text-[#a1a1aa] mb-1.5">Requested Service</label>
                                        <select wire:model="service" class="w-full bg-[#000000] border border-[#27272a] rounded px-4 py-2.5 text-sm text-white focus:outline-none focus:border-[#C8A14F]">
                                            <option value="Personal Care & Hygiene">Personal Care & Hygiene</option>
                                            <option value="Skilled Nursing">Skilled Nursing</option>
                                            <option value="Physical Therapy">Physical Therapy</option>
                                            <option value="Behavioral Health">Behavioral Health</option>
                                            <option value="Chronic Disease Management">Chronic Disease Management</option>
                                            <option value="Companionship & Housekeeping">Companionship & Housekeeping</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-heading font-semibold uppercase text-[#a1a1aa] mb-1.5">Care Needs / Notes</label>
                                    <textarea wire:model="notes" rows="3" placeholder="Tell us about your care needs or schedule preferences..." class="w-full bg-[#000000] border border-[#27272a] rounded px-4 py-2.5 text-sm text-white placeholder-[#52525b] focus:outline-none focus:border-[#C8A14F]"></textarea>
                                </div>

                                <button type="submit" class="w-full bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold py-3.5 rounded text-sm uppercase tracking-wider transition-colors">
                                    Submit Consultation Request
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
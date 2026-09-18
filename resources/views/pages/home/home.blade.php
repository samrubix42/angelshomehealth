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
             class="relative bg-[#000000] border-b border-[#27272a] overflow-hidden h-[520px] sm:h-[600px] lg:h-[660px] flex flex-col justify-between">
        
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
                <!-- Background Image with Clean 35% Overlay -->
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=1920&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-[#000000]/35"></div>

                <!-- Slide Content (Aligned with Header max-w-7xl) -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20 text-center sm:text-left">
                    <div class="space-y-6">
                        <h1 class="font-heading font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white leading-tight tracking-tight max-w-4xl drop-shadow-lg">
                            Dedicated In-Home Care in <span class="text-[#C8A14F]">Mount Dora, FL</span> & Around
                        </h1>
                        <p class="text-[#f8fafc] text-base sm:text-xl leading-relaxed max-w-2xl font-medium drop-shadow-md">
                            Angels Home Health of Florida delivers a full spectrum of skilled nursing, physical therapy, behavioral health, and chronic disease management right in the comfort of your home.
                        </p>
                        <div class="pt-4 flex flex-col sm:flex-row items-center sm:items-start gap-4">
                            <!-- Rounded Pill Buttons -->
                            <a href="#consultation" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-9 py-4 rounded-full text-sm tracking-wider uppercase text-center transition-all transform hover:scale-105 shadow-xl">
                                Schedule Free Consultation
                            </a>
                            <a href="#services" class="bg-[#000000]/80 hover:bg-[#121212] text-white border border-[#27272a] hover:border-[#C8A14F] font-heading font-semibold px-9 py-4 rounded-full text-sm tracking-wider uppercase text-center transition-all backdrop-blur-sm">
                                Explore Our Services
                            </a>
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
                <!-- Background Image with Clean 35% Overlay -->
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=1920&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-[#000000]/35"></div>

                <!-- Slide Content (Aligned with Header max-w-7xl) -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20 text-center sm:text-left">
                    <div class="space-y-6">
                        <h1 class="font-heading font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white leading-tight tracking-tight max-w-4xl drop-shadow-lg">
                            Personalized Care Plans <span class="text-[#C8A14F]">Tailored to You</span>
                        </h1>
                        <p class="text-[#f8fafc] text-base sm:text-xl leading-relaxed max-w-2xl font-medium drop-shadow-md">
                            We design customized care plans that meet the unique needs of each individual, ensuring comfort, dignity, and independence. From daily personal care to 24-hour support.
                        </p>
                        <div class="pt-4 flex flex-col sm:flex-row items-center sm:items-start gap-4">
                            <!-- Rounded Pill Buttons -->
                            <a href="#why-us" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-9 py-4 rounded-full text-sm tracking-wider uppercase text-center transition-all transform hover:scale-105 shadow-xl">
                                Why Choose Us
                            </a>
                            <a href="tel:13527292727" class="bg-[#000000]/80 hover:bg-[#121212] text-white border border-[#27272a] hover:border-[#C8A14F] font-heading font-semibold px-9 py-4 rounded-full text-sm tracking-wider uppercase text-center transition-all backdrop-blur-sm">
                                Call +1 352 729 2727
                            </a>
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
                <!-- Background Image with Clean 35% Overlay -->
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=1920&auto=format&fit=crop');"></div>
                <div class="absolute inset-0 bg-[#000000]/35"></div>

                <!-- Slide Content (Aligned with Header max-w-7xl) -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20 text-center sm:text-left">
                    <div class="space-y-6">
                        <h1 class="font-heading font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white leading-tight tracking-tight max-w-4xl drop-shadow-lg">
                            Trusted Support for <span class="text-[#C8A14F]">Complex Health Needs</span>
                        </h1>
                        <p class="text-[#f8fafc] text-base sm:text-xl leading-relaxed max-w-2xl font-medium drop-shadow-md">
                            Specialized care for Alzheimer’s, Parkinson’s, post-surgery recovery, and chronic health conditions led by board-certified registered nurses and therapists.
                        </p>
                        <div class="pt-4 flex flex-col sm:flex-row items-center sm:items-start gap-4">
                            <!-- Rounded Pill Buttons -->
                            <a href="#services" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-9 py-4 rounded-full text-sm tracking-wider uppercase text-center transition-all transform hover:scale-105 shadow-xl">
                                Medical Services
                            </a>
                            <a href="#consultation" class="bg-[#000000]/80 hover:bg-[#121212] text-white border border-[#27272a] hover:border-[#C8A14F] font-heading font-semibold px-9 py-4 rounded-full text-sm tracking-wider uppercase text-center transition-all backdrop-blur-sm">
                                Speak With a Nurse
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- CONTINUOUS RUNNING MARQUEE TICKER BAR DIRECTLY BELOW HERO -->
    <section class="bg-[#0a0a0a] border-b border-[#27272a] py-4 overflow-hidden relative">
        <div class="animate-marquee whitespace-nowrap flex items-center gap-12 text-xs font-heading font-bold uppercase tracking-widest text-[#C8A14F]">
            <div class="flex items-center gap-12">
                <span>✦ SKILLED NURSING & REHABILITATION</span>
                <span>✦ 24/7 IN-HOME CARE SUPPORT</span>
                <span>✦ PHYSICAL & OCCUPATIONAL THERAPY</span>
                <span>✦ BEHAVIORAL HEALTHCARE</span>
                <span>✦ CHRONIC DISEASE MANAGEMENT</span>
                <span>✦ MOUNT DORA, FL & SURROUNDING AREAS</span>
                <span>✦ CALL TODAY: +1 352 729 2727</span>
                <span>✦ INDIVIDUALIZED CARE PLANS</span>
            </div>
            <div class="flex items-center gap-12" aria-hidden="true">
                <span>✦ SKILLED NURSING & REHABILITATION</span>
                <span>✦ 24/7 IN-HOME CARE SUPPORT</span>
                <span>✦ PHYSICAL & OCCUPATIONAL THERAPY</span>
                <span>✦ BEHAVIORAL HEALTHCARE</span>
                <span>✦ CHRONIC DISEASE MANAGEMENT</span>
                <span>✦ MOUNT DORA, FL & SURROUNDING AREAS</span>
                <span>✦ CALL TODAY: +1 352 729 2727</span>
                <span>✦ INDIVIDUALIZED CARE PLANS</span>
            </div>
        </div>
    </section>

    <!-- 4. KEY METRICS BAR (PREMIUM LUXURY STATS SECTION) -->
    <section x-data="{ shown: false }" 
             x-init="const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             class="bg-[#050505] py-14 sm:py-16 border-b border-[#27272a] relative overflow-hidden transition-all duration-1000 transform"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
        <!-- Subtle Background Glow Spot -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(200,161,79,0.08)_0,transparent_70%)] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-6">
                
                <!-- Metric Card 1 -->
                <div class="bg-[#121212] p-4 sm:p-7 lg:p-8 rounded-2xl sm:rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-1.5 shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] relative overflow-hidden group flex flex-col justify-between">
                    <!-- Top Accent Gold Line on Hover -->
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <div class="flex items-center justify-between mb-4 sm:mb-6">
                        <div class="w-9 h-9 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all duration-300">
                            <i class="ri-heart-pulse-fill text-lg sm:text-2xl"></i>
                        </div>
                        <span class="text-[9px] sm:text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-2 py-0.5 sm:px-3 sm:py-1 rounded-full uppercase tracking-wider">Quality</span>
                    </div>

                    <div>
                        <span class="block font-heading font-extrabold text-2xl sm:text-4xl lg:text-5xl text-white tracking-tight group-hover:text-[#C8A14F] transition-colors duration-300">100%</span>
                        <span class="text-[10px] sm:text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider mt-1 sm:mt-2 block leading-relaxed">Patient-Centered Care</span>
                    </div>
                </div>

                <!-- Metric Card 2 -->
                <div class="bg-[#121212] p-4 sm:p-7 lg:p-8 rounded-2xl sm:rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-1.5 shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <div class="flex items-center justify-between mb-4 sm:mb-6">
                        <div class="w-9 h-9 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all duration-300">
                            <i class="ri-time-fill text-lg sm:text-2xl"></i>
                        </div>
                        <span class="text-[9px] sm:text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-2 py-0.5 sm:px-3 sm:py-1 rounded-full uppercase tracking-wider">Available</span>
                    </div>

                    <div>
                        <span class="block font-heading font-extrabold text-2xl sm:text-4xl lg:text-5xl text-white tracking-tight group-hover:text-[#C8A14F] transition-colors duration-300">24 / 7</span>
                        <span class="text-[10px] sm:text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider mt-1 sm:mt-2 block leading-relaxed">Flexible Care Scheduling</span>
                    </div>
                </div>

                <!-- Metric Card 3 -->
                <div class="bg-[#121212] p-4 sm:p-7 lg:p-8 rounded-2xl sm:rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-1.5 shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <div class="flex items-center justify-between mb-4 sm:mb-6">
                        <div class="w-9 h-9 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all duration-300">
                            <i class="ri-map-pin-2-fill text-lg sm:text-2xl"></i>
                        </div>
                        <span class="text-[9px] sm:text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-2 py-0.5 sm:px-3 sm:py-1 rounded-full uppercase tracking-wider">Location</span>
                    </div>

                    <div>
                        <span class="block font-heading font-extrabold text-xl sm:text-3xl lg:text-4xl text-white tracking-tight group-hover:text-[#C8A14F] transition-colors duration-300">Mount Dora</span>
                        <span class="text-[10px] sm:text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider mt-1 sm:mt-2 block leading-relaxed">Florida & Surrounding Areas</span>
                    </div>
                </div>

                <!-- Metric Card 4 -->
                <div class="bg-[#121212] p-4 sm:p-7 lg:p-8 rounded-2xl sm:rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-1.5 shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <div class="flex items-center justify-between mb-4 sm:mb-6">
                        <div class="w-9 h-9 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all duration-300">
                            <i class="ri-stethoscope-fill text-lg sm:text-2xl"></i>
                        </div>
                        <span class="text-[9px] sm:text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-2 py-0.5 sm:px-3 sm:py-1 rounded-full uppercase tracking-wider">Services</span>
                    </div>

                    <div>
                        <span class="block font-heading font-extrabold text-xl sm:text-3xl lg:text-4xl text-white tracking-tight group-hover:text-[#C8A14F] transition-colors duration-300">Full Spectrum</span>
                        <span class="text-[10px] sm:text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider mt-1 sm:mt-2 block leading-relaxed">Skilled Nursing & Therapy</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4.5. OUR IN-HOME HEALTH SERVICES SECTION (AUTO-SLIDING CAROUSEL) -->
    <section id="services" 
             x-data="{ 
                 shown: false,
                 serviceSlide: 0, 
                 totalServiceSlides: 2, 
                 serviceTimer: null,
                 startAutoSlide() {
                     this.serviceTimer = setInterval(() => {
                         this.serviceSlide = (this.serviceSlide + 1) % this.totalServiceSlides;
                     }, 7000);
                 },
                 stopAutoSlide() {
                     if (this.serviceTimer) clearInterval(this.serviceTimer);
                 },
                 goTo(index) {
                     this.serviceSlide = index;
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 next() {
                     this.serviceSlide = (this.serviceSlide + 1) % this.totalServiceSlides;
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 prev() {
                     this.serviceSlide = (this.serviceSlide - 1 + this.totalServiceSlides) % this.totalServiceSlides;
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 }
             }"
             x-init="startAutoSlide(); const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             @mouseenter="stopAutoSlide()"
             @mouseleave="startAutoSlide()"
             class="py-20 md:py-28 bg-[#0a0a0a] border-b border-[#27272a] relative overflow-hidden transition-all duration-1000 transform"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                    Full-Spectrum Healthcare
                </span>
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    Our In-Home Health Services
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    From skilled wound nursing and physical rehabilitation to cardiac monitoring and Alzheimer's care, our clinical team delivers personalized support in your home.
                </p>
            </div>

            <!-- Continuous Horizontal Carousel Slider Track -->
            <div class="overflow-hidden w-full pb-4">
                <div class="flex transition-transform duration-700 ease-in-out"
                     :style="'transform: translateX(-' + (serviceSlide * 100) + '%)'">
                    
                    <!-- Set 1 (Services 1, 2, 3) -->
                    <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-1">
                        
                        <!-- Service 1: Wound Care -->
                        <div class="bg-[#121212] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] transform hover:-translate-y-1.5">
                            <div>
                                <div class="relative h-52 w-full overflow-hidden">
                                    <img src="{{ asset('images/service_wound_nursing.jpg') }}" alt="Wound Care & Clinical Assessment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/30 to-transparent"></div>
                                    <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                        Skilled Nursing
                                    </span>
                                </div>
                                <div class="p-6 sm:p-7 space-y-4">
                                    <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                                        Wound Care & Assessment
                                    </h3>
                                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                                        Expert wound management, sterile dressing changes, surgical site monitoring, and infection control supervised by registered nurses.
                                    </p>
                                    <ul class="space-y-2 text-xs text-[#d4d4d8] pt-1 border-t border-[#27272a]">
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Sterile Dressing Changes & Care</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Surgical Site & Infection Monitoring</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Bath, Shower & Hygiene Assistance</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="px-6 pb-6 pt-2">
                                <a href="#consultation" class="w-full py-3 bg-[#000000] hover:bg-[#C8A14F] text-[#C8A14F] hover:text-[#000000] border border-[#C8A14F]/40 rounded-full text-xs font-heading font-bold tracking-wider uppercase flex items-center justify-center gap-2 transition-all">
                                    <span>Learn More</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 2: Physical Therapy -->
                        <div class="bg-[#121212] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] transform hover:-translate-y-1.5">
                            <div>
                                <div class="relative h-52 w-full overflow-hidden">
                                    <img src="{{ asset('images/service_physical_therapy.jpg') }}" alt="Physical & Rehab Therapy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/30 to-transparent"></div>
                                    <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                        Rehabilitation
                                    </span>
                                </div>
                                <div class="p-6 sm:p-7 space-y-4">
                                    <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                                        Physical & Rehab Therapy
                                    </h3>
                                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                                        Targeted physical therapy routines, post-orthopedic surgery recovery, and gait training to restore strength, balance, and independence.
                                    </p>
                                    <ul class="space-y-2 text-xs text-[#d4d4d8] pt-1 border-t border-[#27272a]">
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Post-Surgery Orthopedic Rehab</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Fall Prevention & Balance Training</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Mobility & Exercise Guidance</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="px-6 pb-6 pt-2">
                                <a href="#consultation" class="w-full py-3 bg-[#000000] hover:bg-[#C8A14F] text-[#C8A14F] hover:text-[#000000] border border-[#C8A14F]/40 rounded-full text-xs font-heading font-bold tracking-wider uppercase flex items-center justify-center gap-2 transition-all">
                                    <span>Learn More</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 3: Cardiac Care -->
                        <div class="bg-[#121212] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] transform hover:-translate-y-1.5">
                            <div>
                                <div class="relative h-52 w-full overflow-hidden">
                                    <img src="{{ asset('images/service_cardiac_monitoring.jpg') }}" alt="Cardiac Care & Vital Monitoring" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/30 to-transparent"></div>
                                    <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                        Clinical Support
                                    </span>
                                </div>
                                <div class="p-6 sm:p-7 space-y-4">
                                    <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                                        Cardiac & Vital Care
                                    </h3>
                                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                                        Continuous monitoring of blood pressure, blood sugar, cardiac rhythms, and timely medication administration by trained nurses.
                                    </p>
                                    <ul class="space-y-2 text-xs text-[#d4d4d8] pt-1 border-t border-[#27272a]">
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Blood Pressure & Vital Recording</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Medication Education & Administration</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Diabetic & Pulmonary Monitoring</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="px-6 pb-6 pt-2">
                                <a href="#consultation" class="w-full py-3 bg-[#000000] hover:bg-[#C8A14F] text-[#C8A14F] hover:text-[#000000] border border-[#C8A14F]/40 rounded-full text-xs font-heading font-bold tracking-wider uppercase flex items-center justify-center gap-2 transition-all">
                                    <span>Learn More</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- Set 2 (Services 4, 5, 6) -->
                    <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-1">
                        
                        <!-- Service 4: Alzheimer's & Dementia -->
                        <div class="bg-[#121212] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] transform hover:-translate-y-1.5">
                            <div>
                                <div class="relative h-52 w-full overflow-hidden">
                                    <img src="{{ asset('images/service_memory_dementia.jpg') }}" alt="Alzheimer's & Dementia Support" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/30 to-transparent"></div>
                                    <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                        Specialized Memory Care
                                    </span>
                                </div>
                                <div class="p-6 sm:p-7 space-y-4">
                                    <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                                        Alzheimer’s & Dementia Care
                                    </h3>
                                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                                        Patient, structured cognitive engagement, memory support games, healthy meal planning, and safe daily routine assistance.
                                    </p>
                                    <ul class="space-y-2 text-xs text-[#d4d4d8] pt-1 border-t border-[#27272a]">
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Cognitive & Memory Engagement</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Meal Prep & Nutritional Guidance</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Parkinson's & Memory Support</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="px-6 pb-6 pt-2">
                                <a href="#consultation" class="w-full py-3 bg-[#000000] hover:bg-[#C8A14F] text-[#C8A14F] hover:text-[#000000] border border-[#C8A14F]/40 rounded-full text-xs font-heading font-bold tracking-wider uppercase flex items-center justify-center gap-2 transition-all">
                                    <span>Learn More</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 5: Complex Clinical Nursing -->
                        <div class="bg-[#121212] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] transform hover:-translate-y-1.5">
                            <div>
                                <div class="relative h-52 w-full overflow-hidden">
                                    <img src="{{ asset('images/service_complex_nursing.jpg') }}" alt="Complex Medical Support" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/30 to-transparent"></div>
                                    <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                        Advanced Clinical Care
                                    </span>
                                </div>
                                <div class="p-6 sm:p-7 space-y-4">
                                    <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                                        Complex Clinical Nursing
                                    </h3>
                                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                                        High-acuity in-home nursing including catheter care, colostomy care, post-surgical management, and chronic disease supervision.
                                    </p>
                                    <ul class="space-y-2 text-xs text-[#d4d4d8] pt-1 border-t border-[#27272a]">
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Catheter & Colostomy Care</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Post-Surgical Clinical Monitoring</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Comprehensive Health Assessments</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="px-6 pb-6 pt-2">
                                <a href="#consultation" class="w-full py-3 bg-[#000000] hover:bg-[#C8A14F] text-[#C8A14F] hover:text-[#000000] border border-[#C8A14F]/40 rounded-full text-xs font-heading font-bold tracking-wider uppercase flex items-center justify-center gap-2 transition-all">
                                    <span>Learn More</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 6: Occupational & Daily Assistance -->
                        <div class="bg-[#121212] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] transform hover:-translate-y-1.5">
                            <div>
                                <div class="relative h-52 w-full overflow-hidden">
                                    <img src="{{ asset('images/service_occupational_daily.jpg') }}" alt="Occupational & Housekeeping" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/30 to-transparent"></div>
                                    <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                        Personal & OT Support
                                    </span>
                                </div>
                                <div class="p-6 sm:p-7 space-y-4">
                                    <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                                        Occupational & Daily Assistance
                                    </h3>
                                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                                        Occupational therapy for daily living, light housekeeping, laundry, dishwashing, errands, and 24-hour flexible care.
                                    </p>
                                    <ul class="space-y-2 text-xs text-[#d4d4d8] pt-1 border-t border-[#27272a]">
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Light Housekeeping & Laundry</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>Doctor Appointments & Transportation</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-[#C8A14F]"></i>
                                            <span>24-Hour & Flexible Care Schedules</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="px-6 pb-6 pt-2">
                                <a href="#consultation" class="w-full py-3 bg-[#000000] hover:bg-[#C8A14F] text-[#C8A14F] hover:text-[#000000] border border-[#C8A14F]/40 rounded-full text-xs font-heading font-bold tracking-wider uppercase flex items-center justify-center gap-2 transition-all">
                                    <span>Learn More</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Slider Controls (Rounded Pill Indicators + Arrows) -->
            <div class="flex items-center justify-center gap-4 mt-12">
                <button type="button" @click="prev()" class="w-11 h-11 rounded-full bg-[#000000] text-white hover:bg-[#C8A14F] hover:text-[#000000] border border-[#27272a] flex items-center justify-center transition-all shadow-md" aria-label="Previous services">
                    <i class="ri-arrow-left-s-line text-2xl"></i>
                </button>
                <div class="flex items-center gap-2">
                    <button type="button" @click="goTo(0)" :class="serviceSlide === 0 ? 'w-10 bg-[#C8A14F]' : 'w-3 bg-[#27272a]'" class="h-3 rounded-full transition-all duration-300" aria-label="Go to service set 1"></button>
                    <button type="button" @click="goTo(1)" :class="serviceSlide === 1 ? 'w-10 bg-[#C8A14F]' : 'w-3 bg-[#27272a]'" class="h-3 rounded-full transition-all duration-300" aria-label="Go to service set 2"></button>
                </div>
                <button type="button" @click="next()" class="w-11 h-11 rounded-full bg-[#000000] text-[#000000] hover:bg-[#C8A14F] border border-[#27272a] flex items-center justify-center transition-all shadow-md" aria-label="Next services">
                    <i class="ri-arrow-right-s-line text-2xl text-white hover:text-[#000000]"></i>
                </button>
            </div>

        </div>
    </section>

    <!-- 4.6. HOME HEALTH CARE YOU CAN TRUST (ABOUT / TRUST SECTION WITH LEFT IMAGE as1.jpg) -->
    <section id="about-trust" 
             x-data="{ shown: false }" 
             x-init="const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             class="py-16 md:py-20 bg-[#000000] border-b border-[#27272a] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                
                <!-- LEFT COLUMN: Image with Gold Border Frame (No Overlay Badge) -->
                <div class="lg:col-span-6 relative group transition-all duration-1000 transform"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-12 scale-95'">
                    <div class="relative rounded-3xl overflow-hidden border-2 border-[#C8A14F]/40 shadow-[0_0_40px_rgba(200,161,79,0.15)] group-hover:border-[#C8A14F] transition-all duration-500">
                        <img src="{{ asset('images/as1.jpg') }}" 
                             alt="Angels Home Health Caregiver & Senior Patient" 
                             class="w-full h-auto min-h-[340px] sm:min-h-[420px] max-h-[520px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#000000]/40 via-transparent to-transparent"></div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Clean & Modern Text Content -->
                <div class="lg:col-span-6 space-y-6 transition-all duration-1000 delay-200 transform"
                     :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
                    <div class="space-y-3">
                        <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                            Dedicated In-Home Provider
                        </span>
                        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight leading-tight">
                            Home Health Care You Can Trust
                        </h2>
                        <p class="text-sm sm:text-base text-[#C8A14F] font-heading font-semibold leading-relaxed">
                            Dedicated home health care provider in Mount Dora, Florida & Around
                        </p>
                    </div>

                    <div class="space-y-3.5 text-[#a1a1aa] text-sm sm:text-base leading-relaxed font-medium">
                        <p>
                            <strong class="text-white">Angels Home Health of Florida</strong> is a dedicated home health care provider based in Mount Dora, Florida.
                        </p>
                        <p>
                            Our mission is to deliver comprehensive, compassionate care throughout Florida. We offer a full spectrum of services, including <span class="text-white font-semibold">Skilled Nursing</span>, <span class="text-white font-semibold">Physical Therapy</span>, <span class="text-white font-semibold">Behavioral Health</span>, and <span class="text-white font-semibold">Chronic Disease Management</span>, right in the comfort of your home.
                        </p>
                    </div>

                    <!-- Clean Service Bullet Points Grid -->
                    <div class="grid grid-cols-2 gap-2.5 sm:gap-3.5 pt-1">
                        <div class="flex items-center gap-2.5 sm:gap-3 bg-[#0a0a0a] p-2.5 sm:p-3.5 rounded-xl border border-[#27272a]">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 text-xs sm:text-sm">
                                <i class="ri-heart-pulse-fill"></i>
                            </div>
                            <span class="text-[11px] sm:text-sm font-semibold text-white leading-tight">Skilled Nursing & Care</span>
                        </div>
                        <div class="flex items-center gap-2.5 sm:gap-3 bg-[#0a0a0a] p-2.5 sm:p-3.5 rounded-xl border border-[#27272a]">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 text-xs sm:text-sm">
                                <i class="ri-user-follow-fill"></i>
                            </div>
                            <span class="text-[11px] sm:text-sm font-semibold text-white leading-tight">Physical Therapy</span>
                        </div>
                        <div class="flex items-center gap-2.5 sm:gap-3 bg-[#0a0a0a] p-2.5 sm:p-3.5 rounded-xl border border-[#27272a]">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 text-xs sm:text-sm">
                                <i class="ri-brain-line"></i>
                            </div>
                            <span class="text-[11px] sm:text-sm font-semibold text-white leading-tight">Behavioral Health</span>
                        </div>
                        <div class="flex items-center gap-2.5 sm:gap-3 bg-[#0a0a0a] p-2.5 sm:p-3.5 rounded-xl border border-[#27272a]">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 text-xs sm:text-sm">
                                <i class="ri-stethoscope-fill"></i>
                            </div>
                            <span class="text-[11px] sm:text-sm font-semibold text-white leading-tight">Chronic Disease Care</span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="pt-3 flex flex-col sm:flex-row items-center gap-4">
                        <a href="tel:13527292727" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-7 py-3 rounded-full text-xs tracking-wider uppercase transition-all transform hover:scale-105 shadow-xl flex items-center gap-2">
                            <i class="ri-phone-fill text-sm"></i>
                            <span>Call +1 352 729 2727</span>
                        </a>
                        <a href="#consultation" class="bg-[#121212] hover:bg-[#1a1a1a] text-white border border-[#27272a] hover:border-[#C8A14F] font-heading font-semibold px-7 py-3 rounded-full text-xs tracking-wider uppercase transition-all">
                            Request Free Consultation
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. WHAT MAKES US DIFFERENT? SECTION (LEFT CONTENT PARAGRAPHS WITH CHECKPOINTS, RIGHT LARGE IMAGE bg2.jpg NO BADGE) -->
    <section id="difference" 
             x-data="{ shown: false }" 
             x-init="const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             class="py-16 md:py-20 bg-[#0a0a0a] border-b border-[#27272a] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                
                <!-- LEFT COLUMN: Content with 5 Clean Paragraph Checkpoints -->
                <div class="lg:col-span-6 space-y-6 transition-all duration-1000 delay-100 transform"
                     :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
                    <div class="space-y-3">
                        <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                            Our Core Pillars of Excellence
                        </span>
                        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight">
                            What Makes Us Different?
                        </h2>
                        <p class="text-[#a1a1aa] text-sm sm:text-base leading-relaxed font-medium">
                            At Angels Home Health of Florida, we elevate standard home health care into a compassionate, clinical partnership tailored to your family.
                        </p>
                    </div>

                    <!-- 5 Clean Checkpoints -->
                    <div class="space-y-4">
                        
                        <!-- Checkpoint 1 -->
                        <div class="flex items-start gap-3.5 group">
                            <div class="w-7 h-7 rounded-full bg-[#C8A14F]/10 border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 mt-0.5 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all duration-300">
                                <i class="ri-checkbox-circle-fill text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">
                                    Led by Medical Expertise
                                </h3>
                                <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium mt-0.5">
                                    Decades of clinical insight ensuring personalized, physician-guided care plans for every patient.
                                </p>
                            </div>
                        </div>

                        <!-- Checkpoint 2 -->
                        <div class="flex items-start gap-3.5 group">
                            <div class="w-7 h-7 rounded-full bg-[#C8A14F]/10 border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 mt-0.5 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all duration-300">
                                <i class="ri-checkbox-circle-fill text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">
                                    Comprehensive In-Home Services
                                </h3>
                                <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium mt-0.5">
                                    Full spectrum of skilled nursing, physical therapy, behavioral health, and chronic disease management.
                                </p>
                            </div>
                        </div>

                        <!-- Checkpoint 3 -->
                        <div class="flex items-start gap-3.5 group">
                            <div class="w-7 h-7 rounded-full bg-[#C8A14F]/10 border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 mt-0.5 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all duration-300">
                                <i class="ri-checkbox-circle-fill text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">
                                    Patient-Centered Approach
                                </h3>
                                <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium mt-0.5">
                                    Treating every patient like family with dignity, respect, and customized care that fosters healing.
                                </p>
                            </div>
                        </div>

                        <!-- Checkpoint 4 -->
                        <div class="flex items-start gap-3.5 group">
                            <div class="w-7 h-7 rounded-full bg-[#C8A14F]/10 border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 mt-0.5 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all duration-300">
                                <i class="ri-checkbox-circle-fill text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">
                                    Statewide Reach, Local Touch
                                </h3>
                                <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium mt-0.5">
                                    Based in Mount Dora with accessible, community-focused care provided across Florida.
                                </p>
                            </div>
                        </div>

                        <!-- Checkpoint 5 -->
                        <div class="flex items-start gap-3.5 group">
                            <div class="w-7 h-7 rounded-full bg-[#C8A14F]/10 border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 mt-0.5 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all duration-300">
                                <i class="ri-checkbox-circle-fill text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">
                                    Commitment to Continuity
                                </h3>
                                <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium mt-0.5">
                                    Dedicated care teams and clear communication ensuring patients and families feel fully supported.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT COLUMN: High Impact Image bg2.jpg with Premium Frame (NO BADGE) -->
                <div class="lg:col-span-6 relative group flex items-center transition-all duration-1000 delay-300 transform"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-12 scale-95'">
                    <div class="relative w-full rounded-3xl overflow-hidden border-2 border-[#C8A14F]/40 shadow-[0_0_40px_rgba(200,161,79,0.18)] group-hover:border-[#C8A14F] transition-all duration-500">
                        <img src="{{ asset('images/bg2.jpg') }}" 
                             alt="What Makes Us Different - Angels Home Health" 
                             class="w-full h-auto min-h-[340px] sm:min-h-[420px] max-h-[520px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#000000]/40 via-transparent to-transparent"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. WHY CHOOSE US? (FEATURED IMAGE IN CENTER CIRCULAR FORMAT + LEFT & RIGHT KEY POINTS) -->
    <section id="why-us" 
             x-data="{ shown: false }" 
             x-init="const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             class="py-20 md:py-28 bg-[#0a0a0a] border-b border-[#27272a] transition-all duration-1000 transform"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    Why Choose Us?
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    We provide compassionate, personalized care that ensures your loved ones receive the support they deserve with experienced caregivers, flexible scheduling, and complete peace of mind.
                </p>
            </div>

            <!-- 3-Column Layout: Left Points (3), Center Featured Circular Image, Right Points (3) -->
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                
                <!-- LEFT COLUMN: 3 Key Points -->
                <div class="lg:col-span-4 space-y-6">
                    <!-- Point 1 -->
                    <div class="bg-[#121212] p-6 sm:p-7 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all space-y-2.5">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-[#000000] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-xs">01</span>
                            <h3 class="font-heading font-bold text-lg text-white">Personalized Care Plans</h3>
                        </div>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            We design customized care plans that meet the unique needs of each individual, ensuring comfort, dignity, and independence.
                        </p>
                    </div>

                    <!-- Point 2 -->
                    <div class="bg-[#121212] p-6 sm:p-7 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all space-y-2.5">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-[#000000] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-xs">02</span>
                            <h3 class="font-heading font-bold text-lg text-white">Highly Trained Caregivers</h3>
                        </div>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            Our caregivers are not only skilled but also compassionate, providing respectful and empathetic care that feels like family.
                        </p>
                    </div>

                    <!-- Point 3 -->
                    <div class="bg-[#121212] p-6 sm:p-7 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all space-y-2.5">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-[#000000] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-xs">03</span>
                            <h3 class="font-heading font-bold text-lg text-white">Comprehensive Services</h3>
                        </div>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            From daily personal care to specialized medical support, we offer a full range of services to keep your loved ones safe.
                        </p>
                    </div>
                </div>

                <!-- CENTER COLUMN: High Impact Featured Image in Circular Format -->
                <div class="lg:col-span-4 flex justify-center my-6 lg:my-0">
                    <div class="relative group">
                        <!-- Outer Decorative Glowing Ring -->
                        <div class="w-72 h-72 sm:w-96 sm:h-96 rounded-full p-3 bg-[#000000] border-4 border-[#C8A14F]/60 shadow-[0_0_50px_rgba(200,161,79,0.3)] transition-all duration-500 group-hover:scale-105 group-hover:border-[#C8A14F]">
                            <!-- Inner Circular Image Container -->
                            <div class="w-full h-full rounded-full overflow-hidden relative">
                                <img src="{{ asset('images/home_caregiver_circle.jpg') }}" 
                                     alt="Angels Home Health Caregiver & Patient" 
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-[#000000]/15"></div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- RIGHT COLUMN: 3 Key Points -->
                <div class="lg:col-span-4 space-y-6">
                    <!-- Point 4 -->
                    <div class="bg-[#121212] p-6 sm:p-7 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all space-y-2.5">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-[#000000] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-xs">04</span>
                            <h3 class="font-heading font-bold text-lg text-white">Flexible Care Options</h3>
                        </div>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            Whether you need temporary assistance or 24-hour care, our flexible scheduling ensures we’re there when you need us most.
                        </p>
                    </div>

                    <!-- Point 5 -->
                    <div class="bg-[#121212] p-6 sm:p-7 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all space-y-2.5">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-[#000000] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-xs">05</span>
                            <h3 class="font-heading font-bold text-lg text-white">Complex Medical Support</h3>
                        </div>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            Our team has experience in providing care for Alzheimer’s, Parkinson’s, post-surgery recovery, and other complex health conditions.
                        </p>
                    </div>

                    <!-- Point 6 -->
                    <div class="bg-[#121212] p-6 sm:p-7 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all space-y-2.5">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-[#000000] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-xs">06</span>
                            <h3 class="font-heading font-bold text-lg text-white">Emotional & Social Support</h3>
                        </div>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            We go beyond physical care by offering companionship, encouraging social activities, and providing emotional support to promote mental well-being.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6.5. HOW IN-HOME CARE WORKS (4-STEP PROCESS SECTION) -->
    <section id="process" 
             x-data="{ shown: false }" 
             x-init="const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             class="py-20 md:py-28 bg-[#000000] border-b border-[#27272a] transition-all duration-1000 transform"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    How In-Home Care Works
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    Starting care for your loved one is seamless and straightforward. We guide you through every step with personal attention and clinical clarity.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Step 1 -->
                <div class="bg-[#0a0a0a] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all space-y-4 relative group">
                    <div class="flex items-center justify-between">
                        <span class="w-10 h-10 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-sm">01</span>
                        <i class="ri-phone-find-line text-2xl text-[#a1a1aa] group-hover:text-[#C8A14F] transition-colors"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Free Consultation</h3>
                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                        Speak with our care coordinators to discuss your family's needs, schedule, and specific health requirements.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-[#0a0a0a] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all space-y-4 relative group">
                    <div class="flex items-center justify-between">
                        <span class="w-10 h-10 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-sm">02</span>
                        <i class="ri-file-user-line text-2xl text-[#a1a1aa] group-hover:text-[#C8A14F] transition-colors"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Customized Plan</h3>
                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                        We design a tailored care plan centered around doctor orders, personal goals, and comfort preferences.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-[#0a0a0a] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all space-y-4 relative group">
                    <div class="flex items-center justify-between">
                        <span class="w-10 h-10 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-sm">03</span>
                        <i class="ri-user-heart-fill text-2xl text-[#a1a1aa] group-hover:text-[#C8A14F] transition-colors"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Caregiver Match</h3>
                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                        We pair your loved one with a compassionate, highly trained nurse or caregiver best suited to their personality and condition.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="bg-[#0a0a0a] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all space-y-4 relative group">
                    <div class="flex items-center justify-between">
                        <span class="w-10 h-10 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] font-bold text-sm">04</span>
                        <i class="ri-shield-check-line text-2xl text-[#a1a1aa] group-hover:text-[#C8A14F] transition-colors"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Ongoing Support</h3>
                    <p class="text-xs text-[#a1a1aa] leading-relaxed">
                        Continuous care evaluation, regular check-ins, and ongoing updates to ensure ongoing safety and peace of mind.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. MISSION & VISION SECTION -->
    <section id="mission" 
             x-data="{ shown: false }" 
             x-init="const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             class="py-20 md:py-28 bg-[#000000] border-b border-[#27272a] transition-all duration-1000 transform"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-10">
                <!-- Our Mission -->
                <div class="bg-[#0a0a0a] p-8 sm:p-10 rounded-2xl border border-[#C8A14F]/40 space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                            <i class="ri-compass-3-line text-xl"></i>
                        </div>
                        <h2 class="font-heading font-extrabold text-3xl text-white">Our Mission</h2>
                    </div>
                    <p class="text-[#cbd5e1] text-base sm:text-lg leading-relaxed font-medium">
                        Angels Home Health of Florida delivers compassionate, personalized care across the state. We provide skilled nursing, physical therapy, behavioral health, and chronic disease management in the comfort of your home. Our mission is to enhance lives with dignity, respect, and exceptional in-home healthcare services.
                    </p>
                </div>

                <!-- Our Vision -->
                <div class="bg-[#0a0a0a] p-8 sm:p-10 rounded-2xl border border-[#C8A14F]/40 space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                            <i class="ri-eye-line text-xl"></i>
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

    <!-- 8.4. AUTO-SLIDING TESTIMONIALS SECTION (3 CARDS AT A TIME, NO PICTURES) -->
    <section id="testimonials" 
             x-data="{ 
                 shown: false,
                 activeSlide: 0, 
                 totalSlides: 2, 
                 timer: null,
                 startAutoSlide() {
                     this.timer = setInterval(() => {
                         this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                     }, 6000);
                 },
                 stopAutoSlide() {
                     if (this.timer) clearInterval(this.timer);
                 },
                 goTo(index) {
                     this.activeSlide = index;
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 next() {
                     this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 prev() {
                     this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 }
             }"
             x-init="startAutoSlide(); const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             @mouseenter="stopAutoSlide()"
             @mouseleave="startAutoSlide()"
             class="py-20 md:py-28 bg-[#0a0a0a] border-b border-[#27272a] relative overflow-hidden transition-all duration-1000 transform"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    What Families Say About Us
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    Read real experiences from patients and family members in Mount Dora and Florida who trust Angels Home Health.
                </p>
            </div>

            <!-- Continuous Horizontal Carousel Slider Track -->
            <div class="overflow-hidden w-full">
                <div class="flex transition-transform duration-700 ease-in-out"
                     :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                    
                    <!-- Set 1 (Cards 1, 2, 3) -->
                    <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Card 1 -->
                        <div class="bg-[#121212] p-6 sm:p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all flex flex-col justify-between space-y-4 shadow-xl">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-1 text-[#C8A14F] text-sm">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <i class="ri-double-quotes-l text-3xl text-[#C8A14F]/30"></i>
                                </div>
                                <blockquote class="text-[#cbd5e1] text-sm leading-relaxed font-medium">
                                    "The level of genuine care and medical professionalism from Angels Home Health was beyond our expectations. My husband received post-surgery physical therapy at home, and the caregivers treated us like family."
                                </blockquote>
                            </div>
                            <div class="pt-4 border-t border-[#27272a]">
                                <h4 class="font-heading font-bold text-white text-base">Robert & Mary Henderson</h4>
                                <span class="text-xs text-[#C8A14F] font-semibold">Mount Dora, FL · Physical Therapy & Care</span>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-[#121212] p-6 sm:p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all flex flex-col justify-between space-y-4 shadow-xl">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-1 text-[#C8A14F] text-sm">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <i class="ri-double-quotes-l text-3xl text-[#C8A14F]/30"></i>
                                </div>
                                <blockquote class="text-[#cbd5e1] text-sm leading-relaxed font-medium">
                                    "Finding reliable skilled nursing for my elderly mother was stressing our family. Angels Home Health created a tailored medication and personal care routine that gave us total peace of mind."
                                </blockquote>
                            </div>
                            <div class="pt-4 border-t border-[#27272a]">
                                <h4 class="font-heading font-bold text-white text-base">Patricia Miller</h4>
                                <span class="text-xs text-[#C8A14F] font-semibold">Lake County, FL · Skilled Nursing Support</span>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-[#121212] p-6 sm:p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all flex flex-col justify-between space-y-4 shadow-xl">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-1 text-[#C8A14F] text-sm">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <i class="ri-double-quotes-l text-3xl text-[#C8A14F]/30"></i>
                                </div>
                                <blockquote class="text-[#cbd5e1] text-sm leading-relaxed font-medium">
                                    "Their registered nurses and chronic care managers are top-tier. Responsive, compassionate, and attentive to every detail. I highly recommend them to anyone needing home care in Florida."
                                </blockquote>
                            </div>
                            <div class="pt-4 border-t border-[#27272a]">
                                <h4 class="font-heading font-bold text-white text-base">James W. Elder</h4>
                                <span class="text-xs text-[#C8A14F] font-semibold">Tavares, FL · Chronic Disease Management</span>
                            </div>
                        </div>

                    </div>

                    <!-- Set 2 (Cards 4, 5, 6) -->
                    <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Card 4 -->
                        <div class="bg-[#121212] p-6 sm:p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all flex flex-col justify-between space-y-4 shadow-xl">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-1 text-[#C8A14F] text-sm">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <i class="ri-double-quotes-l text-3xl text-[#C8A14F]/30"></i>
                                </div>
                                <blockquote class="text-[#cbd5e1] text-sm leading-relaxed font-medium">
                                    "The caregivers are always prompt, polite, and deeply caring. Having daily assistance at home allowed my father to stay in his own house comfortably."
                                </blockquote>
                            </div>
                            <div class="pt-4 border-t border-[#27272a]">
                                <h4 class="font-heading font-bold text-white text-base">Eleanor & Thomas Wright</h4>
                                <span class="text-xs text-[#C8A14F] font-semibold">Eustis, FL · Personal Care & Assistance</span>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="bg-[#121212] p-6 sm:p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all flex flex-col justify-between space-y-4 shadow-xl">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-1 text-[#C8A14F] text-sm">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <i class="ri-double-quotes-l text-3xl text-[#C8A14F]/30"></i>
                                </div>
                                <blockquote class="text-[#cbd5e1] text-sm leading-relaxed font-medium">
                                    "After knee replacement surgery, their physical therapist helped me get back on my feet faster than expected. Extraordinary attention and encouragement!"
                                </blockquote>
                            </div>
                            <div class="pt-4 border-t border-[#27272a]">
                                <h4 class="font-heading font-bold text-white text-base">Marcus Vance</h4>
                                <span class="text-xs text-[#C8A14F] font-semibold">Leesburg, FL · Post-Surgery Rehab</span>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="bg-[#121212] p-6 sm:p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all flex flex-col justify-between space-y-4 shadow-xl">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-1 text-[#C8A14F] text-sm">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <i class="ri-double-quotes-l text-3xl text-[#C8A14F]/30"></i>
                                </div>
                                <blockquote class="text-[#cbd5e1] text-sm leading-relaxed font-medium">
                                    "Angels Home Health provided specialized care for my mother with memory loss. Their patience and gentle approach have made an immense difference for our whole family."
                                </blockquote>
                            </div>
                            <div class="pt-4 border-t border-[#27272a]">
                                <h4 class="font-heading font-bold text-white text-base">Sarah Jenkins</h4>
                                <span class="text-xs text-[#C8A14F] font-semibold">Clermont, FL · Memory Care Support</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Slider Controls (Rounded Pill Indicators + Arrows) -->
            <div class="flex items-center justify-center gap-4 mt-10">
                <button type="button" @click="prev()" class="w-10 h-10 rounded-full bg-[#000000] text-white hover:bg-[#C8A14F] hover:text-[#000000] border border-[#27272a] flex items-center justify-center transition-all" aria-label="Previous testimonials">
                    <i class="ri-arrow-left-s-line text-xl"></i>
                </button>
                <div class="flex items-center gap-2">
                    <button type="button" @click="goTo(0)" :class="activeSlide === 0 ? 'w-8 bg-[#C8A14F]' : 'w-2.5 bg-[#27272a]'" class="h-2.5 rounded-full transition-all duration-300" aria-label="Go to set 1"></button>
                    <button type="button" @click="goTo(1)" :class="activeSlide === 1 ? 'w-8 bg-[#C8A14F]' : 'w-2.5 bg-[#27272a]'" class="h-2.5 rounded-full transition-all duration-300" aria-label="Go to set 2"></button>
                </div>
                <button type="button" @click="next()" class="w-10 h-10 rounded-full bg-[#000000] text-white hover:bg-[#C8A14F] hover:text-[#000000] border border-[#27272a] flex items-center justify-center transition-all" aria-label="Next testimonials">
                    <i class="ri-arrow-right-s-line text-xl"></i>
                </button>
            </div>

        </div>
    </section>

    <!-- 8.5. FREQUENTLY ASKED QUESTIONS (ACCORDION SECTION) -->
    <section id="faq" 
             x-data="{ shown: false, activeFaq: 0 }" 
             x-init="const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             class="py-20 md:py-28 bg-[#000000] border-b border-[#27272a] transition-all duration-1000 transform"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    Frequently Asked Questions
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    Find clear answers to common questions about our in-home health care services, scheduling, and insurance coverage.
                </p>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-all" :class="activeFaq === 0 ? 'border-[#C8A14F]/60' : ''">
                    <button type="button" @click="activeFaq = activeFaq === 0 ? null : 0" class="w-full p-6 text-left flex items-center justify-between gap-4 font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                        <span>What geographic areas in Florida do you serve?</span>
                        <i class="text-xl text-[#C8A14F] transition-transform duration-300" :class="activeFaq === 0 ? 'ri-subtract-line' : 'ri-add-line'"></i>
                    </button>
                    <div x-show="activeFaq === 0" x-collapse class="px-6 pb-6 text-sm text-[#a1a1aa] leading-relaxed font-medium border-t border-[#27272a]/60 pt-4">
                        We are proudly headquartered in Mount Dora, FL, and serve patients across Lake County, Central Florida, and throughout the state with certified in-home clinical care.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-all" :class="activeFaq === 1 ? 'border-[#C8A14F]/60' : ''">
                    <button type="button" @click="activeFaq = activeFaq === 1 ? null : 1" class="w-full p-6 text-left flex items-center justify-between gap-4 font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                        <span>What types of home health care services do you offer?</span>
                        <i class="text-xl text-[#C8A14F] transition-transform duration-300" :class="activeFaq === 1 ? 'ri-subtract-line' : 'ri-add-line'"></i>
                    </button>
                    <div x-show="activeFaq === 1" x-collapse class="px-6 pb-6 text-sm text-[#a1a1aa] leading-relaxed font-medium border-t border-[#27272a]/60 pt-4">
                        We provide skilled nursing, physical therapy, behavioral health, personal daily assistance, medication management, chronic disease care, and light housekeeping.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-all" :class="activeFaq === 2 ? 'border-[#C8A14F]/60' : ''">
                    <button type="button" @click="activeFaq = activeFaq === 2 ? null : 2" class="w-full p-6 text-left flex items-center justify-between gap-4 font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                        <span>How quickly can in-home care services begin?</span>
                        <i class="text-xl text-[#C8A14F] transition-transform duration-300" :class="activeFaq === 2 ? 'ri-subtract-line' : 'ri-add-line'"></i>
                    </button>
                    <div x-show="activeFaq === 2" x-collapse class="px-6 pb-6 text-sm text-[#a1a1aa] leading-relaxed font-medium border-t border-[#27272a]/60 pt-4">
                        Care can usually begin within 24 to 48 hours following an initial assessment and consultation with our nursing team.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-all" :class="activeFaq === 3 ? 'border-[#C8A14F]/60' : ''">
                    <button type="button" @click="activeFaq = activeFaq === 3 ? null : 3" class="w-full p-6 text-left flex items-center justify-between gap-4 font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                        <span>Are your caregivers licensed and background checked?</span>
                        <i class="text-xl text-[#C8A14F] transition-transform duration-300" :class="activeFaq === 3 ? 'ri-subtract-line' : 'ri-add-line'"></i>
                    </button>
                    <div x-show="activeFaq === 3" x-collapse class="px-6 pb-6 text-sm text-[#a1a1aa] leading-relaxed font-medium border-t border-[#27272a]/60 pt-4">
                        Yes. All caregivers and nurses undergo rigorous background screening, license verification, and specialized clinical training to deliver exceptional patient care.
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-all" :class="activeFaq === 4 ? 'border-[#C8A14F]/60' : ''">
                    <button type="button" @click="activeFaq = activeFaq === 4 ? null : 4" class="w-full p-6 text-left flex items-center justify-between gap-4 font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                        <span>Can care plans be adjusted as my family's needs change?</span>
                        <i class="text-xl text-[#C8A14F] transition-transform duration-300" :class="activeFaq === 4 ? 'ri-subtract-line' : 'ri-add-line'"></i>
                    </button>
                    <div x-show="activeFaq === 4" x-collapse class="px-6 pb-6 text-sm text-[#a1a1aa] leading-relaxed font-medium border-t border-[#27272a]/60 pt-4">
                        Absolutely. We continuously review care progress and update care plans in real-time according to changing health requirements and family preferences.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CONSULTATION & CONTACT FORM -->
    <section id="consultation" 
             x-data="{ shown: false }" 
             x-init="const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el);"
             class="py-20 md:py-28 bg-[#000000] transition-all duration-1000 transform"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-5 space-y-6">
                    <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                        Request a Personalized Care Plan
                    </h2>
                    <p class="text-[#a1a1aa] text-base leading-relaxed">
                        Our care coordinators in Mount Dora are ready to discuss your family's unique requirements. Fill out the form or contact us directly.
                    </p>
                    
                    <div class="space-y-4 pt-4 border-t border-[#27272a]">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0">
                                <i class="ri-map-pin-fill text-lg"></i>
                            </div>
                            <div>
                                <span class="block text-xs text-[#a1a1aa] uppercase font-heading font-semibold">Address</span>
                                <span class="text-sm text-white font-medium">3400, CR 19-A, Mt Dora, FL 32757</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0">
                                <i class="ri-phone-fill text-lg"></i>
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
                    <div class="bg-[#0a0a0a] rounded-2xl border border-[#C8A14F]/40 p-8 sm:p-10 space-y-6">
                        <h3 class="font-heading font-bold text-xl text-white border-b border-[#27272a] pb-4">
                            Schedule Your Free Consultation
                        </h3>

                        @if($formSubmitted)
                            <div class="bg-[#121212] border border-[#C8A14F] text-[#C8A14F] p-4 rounded-xl text-sm font-medium">
                                ✓ Thank you! Your consultation request has been received. Our Mount Dora care coordinator will contact you shortly.
                            </div>
                        @else
                            <form wire:submit="submitConsultation" class="space-y-4">
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-heading font-semibold uppercase text-[#a1a1aa] mb-1.5">Full Name</label>
                                        <input type="text" wire:model="name" placeholder="John Doe" class="w-full bg-[#000000] border border-[#27272a] rounded-full px-5 py-3 text-sm text-white placeholder-[#52525b] focus:outline-none focus:border-[#C8A14F]">
                                        @error('name') <span class="text-xs text-red-400 mt-1 block px-2">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-xs font-heading font-semibold uppercase text-[#a1a1aa] mb-1.5">Phone Number</label>
                                        <input type="tel" wire:model="phone" placeholder="(352) 000-0000" class="w-full bg-[#000000] border border-[#27272a] rounded-full px-5 py-3 text-sm text-white placeholder-[#52525b] focus:outline-none focus:border-[#C8A14F]">
                                        @error('phone') <span class="text-xs text-red-400 mt-1 block px-2">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-heading font-semibold uppercase text-[#a1a1aa] mb-1.5">Email Address</label>
                                        <input type="email" wire:model="email" placeholder="john@example.com" class="w-full bg-[#000000] border border-[#27272a] rounded-full px-5 py-3 text-sm text-white placeholder-[#52525b] focus:outline-none focus:border-[#C8A14F]">
                                        @error('email') <span class="text-xs text-red-400 mt-1 block px-2">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-xs font-heading font-semibold uppercase text-[#a1a1aa] mb-1.5">Requested Service</label>
                                        <select wire:model="service" class="w-full bg-[#000000] border border-[#27272a] rounded-full px-5 py-3 text-sm text-white focus:outline-none focus:border-[#C8A14F]">
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
                                    <textarea wire:model="notes" rows="3" placeholder="Tell us about your care needs or schedule preferences..." class="w-full bg-[#000000] border border-[#27272a] rounded-2xl px-5 py-3 text-sm text-white placeholder-[#52525b] focus:outline-none focus:border-[#C8A14F]"></textarea>
                                </div>

                                <button type="submit" class="w-full bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold py-4 rounded-full text-sm uppercase tracking-wider transition-all transform hover:scale-[1.02] shadow-xl">
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
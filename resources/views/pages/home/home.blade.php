<div>
    <!-- 3. MODERN FULL SCREEN AUTO-SLIDER HERO SECTION -->
    <section id="home" 
             x-data="{ 
                 currentSlide: 0, 
                 totalSlides: {{ max(1, $sliders->count()) }}, 
                 timer: null,
                 startAutoSlide() {
                     if (this.totalSlides <= 1) return;
                     this.timer = setInterval(() => {
                         this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                     }, 6000);
                 },
                 stopAutoSlide() {
                     if (this.timer) clearInterval(this.timer);
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
             class="relative bg-[#000000] border-b border-[#27272a] overflow-hidden h-[520px] sm:h-[600px] lg:h-[660px] flex flex-col justify-between group/hero">
        
        <!-- Hero Full Screen Slider Slides Wrapper -->
        <div class="relative flex-grow flex items-center justify-center">
            
            @forelse($sliders as $index => $slide)
                <div x-show="currentSlide === {{ $index }}" 
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-500"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute inset-0 flex items-center"
                     x-cloak>
                    <!-- Background Image with Clean 35% Overlay -->
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 scale-100" 
                         style="background-image: url('{{ $slide->image ?: 'https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=1920&auto=format&fit=crop' }}');"></div>
                    <div class="absolute inset-0 bg-[#000000]/40"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-black/30"></div>

                    <!-- Slide Content (Aligned with Header max-w-7xl) -->
                    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20 text-center sm:text-left">
                        <div class="space-y-6">
                            <h1 class="font-heading font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white leading-tight tracking-tight max-w-4xl drop-shadow-lg">
                                {!! nl2br(e($slide->title)) !!}
                            </h1>
                            @if($slide->paragraph)
                                <p class="text-[#f8fafc] text-base sm:text-xl leading-relaxed max-w-2xl font-medium drop-shadow-md">
                                    {{ $slide->paragraph }}
                                </p>
                            @endif
                            <div class="pt-4 flex flex-col sm:flex-row items-center sm:items-start gap-4">
                                @if($slide->btn_1)
                                    <a href="{{ $slide->btn_1_url ?: '#consultation' }}" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-9 py-4 rounded-full text-sm tracking-wider uppercase text-center transition-all transform hover:scale-105 shadow-xl">
                                        {{ $slide->btn_1 }}
                                    </a>
                                @endif
                                @if($slide->btn_2)
                                    <a href="{{ $slide->btn_2_url ?: '#services' }}" class="bg-[#000000]/80 hover:bg-[#121212] text-white border border-[#27272a] hover:border-[#C8A14F] font-heading font-semibold px-9 py-4 rounded-full text-sm tracking-wider uppercase text-center transition-all backdrop-blur-sm">
                                        {{ $slide->btn_2 }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="absolute inset-0 flex items-center justify-center text-center p-6 bg-zinc-950">
                    <div class="space-y-3">
                        <h2 class="text-3xl font-bold text-white">Welcome to Angels Home Health</h2>
                        <p class="text-zinc-400 max-w-md mx-auto text-sm">Full-spectrum compassionate clinical home healthcare in Mount Dora, FL.</p>
                    </div>
                </div>
            @endforelse

        </div>

        <!-- Slider Navigation Controls (Prev/Next Arrows + Dots) -->
        @if($sliders->count() > 1)
            <!-- Arrows on Left and Right -->
            <button type="button" 
                    @click="prev()" 
                    class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-black/60 hover:bg-[#C8A14F] text-white hover:text-black border border-white/20 hover:border-[#C8A14F] flex items-center justify-center transition-all backdrop-blur-sm opacity-80 sm:opacity-0 sm:group-hover/hero:opacity-100" 
                    aria-label="Previous Slide">
                <i class="ri-arrow-left-s-line text-2xl"></i>
            </button>
            <button type="button" 
                    @click="next()" 
                    class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-black/60 hover:bg-[#C8A14F] text-white hover:text-black border border-white/20 hover:border-[#C8A14F] flex items-center justify-center transition-all backdrop-blur-sm opacity-80 sm:opacity-0 sm:group-hover/hero:opacity-100" 
                    aria-label="Next Slide">
                <i class="ri-arrow-right-s-line text-2xl"></i>
            </button>

            <!-- Bottom Indicator Dots -->
            <div class="relative z-20 pb-6 flex items-center justify-center gap-2.5">
                <template x-for="i in totalSlides" :key="i">
                    <button type="button" 
                            @click="goTo(i - 1)" 
                            class="h-2 rounded-full transition-all duration-300"
                            :class="currentSlide === (i - 1) ? 'w-8 bg-[#C8A14F]' : 'w-2 bg-white/40 hover:bg-white/70'"
                            :aria-label="'Go to slide ' + i">
                    </button>
                </template>
            </div>
        @endif

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
                <span>✦ {{ strtoupper(setting('location', 'Mount Dora, FL & surrounding areas')) }}</span>
                <span>✦ CALL TODAY: {{ setting('phone', '+1 352 729 2727') }}</span>
                <span>✦ INDIVIDUALIZED CARE PLANS</span>
            </div>
            <div class="flex items-center gap-12" aria-hidden="true">
                <span>✦ SKILLED NURSING & REHABILITATION</span>
                <span>✦ 24/7 IN-HOME CARE SUPPORT</span>
                <span>✦ PHYSICAL & OCCUPATIONAL THERAPY</span>
                <span>✦ BEHAVIORAL HEALTHCARE</span>
                <span>✦ CHRONIC DISEASE MANAGEMENT</span>
                <span>✦ {{ strtoupper(setting('location', 'Mount Dora, FL & surrounding areas')) }}</span>
                <span>✦ CALL TODAY: {{ setting('phone', '+1 352 729 2727') }}</span>
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

    <!-- 4.5. OUR IN-HOME HEALTH SERVICES SECTION (AUTO-SLIDING 1-BY-1 CAROUSEL) -->
    <section id="services" 
             x-data="{ 
                 shown: false,
                 serviceSlide: 0, 
                 totalServices: {{ $services->count() }}, 
                 serviceTimer: null,
                 stepPercent() {
                     if (window.innerWidth >= 1024) return 33.333333;
                     if (window.innerWidth >= 768) return 50;
                     return 100;
                 },
                 maxSlide() {
                     if (window.innerWidth >= 1024) return Math.max(0, this.totalServices - 3);
                     if (window.innerWidth >= 768) return Math.max(0, this.totalServices - 2);
                     return Math.max(0, this.totalServices - 1);
                 },
                 startAutoSlide() {
                     if (this.totalServices <= 1) return;
                     this.serviceTimer = setInterval(() => {
                         this.next();
                     }, 6000);
                 },
                 stopAutoSlide() {
                     if (this.serviceTimer) clearInterval(this.serviceTimer);
                 },
                 goTo(index) {
                     this.serviceSlide = Math.min(index, this.maxSlide());
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 next() {
                     if (this.serviceSlide >= this.maxSlide()) {
                         this.serviceSlide = 0;
                     } else {
                         this.serviceSlide++;
                     }
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 prev() {
                     if (this.serviceSlide <= 0) {
                         this.serviceSlide = this.maxSlide();
                     } else {
                         this.serviceSlide--;
                     }
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 }
             }"
             x-init="startAutoSlide(); const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el); window.addEventListener('resize', () => { if (serviceSlide > maxSlide()) serviceSlide = maxSlide(); });"
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

            <!-- Dynamic Services Slider Track (1-by-1 Responsive Track) -->
            <div class="overflow-hidden w-full">
                <div class="flex transition-transform duration-700 ease-in-out -mx-3"
                     :style="'transform: translateX(-' + (serviceSlide * stepPercent()) + '%)'">
                    
                    @foreach ($services as $service)
                        <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                            <div class="bg-[#121212] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 overflow-hidden group flex flex-col justify-between shadow-2xl hover:shadow-[0_10px_30px_rgba(200,161,79,0.15)] transform hover:-translate-y-1.5 h-full">
                                <div>
                                    <div class="relative h-52 w-full overflow-hidden bg-[#000000]">
                                        <img src="{{ $service->image ?: 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=800' }}" 
                                             alt="{{ $service->title }}" 
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=800';">
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/30 to-transparent"></div>
                                        <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                            Clinical Service
                                        </span>
                                    </div>
                                    <div class="p-6 sm:p-7 space-y-4">
                                        <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                                            {{ $service->title }}
                                        </h3>
                                        <p class="text-xs text-[#a1a1aa] leading-relaxed line-clamp-3">
                                            {{ $service->short_description }}
                                        </p>
                                    </div>
                                </div>
                                <div class="px-6 pb-6 pt-2">
                                    <a href="/services/{{ $service->slug }}" class="w-full py-3 bg-[#000000] hover:bg-[#C8A14F] text-[#C8A14F] hover:text-[#000000] border border-[#C8A14F]/40 rounded-full text-xs font-heading font-bold tracking-wider uppercase flex items-center justify-center gap-2 transition-all">
                                        <span>Learn More</span>
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Slider Controls (Rounded Pill Indicators + Arrows) -->
            @if ($services->count() > 1)
                <div class="flex items-center justify-center gap-4 mt-12">
                    <button type="button" @click="prev()" class="w-10 h-10 rounded-full bg-[#000000] text-white hover:bg-[#C8A14F] hover:text-[#000000] border border-[#27272a] flex items-center justify-center transition-all" aria-label="Previous services">
                        <i class="ri-arrow-left-s-line text-xl"></i>
                    </button>
                    <div class="flex items-center gap-2">
                        <template x-for="i in (maxSlide() + 1)" :key="i">
                            <button type="button" 
                                    @click="goTo(i - 1)" 
                                    :class="serviceSlide === (i - 1) ? 'w-8 bg-[#C8A14F]' : 'w-2.5 bg-[#27272a] hover:bg-[#C8A14F]/50'" 
                                    class="h-2.5 rounded-full transition-all duration-300" 
                                    :aria-label="'Go to service slide ' + i"></button>
                        </template>
                    </div>
                    <button type="button" @click="next()" class="w-10 h-10 rounded-full bg-[#000000] text-white hover:bg-[#C8A14F] hover:text-[#000000] border border-[#27272a] flex items-center justify-center transition-all" aria-label="Next services">
                        <i class="ri-arrow-right-s-line text-xl"></i>
                    </button>
                </div>
            @endif

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
                    <div class="pt-3 flex flex-wrap items-center gap-4">
                        <a href="{{ phone_url() }}" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-7 py-3 rounded-full text-xs tracking-wider uppercase transition-all transform hover:scale-105 shadow-xl flex items-center gap-2">
                            <i class="ri-phone-fill text-sm"></i>
                            <span>Call {{ setting('phone', '+1 352 729 2727') }}</span>
                        </a>
                        @if (setting('whatsapp'))
                            <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="bg-emerald-600 hover:bg-emerald-500 text-white font-heading font-bold px-6 py-3 rounded-full text-xs tracking-wider uppercase transition-all transform hover:scale-105 shadow-xl flex items-center gap-2">
                                <i class="ri-whatsapp-line text-sm"></i>
                                <span>WhatsApp Us</span>
                            </a>
                        @endif
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

    <!-- 8.4. AUTO-SLIDING TESTIMONIALS SECTION (RESPONSIVE 1-BY-1 CAROUSEL SLIDER) -->
    <section id="testimonials" 
             x-data="{ 
                 shown: false,
                 activeSlide: 0, 
                 totalTestimonials: {{ $testimonials->count() }}, 
                 timer: null,
                 stepPercent() {
                     if (window.innerWidth >= 1024) return 33.333333;
                     if (window.innerWidth >= 768) return 50;
                     return 100;
                 },
                 maxSlide() {
                     if (window.innerWidth >= 1024) return Math.max(0, this.totalTestimonials - 3);
                     if (window.innerWidth >= 768) return Math.max(0, this.totalTestimonials - 2);
                     return Math.max(0, this.totalTestimonials - 1);
                 },
                 startAutoSlide() {
                     if (this.totalTestimonials <= 1) return;
                     this.timer = setInterval(() => {
                         this.next();
                     }, 6000);
                 },
                 stopAutoSlide() {
                     if (this.timer) clearInterval(this.timer);
                 },
                 goTo(index) {
                     this.activeSlide = Math.min(index, this.maxSlide());
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 next() {
                     if (this.activeSlide >= this.maxSlide()) {
                         this.activeSlide = 0;
                     } else {
                         this.activeSlide++;
                     }
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 },
                 prev() {
                     if (this.activeSlide <= 0) {
                         this.activeSlide = this.maxSlide();
                     } else {
                         this.activeSlide--;
                     }
                     this.stopAutoSlide();
                     this.startAutoSlide();
                 }
             }"
             x-init="startAutoSlide(); const observer = new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; observer.disconnect(); } }, { threshold: 0.15 }); observer.observe($el); window.addEventListener('resize', () => { if (activeSlide > maxSlide()) activeSlide = maxSlide(); });"
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

            <!-- Continuous Horizontal Carousel Slider Track (1-by-1 Responsive Track) -->
            <div class="overflow-hidden w-full">
                <div class="flex transition-transform duration-700 ease-in-out -mx-3"
                     :style="'transform: translateX(-' + (activeSlide * stepPercent()) + '%)'">
                    
                    @foreach ($testimonials as $testimonial)
                        <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                            <div class="bg-[#121212] p-6 sm:p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-all flex flex-col justify-between space-y-4 shadow-xl h-full">
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1 text-[#C8A14F] text-sm">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="ri-star-fill {{ $i <= $testimonial->rating ? 'text-[#C8A14F]' : 'text-zinc-600' }}"></i>
                                            @endfor
                                        </div>
                                        <i class="ri-double-quotes-l text-3xl text-[#C8A14F]/30"></i>
                                    </div>
                                    <blockquote class="text-[#cbd5e1] text-sm leading-relaxed font-medium">
                                        "{{ $testimonial->review }}"
                                    </blockquote>
                                </div>
                                <div class="pt-4 border-t border-[#27272a]">
                                    <h4 class="font-heading font-bold text-white text-base">{{ $testimonial->name }}</h4>
                                    <span class="text-xs text-[#C8A14F] font-semibold">{{ $testimonial->designation }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Slider Controls (Rounded Pill Indicators + Arrows) -->
            @if ($testimonials->count() > 1)
                <div class="flex items-center justify-center gap-4 mt-10">
                    <button type="button" @click="prev()" class="w-10 h-10 rounded-full bg-[#000000] text-white hover:bg-[#C8A14F] hover:text-[#000000] border border-[#27272a] flex items-center justify-center transition-all" aria-label="Previous testimonials">
                        <i class="ri-arrow-left-s-line text-xl"></i>
                    </button>
                    <div class="flex items-center gap-2">
                        <template x-for="i in (maxSlide() + 1)" :key="i">
                            <button type="button" 
                                    @click="goTo(i - 1)" 
                                    :class="activeSlide === (i - 1) ? 'w-8 bg-[#C8A14F]' : 'w-2.5 bg-[#27272a] hover:bg-[#C8A14F]/50'" 
                                    class="h-2.5 rounded-full transition-all duration-300" 
                                    :aria-label="'Go to testimonial slide ' + i"></button>
                        </template>
                    </div>
                    <button type="button" @click="next()" class="w-10 h-10 rounded-full bg-[#000000] text-white hover:bg-[#C8A14F] hover:text-[#000000] border border-[#27272a] flex items-center justify-center transition-all" aria-label="Next testimonials">
                        <i class="ri-arrow-right-s-line text-xl"></i>
                    </button>
                </div>
            @endif

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
</div>
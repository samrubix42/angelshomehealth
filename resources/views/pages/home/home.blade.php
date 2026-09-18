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

    <!-- 4. KEY METRICS BAR -->
    <section class="bg-[#0a0a0a] py-10 border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-[#121212] rounded-2xl border border-[#27272a]">
                    <span class="block font-heading font-extrabold text-3xl lg:text-4xl text-[#C8A14F]">100%</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-medium uppercase tracking-wider mt-1 block">Patient-Centered Care</span>
                </div>
                <div class="p-6 bg-[#121212] rounded-2xl border border-[#27272a]">
                    <span class="block font-heading font-extrabold text-3xl lg:text-4xl text-[#C8A14F]">24 / 7</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-medium uppercase tracking-wider mt-1 block">Flexible Scheduling</span>
                </div>
                <div class="p-6 bg-[#121212] rounded-2xl border border-[#27272a]">
                    <span class="block font-heading font-extrabold text-3xl lg:text-4xl text-[#C8A14F]">Mount Dora</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-medium uppercase tracking-wider mt-1 block">Florida & Surrounding Areas</span>
                </div>
                <div class="p-6 bg-[#121212] rounded-2xl border border-[#27272a]">
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
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    What Makes Us Different?
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    At Angels Home Health of Florida, we elevate standard home health care into a compassionate, clinical partnership tailored to your family.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Pillar 1 -->
                <div class="bg-[#0a0a0a] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4">
                    <div class="w-12 h-12 rounded-full bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-user-star-line text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Led by Medical Expertise</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        Our experienced team brings decades of hands-on experience and clinical insight, ensuring every care plan is grounded in medical excellence and tailored to individual needs.
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div class="bg-[#0a0a0a] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4">
                    <div class="w-12 h-12 rounded-full bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-hospital-line text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Comprehensive In-Home Services</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        From skilled nursing and physical therapy to behavioral health and chronic disease management, we offer a full spectrum of care — all delivered in the comfort of your home.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div class="bg-[#0a0a0a] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4">
                    <div class="w-12 h-12 rounded-full bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-heart-pulse-line text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Patient-Centered Approach</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        We treat every patient like family, focusing on dignity, respect, and personalized attention that fosters trust, comfort, and healing.
                    </p>
                </div>

                <!-- Pillar 4 -->
                <div class="bg-[#0a0a0a] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4">
                    <div class="w-12 h-12 rounded-full bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-map-pin-2-line text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Statewide Reach, Local Touch</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        Though based in Mount Dora, our services extend across Florida, combining broad accessibility with the warmth of community-based care.
                    </p>
                </div>

                <!-- Pillar 5 -->
                <div class="bg-[#0a0a0a] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-colors space-y-4 md:col-span-2 lg:col-span-2">
                    <div class="w-12 h-12 rounded-full bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-customer-service-2-line text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Commitment to Continuity</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">
                        We prioritize consistent care and communication, ensuring patients and families always feel supported, informed, and empowered throughout their health journey.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. WHY CHOOSE US? (FEATURED IMAGE IN CENTER CIRCULAR FORMAT + LEFT & RIGHT KEY POINTS) -->
    <section id="why-us" class="py-20 md:py-28 bg-[#0a0a0a] border-b border-[#27272a]">
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
    <section id="process" class="py-20 md:py-28 bg-[#000000] border-b border-[#27272a]">
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
    <section id="mission" class="py-20 md:py-28 bg-[#000000] border-b border-[#27272a]">
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

    <!-- 8. SERVICES BREAKDOWN SECTION -->
    <section id="services" class="py-20 md:py-28 bg-[#0a0a0a] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    Our In-Home Health Services
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    We offer a comprehensive range of services, from personal care and medication management to companionship and light housekeeping. Our dedicated team ensures your loved ones receive the support they need to live comfortably, safely, and with dignity at home.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-[#121212] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded-full bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-user-heart-line text-xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Personal Care & Assistance</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Assistance with daily activities including bathing, dressing, grooming, mobility, and hygiene with complete dignity.</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-[#121212] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded-full bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-capsule-line text-xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Medication Management</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Timely medication reminders, prescription management, and administration supervised by experienced caregivers.</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-[#121212] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded-full bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-team-line text-xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Companionship</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Meaningful conversation, emotional support, social interaction, and engaging activities for mental well-being.</p>
                </div>

                <!-- Service 4 -->
                <div class="bg-[#121212] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded-full bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-home-heart-line text-xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Light Housekeeping</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Keeping the home safe and clean with meal preparation, laundry, dusting, and light tidying services.</p>
                </div>

                <!-- Service 5 -->
                <div class="bg-[#121212] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded-full bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-stethoscope-line text-xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Skilled Nursing & Rehab</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Advanced clinical nursing, wound care, post-surgical rehabilitation, and physical therapy at home.</p>
                </div>

                <!-- Service 6 -->
                <div class="bg-[#121212] p-8 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/50 transition-colors space-y-4">
                    <div class="w-10 h-10 rounded-full bg-[#0a0a0a] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F]">
                        <i class="ri-heart-pulse-line text-xl"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Chronic Disease Management</h3>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed">Support for Alzheimer’s, Parkinson’s, diabetes, cardiac conditions, and chronic illness care.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8.4. AUTO-SLIDING TESTIMONIALS SECTION (3 CARDS AT A TIME, NO PICTURES) -->
    <section id="testimonials" 
             x-data="{ 
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
             x-init="startAutoSlide()"
             @mouseenter="stopAutoSlide()"
             @mouseleave="startAutoSlide()"
             class="py-20 md:py-28 bg-[#0a0a0a] border-b border-[#27272a] relative overflow-hidden">
        
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
    <section id="faq" class="py-20 md:py-28 bg-[#000000] border-b border-[#27272a]" x-data="{ activeFaq: 0 }">
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
    <section id="consultation" class="py-20 md:py-28 bg-[#000000]">
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
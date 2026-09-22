<div class="bg-[#000000] text-white selection:bg-[#C8A14F] selection:text-black">
    <!-- 1. HERO SECTION WITH AMBIENT GOLD RADIAL GLOW & STATS STRIP -->
    <section class="relative bg-[#050505] border-b border-[#27272a] py-20 sm:py-28 overflow-hidden">
        <!-- Subtle Ambient Radial Glow -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_center,rgba(200,161,79,0.15)_0,transparent_70%)] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center sm:text-left">
            <div class="grid lg:grid-cols-12 gap-10 items-center">
                
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-4 py-2 rounded-full uppercase tracking-widest">
                        <i class="ri-shield-check-fill text-sm"></i>
                        <span>ACHC Accredited & Florida Registered Provider</span>
                    </div>

                    <h1 class="font-heading font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white tracking-tight leading-tight">
                        Dedicated Care <span class="text-[#C8A14F]">You Can Trust</span>
                    </h1>

                    <p class="text-base sm:text-xl text-[#a1a1aa] font-medium leading-relaxed max-w-2xl">
                        Angels Home Health of Florida is a premier home health care provider based in Mount Dora, Florida. Delivering skilled nursing, physical therapy, behavioral health, and chronic care in the comfort of your home.
                    </p>

                    <div class="pt-2 flex flex-wrap items-center gap-4">
                        <button @click="$dispatch('open-consultation-modal')" type="button" class="w-full sm:w-auto bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-8 py-4 rounded-full text-xs uppercase tracking-widest text-center transition-all transform hover:scale-105 shadow-xl">
                            Request Free Consultation
                        </button>
                        <a href="{{ phone_url() }}" class="w-full sm:w-auto bg-[#121212] hover:bg-[#1a1a1a] text-white border border-[#27272a] hover:border-[#C8A14F] font-heading font-semibold px-8 py-4 rounded-full text-xs uppercase tracking-widest text-center transition-all flex items-center justify-center gap-2">
                            <i class="ri-phone-fill text-[#C8A14F]"></i>
                            <span>{{ setting('phone', '+1 352 729 2727') }}</span>
                        </a>
                        @if (setting('whatsapp'))
                            <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto bg-emerald-600 hover:bg-emerald-500 text-white font-heading font-semibold px-7 py-4 rounded-full text-xs uppercase tracking-widest text-center transition-all flex items-center justify-center gap-2 shadow-lg">
                                <i class="ri-whatsapp-line text-lg"></i>
                                <span>WhatsApp Us</span>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Right Side Highlight Image Box -->
                <div class="lg:col-span-5 relative group">
                    <div class="relative rounded-3xl overflow-hidden border-2 border-[#C8A14F]/40 shadow-[0_0_50px_rgba(200,161,79,0.15)] group-hover:border-[#C8A14F] transition-all duration-500">
                        <img src="{{ asset('images/as1.jpg') }}" alt="Angels Home Health Nurse Caregiver" class="w-full h-80 sm:h-[420px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#000000] via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 bg-[#0a0a0a]/90 backdrop-blur-md p-4 rounded-2xl border border-[#27272a]">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-[#C8A14F]/20 text-[#C8A14F] flex items-center justify-center text-xl shrink-0">
                                    <i class="ri-heart-pulse-fill"></i>
                                </div>
                                <div>
                                    <h4 class="font-heading font-bold text-sm text-white">Statewide Reach, Local Touch</h4>
                                    <p class="text-xs text-[#a1a1aa]">Based in Mount Dora, serving all of Florida</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. QUICK METRICS STATS BAR -->
    <section class="bg-[#0a0a0a] border-b border-[#27272a] py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-4 space-y-1">
                    <span class="block font-heading font-extrabold text-3xl sm:text-4xl text-[#C8A14F]">100%</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider block">Patient-Centered Care</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="block font-heading font-extrabold text-3xl sm:text-4xl text-white">24 / 7</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider block">Flexible Scheduling</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="block font-heading font-extrabold text-3xl sm:text-4xl text-[#C8A14F]">Mount Dora</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider block">Florida Headquarters</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="block font-heading font-extrabold text-3xl sm:text-4xl text-white">ACHC</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider block">Licensed & Accredited</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. DETAILED STORY & MEDICAL EXPERTISE SECTION -->
    <section class="py-20 bg-[#000000] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                        Our Clinical Philosophy
                    </span>
                    <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight leading-tight">
                        Grounded in Medical Excellence & Compassion
                    </h2>

                    <div class="space-y-4 text-sm sm:text-base text-[#a1a1aa] leading-relaxed font-medium">
                        <p>
                            <strong class="text-white">Angels Home Health of Florida</strong> was established with a singular mission: to redefine home health care by merging rigorous medical expertise with heartfelt personal attention.
                        </p>
                        <p>
                            Our team consists of board-certified registered nurses, physical and occupational therapists, behavioral health specialists, and dedicated care assistants. We work hand-in-hand with physicians to craft individualized care plans that uphold dignity and promote independence.
                        </p>
                    </div>

                    <!-- Bullet Feature Cards -->
                    <div class="grid sm:grid-cols-2 gap-4 pt-2">
                        <div class="bg-[#0a0a0a] p-4 rounded-2xl border border-[#27272a] flex items-center gap-3">
                            <div class="w-8 h-8 rounded-xl bg-[#C8A14F]/15 border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0">
                                <i class="ri-user-follow-fill"></i>
                            </div>
                            <span class="text-xs font-semibold text-white">Registered Nurse Supervision</span>
                        </div>
                        <div class="bg-[#0a0a0a] p-4 rounded-2xl border border-[#27272a] flex items-center gap-3">
                            <div class="w-8 h-8 rounded-xl bg-[#C8A14F]/15 border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0">
                                <i class="ri-stethoscope-fill"></i>
                            </div>
                            <span class="text-xs font-semibold text-white">Custom Clinical Care Plans</span>
                        </div>
                        <div class="bg-[#0a0a0a] p-4 rounded-2xl border border-[#27272a] flex items-center gap-3">
                            <div class="w-8 h-8 rounded-xl bg-[#C8A14F]/15 border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0">
                                <i class="ri-time-fill"></i>
                            </div>
                            <span class="text-xs font-semibold text-white">24/7 On-Call Support</span>
                        </div>
                        <div class="bg-[#0a0a0a] p-4 rounded-2xl border border-[#27272a] flex items-center gap-3">
                            <div class="w-8 h-8 rounded-xl bg-[#C8A14F]/15 border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0">
                                <i class="ri-heart-pulse-fill"></i>
                            </div>
                            <span class="text-xs font-semibold text-white">Hospital Readmission Prevention</span>
                        </div>
                    </div>
                </div>

                <!-- Right Image Grid -->
                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-3xl overflow-hidden border border-[#27272a]">
                        <img src="{{ asset('images/bg2.jpg') }}" alt="Angels Home Health Patient Care" class="w-full h-80 sm:h-[460px] object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. THE 4 PILLARS OF WHAT MAKES US DIFFERENT (#difference anchor) -->
    <section id="difference" class="py-20 bg-[#050505] border-b border-[#27272a] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-4 py-1.5 rounded-full uppercase tracking-widest inline-block">
                    The Angels Difference
                </span>
                <h2 class="font-heading font-extrabold text-3xl sm:text-5xl text-white tracking-tight">
                    What Makes Us Different?
                </h2>
                <p class="text-sm sm:text-base text-[#a1a1aa]">
                    Four core commitments that define our standard of in-home clinical care throughout Florida.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Pillar 1 -->
                <div class="bg-[#121212] p-8 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-2 shadow-2xl relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="space-y-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all">
                            <i class="ri-stethoscope-line text-2xl"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                            Led by Medical Expertise
                        </h3>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            Our experienced team brings decades of hands-on experience and clinical insight, ensuring every care plan is grounded in medical excellence.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="bg-[#121212] p-8 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-2 shadow-2xl relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="space-y-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all">
                            <i class="ri-home-heart-line text-2xl"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                            Comprehensive Services
                        </h3>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            From skilled nursing and physical therapy to behavioral health and chronic disease management, we offer a full spectrum of care at home.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="bg-[#121212] p-8 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-2 shadow-2xl relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="space-y-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all">
                            <i class="ri-user-heart-line text-2xl"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                            Patient-Centered Approach
                        </h3>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            We treat every patient like family, focusing on dignity, respect, and personalized attention that fosters trust and healing.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="bg-[#121212] p-8 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-2 shadow-2xl relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="space-y-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all">
                            <i class="ri-map-pin-2-line text-2xl"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors">
                            Statewide Reach, Local Touch
                        </h3>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            Though based in Mount Dora, our services extend across Florida, combining broad accessibility with community-based warmth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. MISSION & VISION DUAL CARDS (#mission anchor) -->
    <section id="mission" class="py-20 bg-[#000000] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission Box -->
                <div class="bg-[#0a0a0a] p-6 sm:p-10 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/40 transition-all space-y-4 relative overflow-hidden group shadow-2xl">
                    <div class="w-14 h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black transition-all">
                        <i class="ri-compass-3-fill text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-extrabold text-3xl text-white">Our Mission</h3>
                    <p class="text-sm sm:text-base text-[#a1a1aa] leading-relaxed font-medium">
                        Our mission is to deliver comprehensive, compassionate care throughout Florida. We offer a full spectrum of services, including Skilled Nursing, Physical Therapy, Behavioral Health, and Chronic Disease Management, right in the comfort of your home.
                    </p>
                </div>

                <!-- Vision Box -->
                <div class="bg-[#0a0a0a] p-6 sm:p-10 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/40 transition-all space-y-4 relative overflow-hidden group shadow-2xl">
                    <div class="w-14 h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black transition-all">
                        <i class="ri-eye-line text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-extrabold text-3xl text-white">Our Vision</h3>
                    <p class="text-sm sm:text-base text-[#a1a1aa] leading-relaxed font-medium">
                        To be Florida’s most trusted home health care provider, celebrated for clinical integrity, compassionate caregiving, and an unwavering commitment to keeping families safe, informed, and empowered.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. LUXURY CTA BANNER -->
    <section class="py-20 bg-[#050505] text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(200,161,79,0.1)_0,transparent_70%)] pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 space-y-6">
            <h2 class="font-heading font-extrabold text-3xl sm:text-5xl text-white leading-tight">
                Ready to Discuss Your Family's In-Home Care?
            </h2>
            <p class="text-sm sm:text-lg text-[#a1a1aa]">
                Speak directly with our registered nursing coordinator in Mount Dora today.
            </p>
            <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
                <button @click="$dispatch('open-consultation-modal')" type="button" class="w-full sm:w-auto bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-9 py-4 rounded-full text-xs uppercase tracking-widest transition-all transform hover:scale-105 shadow-xl">
                    Schedule Free Consultation
                </button>
                <a href="{{ phone_url() }}" class="w-full sm:w-auto bg-[#121212] hover:bg-[#1a1a1a] text-white border border-[#27272a] hover:border-[#C8A14F] font-heading font-semibold px-9 py-4 rounded-full text-xs uppercase tracking-widest transition-all flex items-center justify-center gap-2">
                    <i class="ri-phone-fill text-[#C8A14F]"></i>
                    <span>{{ setting('phone', '+1 352 729 2727') }}</span>
                </a>
                @if (setting('whatsapp'))
                    <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto bg-emerald-600 hover:bg-emerald-500 text-white font-heading font-semibold px-8 py-4 rounded-full text-xs uppercase tracking-widest transition-all flex items-center justify-center gap-2 shadow-lg">
                        <i class="ri-whatsapp-line text-lg"></i>
                        <span>WhatsApp Us</span>
                    </a>
                @endif
            </div>
        </div>
    </section>
</div>

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
                        <span>✦ ABOUT ANGELS HOME HEALTH</span>
                    </div>

                    <h1 class="font-heading font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white tracking-tight leading-tight">
                        Committed to Your Healing, <span class="text-[#C8A14F]">Right Where You Belong.</span>
                    </h1>

                    <p class="text-base sm:text-xl text-[#a1a1aa] font-medium leading-relaxed max-w-2xl">
                        Based in Mount Dora and serving Central Florida, we are an ACHC-accredited and Medicare-certified home health agency bridging the gap between clinical excellence and the warmth of family.
                    </p>

                    <div class="pt-2 flex flex-wrap items-center gap-4">
                        <button @click="$dispatch('open-consultation-modal')" type="button" class="w-full sm:w-auto bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-8 py-4 rounded-full text-xs uppercase tracking-widest text-center transition-all transform hover:scale-105 shadow-xl">
                            Request Free Consultation
                        </button>
                        <a href="{{ phone_url() }}" class="w-full sm:w-auto bg-[#121212] hover:bg-[#1a1a1a] text-white border border-[#27272a] hover:border-[#C8A14F] font-heading font-semibold px-8 py-4 rounded-full text-xs uppercase tracking-widest text-center transition-all flex items-center justify-center gap-2">
                            <i class="ri-phone-fill text-[#C8A14F]"></i>
                            <span>{{ setting('phone', '+1 (352) 729-2727') }}</span>
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

    <!-- 3. OUR STORY / INTRODUCTION -->
    <section id="story" class="py-20 bg-[#000000] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                        ✦ OUR STORY
                    </span>
                    <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight leading-tight">
                        Redefining Healthcare in the Home
                    </h2>

                    <div class="space-y-4 text-sm sm:text-base text-[#a1a1aa] leading-relaxed font-medium">
                        <p>
                            At Angels Home Health, we understand that inviting a medical professional into your home requires immense trust. We were founded on a simple but powerful belief: that patients recover faster, manage chronic conditions better, and live happier lives when they are in the comfort of their own environment.
                        </p>
                        <p>
                            For years, families have had to choose between the rigorous clinical standards of a hospital and the comfort of staying home. We eliminate that compromise. Led by a team of experienced medical professionals, we bring a full spectrum of healthcare services directly to your doorstep—from specialized nursing and physical therapy to Alzheimer’s support and medical social work.
                        </p>
                        <p>
                            We are proud to be a locally rooted agency in Mount Dora with the operational strength to serve communities across Florida. When you choose Angels Home Health, you aren't just hiring a caregiver; you are partnering with a dedicated medical team that treats your family like our own.
                        </p>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="lg:col-span-6 relative group">
                    <div class="relative rounded-3xl overflow-hidden border-2 border-[#C8A14F]/40 shadow-[0_0_40px_rgba(200,161,79,0.15)] group-hover:border-[#C8A14F] transition-all duration-500">
                        <img src="{{ asset('images/bg2.jpg') }}" alt="Redefining Healthcare in the Home - Angels Home Health" class="w-full h-80 sm:h-[480px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#000000]/50 via-transparent to-transparent"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. MISSION & VISION DUAL CARDS (#mission anchor) -->
    <section id="mission" class="py-20 bg-[#050505] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission Box -->
                <div class="bg-[#0a0a0a] p-6 sm:p-10 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/40 transition-all space-y-4 relative overflow-hidden group shadow-2xl">
                    <div class="w-14 h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black transition-all">
                        <i class="ri-compass-3-fill text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-extrabold text-3xl text-white">Our Mission</h3>
                    <p class="text-sm sm:text-base text-[#a1a1aa] leading-relaxed font-medium">
                        To deliver exceptional, hospital-level medical care directly to the comfort of your home. By providing expert skilled nursing, specialized therapies, and proactive disease management, we strive to enhance the daily lives of our patients—prioritizing their dignity, independence, and peace of mind above all else.
                    </p>
                </div>

                <!-- Vision Box -->
                <div class="bg-[#0a0a0a] p-6 sm:p-10 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/40 transition-all space-y-4 relative overflow-hidden group shadow-2xl">
                    <div class="w-14 h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black transition-all">
                        <i class="ri-eye-line text-2xl"></i>
                    </div>
                    <h3 class="font-heading font-extrabold text-3xl text-white">Our Vision</h3>
                    <p class="text-sm sm:text-base text-[#a1a1aa] leading-relaxed font-medium">
                        To redefine the standard of home healthcare in Central Florida and beyond. We envision a community where every individual has immediate access to compassionate, top-tier medical support without leaving home, establishing Angels Home Health as the state’s most trusted partner in patient-centered recovery and wellness.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. OUR CARE PHILOSOPHY (CORE VALUES) -->
    <section id="values" class="py-20 bg-[#000000] border-b border-[#27272a] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-4 py-1.5 rounded-full uppercase tracking-widest inline-block">
                    ✦ WHAT DRIVES US
                </span>
                <h2 class="font-heading font-extrabold text-3xl sm:text-5xl text-white tracking-tight">
                    The Standards We Care By
                </h2>
                <p class="text-sm sm:text-base text-[#a1a1aa] leading-relaxed font-medium">
                    Our core values define every interaction, procedure, and clinical decision we make for your family.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-[#121212] p-8 sm:p-10 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-2 shadow-2xl relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all">
                            <i class="ri-shield-star-line text-2xl"></i>
                        </div>
                        <h3 class="font-heading font-bold text-2xl text-white group-hover:text-[#C8A14F] transition-colors">
                            Uncompromising Clinical Quality
                        </h3>
                        <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium">
                            As an ACHC-accredited provider, we adhere to the strictest national standards for patient safety and medical care. Our care plans are meticulously guided by your primary physicians.
                        </p>
                    </div>
                </div>

                <!-- Value 2 -->
                <div class="bg-[#121212] p-8 sm:p-10 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-2 shadow-2xl relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all">
                            <i class="ri-heart-3-line text-2xl"></i>
                        </div>
                        <h3 class="font-heading font-bold text-2xl text-white group-hover:text-[#C8A14F] transition-colors">
                            Dignity First
                        </h3>
                        <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium">
                            Vulnerability often accompanies illness or recovery. We train our staff not just in medical procedures, but in empathy, ensuring every patient feels respected, heard, and valued.
                        </p>
                    </div>
                </div>

                <!-- Value 3 -->
                <div class="bg-[#121212] p-8 sm:p-10 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 transform hover:-translate-y-2 shadow-2xl relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C8A14F] to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-[#000000] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:scale-110 group-hover:bg-[#C8A14F] group-hover:text-[#000000] transition-all">
                            <i class="ri-hand-heart-line text-2xl"></i>
                        </div>
                        <h3 class="font-heading font-bold text-2xl text-white group-hover:text-[#C8A14F] transition-colors">
                            Holistic Support
                        </h3>
                        <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium">
                            Healing is not just physical. We look at the whole picture—incorporating nutritional guidance, fall prevention, and emotional support to create a truly comprehensive healing environment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. OUR TEAM & CREDENTIALS (TRUST BUILDING) -->
    <section id="credentials" class="py-20 bg-[#050505] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Image Box -->
                <div class="lg:col-span-5 relative group">
                    <div class="relative rounded-3xl overflow-hidden border-2 border-[#C8A14F]/40 shadow-[0_0_40px_rgba(200,161,79,0.18)] group-hover:border-[#C8A14F] transition-all duration-500">
                        <img src="{{ asset('images/home_caregiver_circle.jpg') }}" alt="Caregivers You Can Trust Like Family - Angels Home Health" class="w-full h-80 sm:h-[460px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#000000]/60 via-transparent to-transparent"></div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="space-y-3">
                        <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                            ✦ TRUSTED CLINICIANS
                        </span>
                        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight leading-tight">
                            Caregivers You Can Trust Like Family
                        </h2>
                        <p class="text-[#C8A14F] text-base sm:text-lg font-heading font-semibold">
                            Excellence in healthcare starts with exceptional people.
                        </p>
                    </div>

                    <p class="text-sm sm:text-base text-[#a1a1aa] leading-relaxed font-medium">
                        We do not take the responsibility of caring for your loved ones lightly. Every clinician who wears the Angels Home Health badge—including our Registered Nurses (RNs), Physical Therapists (PTs), Occupational Therapists (OTs), and Home Health Aides—undergoes a rigorous vetting process.
                    </p>

                    <!-- Bullet Points -->
                    <div class="space-y-3 pt-2">
                        <div class="flex items-center gap-3.5 bg-[#0a0a0a] p-3.5 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/40 transition-colors">
                            <div class="w-8 h-8 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 text-sm">
                                <i class="ri-checkbox-circle-fill"></i>
                            </div>
                            <span class="text-xs sm:text-sm font-semibold text-white">Fully Licensed & Insured in the State of Florida</span>
                        </div>
                        <div class="flex items-center gap-3.5 bg-[#0a0a0a] p-3.5 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/40 transition-colors">
                            <div class="w-8 h-8 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 text-sm">
                                <i class="ri-checkbox-circle-fill"></i>
                            </div>
                            <span class="text-xs sm:text-sm font-semibold text-white">Extensive National Background Checks</span>
                        </div>
                        <div class="flex items-center gap-3.5 bg-[#0a0a0a] p-3.5 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/40 transition-colors">
                            <div class="w-8 h-8 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 text-sm">
                                <i class="ri-checkbox-circle-fill"></i>
                            </div>
                            <span class="text-xs sm:text-sm font-semibold text-white">Continuous Clinical Education & Specialized Training</span>
                        </div>
                        <div class="flex items-center gap-3.5 bg-[#0a0a0a] p-3.5 rounded-2xl border border-[#27272a] hover:border-[#C8A14F]/40 transition-colors">
                            <div class="w-8 h-8 rounded-full bg-[#121212] border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] shrink-0 text-sm">
                                <i class="ri-checkbox-circle-fill"></i>
                            </div>
                            <span class="text-xs sm:text-sm font-semibold text-white">Chosen for their empathy, warmth, and dedication to senior care</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. CALL TO ACTION (BOTTOM OF PAGE) -->
    <section class="py-20 bg-[#000000] text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(200,161,79,0.12)_0,transparent_70%)] pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 space-y-6">
            <h2 class="font-heading font-extrabold text-3xl sm:text-5xl text-white leading-tight">
                Let’s Discuss Your Care Journey
            </h2>
            <p class="text-sm sm:text-lg text-[#a1a1aa] max-w-2xl mx-auto leading-relaxed font-medium">
                Our care coordinators are standing by to answer your questions, consult with your doctors, and build a tailored care plan for your family.
            </p>
            <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
                <button @click="$dispatch('open-consultation-modal')" type="button" class="w-full sm:w-auto bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-9 py-4 rounded-full text-xs uppercase tracking-widest transition-all transform hover:scale-105 shadow-xl">
                    Schedule a Free Assessment
                </button>
                <a href="{{ phone_url() }}" class="w-full sm:w-auto bg-[#121212] hover:bg-[#1a1a1a] text-white border border-[#27272a] hover:border-[#C8A14F] font-heading font-semibold px-9 py-4 rounded-full text-xs uppercase tracking-widest transition-all flex items-center justify-center gap-2">
                    <i class="ri-phone-fill text-[#C8A14F]"></i>
                    <span>Call {{ setting('phone', '+1 (352) 729-2727') }}</span>
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

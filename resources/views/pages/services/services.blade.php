<div class="bg-[#000000] text-white">
    <!-- HERO SECTION FOR SERVICES PAGE -->
    <section class="relative bg-[#050505] border-b border-[#27272a] py-16 sm:py-24 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(200,161,79,0.12)_0,transparent_60%)] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center sm:text-left">
            <div class="max-w-3xl space-y-4">
                <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                    Full Spectrum Home Healthcare
                </span>
                <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-tight">
                    In-Home Care Services in <span class="text-[#C8A14F]">Mount Dora, FL</span> & Statewide
                </h1>
                <p class="text-base sm:text-lg text-[#a1a1aa] font-medium leading-relaxed">
                    Angels Home Health of Florida delivers comprehensive skilled nursing, rehabilitation, behavioral health, and chronic disease management directly to your home.
                </p>
            </div>
        </div>
    </section>

    <!-- ALL 6 DETAILED SERVICES GRID SECTION -->
    <section class="py-16 sm:py-20 bg-[#000000]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <!-- Service 1: Skilled Nursing & Rehabilitation (#skilled-nursing) -->
            <div id="skilled-nursing" class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center bg-[#0a0a0a] p-8 sm:p-10 rounded-3xl border border-[#27272a]">
                <div class="lg:col-span-5 rounded-2xl overflow-hidden border border-[#C8A14F]/30 h-64 sm:h-80">
                    <img src="{{ asset('images/service_wound_nursing.jpg') }}" alt="Skilled Nursing Care" class="w-full h-full object-cover">
                </div>
                <div class="lg:col-span-7 space-y-4">
                    <span class="text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3 py-1 rounded-full uppercase tracking-wider">
                        Medical Clinical Care
                    </span>
                    <h2 class="font-heading font-bold text-2xl sm:text-3xl text-white">Skilled Nursing & Rehabilitation</h2>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed font-medium">
                        Professional wound care, IV therapy, surgical recovery, post-acute monitoring, and complex medication management administered by experienced Registered Nurses (RNs) and Licensed Practical Nurses (LPNs).
                    </p>
                    <ul class="grid sm:grid-cols-2 gap-2 text-xs text-[#d4d4d8] pt-2">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Wound & Surgical Care</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>IV Therapy & Injections</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Medication Administration</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Post-Hospital Recovery</span></li>
                    </ul>
                    <div class="pt-2 flex flex-wrap gap-3">
                        <a href="/services/skilled-nursing" class="inline-flex items-center gap-2 bg-[#C8A14F] text-[#000000] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:bg-[#d8b260] transition-colors">
                            <span>View Full Service Details</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="/contact" class="inline-flex items-center gap-2 bg-[#121212] text-white border border-[#27272a] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:border-[#C8A14F]/50 transition-colors">
                            <span>Request Skilled Care</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 2: Physical & Occupational Therapy (#therapy) -->
            <div id="therapy" class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center bg-[#0a0a0a] p-8 sm:p-10 rounded-3xl border border-[#27272a]">
                <div class="lg:col-span-7 space-y-4 lg:order-1 order-2">
                    <span class="text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3 py-1 rounded-full uppercase tracking-wider">
                        Rehabilitation & Mobility
                    </span>
                    <h2 class="font-heading font-bold text-2xl sm:text-3xl text-white">Physical & Occupational Therapy</h2>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed font-medium">
                        In-home physical therapy to restore mobility, balance, strength, and fall prevention, alongside occupational therapy for daily living activities, adaptive equipment training, and home safety assessments.
                    </p>
                    <ul class="grid sm:grid-cols-2 gap-2 text-xs text-[#d4d4d8] pt-2">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Gait & Balance Training</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Fall Prevention Programs</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Stroke & Joint Rehab</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Occupational Living Skills</span></li>
                    </ul>
                    <div class="pt-2 flex flex-wrap gap-3">
                        <a href="/services/physical-therapy" class="inline-flex items-center gap-2 bg-[#C8A14F] text-[#000000] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:bg-[#d8b260] transition-colors">
                            <span>View Full Service Details</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="/contact" class="inline-flex items-center gap-2 bg-[#121212] text-white border border-[#27272a] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:border-[#C8A14F]/50 transition-colors">
                            <span>Request Therapy</span>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-5 rounded-2xl overflow-hidden border border-[#C8A14F]/30 h-64 sm:h-80 lg:order-2 order-1">
                    <img src="{{ asset('images/service_physical_therapy.jpg') }}" alt="Physical Therapy Support" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Service 3: Behavioral Health Services (#behavioral) -->
            <div id="behavioral" class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center bg-[#0a0a0a] p-8 sm:p-10 rounded-3xl border border-[#27272a]">
                <div class="lg:col-span-5 rounded-2xl overflow-hidden border border-[#C8A14F]/30 h-64 sm:h-80">
                    <img src="{{ asset('images/service_cardiac_monitoring.jpg') }}" alt="Behavioral Health Care" class="w-full h-full object-cover">
                </div>
                <div class="lg:col-span-7 space-y-4">
                    <span class="text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3 py-1 rounded-full uppercase tracking-wider">
                        Mental Wellness
                    </span>
                    <h2 class="font-heading font-bold text-2xl sm:text-3xl text-white">Behavioral Health Services</h2>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed font-medium">
                        Specialized psychiatric nursing care, anxiety and depression management, emotional support, and behavioral wellness monitoring tailored to seniors and individuals recovering at home.
                    </p>
                    <ul class="grid sm:grid-cols-2 gap-2 text-xs text-[#d4d4d8] pt-2">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Psychiatric Nursing Assessments</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Depression & Anxiety Care</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Medication Adherence Support</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Copoint Family Counseling</span></li>
                    </ul>
                    <div class="pt-2 flex flex-wrap gap-3">
                        <a href="/services/behavioral-health" class="inline-flex items-center gap-2 bg-[#C8A14F] text-[#000000] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:bg-[#d8b260] transition-colors">
                            <span>View Full Service Details</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="/contact" class="inline-flex items-center gap-2 bg-[#121212] text-white border border-[#27272a] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:border-[#C8A14F]/50 transition-colors">
                            <span>Request Behavioral Care</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 4: Chronic Disease Management (#chronic) -->
            <div id="chronic" class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center bg-[#0a0a0a] p-8 sm:p-10 rounded-3xl border border-[#27272a]">
                <div class="lg:col-span-7 space-y-4 lg:order-1 order-2">
                    <span class="text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3 py-1 rounded-full uppercase tracking-wider">
                        Long-Term Disease Supervision
                    </span>
                    <h2 class="font-heading font-bold text-2xl sm:text-3xl text-white">Chronic Disease Management</h2>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed font-medium">
                        Ongoing clinical monitoring for diabetes, congestive heart failure (CHF), COPD, hypertension, and kidney disease. We help reduce hospital readmissions with proactive care.
                    </p>
                    <ul class="grid sm:grid-cols-2 gap-2 text-xs text-[#d4d4d8] pt-2">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Diabetic Blood Glucose Control</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Cardiovascular & CHF Vital Tracking</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>COPD Oxygen Supervision</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Hospital Readmission Prevention</span></li>
                    </ul>
                    <div class="pt-2 flex flex-wrap gap-3">
                        <a href="/services/chronic-disease-management" class="inline-flex items-center gap-2 bg-[#C8A14F] text-[#000000] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:bg-[#d8b260] transition-colors">
                            <span>View Full Service Details</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="/contact" class="inline-flex items-center gap-2 bg-[#121212] text-white border border-[#27272a] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:border-[#C8A14F]/50 transition-colors">
                            <span>Request Disease Management</span>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-5 rounded-2xl overflow-hidden border border-[#C8A14F]/30 h-64 sm:h-80 lg:order-2 order-1">
                    <img src="{{ asset('images/service_occupational_daily.jpg') }}" alt="Chronic Care Support" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Service 5: Alzheimer's & Dementia Care (#memory) -->
            <div id="memory" class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center bg-[#0a0a0a] p-8 sm:p-10 rounded-3xl border border-[#27272a]">
                <div class="lg:col-span-5 rounded-2xl overflow-hidden border border-[#C8A14F]/30 h-64 sm:h-80">
                    <img src="{{ asset('images/service_memory_dementia.jpg') }}" alt="Memory Care Support" class="w-full h-full object-cover">
                </div>
                <div class="lg:col-span-7 space-y-4">
                    <span class="text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3 py-1 rounded-full uppercase tracking-wider">
                        Specialized Memory Care
                    </span>
                    <h2 class="font-heading font-bold text-2xl sm:text-3xl text-white">Alzheimer’s & Dementia Care</h2>
                    <p class="text-sm text-[#a1a1aa] leading-relaxed font-medium">
                        Patient, structured cognitive engagement, memory support games, healthy meal planning, and safe daily routine assistance tailored to memory care needs.
                    </p>
                    <ul class="grid sm:grid-cols-2 gap-2 text-xs text-[#d4d4d8] pt-2">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Cognitive & Memory Exercises</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Safe Wandering Prevention</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Parkinson's & Dementia Support</span></li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#C8A14F]"></i><span>Respite Support for Families</span></li>
                    </ul>
                    <div class="pt-2 flex flex-wrap gap-3">
                        <a href="/services/memory-care" class="inline-flex items-center gap-2 bg-[#C8A14F] text-[#000000] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:bg-[#d8b260] transition-colors">
                            <span>View Full Service Details</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="/contact" class="inline-flex items-center gap-2 bg-[#121212] text-white border border-[#27272a] font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider hover:border-[#C8A14F]/50 transition-colors">
                            <span>Request Memory Care</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="py-16 bg-[#050505] border-t border-[#27272a] text-center">
        <div class="max-w-4xl mx-auto px-4 space-y-6">
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-white">Need a Customized In-Home Medical Plan?</h2>
            <p class="text-sm sm:text-base text-[#a1a1aa]">Our nursing team will assess your unique requirements and create a personalized plan.</p>
            <div class="pt-2 flex justify-center gap-4">
                <a href="/contact" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-8 py-3.5 rounded-full text-xs uppercase tracking-wider transition-all transform hover:scale-105 shadow-xl">
                    Schedule Free Consultation
                </a>
            </div>
        </div>
    </section>
</div>

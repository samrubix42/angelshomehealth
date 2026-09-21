<div class="bg-[#000000] text-white selection:bg-[#C8A14F] selection:text-black">
    <!-- 1. BREADCRUMBS & SERVICE HERO HEADER -->
    <section class="relative bg-[#050505] border-b border-[#27272a] py-12 sm:py-16 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(200,161,79,0.14)_0,transparent_65%)] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs font-medium text-[#71717a] overflow-x-auto py-1">
                <a href="/" class="hover:text-[#C8A14F] transition-colors flex items-center gap-1">
                    <i class="ri-home-4-line text-sm"></i>
                    <span>Home</span>
                </a>
                <i class="ri-arrow-right-s-line text-xs text-[#3f3f46]"></i>
                <a href="/services" class="hover:text-[#C8A14F] transition-colors">
                    <span>Services</span>
                </a>
                <i class="ri-arrow-right-s-line text-xs text-[#3f3f46]"></i>
                <span class="text-[#C8A14F] font-semibold truncate">{{ $this->serviceData['title'] }}</span>
            </nav>

            <div class="grid lg:grid-cols-12 gap-8 items-center">
                <!-- Left Title & Metadata -->
                <div class="lg:col-span-8 space-y-4">
                    <div class="flex flex-wrap items-center gap-2.5">
                        <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest">
                            {{ $this->serviceData['category'] }}
                        </span>
                        <span class="text-xs font-semibold text-white bg-[#121212] border border-[#27272a] px-3.5 py-1.5 rounded-full flex items-center gap-1.5">
                            <i class="ri-verified-badge-line text-[#C8A14F]"></i>
                            <span>{{ $this->serviceData['badge'] }}</span>
                        </span>
                    </div>

                    <h1 class="font-heading font-extrabold text-3xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-tight">
                        {{ $this->serviceData['title'] }}
                    </h1>

                    <p class="text-base sm:text-lg text-[#a1a1aa] font-medium leading-relaxed max-w-3xl">
                        {{ $this->serviceData['subtitle'] }}
                    </p>

                    <!-- Quick Facts Bar -->
                    <div class="pt-4 grid grid-cols-1 sm:grid-cols-3 gap-3 border-t border-[#1f1f23]">
                        <div class="flex items-center gap-3 bg-[#0a0a0a] p-3 rounded-2xl border border-[#27272a]">
                            <div class="w-9 h-9 rounded-xl bg-[#C8A14F]/15 text-[#C8A14F] flex items-center justify-center shrink-0">
                                <i class="ri-shield-check-line text-lg"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-[#71717a] font-bold uppercase tracking-wider">Insurance</p>
                                <p class="text-xs font-semibold text-white truncate">{{ $this->serviceData['coverage'] }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 bg-[#0a0a0a] p-3 rounded-2xl border border-[#27272a]">
                            <div class="w-9 h-9 rounded-xl bg-[#C8A14F]/15 text-[#C8A14F] flex items-center justify-center shrink-0">
                                <i class="ri-time-line text-lg"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-[#71717a] font-bold uppercase tracking-wider">Availability</p>
                                <p class="text-xs font-semibold text-white truncate">{{ $this->serviceData['availability'] }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 bg-[#0a0a0a] p-3 rounded-2xl border border-[#27272a]">
                            <div class="w-9 h-9 rounded-xl bg-[#C8A14F]/15 text-[#C8A14F] flex items-center justify-center shrink-0">
                                <i class="ri-hospital-line text-lg"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-[#71717a] font-bold uppercase tracking-wider">Duration</p>
                                <p class="text-xs font-semibold text-white truncate">{{ $this->serviceData['duration'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Quick Call Hero CTA Box -->
                <div class="lg:col-span-4 bg-[#0a0a0a] p-6 sm:p-7 rounded-3xl border border-[#27272a] shadow-2xl space-y-5 text-center sm:text-left">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-2xl bg-[#C8A14F] text-[#000000] flex items-center justify-center font-bold text-xl shrink-0">
                            <i class="ri-phone-fill"></i>
                        </div>
                        <div>
                            <p class="text-xs text-[#a1a1aa] font-medium">Need Immediate Nursing Care?</p>
                            <a href="tel:13527292727" class="font-heading font-extrabold text-xl sm:text-2xl text-[#C8A14F] hover:text-[#d8b260] transition-colors">
                                +1 352 729 2727
                            </a>
                        </div>
                    </div>
                    <p class="text-xs text-[#71717a] leading-relaxed">
                        Speak with our Mount Dora clinical coordinator today to schedule your no-obligation in-home assessment.
                    </p>
                    <a href="#inquiry-form" class="block text-center bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold py-3.5 rounded-full text-xs uppercase tracking-wider transition-all transform hover:scale-[1.02] shadow-lg">
                        Request Free In-Home Visit
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. MAIN CONTENT AREA (TINYMCE RICH TEXT COMPATIBLE) + SIDEBAR -->
    <section class="py-16 sm:py-20 bg-[#000000]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-start">

                <!-- LEFT MAIN COLUMN: TINYMCE CONTENT CONTAINER -->
                <div class="lg:col-span-8 space-y-12">
                    
                    <!-- Service Featured Image -->
                    @if(!empty($this->serviceData['image']))
                        <div class="rounded-3xl overflow-hidden border border-[#27272a] shadow-2xl h-72 sm:h-96 relative group">
                            <img src="{{ $this->serviceData['image'] }}" alt="{{ $this->serviceData['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#000000] via-transparent to-transparent opacity-80"></div>
                            <span class="absolute bottom-6 left-6 bg-[#000000]/90 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-xs font-bold uppercase tracking-wider px-4 py-2 rounded-full flex items-center gap-2">
                                <i class="ri-map-pin-2-line"></i>
                                <span>Serving Lake, Orange, Seminoe & Volusia Counties</span>
                            </span>
                        </div>
                    @endif

                    <!-- TINYMCE HTML RICH TEXT CONTAINER -->
                    <div class="bg-[#0a0a0a] p-8 sm:p-12 rounded-3xl border border-[#27272a] shadow-xl">
                        <div class="tinymce-content">
                            {!! $this->serviceData['tinymce_content'] !!}
                        </div>
                    </div>

                    <!-- FAQS SECTION -->
                    @if(!empty($this->serviceData['faqs']))
                        <div class="bg-[#0a0a0a] p-8 sm:p-10 rounded-3xl border border-[#27272a] space-y-6">
                            <div class="flex items-center gap-3 border-b border-[#1f1f23] pb-4">
                                <div class="w-9 h-9 rounded-xl bg-[#C8A14F]/15 text-[#C8A14F] flex items-center justify-center font-bold text-lg">
                                    <i class="ri-question-line"></i>
                                </div>
                                <div>
                                    <h3 class="font-heading font-bold text-xl text-white">Frequently Asked Questions</h3>
                                    <p class="text-xs text-[#71717a]">Common inquiries regarding {{ $this->serviceData['title'] }}</p>
                                </div>
                            </div>

                            <div class="space-y-4">
                                @foreach($this->serviceData['faqs'] as $index => $faq)
                                    <div x-data="{ open: {{ $index === 0 ? 'true' : 'false' }} }" class="bg-[#121212] border border-[#27272a] rounded-2xl overflow-hidden transition-colors">
                                        <button @click="open = !open" type="button" class="w-full text-left p-5 flex items-center justify-between gap-4 font-heading font-bold text-sm sm:text-base text-white hover:text-[#C8A14F] transition-colors focus:outline-none">
                                            <span>{{ $faq['q'] }}</span>
                                            <i class="ri-add-line text-lg text-[#C8A14F] transition-transform duration-200" :class="open ? 'rotate-45' : ''"></i>
                                        </button>
                                        <div x-show="open" x-collapse class="px-5 pb-5 pt-1 text-xs sm:text-sm text-[#a1a1aa] leading-relaxed border-t border-[#1f1f23]/50">
                                            {{ $faq['a'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

                <!-- RIGHT STICKY SIDEBAR -->
                <div class="lg:col-span-4 space-y-8 sticky top-24">
                    
                    <!-- Quick Consultation Form Card -->
                    <div id="inquiry-form" class="bg-[#0a0a0a] p-7 rounded-3xl border border-[#27272a] shadow-2xl space-y-5">
                        <div class="border-b border-[#1f1f23] pb-4 space-y-1">
                            <span class="text-[10px] font-bold text-[#C8A14F] uppercase tracking-wider">Free Home Visit</span>
                            <h3 class="font-heading font-bold text-xl text-white">Request Consultation</h3>
                            <p class="text-xs text-[#71717a]">Get a personalized care evaluation from our RN team.</p>
                        </div>

                        @if($formSubmitted)
                            <div class="bg-[#C8A14F]/15 border border-[#C8A14F]/40 p-5 rounded-2xl text-center space-y-2">
                                <i class="ri-checkbox-circle-fill text-3xl text-[#C8A14F]"></i>
                                <h4 class="font-heading font-bold text-sm text-white">Request Submitted!</h4>
                                <p class="text-xs text-[#d4d4d8]">Thank you, {{ $name }}. Our clinical care manager will contact you at {{ $phone }} shortly.</p>
                            </div>
                        @else
                            <form wire:submit.prevent="submitInquiry" class="space-y-4">
                                <div>
                                    <label class="block text-xs font-semibold text-[#d4d4d8] mb-1.5">Full Name *</label>
                                    <input type="text" wire:model="name" placeholder="John Doe" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-xl px-4 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('name') <span class="text-[10px] text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-[#d4d4d8] mb-1.5">Phone Number *</label>
                                    <input type="tel" wire:model="phone" placeholder="+1 (352) 000-0000" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-xl px-4 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('phone') <span class="text-[10px] text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-[#d4d4d8] mb-1.5">Email Address *</label>
                                    <input type="email" wire:model="email" placeholder="john@example.com" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-xl px-4 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('email') <span class="text-[10px] text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-[#d4d4d8] mb-1.5">Care Needs / Notes</label>
                                    <textarea wire:model="notes" rows="3" placeholder="Tell us about the patient's condition or requirements..." class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-xl px-4 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-colors"></textarea>
                                </div>

                                <button type="submit" class="w-full bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold py-3.5 rounded-xl text-xs uppercase tracking-wider transition-all shadow-lg flex items-center justify-center gap-2">
                                    <span>Schedule Visit Now</span>
                                    <i class="ri-arrow-right-line"></i>
                                </button>
                            </form>
                        @endif
                    </div>

                    <!-- Other Services Navigation -->
                    <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] space-y-4">
                        <h4 class="font-heading font-bold text-sm text-white border-b border-[#1f1f23] pb-3 flex items-center gap-2">
                            <i class="ri-menu-add-line text-[#C8A14F]"></i>
                            <span>All Home Care Services</span>
                        </h4>

                        <div class="space-y-2 text-xs">
                            <a href="/services/skilled-nursing" class="flex items-center justify-between p-3 rounded-xl border {{ $slug === 'skilled-nursing' ? 'bg-[#C8A14F]/10 border-[#C8A14F]/40 text-[#C8A14F] font-bold' : 'bg-[#121212] border-[#27272a] text-[#a1a1aa] hover:text-white hover:border-[#C8A14F]/30' }} transition-colors">
                                <span>Skilled Nursing & Rehab</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            <a href="/services/physical-therapy" class="flex items-center justify-between p-3 rounded-xl border {{ $slug === 'physical-therapy' ? 'bg-[#C8A14F]/10 border-[#C8A14F]/40 text-[#C8A14F] font-bold' : 'bg-[#121212] border-[#27272a] text-[#a1a1aa] hover:text-white hover:border-[#C8A14F]/30' }} transition-colors">
                                <span>Physical & Occupational Therapy</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            <a href="/services/behavioral-health" class="flex items-center justify-between p-3 rounded-xl border {{ $slug === 'behavioral-health' ? 'bg-[#C8A14F]/10 border-[#C8A14F]/40 text-[#C8A14F] font-bold' : 'bg-[#121212] border-[#27272a] text-[#a1a1aa] hover:text-white hover:border-[#C8A14F]/30' }} transition-colors">
                                <span>Behavioral Health Services</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            <a href="/services/chronic-disease-management" class="flex items-center justify-between p-3 rounded-xl border {{ $slug === 'chronic-disease-management' ? 'bg-[#C8A14F]/10 border-[#C8A14F]/40 text-[#C8A14F] font-bold' : 'bg-[#121212] border-[#27272a] text-[#a1a1aa] hover:text-white hover:border-[#C8A14F]/30' }} transition-colors">
                                <span>Chronic Disease Management</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            <a href="/services/memory-care" class="flex items-center justify-between p-3 rounded-xl border {{ $slug === 'memory-care' ? 'bg-[#C8A14F]/10 border-[#C8A14F]/40 text-[#C8A14F] font-bold' : 'bg-[#121212] border-[#27272a] text-[#a1a1aa] hover:text-white hover:border-[#C8A14F]/30' }} transition-colors">
                                <span>Alzheimer's & Memory Care</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            <a href="/services/personal-care" class="flex items-center justify-between p-3 rounded-xl border {{ $slug === 'personal-care' ? 'bg-[#C8A14F]/10 border-[#C8A14F]/40 text-[#C8A14F] font-bold' : 'bg-[#121212] border-[#27272a] text-[#a1a1aa] hover:text-white hover:border-[#C8A14F]/30' }} transition-colors">
                                <span>Personal Care Assistance</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </div>
                    </div>

                    <!-- ACHC Accreditation Badge Box -->
                    <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#C8A14F]/10 border border-[#C8A14F]/30 text-[#C8A14F] flex items-center justify-center font-bold text-2xl shrink-0">
                            <i class="ri-award-line"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h5 class="font-heading font-bold text-xs text-white">ACHC Accredited Provider</h5>
                            <p class="text-[11px] text-[#71717a] leading-tight">State of Florida Licensed Home Health Agency HHA-299994849.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- 3. BOTTOM CTA CONSULTATION BANNER -->
    <section class="py-16 bg-[#050505] border-t border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-4 py-2 rounded-full uppercase tracking-widest inline-block">
                Dedicated Mount Dora Clinical Team
            </span>
            <h2 class="font-heading font-extrabold text-3xl sm:text-5xl text-white">
                Ready to Start In-Home Care with <span class="text-[#C8A14F]">Angels</span>?
            </h2>
            <p class="text-base text-[#a1a1aa] max-w-2xl mx-auto">
                Call our healthcare coordinators today. We handle all insurance verifications, physician communications, and initial nursing evaluations.
            </p>
            <div class="pt-2 flex flex-wrap items-center justify-center gap-4">
                <a href="tel:13527292727" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-8 py-4 rounded-full text-xs uppercase tracking-wider transition-all transform hover:scale-105 shadow-xl flex items-center gap-2">
                    <i class="ri-phone-fill text-base"></i>
                    <span>Call +1 352 729 2727</span>
                </a>
                <a href="/contact" class="bg-[#121212] hover:bg-[#1a1a1a] text-white border border-[#27272a] font-heading font-bold px-8 py-4 rounded-full text-xs uppercase tracking-wider transition-all">
                    Send Online Message
                </a>
            </div>
        </div>
    </section>
</div>

<div class="bg-[#000000] text-white selection:bg-[#C8A14F] selection:text-black">
    <!-- 1. HERO HEADER WITH AMBIENT RADIAL GOLD GLOW -->
    <section class="relative bg-[#050505] border-b border-[#27272a] py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_center,rgba(200,161,79,0.15)_0,transparent_70%)] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center sm:text-left">
            <div class="max-w-3xl space-y-4">
                <span class="inline-flex items-center gap-2 text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-4 py-2 rounded-full uppercase tracking-widest">
                    <i class="ri-phone-line text-sm"></i>
                    <span>We Are Here to Help 24/7</span>
                </span>

                <h1 class="font-heading font-extrabold text-4xl sm:text-6xl text-white tracking-tight leading-tight">
                    Get in Touch with <span class="text-[#C8A14F]">Angels Home Health</span>
                </h1>

                <p class="text-base sm:text-lg text-[#a1a1aa] font-medium leading-relaxed">
                    Have questions about our in-home skilled nursing, therapy, or care plans? Speak directly with our patient care coordinator in Mount Dora, Florida.
                </p>
            </div>
        </div>
    </section>

    <!-- 2. QUICK CONTACT STATS STRIP -->
    <section class="bg-[#0a0a0a] border-b border-[#27272a] py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                <div class="p-3 space-y-1">
                    <span class="block font-heading font-extrabold text-2xl sm:text-3xl text-[#C8A14F]">&lt; 1 Hour</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider block">Average Response Time</span>
                </div>
                <div class="p-3 space-y-1 border-y sm:border-y-0 sm:border-x border-[#27272a]">
                    <span class="block font-heading font-extrabold text-2xl sm:text-3xl text-white">24 / 7</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider block">Clinical Support Line</span>
                </div>
                <div class="p-3 space-y-1">
                    <span class="block font-heading font-extrabold text-2xl sm:text-3xl text-[#C8A14F]">Mount Dora</span>
                    <span class="text-xs text-[#a1a1aa] font-heading font-semibold uppercase tracking-wider block">Florida Office Location</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONTACT FORM & DIRECT INFO CARDS SECTION -->
    <section class="py-20 bg-[#000000] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12">
                
                <!-- LEFT COLUMN: Contact Form Card -->
                <div class="lg:col-span-7 bg-[#0a0a0a] p-6 sm:p-10 rounded-3xl border border-[#27272a] shadow-2xl relative">
                    <div class="mb-8 space-y-2">
                        <span class="text-xs font-bold text-[#C8A14F] uppercase tracking-widest">Care Assessment</span>
                        <h2 class="font-heading font-extrabold text-2xl sm:text-3xl text-white">Schedule Your Free Consultation</h2>
                        <p class="text-xs sm:text-sm text-[#a1a1aa]">Fill out the form below and our nursing team will contact you promptly.</p>
                    </div>

                    @if($formSubmitted)
                        <div class="bg-[#121212] border-2 border-[#C8A14F] rounded-2xl p-8 text-center space-y-4 shadow-xl">
                            <div class="w-16 h-16 rounded-full bg-[#C8A14F]/20 text-[#C8A14F] flex items-center justify-center mx-auto text-3xl">
                                <i class="ri-checkbox-circle-fill"></i>
                            </div>
                            <h3 class="font-heading font-bold text-2xl text-white">Consultation Request Received!</h3>
                            <p class="text-sm text-[#a1a1aa] max-w-md mx-auto">
                                Thank you, <strong class="text-white">{{ $name }}</strong>. Our patient care coordinator will review your request and call you at <strong class="text-[#C8A14F]">{{ $phone }}</strong> shortly.
                            </p>
                            <button type="button" wire:click="$set('formSubmitted', false)" class="inline-block text-xs text-[#C8A14F] underline hover:text-white pt-2">
                                Send another inquiry
                            </button>
                        </div>
                    @else
                        <form wire:submit.prevent="submitContact" class="space-y-6">
                            <!-- Full Name -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Full Name *</label>
                                <input type="text" wire:model="name" placeholder="John Doe" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                @error('name') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <!-- Phone & Email Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Phone Number *</label>
                                    <input type="tel" wire:model="phone" placeholder="+1 (352) 000-0000" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('phone') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Email Address *</label>
                                    <input type="email" wire:model="email" placeholder="john@example.com" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('email') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <!-- Service Selection -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Service Required *</label>
                                <select wire:model="service" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white focus:outline-none transition-colors">
                                    @foreach($this->services as $s)
                                        <option value="{{ $s->title }}">{{ $s->title }}</option>
                                    @endforeach
                                    <option value="General Inquiry / Other">General Inquiry / Other</option>
                                </select>
                            </div>

                            <!-- Notes -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Patient Care Details / Special Notes</label>
                                <textarea wire:model="notes" rows="4" placeholder="Tell us briefly about the medical or personal care needs..." class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="w-full bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-extrabold py-4 rounded-full text-xs uppercase tracking-widest transition-all transform hover:scale-[1.02] shadow-xl">
                                Submit Consultation Request
                            </button>
                        </form>
                    @endif
                </div>

                <!-- RIGHT COLUMN: Direct Contact Info Cards -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <!-- Phone Card -->
                    <div class="bg-[#0a0a0a] p-6 sm:p-7 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 flex items-start gap-4 group shadow-xl">
                        <div class="w-12 h-12 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black shrink-0 text-xl transition-all">
                            <i class="ri-phone-fill"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">Call Us Directly</h4>
                            <p class="text-xs text-[#a1a1aa] mt-0.5">24/7 Phone Support Available</p>
                            <a href="{{ phone_url() }}" class="text-lg font-bold text-[#C8A14F] hover:underline block mt-1">{{ setting('phone', '+1 352 729 2727') }}</a>
                        </div>
                    </div>

                    <!-- WhatsApp Card -->
                    @if (setting('whatsapp'))
                        <div class="bg-[#0a0a0a] p-6 sm:p-7 rounded-3xl border border-[#27272a] hover:border-emerald-500/60 transition-all duration-300 flex items-start gap-4 group shadow-xl">
                            <div class="w-12 h-12 rounded-2xl bg-[#121212] border border-emerald-500/40 flex items-center justify-center text-emerald-400 group-hover:bg-emerald-500 group-hover:text-black shrink-0 text-xl transition-all">
                                <i class="ri-whatsapp-fill"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-base text-white group-hover:text-emerald-400 transition-colors">Chat on WhatsApp</h4>
                                <p class="text-xs text-[#a1a1aa] mt-0.5">Instant Medical & Assessment Inquiries</p>
                                <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="text-base font-bold text-emerald-400 hover:underline block mt-1">
                                    {{ setting('whatsapp', '+1 352 729 2727') }} &rarr;
                                </a>
                            </div>
                        </div>
                    @endif

                    <!-- Email Card -->
                    <div class="bg-[#0a0a0a] p-6 sm:p-7 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 flex items-start gap-4 group shadow-xl">
                        <div class="w-12 h-12 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black shrink-0 text-xl transition-all">
                            <i class="ri-mail-line"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">Send Us An Email</h4>
                            <p class="text-xs text-[#a1a1aa] mt-0.5">General & Medical Inquiries</p>
                            <a href="mailto:{{ setting('email', 'info@angelshomehealthfl.com') }}" class="text-sm font-semibold text-[#C8A14F] hover:underline block mt-1">{{ setting('email', 'info@angelshomehealthfl.com') }}</a>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="bg-[#0a0a0a] p-6 sm:p-7 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 flex items-start gap-4 group shadow-xl">
                        <div class="w-12 h-12 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black shrink-0 text-xl transition-all">
                            <i class="ri-map-pin-2-fill"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">Office Location</h4>
                            <p class="text-xs text-[#a1a1aa] mt-0.5">{{ setting('location', 'Mount Dora, Florida Headquarters') }}</p>
                            <p class="text-sm text-white mt-1 leading-relaxed font-medium">{{ setting('address', '3400, CR 19-A, Mount Dora, FL 32757, U.S.') }}</p>
                        </div>
                    </div>

                    <!-- Hours & Licensure Card -->
                    <div class="bg-[#0a0a0a] p-6 sm:p-7 rounded-3xl border border-[#27272a] space-y-3 shadow-xl">
                        <h4 class="font-heading font-bold text-base text-white flex items-center gap-2">
                            <i class="ri-shield-check-fill text-[#C8A14F]"></i>
                            <span>ACHC Accredited & Registered</span>
                        </h4>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            Angels Home Health of Florida is an ACHC Accredited & Florida Registered Home Health Agency providing care across Mount Dora and surrounding counties.
                        </p>
                        @if (setting('working_hours'))
                            <p class="text-xs text-[#C8A14F] font-semibold flex items-center gap-1.5 pt-1 border-t border-[#1f1f23]">
                                <i class="ri-time-line"></i>
                                <span>{{ setting('working_hours') }}</span>
                            </p>
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- 4. INTERACTIVE GOOGLE MAP & LOCATION SHOWCASE SECTION -->
    <section class="py-16 bg-[#050505] border-b border-[#27272a] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10 space-y-3">
                <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-4 py-1.5 rounded-full uppercase tracking-widest inline-block">
                    {{ setting('location', 'Mount Dora Location') }}
                </span>
                <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-white tracking-tight">
                    Visit Our Headquarters
                </h2>
                <p class="text-sm text-[#a1a1aa]">
                    {{ setting('address', '3400, CR 19-A, Mount Dora, FL 32757, United States') }}
                </p>
            </div>

            <!-- Map Card Container -->
            <div class="relative rounded-3xl overflow-hidden border-2 border-[#C8A14F]/40 shadow-[0_0_40px_rgba(200,161,79,0.15)] bg-[#0a0a0a]">
                @if (str_contains(setting('google_map', ''), '<iframe'))
                    <div class="w-full h-80 sm:h-[420px] [&>iframe]:w-full [&>iframe]:h-full [&>iframe]:border-0 filter grayscale invert contrast-125 opacity-90 hover:opacity-100 transition-opacity">
                        {!! setting('google_map') !!}
                    </div>
                @else
                    <iframe 
                        src="{{ setting('google_map', 'https://maps.google.com/maps?q=3400%20CR%2019-A,%20Mount%20Dora,%20FL%2032757&t=&z=14&ie=UTF8&iwloc=&output=embed') }}" 
                        class="w-full h-80 sm:h-[420px] border-0 filter grayscale invert contrast-125 opacity-90 hover:opacity-100 transition-opacity" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Angels Home Health Location Map">
                    </iframe>
                @endif
                
                <!-- Map Overlay Badge Card -->
                <div class="absolute bottom-6 left-6 right-6 sm:right-auto bg-[#000000]/90 backdrop-blur-md p-5 rounded-2xl border border-[#27272a] max-w-md shadow-2xl space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#C8A14F]/20 text-[#C8A14F] flex items-center justify-center text-xl shrink-0">
                            <i class="ri-map-pin-fill"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-sm text-white">Angels Home Health of Florida</h4>
                            <p class="text-xs text-[#a1a1aa]">{{ setting('location', 'Mount Dora Headquarters') }}</p>
                        </div>
                    </div>
                    <p class="text-xs text-[#d4d4d8] leading-relaxed">
                        {{ setting('address', '3400, CR 19-A, Mount Dora, FL 32757') }}. Serving Lake County & Statewide Florida.
                    </p>
                    <a href="https://maps.google.com/?q={{ urlencode(setting('address', '3400 CR 19-A, Mount Dora, FL 32757')) }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-[#C8A14F] hover:underline uppercase tracking-wider">
                        <span>Open in Google Maps</span>
                        <i class="ri-external-link-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FREQUENTLY ASKED CONTACT QUESTIONS (INTERACTIVE ACCORDION) -->
    <section class="py-20 bg-[#000000] relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 space-y-3">
                <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-4 py-1.5 rounded-full uppercase tracking-widest inline-block">
                    Frequently Asked Questions
                </span>
                <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-white tracking-tight">
                    Questions About In-Home Care?
                </h2>
            </div>

            <div x-data="{ activeAccordion: 1 }" class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-colors">
                    <button @click="activeAccordion = activeAccordion === 1 ? 0 : 1" type="button" class="w-full p-6 text-left font-heading font-bold text-base text-white flex items-center justify-between focus:outline-none">
                        <span>How quickly can in-home care services begin?</span>
                        <i class="ri-add-line text-xl text-[#C8A14F] transition-transform duration-200" :class="activeAccordion === 1 ? 'rotate-45' : ''"></i>
                    </button>
                    <div x-show="activeAccordion === 1" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium">
                        We can typically perform an initial nursing assessment within 24 to 48 hours of your inquiry. For urgent post-hospital discharge situations, expedited same-day assessments are available.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-colors">
                    <button @click="activeAccordion = activeAccordion === 2 ? 0 : 2" type="button" class="w-full p-6 text-left font-heading font-bold text-base text-white flex items-center justify-between focus:outline-none">
                        <span>Do I need a physician’s referral for skilled nursing care?</span>
                        <i class="ri-add-line text-xl text-[#C8A14F] transition-transform duration-200" :class="activeAccordion === 2 ? 'rotate-45' : ''"></i>
                    </button>
                    <div x-show="activeAccordion === 2" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium">
                        For medical skilled nursing, physical therapy, and clinical treatments covered by insurance, a physician's prescription or order is required. Our clinical team works directly with your doctor to obtain all necessary orders.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-colors">
                    <button @click="activeAccordion = activeAccordion === 3 ? 0 : 3" type="button" class="w-full p-6 text-left font-heading font-bold text-base text-white flex items-center justify-between focus:outline-none">
                        <span>What geographic areas in Florida do you cover?</span>
                        <i class="ri-add-line text-xl text-[#C8A14F] transition-transform duration-200" :class="activeAccordion === 3 ? 'rotate-45' : ''"></i>
                    </button>
                    <div x-show="activeAccordion === 3" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium">
                        Our headquarters are located in Mount Dora, Florida, serving Lake County, Orange County, Seminole County, Marion County, and extending across Central and Statewide Florida.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-colors">
                    <button @click="activeAccordion = activeAccordion === 4 ? 0 : 4" type="button" class="w-full p-6 text-left font-heading font-bold text-base text-white flex items-center justify-between focus:outline-none">
                        <span>What insurance or payment plans do you accept?</span>
                        <i class="ri-add-line text-xl text-[#C8A14F] transition-transform duration-200" :class="activeAccordion === 4 ? 'rotate-45' : ''"></i>
                    </button>
                    <div x-show="activeAccordion === 4" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-[#a1a1aa] leading-relaxed font-medium">
                        We accept Medicare, major private health insurances, long-term care insurance, and private pay plans. Call our billing team at +1 352 729 2727 to verify your insurance coverage immediately.
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

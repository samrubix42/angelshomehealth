<div class="bg-[#000000] text-white selection:bg-[#C8A14F] selection:text-black">
    <!-- 1. HERO HEADER WITH AMBIENT RADIAL GOLD GLOW -->
    <section class="relative bg-[#050505] border-b border-[#27272a] py-16 sm:py-24 overflow-hidden">
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

    <!-- 2. UPPER SECTION: DIRECT CONTACT INFO CARDS -->
    <section class="py-12 bg-[#050505] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">
                
                <!-- Phone Card -->
                <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 flex flex-col items-center text-center justify-between group shadow-xl">
                    <div class="w-full flex flex-col items-center">
                        <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black shrink-0 text-2xl transition-all mx-auto mb-4">
                            <i class="ri-phone-fill"></i>
                        </div>
                        <h4 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">Call Us Directly</h4>
                        <p class="text-xs text-[#a1a1aa] mt-1.5 leading-relaxed">24/7 Phone Support Available</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-[#1f1f23] w-full text-center">
                        <a href="{{ phone_url() }}" class="text-sm font-bold text-[#C8A14F] hover:underline block truncate">{{ setting('phone', '+1 352 729 2727') }}</a>
                    </div>
                </div>

                <!-- Fax Card -->
                <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 flex flex-col items-center text-center justify-between group shadow-xl">
                    <div class="w-full flex flex-col items-center">
                        <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black shrink-0 text-2xl transition-all mx-auto mb-4">
                            <i class="ri-printer-line"></i>
                        </div>
                        <h4 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">Fax Us</h4>
                        <p class="text-xs text-[#a1a1aa] mt-1.5 leading-relaxed">Medical Records & Physician Orders</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-[#1f1f23] w-full text-center">
                        <a href="tel:{{ preg_replace('/[^0-9]/', '', setting('fax', '352-729-2732')) }}" class="text-sm font-bold text-[#C8A14F] hover:underline block truncate">{{ setting('fax', '352-729-2732') }}</a>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 flex flex-col items-center text-center justify-between group shadow-xl">
                    <div class="w-full flex flex-col items-center">
                        <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black shrink-0 text-2xl transition-all mx-auto mb-4">
                            <i class="ri-mail-line"></i>
                        </div>
                        <h4 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">Email Now</h4>
                        <p class="text-xs text-[#a1a1aa] mt-1.5 leading-relaxed">General & Medical Inquiries</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-[#1f1f23] w-full text-center">
                        <a href="mailto:{{ setting('email', 'info@angelshomehealthfl.com') }}" class="text-xs sm:text-sm font-semibold text-[#C8A14F] hover:underline block truncate">{{ setting('email', 'info@angelshomehealthfl.com') }}</a>
                    </div>
                </div>

                <!-- Visit Now Card -->
                <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 flex flex-col items-center text-center justify-between group shadow-xl">
                    <div class="w-full flex flex-col items-center">
                        <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] group-hover:bg-[#C8A14F] group-hover:text-black shrink-0 text-2xl transition-all mx-auto mb-4">
                            <i class="ri-map-pin-2-fill"></i>
                        </div>
                        <h4 class="font-heading font-bold text-base text-white group-hover:text-[#C8A14F] transition-colors">Visit Now</h4>
                        <p class="text-xs text-[#a1a1aa] mt-1.5 leading-relaxed">Mount Dora, FL & Surrounding Areas</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-[#1f1f23] w-full text-center">
                        <a href="https://maps.google.com/?q=3400%2C+CR+19-A%2C+Mt+Dora%2C+FL+32757%2C+U.+S." target="_blank" rel="noopener noreferrer" class="text-xs text-white hover:text-[#C8A14F] transition-colors leading-relaxed block font-medium">
                            {{ setting('address', '3400, CR 19-A, Mt Dora, FL 32757, U. S.') }}
                        </a>
                    </div>
                </div>

                <!-- WhatsApp Card -->
                <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] hover:border-emerald-500/60 transition-all duration-300 flex flex-col items-center text-center justify-between group shadow-xl">
                    <div class="w-full flex flex-col items-center">
                        <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-[#121212] border border-emerald-500/40 flex items-center justify-center text-emerald-400 group-hover:bg-emerald-500 group-hover:text-black shrink-0 text-2xl transition-all mx-auto mb-4">
                            <i class="ri-whatsapp-fill"></i>
                        </div>
                        <h4 class="font-heading font-bold text-base text-white group-hover:text-emerald-400 transition-colors">Chat on WhatsApp</h4>
                        <p class="text-xs text-[#a1a1aa] mt-1.5 leading-relaxed">Instant Medical & Assessment Inquiries</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-[#1f1f23] w-full text-center">
                        <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-emerald-400 hover:underline block truncate">
                            +1 (352) 729-2727 &rarr;
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. MAP (LEFT) & CONTACT FORM (RIGHT) SECTION -->
    <section class="py-16 sm:py-20 bg-[#000000] border-b border-[#27272a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- LEFT COLUMN: Embedded Google Map -->
                <div class="lg:col-span-6">
                    <div class="rounded-3xl overflow-hidden border border-[#27272a] hover:border-[#C8A14F]/40 shadow-2xl bg-[#0a0a0a] h-[340px] sm:h-[400px] lg:h-[420px] transition-colors">
                        <div class="w-full h-full [&>iframe]:w-full [&>iframe]:h-full [&>iframe]:border-0">
                            @if (str_contains(setting('google_map', ''), '<iframe'))
                                {!! setting('google_map') !!}
                            @else
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.018079277115!2d-81.6788339!3d28.8085351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e7a3a616e31e15%3A0xf9e4d888116a92df!2sAngels%20Home%20Care!5e0!3m2!1sen!2sin!4v1793974083029!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Contact Consultation Form -->
                <div class="lg:col-span-6 bg-[#0a0a0a] p-6 sm:p-10 rounded-3xl border border-[#27272a] shadow-2xl relative flex flex-col justify-between">
                    <div>
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
                                    <input type="text" wire:model="name" placeholder="Enter your full name" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('name') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <!-- Phone & Email Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Phone Number *</label>
                                        <input type="tel" wire:model="phone" placeholder="Enter your phone number" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                        @error('phone') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Email Address *</label>
                                        <input type="email" wire:model="email" placeholder="Enter your email address" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors">
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
                                    <textarea wire:model="notes" rows="4" placeholder="Describe your care needs, medical conditions, or specific questions..." class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors"></textarea>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="w-full bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-extrabold py-4 rounded-full text-xs uppercase tracking-widest transition-all transform hover:scale-[1.02] shadow-xl">
                                    Submit Consultation Request
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. FREQUENTLY ASKED QUESTIONS (ACCORDION SECTION) -->
    <section class="py-20 md:py-28 bg-[#000000] border-t border-[#27272a] relative overflow-hidden"
             x-data="{ activeFaq: 0 }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                    ✦ GOT QUESTIONS? WE HAVE ANSWERS
                </span>
                <h2 class="font-heading font-extrabold text-4xl sm:text-5xl text-white tracking-tight">
                    Frequently Asked Questions
                </h2>
                <p class="text-[#a1a1aa] text-base sm:text-lg leading-relaxed font-medium">
                    Get clear, straightforward answers about our medical services, caregiver qualifications, and how to start care for your loved one.
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
                        While we are proudly based in Mount Dora, our dedicated network of nurses and therapists serves patients across Central Florida, including the greater Orlando area and surrounding communities. We combine the resources of a statewide provider with the warmth and responsiveness of a local care team.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-all" :class="activeFaq === 1 ? 'border-[#C8A14F]/60' : ''">
                    <button type="button" @click="activeFaq = activeFaq === 1 ? null : 1" class="w-full p-6 text-left flex items-center justify-between gap-4 font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                        <span>What types of home health care services do you offer?</span>
                        <i class="text-xl text-[#C8A14F] transition-transform duration-300" :class="activeFaq === 1 ? 'ri-subtract-line' : 'ri-add-line'"></i>
                    </button>
                    <div x-show="activeFaq === 1" x-collapse class="px-6 pb-6 text-sm text-[#a1a1aa] leading-relaxed font-medium border-t border-[#27272a]/60 pt-4">
                        We offer a comprehensive suite of in-home medical and therapeutic services. This includes Skilled Nursing (wound care, cardiac and pulmonary care), Rehabilitation Therapies (physical, occupational, and speech therapy), Disease Management (diabetes, Alzheimer's, and Parkinson's support), and Medical Social Work. Our goal is to handle all complex health needs under one roof.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-all" :class="activeFaq === 2 ? 'border-[#C8A14F]/60' : ''">
                    <button type="button" @click="activeFaq = activeFaq === 2 ? null : 2" class="w-full p-6 text-left flex items-center justify-between gap-4 font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                        <span>How quickly can in-home care services begin?</span>
                        <i class="text-xl text-[#C8A14F] transition-transform duration-300" :class="activeFaq === 2 ? 'ri-subtract-line' : 'ri-add-line'"></i>
                    </button>
                    <div x-show="activeFaq === 2" x-collapse class="px-6 pb-6 text-sm text-[#a1a1aa] leading-relaxed font-medium border-t border-[#27272a]/60 pt-4">
                        We understand that health transitions—especially hospital discharges—happen quickly. Once we receive a physician’s order or complete our initial health assessment, we can typically match you with a caregiver and begin services within 24 to 48 hours. We prioritize prompt, seamless transitions to ensure there is no gap in care.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-all" :class="activeFaq === 3 ? 'border-[#C8A14F]/60' : ''">
                    <button type="button" @click="activeFaq = activeFaq === 3 ? null : 3" class="w-full p-6 text-left flex items-center justify-between gap-4 font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                        <span>Are your caregivers licensed and background-checked?</span>
                        <i class="text-xl text-[#C8A14F] transition-transform duration-300" :class="activeFaq === 3 ? 'ri-subtract-line' : 'ri-add-line'"></i>
                    </button>
                    <div x-show="activeFaq === 3" x-collapse class="px-6 pb-6 text-sm text-[#a1a1aa] leading-relaxed font-medium border-t border-[#27272a]/60 pt-4">
                        Absolutely. Your safety and peace of mind are our top priorities. Every member of our clinical team—from our Registered Nurses (RNs) to our physical therapists and home health aides—is fully licensed, insured, and thoroughly vetted. We conduct rigorous national background checks, verify credentials, and require ongoing clinical training.
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-[#0a0a0a] border border-[#27272a] rounded-2xl overflow-hidden transition-all" :class="activeFaq === 4 ? 'border-[#C8A14F]/60' : ''">
                    <button type="button" @click="activeFaq = activeFaq === 4 ? null : 4" class="w-full p-6 text-left flex items-center justify-between gap-4 font-heading font-bold text-lg text-white hover:text-[#C8A14F] transition-colors">
                        <span>Can care plans be adjusted as my family's needs change?</span>
                        <i class="text-xl text-[#C8A14F] transition-transform duration-300" :class="activeFaq === 4 ? 'ri-subtract-line' : 'ri-add-line'"></i>
                    </button>
                    <div x-show="activeFaq === 4" x-collapse class="px-6 pb-6 text-sm text-[#a1a1aa] leading-relaxed font-medium border-t border-[#27272a]/60 pt-4">
                        Yes. We know that health is dynamic. A patient recovering from surgery may need intensive daily therapy at first, but only weekly check-ins as they heal. Conversely, chronic conditions may eventually require more hands-on support. Our care coordinators continuously evaluate your loved one's progress and communicate with their doctor to scale services up or down as needed.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
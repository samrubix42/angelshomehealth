<div class="bg-[#000000] text-white">
    <!-- HERO HEADER FOR CONTACT PAGE -->
    <section class="relative bg-[#050505] border-b border-[#27272a] py-16 sm:py-24 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(200,161,79,0.12)_0,transparent_60%)] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center sm:text-left">
            <div class="max-w-3xl space-y-4">
                <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                    Get in Touch
                </span>
                <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-tight">
                    Contact <span class="text-[#C8A14F]">Angels Home Health</span>
                </h1>
                <p class="text-base sm:text-lg text-[#a1a1aa] font-medium leading-relaxed">
                    Have questions about our in-home care services? Speak directly with our nursing team in Mount Dora, Florida.
                </p>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM & INFO CARDS SECTION -->
    <section class="py-16 sm:py-20 bg-[#000000]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12">
                
                <!-- LEFT COLUMN: Contact Form Card -->
                <div class="lg:col-span-7 bg-[#0a0a0a] p-8 sm:p-10 rounded-3xl border border-[#27272a] shadow-2xl">
                    <div class="mb-8 space-y-2">
                        <h2 class="font-heading font-extrabold text-2xl sm:text-3xl text-white">Schedule Your Free Care Consultation</h2>
                        <p class="text-xs sm:text-sm text-[#a1a1aa]">Fill out the form below and our nursing coordinator will reach out promptly.</p>
                    </div>

                    @if($formSubmitted)
                        <div class="bg-[#121212] border-2 border-[#C8A14F] rounded-2xl p-8 text-center space-y-4">
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
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Full Name *</label>
                                <input type="text" wire:model="name" placeholder="John Doe" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                @error('name') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Phone Number *</label>
                                    <input type="tel" wire:model="phone" placeholder="+1 (352) 000-0000" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('phone') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Email Address *</label>
                                    <input type="email" wire:model="email" placeholder="john@example.com" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('email') <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Service of Interest</label>
                                <select wire:model="service" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white focus:outline-none transition-colors">
                                    <option value="Skilled Nursing & Rehabilitation">Skilled Nursing & Rehabilitation</option>
                                    <option value="Physical & Occupational Therapy">Physical & Occupational Therapy</option>
                                    <option value="Behavioral Health Services">Behavioral Health Services</option>
                                    <option value="Chronic Disease Management">Chronic Disease Management</option>
                                    <option value="Alzheimer's & Dementia Care">Alzheimer's & Dementia Care</option>
                                    <option value="General Inquiry / Other">General Inquiry / Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#d4d4d8] mb-2">Additional Notes / Patient Care Needs</label>
                                <textarea wire:model="notes" rows="4" placeholder="Tell us briefly about the care required..." class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#52525b] focus:outline-none transition-colors"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-extrabold py-4 rounded-full text-xs uppercase tracking-widest transition-all transform hover:scale-[1.02] shadow-xl">
                                Submit Consultation Request
                            </button>
                        </form>
                    @endif
                </div>

                <!-- RIGHT COLUMN: Direct Contact Info Cards -->
                <div class="lg:col-span-5 space-y-6">
                    <!-- Phone Card -->
                    <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0 text-xl">
                            <i class="ri-phone-fill"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-base text-white">Call Us Directly</h4>
                            <p class="text-xs text-[#a1a1aa] mt-0.5">24/7 Phone Support Available</p>
                            <a href="tel:13527292727" class="text-lg font-bold text-[#C8A14F] hover:underline block mt-1">+1 352 729 2727</a>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0 text-xl">
                            <i class="ri-mail-line"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-base text-white">Send Us An Email</h4>
                            <p class="text-xs text-[#a1a1aa] mt-0.5">General & Medical Inquiries</p>
                            <a href="mailto:info@angelshomehealthfl.com" class="text-sm font-semibold text-[#C8A14F] hover:underline block mt-1">info@angelshomehealthfl.com</a>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 flex items-center justify-center text-[#C8A14F] shrink-0 text-xl">
                            <i class="ri-map-pin-2-fill"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-base text-white">Office Location</h4>
                            <p class="text-xs text-[#a1a1aa] mt-0.5">Mount Dora, Florida</p>
                            <p class="text-sm text-white mt-1 leading-relaxed font-medium">3400, CR 19-A, Mount Dora, FL 32757, U.S.</p>
                        </div>
                    </div>

                    <!-- Hours & License Card -->
                    <div class="bg-[#0a0a0a] p-6 rounded-3xl border border-[#27272a] space-y-3">
                        <h4 class="font-heading font-bold text-base text-white flex items-center gap-2">
                            <i class="ri-shield-check-fill text-[#C8A14F]"></i>
                            <span>Licensure & Accreditation</span>
                        </h4>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed">
                            Angels Home Health of Florida is an ACHC Accredited & Florida Registered Home Health Agency providing care across Mount Dora and surrounding counties.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

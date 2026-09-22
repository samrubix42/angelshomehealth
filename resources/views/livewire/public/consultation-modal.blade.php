<div>
    <div x-data="{ open: @entangle('open') }"
         @open-consultation-modal.window="$wire.openModal($event.detail?.service)"
         @keydown.escape.window="open = false"
         x-cloak>
        
        <!-- BACKDROP OVERLAY -->
        <div x-show="open"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="open = false"
             class="fixed inset-0 bg-black/85 backdrop-blur-md z-[9999] flex items-center justify-center p-4 overflow-y-auto">
            
            <!-- MODAL CARD CONTAINER -->
            <div @click.stop
                 x-show="open"
                 x-transition:enter="transition ease-out duration-300 transform"
                 x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200 transform"
                 x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                 x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                 class="relative bg-[#0a0a0a] border-2 border-[#C8A14F]/50 rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-[0_0_60px_rgba(200,161,79,0.25)] text-white my-8 z-10">
                
                <!-- TOP HEADER BAR -->
                <div class="flex items-start justify-between gap-4 pb-5 border-b border-[#27272a]">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 text-[#C8A14F] flex items-center justify-center text-xl shrink-0">
                            <i class="ri-calendar-check-fill"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-[#C8A14F] uppercase tracking-widest block">Free In-Home Assessment</span>
                            <h3 class="font-heading font-extrabold text-xl sm:text-2xl text-white">Schedule Consultation</h3>
                        </div>
                    </div>

                    <button @click="open = false" type="button" class="w-9 h-9 rounded-full bg-[#121212] border border-[#27272a] text-[#a1a1aa] hover:text-[#C8A14F] hover:border-[#C8A14F] flex items-center justify-center transition-all focus:outline-none shrink-0" aria-label="Close modal">
                        <i class="ri-close-line text-xl"></i>
                    </button>
                </div>

                <!-- MODAL BODY CONTENT -->
                <div class="pt-6">
                    @if($formSubmitted)
                        <div class="text-center py-6 space-y-4">
                            <div class="w-16 h-16 rounded-full bg-[#C8A14F]/20 text-[#C8A14F] border border-[#C8A14F]/50 flex items-center justify-center mx-auto text-3xl shadow-lg">
                                <i class="ri-checkbox-circle-fill"></i>
                            </div>
                            <div class="space-y-2">
                                <h4 class="font-heading font-bold text-2xl text-white">Request Received!</h4>
                                <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed max-w-xs mx-auto">
                                    Thank you, <strong class="text-white">{{ $name }}</strong>. Our Mount Dora nursing coordinator will call you at <strong class="text-[#C8A14F]">{{ $phone }}</strong> shortly.
                                </p>
                            </div>
                            <div class="pt-4">
                                <button type="button" @click="open = false" class="bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-8 py-3 rounded-full text-xs uppercase tracking-wider transition-all shadow-xl">
                                    Close Window
                                </button>
                            </div>
                        </div>
                    @else
                        <form wire:submit.prevent="submitConsultation" class="space-y-4">
                            <!-- Full Name -->
                            <div>
                                <label class="block text-xs font-bold text-[#d4d4d8] uppercase tracking-wider mb-1.5">Full Name *</label>
                                <input type="text" 
                                       wire:model="name" 
                                       placeholder="John Doe" 
                                       class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                @error('name') <span class="text-[10px] text-red-400 mt-1 block font-medium">{{ $message }}</span> @enderror
                            </div>

                            <!-- Phone & Email Row -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-[#d4d4d8] uppercase tracking-wider mb-1.5">Phone Number *</label>
                                    <input type="tel" 
                                           wire:model="phone" 
                                           placeholder="+1 (352) 000-0000" 
                                           class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('phone') <span class="text-[10px] text-red-400 mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-[#d4d4d8] uppercase tracking-wider mb-1.5">Email Address *</label>
                                    <input type="email" 
                                           wire:model="email" 
                                           placeholder="john@example.com" 
                                           class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-colors">
                                    @error('email') <span class="text-[10px] text-red-400 mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <!-- Service Selection -->
                            <div>
                                <label class="block text-xs font-bold text-[#d4d4d8] uppercase tracking-wider mb-1.5">Requested Care Service *</label>
                                <select wire:model="service" class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3 text-xs text-white focus:outline-none transition-colors">
                                    @foreach($servicesList as $s)
                                        <option value="{{ $s->title }}">{{ $s->title }}</option>
                                    @endforeach
                                    <option value="General Inquiry / Other Care">General Inquiry / Other Care</option>
                                </select>
                                @error('service') <span class="text-[10px] text-red-400 mt-1 block font-medium">{{ $message }}</span> @enderror
                            </div>

                            <!-- Care Notes -->
                            <div>
                                <label class="block text-xs font-bold text-[#d4d4d8] uppercase tracking-wider mb-1.5">Care Needs / Special Notes</label>
                                <textarea wire:model="notes" 
                                          rows="3" 
                                          placeholder="Tell us about the patient's condition, schedule, or specific requirements..." 
                                          class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl px-4 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-colors"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-2">
                                <button type="submit" wire:loading.attr="disabled" class="w-full bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-extrabold py-3.5 rounded-full text-xs uppercase tracking-widest transition-all transform hover:scale-[1.02] shadow-xl flex items-center justify-center gap-2 disabled:opacity-50">
                                    <span wire:loading.remove wire:target="submitConsultation">Schedule Free Visit</span>
                                    <span wire:loading wire:target="submitConsultation">Submitting Request...</span>
                                    <i wire:loading.remove wire:target="submitConsultation" class="ri-arrow-right-line"></i>
                                </button>
                            </div>
                        </form>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>

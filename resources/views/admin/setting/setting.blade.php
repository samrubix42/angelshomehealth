<div class="space-y-6">
    
    <!-- 1. HEADER SECTION -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-zinc-200/80">
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-zinc-100 text-zinc-800 border border-zinc-200">
                    <i class="ri-settings-4-line text-amber-500"></i>
                    <span>Site Configuration</span>
                </span>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900">
                General Website Settings
            </h1>
            <p class="text-xs text-zinc-500 max-w-2xl">
                Configure company contact information, physical location, Google Maps, WhatsApp, and social media channels displayed across the public website.
            </p>
        </div>

        <button wire:click="save" 
                wire:loading.attr="disabled"
                type="button" 
                class="inline-flex items-center justify-center gap-2 bg-zinc-900 hover:bg-zinc-800 text-zinc-50 font-medium px-5 py-2.5 rounded-lg text-xs transition-all shadow-xs shrink-0">
            <span wire:loading.remove wire:target="save" class="flex items-center gap-1.5">
                <i class="ri-save-line text-sm"></i>
                <span>Save All Settings</span>
            </span>
            <span wire:loading wire:target="save" class="flex items-center gap-1.5">
                <i class="ri-loader-4-line animate-spin text-sm"></i>
                <span>Saving...</span>
            </span>
        </button>
    </div>

    <!-- 2. SETTINGS FORM GRID -->
    <form wire:submit.prevent="save" class="space-y-6">
        
        <!-- CARD 1: CONTACT & DIRECT COMMUNICATION -->
        <div class="bg-white rounded-2xl border border-zinc-200 shadow-xs overflow-hidden">
            <div class="px-6 py-4 border-b border-zinc-100 bg-zinc-50/50 flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white flex items-center justify-center text-sm shadow-xs">
                        <i class="ri-phone-line text-amber-400"></i>
                    </div>
                    <div>
                        <h2 class="font-bold text-sm text-zinc-900">Contact & Communication</h2>
                        <p class="text-[11px] text-zinc-500">Phone numbers, WhatsApp, email, and clinical operational hours.</p>
                    </div>
                </div>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">
                
                <!-- Display Phone Number -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">
                        Primary Phone (Display Format) *
                    </label>
                    <div class="relative">
                        <i class="ri-phone-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
                        <input type="text" 
                               wire:model="phone" 
                               placeholder="+1 (352) 729-2727" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                    </div>
                    @error('phone') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- Callable Raw Phone -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">
                        Callable Phone Number (tel: digits)
                    </label>
                    <div class="relative">
                        <i class="ri-cellphone-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
                        <input type="text" 
                               wire:model="phone_raw" 
                               placeholder="+13527292727" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs font-mono text-zinc-900 transition-all">
                    </div>
                    <span class="text-[10px] text-zinc-400 mt-1 block">Used for direct mobile tap-to-call link.</span>
                    @error('phone_raw') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- WhatsApp Phone Number -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">
                        WhatsApp Contact Number
                    </label>
                    <div class="relative">
                        <i class="ri-whatsapp-line absolute left-3 top-2.5 text-emerald-500 text-sm"></i>
                        <input type="text" 
                               wire:model="whatsapp" 
                               placeholder="+1 (352) 729-2727" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                    </div>
                    <span class="text-[10px] text-zinc-400 mt-1 block">Enables direct WhatsApp chat with clinic staff.</span>
                    @error('whatsapp') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- Email Address -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">
                        Inquiry Email Address *
                    </label>
                    <div class="relative">
                        <i class="ri-mail-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
                        <input type="email" 
                               wire:model="email" 
                               placeholder="info@angelshomehealth.com" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                    </div>
                    @error('email') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- Working Hours -->
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">
                        Operating & Support Hours
                    </label>
                    <div class="relative">
                        <i class="ri-time-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
                        <input type="text" 
                               wire:model="working_hours" 
                               placeholder="Mon - Fri: 8:00 AM - 5:00 PM (24/7 Clinical On-Call Support)" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                    </div>
                    @error('working_hours') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

            </div>
        </div>

        <!-- CARD 2: ADDRESS, LOCATION & GOOGLE MAPS -->
        <div class="bg-white rounded-2xl border border-zinc-200 shadow-xs overflow-hidden">
            <div class="px-6 py-4 border-b border-zinc-100 bg-zinc-50/50 flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white flex items-center justify-center text-sm shadow-xs">
                        <i class="ri-map-pin-line text-amber-400"></i>
                    </div>
                    <div>
                        <h2 class="font-bold text-sm text-zinc-900">Office Location & Google Maps</h2>
                        <p class="text-[11px] text-zinc-500">Physical clinic address and interactive Google Maps embed.</p>
                    </div>
                </div>
            </div>

            <div class="p-6 space-y-5">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Physical Address -->
                    <div>
                        <label class="block text-xs font-semibold text-zinc-700 mb-1">Physical Office Address *</label>
                        <div class="relative">
                            <i class="ri-building-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
                            <input type="text" 
                                   wire:model="address" 
                                   placeholder="18950 US-441, Mount Dora, FL 32757, United States" 
                                   class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                        </div>
                        @error('address') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                    </div>

                    <!-- Service Region / Coverage -->
                    <div>
                        <label class="block text-xs font-semibold text-zinc-700 mb-1">Service Coverage Region</label>
                        <div class="relative">
                            <i class="ri-compass-3-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
                            <input type="text" 
                                   wire:model="location" 
                                   placeholder="Mount Dora, Lake County & Central Florida" 
                                   class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                        </div>
                        @error('location') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Google Map URL / Iframe Code -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">
                        Google Map Embed URL or Iframe Code
                    </label>
                    <textarea wire:model.live.debounce.500ms="google_map" 
                              rows="3" 
                              placeholder="https://www.google.com/maps/embed?pb=... or <iframe src='...'></iframe>" 
                              class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg p-3 text-xs font-mono text-zinc-800 transition-all"></textarea>
                    <span class="text-[10px] text-zinc-400 mt-1 block">Paste Google Maps embed link from Google Maps > Share > Embed a map.</span>
                    @error('google_map') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- Google Map Preview -->
                @if ($google_map)
                    <div class="pt-2">
                        <span class="text-xs font-semibold text-zinc-700 block mb-2">Live Map Preview:</span>
                        <div class="rounded-xl overflow-hidden border border-zinc-200 h-64 w-full bg-zinc-100 shadow-xs">
                            @if (str_contains($google_map, '<iframe'))
                                {!! $google_map !!}
                            @else
                                <iframe src="{{ $google_map }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            @endif
                        </div>
                    </div>
                @endif

            </div>
        </div>

        <!-- CARD 3: SOCIAL MEDIA PROFILES -->
        <div class="bg-white rounded-2xl border border-zinc-200 shadow-xs overflow-hidden">
            <div class="px-6 py-4 border-b border-zinc-100 bg-zinc-50/50 flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white flex items-center justify-center text-sm shadow-xs">
                        <i class="ri-share-line text-amber-400"></i>
                    </div>
                    <div>
                        <h2 class="font-bold text-sm text-zinc-900">Social Media Profiles</h2>
                        <p class="text-[11px] text-zinc-500">Official links to your social profiles rendered in header and footer.</p>
                    </div>
                </div>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">
                
                <!-- Facebook -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">Facebook URL</label>
                    <div class="relative">
                        <i class="ri-facebook-circle-fill absolute left-3 top-2.5 text-blue-600 text-sm"></i>
                        <input type="text" 
                               wire:model="facebook" 
                               placeholder="https://facebook.com/angelshomehealth" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                    </div>
                    @error('facebook') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- Instagram -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">Instagram URL</label>
                    <div class="relative">
                        <i class="ri-instagram-line absolute left-3 top-2.5 text-pink-600 text-sm"></i>
                        <input type="text" 
                               wire:model="instagram" 
                               placeholder="https://instagram.com/angelshomehealth" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                    </div>
                    @error('instagram') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- LinkedIn -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">LinkedIn URL</label>
                    <div class="relative">
                        <i class="ri-linkedin-box-fill absolute left-3 top-2.5 text-blue-700 text-sm"></i>
                        <input type="text" 
                               wire:model="linkedin" 
                               placeholder="https://linkedin.com/company/angelshomehealth" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                    </div>
                    @error('linkedin') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- Twitter / X -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">Twitter / X URL</label>
                    <div class="relative">
                        <i class="ri-twitter-x-line absolute left-3 top-2.5 text-zinc-900 text-sm"></i>
                        <input type="text" 
                               wire:model="twitter" 
                               placeholder="https://twitter.com/angelshomehealth" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                    </div>
                    @error('twitter') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- YouTube -->
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-zinc-700 mb-1">YouTube Channel URL</label>
                    <div class="relative">
                        <i class="ri-youtube-line absolute left-3 top-2.5 text-red-600 text-sm"></i>
                        <input type="text" 
                               wire:model="youtube" 
                               placeholder="https://youtube.com/@angelshomehealth" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3.5 py-2 text-xs text-zinc-900 transition-all">
                    </div>
                    @error('youtube') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

            </div>
        </div>

        <!-- Sticky / Bottom Action Bar -->
        <div class="flex items-center justify-end gap-3 pt-2">
            <button type="submit" 
                    wire:loading.attr="disabled"
                    class="bg-zinc-900 hover:bg-zinc-800 text-zinc-50 font-semibold px-6 py-2.5 rounded-xl text-xs transition-all shadow-md flex items-center gap-2">
                <span wire:loading.remove wire:target="save" class="flex items-center gap-2">
                    <i class="ri-check-line text-sm"></i>
                    <span>Save All Changes</span>
                </span>
                <span wire:loading wire:target="save" class="flex items-center gap-2">
                    <i class="ri-loader-4-line animate-spin text-sm"></i>
                    <span>Updating Settings...</span>
                </span>
            </button>
        </div>

    </form>

</div>
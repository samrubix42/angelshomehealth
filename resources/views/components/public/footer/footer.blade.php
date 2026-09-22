<footer class="bg-[#050505] border-t border-[#27272a] py-14 text-sm text-[#a1a1aa]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <div class="space-y-4 md:col-span-2">
                <!-- Logo Image ONLY - Increased Prominent Size -->
                <div class="inline-block mb-2">
                    <img src="/logo.png" alt="Angels Home Health Logo" class="h-20 sm:h-24 w-auto object-contain">
                </div>
                <p class="text-xs text-[#a1a1aa] max-w-sm leading-relaxed">
                    Angels Home Health of Florida is a dedicated home health care provider based in Mount Dora, Florida. Delivering skilled nursing, physical therapy, behavioral health, and chronic care in the comfort of home.
                </p>
                <!-- Social Media Links -->
                <div class="flex items-center gap-3 pt-2">
                    @if (setting('facebook'))
                        <a href="{{ setting('facebook') }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-[#121212] border border-[#27272a] hover:border-[#C8A14F] hover:text-[#C8A14F] flex items-center justify-center transition-colors text-white" aria-label="Facebook">
                            <i class="ri-facebook-fill text-base"></i>
                        </a>
                    @endif
                    @if (setting('instagram'))
                        <a href="{{ setting('instagram') }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-[#121212] border border-[#27272a] hover:border-[#C8A14F] hover:text-[#C8A14F] flex items-center justify-center transition-colors text-white" aria-label="Instagram">
                            <i class="ri-instagram-line text-base"></i>
                        </a>
                    @endif
                    @if (setting('twitter'))
                        <a href="{{ setting('twitter') }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-[#121212] border border-[#27272a] hover:border-[#C8A14F] hover:text-[#C8A14F] flex items-center justify-center transition-colors text-white" aria-label="Twitter">
                            <i class="ri-twitter-x-line text-base"></i>
                        </a>
                    @endif
                    @if (setting('linkedin'))
                        <a href="{{ setting('linkedin') }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-[#121212] border border-[#27272a] hover:border-[#C8A14F] hover:text-[#C8A14F] flex items-center justify-center transition-colors text-white" aria-label="LinkedIn">
                            <i class="ri-linkedin-fill text-base"></i>
                        </a>
                    @endif
                    @if (setting('youtube'))
                        <a href="{{ setting('youtube') }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-[#121212] border border-[#27272a] hover:border-red-500 hover:text-red-500 flex items-center justify-center transition-colors text-white" aria-label="YouTube">
                            <i class="ri-youtube-line text-base"></i>
                        </a>
                    @endif
                    @if (setting('whatsapp'))
                        <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-[#121212] border border-[#27272a] hover:border-emerald-500 hover:text-emerald-400 flex items-center justify-center transition-colors text-emerald-400" aria-label="WhatsApp">
                            <i class="ri-whatsapp-line text-base"></i>
                        </a>
                    @endif
                </div>
            </div>

            <div>
                <h4 class="font-heading font-bold text-xs uppercase tracking-wider text-[#C8A14F] mb-3">Quick Navigation</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="/about" wire:navigate class="hover:text-[#C8A14F] transition-colors">About Us</a></li>
                    <li><a href="/services" wire:navigate class="hover:text-[#C8A14F] transition-colors">Services</a></li>
                    <li><a href="/blog" wire:navigate class="hover:text-[#C8A14F] transition-colors">Latest Articles</a></li>
                    <li><button @click="$dispatch('open-consultation-modal')" type="button" class="hover:text-[#C8A14F] transition-colors text-left focus:outline-none">Schedule Consultation</button></li>
                </ul>
            </div>

            <div>
                <h4 class="font-heading font-bold text-xs uppercase tracking-wider text-[#C8A14F] mb-3">Address & Contact</h4>
                <p class="text-xs text-[#a1a1aa] leading-relaxed mb-2">
                    {{ setting('address', '3400, CR 19-A, Mount Dora, FL 32757, U.S.') }}
                </p>
                <p class="text-xs text-white font-medium mb-1">
                    Phone: <a href="{{ phone_url() }}" class="text-[#C8A14F] hover:underline">{{ setting('phone', '+1 352 729 2727') }}</a>
                </p>
                @if (setting('whatsapp'))
                    <p class="text-xs text-white font-medium mb-1">
                        WhatsApp: <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="text-emerald-400 hover:underline">{{ setting('whatsapp', '+1 352 729 2727') }}</a>
                    </p>
                @endif
                <p class="text-xs text-white font-medium mb-1">
                    Email: <a href="mailto:{{ setting('email', 'info@angelshomehealthfl.com') }}" class="text-[#C8A14F] hover:underline">{{ setting('email', 'info@angelshomehealthfl.com') }}</a>
                </p>
                @if (setting('working_hours'))
                    <p class="text-[11px] text-[#71717a] mt-2">
                        <i class="ri-time-line text-[#C8A14F] mr-1"></i>{{ setting('working_hours') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="border-t border-[#27272a] pt-6 flex flex-col sm:flex-row items-center justify-between text-xs text-[#71717a] gap-4">
            <p>&copy; {{ date('Y') }} Angels Home Health of Florida. All rights reserved.</p>
            <p>Mount Dora, Florida · ACHC Accredited & Florida Registered</p>
        </div>
    </div>
</footer>
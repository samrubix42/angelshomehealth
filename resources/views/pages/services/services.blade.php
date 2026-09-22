<div class="bg-[#000000] text-white selection:bg-[#C8A14F] selection:text-black">
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

    <!-- ALL DYNAMIC SERVICES GRID SECTION -->
    <section class="py-16 sm:py-20 bg-[#000000]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="text-center sm:text-left border-b border-[#27272a] pb-6 flex items-center justify-between flex-wrap gap-4">
                <div>
                    <span class="text-xs font-bold text-[#C8A14F] uppercase tracking-wider">Our Specialized Offerings</span>
                    <h2 class="font-heading font-extrabold text-2xl sm:text-4xl text-white">Healthcare & Nursing Services</h2>
                </div>
                <span class="text-xs text-[#71717a] font-medium">Showing {{ count($this->services) }} Services</span>
            </div>

            <!-- 3-Column Services Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($this->services as $service)
                    <article class="bg-[#0a0a0a] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 overflow-hidden transition-all duration-300 group flex flex-col justify-between shadow-2xl hover:-translate-y-1.5">
                        <div>
                            <div class="relative h-60 overflow-hidden">
                                <img src="{{ $service->image ?? asset('images/service_wound_nursing.jpg') }}" alt="{{ $service->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                    Angels Care
                                </span>
                            </div>

                            <div class="p-6 sm:p-7 text-center space-y-3">
                                <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors leading-snug">
                                    <a href="/services/{{ $service->slug }}">
                                        {{ $service->title }}
                                    </a>
                                </h3>

                                <p class="text-xs text-[#a1a1aa] leading-relaxed line-clamp-3 font-medium">
                                    {{ $service->short_description }}
                                </p>
                            </div>
                        </div>

                        <div class="p-6 pt-0 text-center">
                            <a href="/services/{{ $service->slug }}" class="inline-flex items-center justify-center bg-gradient-to-r from-[#C8A14F] to-[#e5be6b] hover:from-[#d8b260] hover:to-[#f0c878] text-[#000000] font-heading font-bold px-8 py-2.5 rounded-xl text-xs uppercase tracking-wider transition-all transform hover:scale-105 shadow-lg w-full sm:w-auto">
                                Read More
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-16 text-center space-y-4 bg-[#0a0a0a] rounded-3xl border border-[#27272a] p-8">
                        <i class="ri-heart-pulse-line text-4xl text-[#C8A14F]"></i>
                        <h4 class="font-heading font-bold text-lg text-white">No Services Available</h4>
                        <p class="text-xs text-[#a1a1aa]">Services will be listed here shortly.</p>
                    </div>
                @endforelse
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

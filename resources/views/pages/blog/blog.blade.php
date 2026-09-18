<div class="bg-[#000000] text-white">
    <!-- HERO HEADER FOR BLOG PAGE -->
    <section class="relative bg-[#050505] border-b border-[#27272a] py-16 sm:py-24 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(200,161,79,0.12)_0,transparent_60%)] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center sm:text-left">
            <div class="max-w-3xl space-y-4">
                <span class="text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-widest inline-block">
                    Health Insights & Family Caregiver Resources
                </span>
                <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-tight">
                    Angels Home Health <span class="text-[#C8A14F]">Blog</span>
                </h1>
                <p class="text-base sm:text-lg text-[#a1a1aa] font-medium leading-relaxed">
                    Expert advice on in-home skilled nursing, senior wellness, Alzheimer's caregiver support, and chronic disease management in Florida.
                </p>
            </div>
        </div>
    </section>

    <!-- BLOG POSTS GRID & CATEGORY FILTERS -->
    <section class="py-16 sm:py-20 bg-[#000000]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Category Filter Buttons -->
            <div class="flex items-center gap-3 overflow-x-auto pb-2 scrollbar-none">
                @foreach(['All', 'Skilled Nursing', 'Elderly Care', 'Memory Support', 'Chronic Care'] as $cat)
                    <button type="button" 
                            wire:click="selectCategory('{{ $cat }}')"
                            class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all whitespace-nowrap {{ $selectedCategory === $cat ? 'bg-[#C8A14F] text-[#000000] shadow-lg' : 'bg-[#121212] text-[#a1a1aa] border border-[#27272a] hover:border-[#C8A14F] hover:text-white' }}">
                        {{ $cat }}
                    </button>
                @endforeach
            </div>

            <!-- Blog Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Blog Post 1 -->
                <article class="bg-[#0a0a0a] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 overflow-hidden transition-all duration-300 group flex flex-col justify-between shadow-2xl">
                    <div>
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=800&auto=format&fit=crop" alt="Skilled Nursing at Home" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                Skilled Nursing
                            </span>
                        </div>
                        <div class="p-6 sm:p-7 space-y-3">
                            <div class="flex items-center gap-3 text-xs text-[#71717a]">
                                <span>Sep 18, 2026</span>
                                <span>•</span>
                                <span>5 min read</span>
                            </div>
                            <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors leading-snug">
                                5 Essential Benefits of In-Home Skilled Nursing Post-Surgery
                            </h3>
                            <p class="text-xs text-[#a1a1aa] leading-relaxed">
                                Discover how professional registered nursing care at home reduces hospital readmissions and accelerates post-operative recovery in seniors.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2">
                        <a href="/contact" class="inline-flex items-center gap-2 text-xs font-bold text-[#C8A14F] hover:underline uppercase tracking-wider">
                            <span>Read Full Article</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-[#0a0a0a] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 overflow-hidden transition-all duration-300 group flex flex-col justify-between shadow-2xl">
                    <div>
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=800&auto=format&fit=crop" alt="Memory Care Advice" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                Memory Support
                            </span>
                        </div>
                        <div class="p-6 sm:p-7 space-y-3">
                            <div class="flex items-center gap-3 text-xs text-[#71717a]">
                                <span>Sep 12, 2026</span>
                                <span>•</span>
                                <span>7 min read</span>
                            </div>
                            <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors leading-snug">
                                Understanding Alzheimer’s & Dementia: Tips for Family Caregivers
                            </h3>
                            <p class="text-xs text-[#a1a1aa] leading-relaxed">
                                Practical communication techniques, cognitive routine management, and safe home environment creation for loved ones with memory loss.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2">
                        <a href="/contact" class="inline-flex items-center gap-2 text-xs font-bold text-[#C8A14F] hover:underline uppercase tracking-wider">
                            <span>Read Full Article</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-[#0a0a0a] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 overflow-hidden transition-all duration-300 group flex flex-col justify-between shadow-2xl">
                    <div>
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=800&auto=format&fit=crop" alt="Chronic Disease Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                Chronic Care
                            </span>
                        </div>
                        <div class="p-6 sm:p-7 space-y-3">
                            <div class="flex items-center gap-3 text-xs text-[#71717a]">
                                <span>Sep 05, 2026</span>
                                <span>•</span>
                                <span>6 min read</span>
                            </div>
                            <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors leading-snug">
                                Managing Diabetes & Cardiovascular Health Comfortably at Home
                            </h3>
                            <p class="text-xs text-[#a1a1aa] leading-relaxed">
                                Learn how daily blood glucose monitoring, blood pressure tracking, and nutritional education from licensed nurses improve quality of life.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2">
                        <a href="/contact" class="inline-flex items-center gap-2 text-xs font-bold text-[#C8A14F] hover:underline uppercase tracking-wider">
                            <span>Read Full Article</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>
</div>

<div class="bg-[#000000] text-white selection:bg-[#C8A14F] selection:text-black">
    <!-- 1. BREADCRUMBS & BLOG POST HEADER -->
    <section class="relative bg-[#050505] border-b border-[#27272a] py-12 sm:py-16 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_center,rgba(200,161,79,0.14)_0,transparent_70%)] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <!-- Breadcrumb Navigation -->
            <nav class="flex items-center gap-2 text-xs font-medium text-[#71717a] overflow-x-auto py-1">
                <a href="/" class="hover:text-[#C8A14F] transition-colors flex items-center gap-1">
                    <i class="ri-home-4-line text-sm"></i>
                    <span>Home</span>
                </a>
                <i class="ri-arrow-right-s-line text-xs text-[#3f3f46]"></i>
                <a href="/blog" class="hover:text-[#C8A14F] transition-colors">
                    <span>Journal & Blog</span>
                </a>
                <i class="ri-arrow-right-s-line text-xs text-[#3f3f46]"></i>
                <span class="text-[#C8A14F] font-semibold truncate">{{ $this->blog->title }}</span>
            </nav>

            <!-- Metadata & Category Badge -->
            <div class="space-y-4">
                <div class="flex flex-wrap items-center gap-3 text-xs text-[#71717a]">
                    <span class="font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3.5 py-1.5 rounded-full uppercase tracking-wider">
                        {{ $this->blog->category?->title ?? 'Health Insights' }}
                    </span>
                    <span>•</span>
                    <span class="flex items-center gap-1 text-[#d4d4d8]">
                        <i class="ri-calendar-line text-[#C8A14F]"></i>
                        <span>{{ $this->blog->created_at->format('M d, Y') }}</span>
                    </span>
                    <span>•</span>
                    <span class="flex items-center gap-1 text-[#d4d4d8]">
                        <i class="ri-time-line text-[#C8A14F]"></i>
                        <span>{{ $this->getReadTime($this->blog->description) }}</span>
                    </span>
                </div>

                <h1 class="font-heading font-extrabold text-3xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-tight">
                    {{ $this->blog->title }}
                </h1>

                @if($this->blog->short_description)
                    <p class="text-base sm:text-lg text-[#a1a1aa] font-medium leading-relaxed">
                        {{ $this->blog->short_description }}
                    </p>
                @endif

                <!-- Author & Share Bar -->
                <div class="pt-6 border-t border-[#1f1f23] flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-full bg-[#C8A14F]/20 border border-[#C8A14F]/60 flex items-center justify-center text-[#C8A14F] font-bold text-sm">
                            RN
                        </div>
                        <div>
                            <p class="text-xs font-bold text-white">Medical Clinical Team</p>
                            <p class="text-[11px] text-[#71717a]">RN & Post-Acute Clinical Specialist</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-2">
                        <button wire:click="toggleSave" type="button" class="px-4 py-2 rounded-full border border-[#27272a] bg-[#0a0a0a] text-xs font-semibold {{ $isSaved ? 'text-[#C8A14F] border-[#C8A14F]/50 bg-[#C8A14F]/10' : 'text-[#a1a1aa] hover:text-white' }} transition-colors flex items-center gap-1.5">
                            <i class="{{ $isSaved ? 'ri-bookmark-fill' : 'ri-bookmark-line' }}"></i>
                            <span>{{ $isSaved ? 'Saved' : 'Save Article' }}</span>
                        </button>
                        <a href="mailto:?subject={{ urlencode($this->blog->title) }}&body={{ urlencode(request()->fullUrl()) }}" class="w-9 h-9 rounded-full border border-[#27272a] bg-[#0a0a0a] text-[#a1a1aa] hover:text-[#C8A14F] hover:border-[#C8A14F]/40 flex items-center justify-center transition-colors" title="Share via Email">
                            <i class="ri-mail-line text-sm"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener" class="w-9 h-9 rounded-full border border-[#27272a] bg-[#0a0a0a] text-[#a1a1aa] hover:text-[#C8A14F] hover:border-[#C8A14F]/40 flex items-center justify-center transition-colors" title="Share on Facebook">
                            <i class="ri-facebook-fill text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. MAIN BLOG BODY SECTION WITH TINYMCE CONTENT WRAPPER -->
    <section class="py-16 sm:py-20 bg-[#000000]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Featured Cover Image -->
            <div class="rounded-3xl overflow-hidden border border-[#27272a] shadow-2xl h-80 sm:h-[450px] relative group">
                <img src="{{ $this->blog->image }}" alt="{{ $this->blog->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-[#000000] via-transparent to-transparent opacity-60"></div>
                <span class="absolute bottom-6 left-6 bg-[#000000]/85 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-xs font-bold uppercase tracking-wider px-4 py-2 rounded-full flex items-center gap-2">
                    <i class="ri-article-line"></i>
                    <span>Clinical Article</span>
                </span>
            </div>

            <!-- TINYMCE CONTENT CONTAINER -->
            <div class="bg-[#0a0a0a] p-6 sm:p-12 rounded-3xl border border-[#27272a] shadow-xl">
                <div class="tinymce-content">
                    {!! $this->blog->description !!}
                </div>
            </div>

            <!-- TAGS & FOOTER SHARE BAR -->
            <div class="bg-[#0a0a0a] p-6 sm:p-8 rounded-3xl border border-[#27272a] space-y-6">
                @if(count($this->tags) > 0)
                    <div class="flex flex-wrap items-center justify-between gap-4 border-b border-[#1f1f23] pb-6">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-xs font-bold text-[#71717a] uppercase tracking-wider flex items-center gap-1">
                                <i class="ri-price-tag-3-line text-[#C8A14F]"></i>
                                <span>Topics:</span>
                            </span>
                            @foreach($this->tags as $tag)
                                <a href="/blog" class="text-xs font-semibold text-[#a1a1aa] hover:text-[#C8A14F] bg-[#121212] border border-[#27272a] hover:border-[#C8A14F]/40 px-3 py-1 rounded-full transition-colors">
                                    #{{ $tag }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Author Bio Box -->
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-5 bg-[#121212] p-6 rounded-2xl border border-[#27272a]">
                    <div class="w-14 h-14 rounded-2xl bg-[#C8A14F]/20 border border-[#C8A14F]/50 text-[#C8A14F] font-extrabold text-xl flex items-center justify-center shrink-0">
                        RN
                    </div>
                    <div class="space-y-1 text-center sm:text-left">
                        <h4 class="font-heading font-bold text-base text-white">Written by Angels Clinical Care Team</h4>
                        <p class="text-xs text-[#C8A14F] font-semibold">RN & Post-Acute Clinical Specialist</p>
                        <p class="text-xs text-[#a1a1aa] leading-relaxed pt-1">
                            Our clinical team consists of licensed Registered Nurses (RNs), physical therapists, and certified care managers dedicated to raising the standard of home healthcare across Florida.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FREE CONSULTATION CTA BANNER -->
            <div class="bg-gradient-to-r from-[#0a0a0a] via-[#121212] to-[#0a0a0a] p-8 sm:p-10 rounded-3xl border border-[#C8A14F]/40 shadow-2xl relative overflow-hidden text-center sm:text-left">
                <div class="absolute right-0 top-0 w-64 h-64 bg-[#C8A14F]/10 rounded-full blur-3xl pointer-events-none"></div>
                <div class="grid lg:grid-cols-12 gap-6 items-center relative z-10">
                    <div class="lg:col-span-8 space-y-2">
                        <span class="text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-3 py-1 rounded-full uppercase tracking-wider inline-block">
                            Free Care Consultation
                        </span>
                        <h3 class="font-heading font-extrabold text-2xl sm:text-3xl text-white">
                            Need Professional In-Home Nursing Care?
                        </h3>
                        <p class="text-xs sm:text-sm text-[#a1a1aa] leading-relaxed">
                            Contact Angels Home Health of Florida today. We offer personalized nursing evaluations and insurance coverage verifications at no obligation.
                        </p>
                    </div>
                    <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col items-center lg:items-end justify-center gap-3">
                        <a href="{{ phone_url() }}" class="inline-flex items-center gap-2 bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-6 py-3.5 rounded-full text-xs uppercase tracking-wider transition-all transform hover:scale-105 shadow-xl">
                            <i class="ri-phone-fill text-base"></i>
                            <span>Call {{ setting('phone', '+1 352 729 2727') }}</span>
                        </a>
                        @if (setting('whatsapp'))
                            <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white font-heading font-semibold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all shadow-md">
                                <i class="ri-whatsapp-line text-base"></i>
                                <span>WhatsApp Us</span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 3. RELATED ARTICLES GRID -->
    @if(count($this->relatedBlogs) > 0)
        <section class="py-16 bg-[#050505] border-t border-[#27272a]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
                <div class="flex items-center justify-between border-b border-[#1f1f23] pb-4">
                    <div>
                        <span class="text-xs font-bold text-[#C8A14F] uppercase tracking-wider">Keep Reading</span>
                        <h2 class="font-heading font-extrabold text-2xl sm:text-3xl text-white">Related Health Insights</h2>
                    </div>
                    <a href="/blog" class="text-xs font-bold text-[#C8A14F] hover:text-[#d8b260] flex items-center gap-1 transition-colors">
                        <span>View All Articles</span>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($this->relatedBlogs as $rel)
                        <div class="bg-[#0a0a0a] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 overflow-hidden flex flex-col justify-between group shadow-xl">
                            <div class="space-y-4">
                                <div class="h-48 overflow-hidden relative">
                                    <img src="{{ $rel->image }}" alt="{{ $rel->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <span class="absolute top-3 left-3 bg-[#000000]/85 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/30 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                        {{ $rel->category?->title ?? 'Health Insights' }}
                                    </span>
                                </div>

                                <div class="p-6 space-y-3">
                                    <div class="text-[11px] text-[#71717a]">
                                        <span>{{ $rel->created_at->format('M d, Y') }}</span>
                                    </div>
                                    <h3 class="font-heading font-bold text-lg text-white group-hover:text-[#C8A14F] transition-colors leading-snug line-clamp-2">
                                        <a href="/blog/{{ $rel->slug }}">
                                            {{ $rel->title }}
                                        </a>
                                    </h3>
                                </div>
                            </div>

                            <div class="px-6 pb-6 pt-2">
                                <a href="/blog/{{ $rel->slug }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#C8A14F] hover:text-[#d8b260] transition-colors">
                                    <span>Read Full Article</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</div>


<div class="bg-[#000000] text-white selection:bg-[#C8A14F] selection:text-black">
    <!-- 1. HERO HEADER WITH AMBIENT RADIAL GOLD GLOW & SEARCH BAR -->
    <section class="relative bg-[#050505] border-b border-[#27272a] py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_center,rgba(200,161,79,0.18)_0,transparent_70%)] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center sm:text-left">
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                
                <div class="lg:col-span-7 space-y-4">
                    <span class="inline-flex items-center gap-2 text-xs font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/30 px-4 py-2 rounded-full uppercase tracking-widest">
                        <i class="ri-article-line text-sm"></i>
                        <span>Health Insights & Family Caregiver Resources</span>
                    </span>

                    <h1 class="font-heading font-extrabold text-4xl sm:text-6xl text-white tracking-tight leading-tight">
                        Angels Home Health <span class="text-[#C8A14F]">Journal & Blog</span>
                    </h1>

                    <p class="text-base sm:text-lg text-[#a1a1aa] font-medium leading-relaxed max-w-2xl">
                        Expert medical advice on in-home skilled nursing, senior wellness, Alzheimer's caregiver support, and chronic disease management across Florida.
                    </p>
                </div>

                <!-- Right Side Quick Search Box -->
                <div class="lg:col-span-5 bg-[#0a0a0a] p-6 sm:p-7 rounded-3xl border border-[#27272a] shadow-2xl space-y-4">
                    <h3 class="font-heading font-bold text-base text-white flex items-center gap-2">
                        <i class="ri-search-line text-[#C8A14F]"></i>
                        <span>Search Health Articles</span>
                    </h3>
                    <div class="relative">
                        <input type="text" 
                               wire:model.live.debounce.300ms="search"
                               placeholder="Search by topic (e.g. Nursing, Memory Care)..." 
                               class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-2xl px-4 py-3.5 text-xs text-white placeholder-[#52525b] focus:outline-none transition-colors pr-10">
                        @if($search)
                            <button type="button" wire:click="$set('search', '')" class="absolute right-3.5 top-3.5 text-[#a1a1aa] hover:text-white" title="Clear search">
                                <i class="ri-close-line text-base"></i>
                            </button>
                        @else
                            <div class="absolute right-3.5 top-3.5 text-[#C8A14F]">
                                <i class="ri-search-line text-base"></i>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. SPOTLIGHT FEATURED ARTICLE BANNER -->
    @if($this->featuredBlog)
        <section class="py-16 bg-[#000000] border-b border-[#27272a]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-[#0a0a0a] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 transition-all duration-300 overflow-hidden shadow-2xl">
                    <div class="grid lg:grid-cols-12 gap-8 items-center">
                        
                        <div class="lg:col-span-6 relative h-64 sm:h-[380px] overflow-hidden">
                            <img src="{{ $this->featuredBlog->image }}" alt="{{ $this->featuredBlog->title }}" class="w-full h-full object-cover">
                            <span class="absolute top-4 left-4 bg-[#000000]/85 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full">
                                Spotlight Feature
                            </span>
                        </div>

                        <div class="lg:col-span-6 p-8 sm:p-10 space-y-4">
                            <div class="flex items-center gap-3 text-xs text-[#71717a]">
                                <span class="text-[#C8A14F] font-semibold">{{ $this->featuredBlog->category?->title ?? 'Health Insights' }}</span>
                                <span>•</span>
                                <span>{{ $this->featuredBlog->created_at->format('M d, Y') }}</span>
                                <span>•</span>
                                <span>{{ $this->getReadTime($this->featuredBlog->description) }}</span>
                            </div>

                            <h2 class="font-heading font-extrabold text-2xl sm:text-3xl lg:text-4xl text-white hover:text-[#C8A14F] transition-colors leading-tight">
                                <a href="/blog/{{ $this->featuredBlog->slug }}">
                                    {{ $this->featuredBlog->title }}
                                </a>
                            </h2>

                            <p class="text-sm text-[#a1a1aa] leading-relaxed font-medium line-clamp-3">
                                {{ $this->featuredBlog->short_description ?? Str::limit(strip_tags($this->featuredBlog->description), 160) }}
                            </p>

                            <div class="pt-2 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-[#C8A14F]/20 border border-[#C8A14F]/50 flex items-center justify-center text-[#C8A14F] text-xs font-bold">
                                        RN
                                    </div>
                                    <span class="text-xs text-[#d4d4d8] font-semibold">By Medical Clinical Team</span>
                                </div>

                                <a href="/blog/{{ $this->featuredBlog->slug }}" class="inline-flex items-center gap-2 bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider transition-all transform hover:scale-105 shadow-lg">
                                    <span>Read Article</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- 3. ARTICLES GRID & CATEGORY FILTERS -->
    <section class="py-20 bg-[#050505]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Category Filter Buttons -->
            <div class="flex items-center justify-between flex-wrap gap-4 border-b border-[#27272a] pb-6">
                <div class="flex items-center gap-2.5 overflow-x-auto scrollbar-none py-1">
                    <button type="button" 
                            wire:click="selectCategory('All')"
                            class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all whitespace-nowrap {{ $selectedCategory === 'All' ? 'bg-[#C8A14F] text-[#000000] shadow-lg' : 'bg-[#121212] text-[#a1a1aa] border border-[#27272a] hover:border-[#C8A14F] hover:text-white' }}">
                        All
                    </button>
                    @foreach($this->categories as $category)
                        <button type="button" 
                                wire:click="selectCategory('{{ $category->slug }}')"
                                class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all whitespace-nowrap {{ $selectedCategory === $category->slug ? 'bg-[#C8A14F] text-[#000000] shadow-lg' : 'bg-[#121212] text-[#a1a1aa] border border-[#27272a] hover:border-[#C8A14F] hover:text-white' }}">
                            {{ $category->title }}
                        </button>
                    @endforeach
                </div>
                <span class="text-xs text-[#71717a] font-medium hidden sm:inline">
                    Showing {{ count($this->blogs) + ($this->featuredBlog ? 1 : 0) }} Articles
                </span>
            </div>

            <!-- Blog Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($this->blogs as $blog)
                    <article class="bg-[#0a0a0a] rounded-3xl border border-[#27272a] hover:border-[#C8A14F]/60 overflow-hidden transition-all duration-300 group flex flex-col justify-between shadow-2xl hover:-translate-y-1.5">
                        <div>
                            <div class="relative h-56 overflow-hidden">
                                <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <span class="absolute top-4 left-4 bg-[#000000]/80 backdrop-blur-md text-[#C8A14F] border border-[#C8A14F]/40 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                    {{ $blog->category?->title ?? 'General Care' }}
                                </span>
                            </div>
                            <div class="p-6 sm:p-7 space-y-3">
                                <div class="flex items-center gap-3 text-xs text-[#71717a]">
                                    <span>{{ $blog->created_at->format('M d, Y') }}</span>
                                    <span>•</span>
                                    <span>{{ $this->getReadTime($blog->description) }}</span>
                                </div>
                                <h3 class="font-heading font-bold text-xl text-white group-hover:text-[#C8A14F] transition-colors leading-snug">
                                    <a href="/blog/{{ $blog->slug }}">
                                        {{ $blog->title }}
                                    </a>
                                </h3>
                                <p class="text-xs text-[#a1a1aa] leading-relaxed line-clamp-3">
                                    {{ $blog->short_description ?? Str::limit(strip_tags($blog->description), 120) }}
                                </p>
                            </div>
                        </div>
                        <div class="px-6 pb-6 pt-2 border-t border-[#1f1f23] flex items-center justify-between mt-4">
                            <span class="text-xs text-[#71717a]">By Clinical Care Team</span>
                            <a href="/blog/{{ $blog->slug }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#C8A14F] hover:underline uppercase tracking-wider">
                                <span>Read</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </article>
                @empty
                    @if(!$this->featuredBlog)
                        <div class="col-span-full py-16 text-center space-y-4 bg-[#0a0a0a] rounded-3xl border border-[#27272a] p-8">
                            <div class="w-14 h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/30 text-[#C8A14F] flex items-center justify-center mx-auto text-2xl">
                                <i class="ri-article-line"></i>
                            </div>
                            <div class="space-y-1 max-w-md mx-auto">
                                <h4 class="font-heading font-bold text-lg text-white">No Articles Found</h4>
                                <p class="text-xs text-[#a1a1aa] leading-relaxed">No health articles match your search criteria or selected category.</p>
                            </div>
                            @if($search || $selectedCategory !== 'All')
                                <button type="button" wire:click="$set('search', ''); $set('selectedCategory', 'All')" class="inline-flex items-center gap-2 bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-5 py-2.5 rounded-full text-xs uppercase tracking-wider transition-all">
                                    <i class="ri-refresh-line"></i>
                                    <span>Reset Filters</span>
                                </button>
                            @endif
                        </div>
                    @endif
                @endforelse
            </div>
        </div>
    </section>

    <!-- 4. NEWSLETTER & CAREGIVER INSIGHT SUBSCRIPTION BOX -->
    <section class="py-16 bg-[#000000] border-t border-[#27272a]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-[#0a0a0a] p-8 sm:p-12 rounded-3xl border border-[#27272a] text-center space-y-6 shadow-2xl relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(200,161,79,0.08)_0,transparent_70%)] pointer-events-none"></div>
                
                <div class="w-14 h-14 rounded-2xl bg-[#121212] border border-[#C8A14F]/40 text-[#C8A14F] flex items-center justify-center mx-auto text-2xl">
                    <i class="ri-mail-open-fill"></i>
                </div>

                <div class="space-y-2">
                    <h2 class="font-heading font-extrabold text-2xl sm:text-3xl text-white">Subscribe to Health & Caregiver Insights</h2>
                    <p class="text-xs sm:text-sm text-[#a1a1aa] max-w-lg mx-auto">Get monthly medical guidance, elderly care advice, and healthcare news delivered straight to your inbox.</p>
                </div>

                <form @submit.prevent="" class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email address..." class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] rounded-full px-5 py-3.5 text-xs text-white placeholder-[#52525b] focus:outline-none">
                    <button type="submit" class="w-full sm:w-auto bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold px-7 py-3.5 rounded-full text-xs uppercase tracking-wider shrink-0 transition-all">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>

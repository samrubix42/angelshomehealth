<div class="max-w-4xl mx-auto space-y-6">
    
    <!-- 1. PAGE HEADER -->
    <div class="flex items-center justify-between gap-4 pb-2 border-b border-zinc-200/80">
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <a href="/admin/services" class="text-xs text-zinc-500 hover:text-zinc-900 inline-flex items-center gap-1 font-medium transition-colors">
                    <i class="ri-arrow-left-line"></i>
                    <span>Back to Services</span>
                </a>
                <span class="text-xs text-zinc-300">•</span>
                <span class="text-xs text-zinc-500 font-medium">New Record</span>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900">
                Add New Service
            </h1>
        </div>

        <div class="flex items-center gap-2">
            <a href="/admin/services" class="px-4 py-2 rounded-lg border border-zinc-200 bg-white text-zinc-900 font-medium text-xs hover:bg-zinc-100 transition-colors shadow-xs">
                Cancel
            </a>
            <button type="submit" form="service-add-form" class="px-5 py-2 rounded-lg bg-zinc-900 text-zinc-50 font-medium text-xs hover:bg-zinc-800 transition-all shadow-xs inline-flex items-center gap-1.5">
                <i class="ri-save-line"></i>
                <span>Save Service</span>
            </button>
        </div>
    </div>

    <!-- 2. MAIN FORM CARD -->
    <form id="service-add-form" wire:submit.prevent="save" class="space-y-6">
        
        <!-- GENERAL SERVICE INFO CARD -->
        <div class="bg-white rounded-xl border border-zinc-200 shadow-xs p-6 space-y-5">
            <h2 class="text-sm font-semibold text-zinc-900 border-b border-zinc-100 pb-3 flex items-center gap-2">
                <i class="ri-information-line text-zinc-400"></i>
                <span>General Information</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Service Title -->
                <div>
                    <label class="block text-xs font-medium text-zinc-700 mb-1">Service Title *</label>
                    <input type="text" 
                           wire:model.live="title" 
                           placeholder="e.g. Skilled Nursing Care" 
                           class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                    @error('title') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Slug -->
                <div>
                    <label class="block text-xs font-medium text-zinc-700 mb-1">URL Slug *</label>
                    <div class="relative">
                        <span class="absolute left-3 top-2 text-xs font-mono text-zinc-400">/services/</span>
                        <input type="text" 
                               wire:model="slug" 
                               placeholder="skilled-nursing-care" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-20 pr-3 py-2 text-xs font-mono text-zinc-900 placeholder:text-zinc-400 transition-all">
                    </div>
                    @error('slug') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Short Description -->
            <div>
                <label class="block text-xs font-medium text-zinc-700 mb-1">Short Summary *</label>
                <textarea wire:model="short_description" 
                          rows="2" 
                          placeholder="Brief 1-2 sentence overview displayed on service cards..." 
                          class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all"></textarea>
                @error('short_description') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- Detailed Content -->
            <div>
                <label class="block text-xs font-medium text-zinc-700 mb-1">Full Service Description & Clinical Scope *</label>
                <textarea wire:model="description" 
                          rows="8" 
                          placeholder="Detailed content for the service detail page..." 
                          class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all font-sans leading-relaxed"></textarea>
                @error('description') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- Image URL / Media Path -->
            <div>
                <label class="block text-xs font-medium text-zinc-700 mb-1">Feature Image URL</label>
                <input type="text" 
                       wire:model="image" 
                       placeholder="https://images.unsplash.com/photo-..." 
                       class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                @error('image') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- Active Status Checkbox -->
            <div class="pt-2">
                <label class="flex items-center gap-2.5 cursor-pointer select-none">
                    <input type="checkbox" wire:model="is_active" class="w-4 h-4 rounded bg-white border-zinc-300 text-zinc-900 focus:ring-zinc-950">
                    <span class="text-xs font-medium text-zinc-700">Publish service immediately on website</span>
                </label>
            </div>
        </div>

        <!-- SEO METADATA CARD -->
        <div class="bg-white rounded-xl border border-zinc-200 shadow-xs p-6 space-y-4">
            <h2 class="text-sm font-semibold text-zinc-900 border-b border-zinc-100 pb-3 flex items-center gap-2">
                <i class="ri-search-eye-line text-zinc-400"></i>
                <span>Search Engine Optimization (SEO)</span>
            </h2>

            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-medium text-zinc-700 mb-1">Meta Title</label>
                    <input type="text" 
                           wire:model="meta_title" 
                           placeholder="Skilled Nursing Care in Florida | Angels Home Health" 
                           class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                    @error('meta_title') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-xs font-medium text-zinc-700 mb-1">Meta Description</label>
                    <textarea wire:model="meta_description" 
                              rows="2" 
                              placeholder="Comprehensive skilled nursing care provided by licensed RNs in Central Florida..." 
                              class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all"></textarea>
                    @error('meta_description') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-xs font-medium text-zinc-700 mb-1">Meta Keywords</label>
                    <input type="text" 
                           wire:model="meta_keywords" 
                           placeholder="home health care, skilled nursing, registered nurse florida, wound care" 
                           class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                    @error('meta_keywords') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- BOTTOM ACTION BUTTONS -->
        <div class="flex items-center justify-end gap-3 pt-2">
            <a href="/admin/services" class="px-5 py-2.5 rounded-lg border border-zinc-200 bg-white text-zinc-900 font-medium text-xs hover:bg-zinc-100 transition-colors shadow-xs">
                Cancel
            </a>
            <button type="submit" class="px-6 py-2.5 rounded-lg bg-zinc-900 text-zinc-50 font-medium text-xs hover:bg-zinc-800 transition-all shadow-xs inline-flex items-center gap-2">
                <i class="ri-check-line text-sm"></i>
                <span>Save & Create Service</span>
            </button>
        </div>

    </form>
</div>
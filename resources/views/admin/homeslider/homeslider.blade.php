<div class="space-y-6">
    
    <!-- 1. HEADER SECTION -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2 border-b border-zinc-200/80">
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-zinc-100 text-zinc-800 border border-zinc-200">
                    <i class="ri-slideshow-line text-amber-500"></i>
                    <span>Hero Slideshow</span>
                </span>
                <span class="text-xs text-zinc-400">• {{ count($this->sliders) }} Slides Total</span>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900">
                Home Hero Sliders
            </h1>
            <p class="text-xs text-zinc-500 max-w-2xl">
                Manage hero slides, titles, images, call-to-action buttons, and links shown on the public home page slider.
            </p>
        </div>

        <button wire:click="openCreateModal" type="button" class="inline-flex items-center justify-center gap-2 bg-zinc-900 hover:bg-zinc-800 text-zinc-50 font-medium px-4 py-2 rounded-lg text-xs transition-all shadow-xs shrink-0">
            <i class="ri-add-line text-sm"></i>
            <span>Add New Slide</span>
        </button>
    </div>

    <!-- 2. SEARCH & STATUS FILTER BAR -->
    <div class="bg-white p-4 rounded-xl border border-zinc-200 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-4">
        
        <!-- Search Input -->
        <div class="relative w-full sm:w-80">
            <i class="ri-search-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
            <input type="text" 
                   wire:model.live="search" 
                   placeholder="Search slide title, description, buttons..." 
                   class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-4 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
        </div>

        <!-- Filter Buttons -->
        <div class="flex items-center gap-1 w-full sm:w-auto overflow-x-auto">
            @foreach(['All', 'Active', 'Hidden'] as $filter)
                <button type="button" 
                        wire:click="$set('statusFilter', '{{ $filter }}')"
                        class="px-3 py-1.5 rounded-lg text-xs font-medium transition-all whitespace-nowrap {{ $statusFilter === $filter ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'bg-zinc-100 text-zinc-600 hover:bg-zinc-200/70' }}">
                    {{ $filter }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- 3. SLIDERS CARDS GRID -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
        @forelse($this->sliders as $slider)
            <div class="bg-white rounded-xl border border-zinc-200 shadow-xs hover:border-zinc-300 transition-all overflow-hidden flex flex-col justify-between group">
                
                <div>
                    <!-- Slide Image Preview Banner -->
                    <div class="relative h-48 w-full bg-zinc-900 overflow-hidden">
                        @if($slider->image)
                            <img src="{{ $slider->image }}" 
                                 alt="{{ $slider->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=1920&auto=format&fit=crop';">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-zinc-800 text-zinc-500">
                                <div class="text-center space-y-1">
                                    <i class="ri-image-line text-3xl"></i>
                                    <span class="block text-xs">No Image Provided</span>
                                </div>
                            </div>
                        @endif

                        <!-- Slide Status Badge -->
                        <div class="absolute top-3 right-3">
                            <button wire:click="toggleActive({{ $slider->id }})" 
                                    type="button" 
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-medium backdrop-blur-md transition-colors shadow-xs {{ $slider->is_active ? 'bg-emerald-500/90 text-white hover:bg-emerald-600' : 'bg-zinc-800/90 text-zinc-300 hover:bg-zinc-700' }}" 
                                    title="Click to toggle status">
                                <span class="w-1.5 h-1.5 rounded-full {{ $slider->is_active ? 'bg-white' : 'bg-zinc-400' }}"></span>
                                <span>{{ $slider->is_active ? 'Active' : 'Hidden' }}</span>
                            </button>
                        </div>

                        <!-- Slide Title Overlay -->
                        <div class="absolute bottom-3 left-4 right-4">
                            <h3 class="font-bold text-white text-base leading-snug line-clamp-2 drop-shadow-md">
                                {{ $slider->title }}
                            </h3>
                        </div>
                    </div>

                    <!-- Slide Content & Buttons Details -->
                    <div class="p-5 space-y-4">
                        @if($slider->paragraph)
                            <p class="text-xs text-zinc-600 leading-relaxed line-clamp-3">
                                {{ $slider->paragraph }}
                            </p>
                        @endif

                        <!-- Action Buttons Info -->
                        <div class="pt-2 border-t border-zinc-100 flex flex-wrap gap-2 text-xs">
                            @if($slider->btn_1)
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-zinc-100 text-zinc-700 font-medium text-[11px] border border-zinc-200">
                                    <i class="ri-external-link-line text-zinc-400"></i>
                                    <span>Btn 1: {{ $slider->btn_1 }}</span>
                                    <span class="text-zinc-400 font-normal text-[10px]">({{ $slider->btn_1_url ?: '#' }})</span>
                                </span>
                            @endif

                            @if($slider->btn_2)
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-zinc-100 text-zinc-700 font-medium text-[11px] border border-zinc-200">
                                    <i class="ri-external-link-line text-zinc-400"></i>
                                    <span>Btn 2: {{ $slider->btn_2 }}</span>
                                    <span class="text-zinc-400 font-normal text-[10px]">({{ $slider->btn_2_url ?: '#' }})</span>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Bottom Action Controls -->
                <div class="px-5 py-3 bg-zinc-50/70 border-t border-zinc-100 flex items-center justify-between text-xs">
                    <span class="text-[11px] text-zinc-400">Created {{ $slider->created_at?->format('M d, Y') ?? 'Recently' }}</span>

                    <div class="flex items-center gap-2">
                        <button wire:click="openEditModal({{ $slider->id }})" type="button" class="px-3 py-1.5 rounded-lg bg-white border border-zinc-200 hover:bg-zinc-100 text-zinc-800 font-medium text-xs transition-colors shadow-xs flex items-center gap-1.5">
                            <i class="ri-edit-line text-zinc-400"></i>
                            <span>Edit Slide</span>
                        </button>

                        <button wire:click="openDeleteModal({{ $slider->id }})" type="button" class="p-1.5 text-zinc-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete Slide">
                            <i class="ri-delete-bin-line text-base"></i>
                        </button>
                    </div>
                </div>

            </div>
        @empty
            <div class="lg:col-span-2 bg-white p-12 rounded-xl border border-zinc-200 text-center space-y-3">
                <div class="w-12 h-12 rounded-full bg-zinc-100 text-zinc-400 flex items-center justify-center text-2xl mx-auto">
                    <i class="ri-slideshow-line"></i>
                </div>
                <h4 class="font-semibold text-sm text-zinc-800">No Home Sliders Found</h4>
                <p class="text-xs text-zinc-500 max-w-sm mx-auto">Click "Add New Slide" above to add hero slides to your home page.</p>
            </div>
        @endforelse
    </div>

    <!-- 4. ALPINE.JS FORM MODAL (CREATE / EDIT SLIDE) -->
    <div x-show="$wire.showModal" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-cloak
         class="fixed inset-0 z-[100] overflow-y-auto">
        
        <!-- Modal Backdrop -->
        <div wire:click="closeModal" class="fixed inset-0 bg-zinc-950/60 backdrop-blur-sm transition-opacity"></div>

        <!-- Modal Center Dialog Wrapper -->
        <div class="flex min-h-full items-center justify-center p-4 sm:p-6 text-center">
            
            <div x-show="$wire.showModal" 
                 x-transition:enter="transition ease-out duration-200 transform"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150 transform"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="relative transform overflow-hidden rounded-2xl bg-white border border-zinc-200 text-left shadow-2xl transition-all w-full max-w-2xl max-h-[90vh] flex flex-col my-8">
                
                <!-- Sticky Modal Header -->
                <div class="px-6 py-4 border-b border-zinc-100 flex items-center justify-between shrink-0 bg-white">
                    <div class="space-y-0.5">
                        <h3 class="font-bold text-base text-zinc-900">
                            {{ $isEditing ? 'Edit Hero Slide' : 'Add New Hero Slide' }}
                        </h3>
                        <p class="text-xs text-zinc-500">Configure slide headline, background image, and call-to-action buttons.</p>
                    </div>

                    <button wire:click="closeModal" type="button" class="w-8 h-8 rounded-lg bg-zinc-100 hover:bg-zinc-200 text-zinc-500 flex items-center justify-center transition-colors">
                        <i class="ri-close-line text-lg"></i>
                    </button>
                </div>

                <!-- Scrollable Form Body -->
                <form id="slideForm" wire:submit.prevent="save" class="flex-1 overflow-y-auto p-6 space-y-4">
                    
                    <!-- Slide Title -->
                    <div>
                        <label class="block text-xs font-semibold text-zinc-700 mb-1">Slide Title / Headline *</label>
                        <input type="text" 
                               wire:model="title" 
                               placeholder="e.g. Dedicated In-Home Care in Mount Dora, FL" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3.5 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                        @error('title') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                    </div>

                    <!-- Paragraph / Subtitle -->
                    <div>
                        <label class="block text-xs font-semibold text-zinc-700 mb-1">Paragraph / Description</label>
                        <textarea wire:model="paragraph" 
                                  rows="3" 
                                  placeholder="Brief description highlighting services or patient care..." 
                                  class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3.5 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all"></textarea>
                        @error('paragraph') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                    </div>

                    <!-- Slide Image Upload & URL -->
                    <div class="space-y-3 bg-zinc-50/70 p-4 rounded-xl border border-zinc-200">
                        <label class="block text-xs font-semibold text-zinc-800">Slide Background Image</label>
                        
                        <!-- File Upload Input with 1MB Limit and Loading Indicator -->
                        <div>
                            <input type="file" 
                                   wire:model="imageUpload" 
                                   accept="image/*" 
                                   class="w-full text-xs text-zinc-600 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-medium file:bg-zinc-900 file:text-white hover:file:bg-zinc-800 cursor-pointer">
                            <span class="text-[11px] text-zinc-400 block mt-1">PNG, JPG, WebP up to 1MB (1024 KB).</span>
                            
                            <div wire:loading wire:target="imageUpload" class="text-xs text-amber-600 flex items-center gap-1.5 mt-1.5 font-medium">
                                <i class="ri-loader-4-line animate-spin text-sm"></i>
                                <span>Uploading image, please wait...</span>
                            </div>
                            @error('imageUpload') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>

                        <!-- Uploaded Image Live Preview -->
                        @if ($imageUpload)
                            <div class="relative w-full h-36 rounded-lg overflow-hidden border border-zinc-200 bg-zinc-900 group">
                                <img src="{{ $imageUpload->temporaryUrl() }}" alt="Preview" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-between p-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-[11px] text-white bg-black/60 px-2 py-0.5 rounded">New File Preview</span>
                                    <button type="button" wire:click="removeImageUpload" class="px-2.5 py-1 rounded-md bg-red-600 text-white text-xs hover:bg-red-700 transition-colors flex items-center gap-1 shadow-sm">
                                        <i class="ri-delete-bin-line"></i><span>Clear</span>
                                    </button>
                                </div>
                            </div>
                        @elseif ($image)
                            <div class="relative w-full h-36 rounded-lg overflow-hidden border border-zinc-200 bg-zinc-900 group">
                                <img src="{{ $image }}" alt="Current Image" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-between p-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-[11px] text-white bg-black/60 px-2 py-0.5 rounded">Current Image</span>
                                    <button type="button" wire:click="removeExistingImage" class="px-2.5 py-1 rounded-md bg-red-600 text-white text-xs hover:bg-red-700 transition-colors flex items-center gap-1 shadow-sm">
                                        <i class="ri-delete-bin-line"></i><span>Remove</span>
                                    </button>
                                </div>
                            </div>
                        @endif

                        <!-- Image URL Fallback -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block mb-1">Or paste Image URL:</span>
                            <input type="text" 
                                   wire:model="image" 
                                   placeholder="https://images.unsplash.com/..." 
                                   class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-1.5 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                            @error('image') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- Call To Action Buttons Group -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Button 1 -->
                        <div class="p-3.5 bg-zinc-50/70 rounded-xl border border-zinc-200 space-y-2.5">
                            <span class="text-xs font-semibold text-zinc-800 block">Primary Button (Gold)</span>
                            <div>
                                <label class="block text-[11px] text-zinc-600 mb-1">Button Text</label>
                                <input type="text" 
                                       wire:model="btn_1" 
                                       placeholder="e.g. Schedule Free Consultation" 
                                       class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-1.5 text-xs text-zinc-900 transition-all">
                            </div>
                            <div>
                                <label class="block text-[11px] text-zinc-600 mb-1">Link URL</label>
                                <input type="text" 
                                       wire:model="btn_1_url" 
                                       placeholder="e.g. #consultation or /contact" 
                                       class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-1.5 text-xs text-zinc-900 transition-all">
                            </div>
                        </div>

                        <!-- Button 2 -->
                        <div class="p-3.5 bg-zinc-50/70 rounded-xl border border-zinc-200 space-y-2.5">
                            <span class="text-xs font-semibold text-zinc-800 block">Secondary Button (Outline)</span>
                            <div>
                                <label class="block text-[11px] text-zinc-600 mb-1">Button Text</label>
                                <input type="text" 
                                       wire:model="btn_2" 
                                       placeholder="e.g. Explore Our Services" 
                                       class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-1.5 text-xs text-zinc-900 transition-all">
                            </div>
                            <div>
                                <label class="block text-[11px] text-zinc-600 mb-1">Link URL</label>
                                <input type="text" 
                                       wire:model="btn_2_url" 
                                       placeholder="e.g. #services or tel:13527292727" 
                                       class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-1.5 text-xs text-zinc-900 transition-all">
                            </div>
                        </div>
                    </div>

                    <!-- Active Status Checkbox -->
                    <div class="pt-1">
                        <label class="flex items-center gap-2.5 cursor-pointer select-none">
                            <input type="checkbox" wire:model="is_active" class="w-4 h-4 rounded bg-white border-zinc-300 text-zinc-900 focus:ring-zinc-950">
                            <span class="text-xs font-medium text-zinc-700">Display this slide on Home Page</span>
                        </label>
                    </div>

                </form>

                <!-- Sticky Modal Actions Footer -->
                <div class="px-6 py-4 border-t border-zinc-100 bg-zinc-50 flex items-center justify-end gap-3 shrink-0">
                    <button wire:click="closeModal" type="button" class="px-4 py-2 rounded-lg border border-zinc-200 bg-white text-zinc-700 font-medium text-xs hover:bg-zinc-100 transition-colors shadow-xs">
                        Cancel
                    </button>
                    <button type="submit" 
                            form="slideForm"
                            wire:loading.attr="disabled"
                            class="px-5 py-2 rounded-lg bg-zinc-900 text-zinc-50 font-medium text-xs hover:bg-zinc-800 transition-all shadow-xs flex items-center gap-1.5">
                        <span wire:loading.remove wire:target="save">
                            {{ $isEditing ? 'Update Slide' : 'Save Slide' }}
                        </span>
                        <span wire:loading wire:target="save" class="flex items-center gap-1.5">
                            <i class="ri-loader-4-line animate-spin"></i>
                            <span>Saving...</span>
                        </span>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- 5. ALPINE.JS DELETE CONFIRMATION MODAL -->
    <div x-show="$wire.showDeleteModal" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-cloak
         class="fixed inset-0 z-[100] overflow-y-auto">
        
        <!-- Backdrop -->
        <div wire:click="closeDeleteModal" class="fixed inset-0 bg-zinc-950/60 backdrop-blur-sm transition-opacity"></div>

        <!-- Center Dialog Wrapper -->
        <div class="flex min-h-full items-center justify-center p-4 text-center">
            <div x-show="$wire.showDeleteModal" 
                 x-transition:enter="transition ease-out duration-200 transform"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150 transform"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="relative transform overflow-hidden rounded-2xl bg-white border border-zinc-200 shadow-2xl max-w-sm w-full p-6 text-center space-y-4 my-8 z-10">
                
                <div class="w-11 h-11 rounded-full bg-red-50 text-red-600 flex items-center justify-center text-xl mx-auto border border-red-200">
                    <i class="ri-delete-bin-line"></i>
                </div>

                <div class="space-y-1">
                    <h4 class="font-bold text-base text-zinc-900">Delete Hero Slide?</h4>
                    <p class="text-xs text-zinc-500 leading-relaxed">This action cannot be undone. Are you sure you want to remove this slide from the hero slider?</p>
                </div>

                <div class="flex items-center justify-center gap-2.5 pt-2">
                    <button wire:click="closeDeleteModal" type="button" class="px-4 py-2 rounded-lg border border-zinc-200 bg-white text-zinc-700 font-medium text-xs hover:bg-zinc-100 transition-colors shadow-xs">
                        Cancel
                    </button>
                    <button wire:click="delete" type="button" class="px-4 py-2 rounded-lg bg-red-600 text-white font-medium text-xs hover:bg-red-700 transition-all shadow-xs flex items-center gap-1">
                        <i class="ri-delete-bin-line"></i>
                        <span>Yes, Delete</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
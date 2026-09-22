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

            <!-- Detailed Content (TinyMCE) -->
            <div>
                <label class="block text-xs font-medium text-zinc-700 mb-1">Full Service Description & Clinical Scope *</label>
                <div wire:ignore
                     x-data="{
                         value: @entangle('description'),
                         editorInstance: null,
                         init() {
                             this.$nextTick(() => {
                                 tinymce.init({
                                     target: $refs.tinymce,
                                     height: 350,
                                     menubar: false,
                                     plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
                                     toolbar: 'undo redo | blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code',
                                     branding: false,
                                     promotion: false,
                                     setup: (editor) => {
                                         this.editorInstance = editor;
                                         editor.on('init', () => {
                                             if (this.value) {
                                                 editor.setContent(this.value);
                                             }
                                         });
                                         editor.on('change input undo redo keyup', () => {
                                             this.value = editor.getContent();
                                         });
                                     }
                                 });

                                 this.$watch('value', (newValue) => {
                                     if (this.editorInstance && this.editorInstance.getContent() !== newValue) {
                                         this.editorInstance.setContent(newValue || '');
                                     }
                                 });
                             });
                         }
                     }">
                    <textarea x-ref="tinymce" class="w-full bg-white border border-zinc-200 rounded-lg px-3 py-2 text-xs text-zinc-900 focus:outline-none">{{ $description }}</textarea>
                </div>
                @error('description') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- Feature Image Upload & URL -->
            <div class="space-y-3">
                <label class="block text-xs font-medium text-zinc-700">Feature Image</label>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- File Upload Input -->
                    <div class="space-y-2">
                        <label class="block text-[11px] text-zinc-500 font-medium">Upload File (Max 1MB)</label>
                        <div class="flex items-center gap-2">
                            <input type="file" 
                                   wire:model.live="imageUpload" 
                                   accept="image/*" 
                                   class="block w-full text-xs text-zinc-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-zinc-900 file:text-white hover:file:bg-zinc-800 cursor-pointer border border-zinc-200 rounded-lg p-1 bg-zinc-50/50">
                        </div>

                        <!-- Upload Loading State Indicator -->
                        <div wire:loading wire:target="imageUpload" class="inline-flex items-center gap-2 text-xs text-blue-600 bg-blue-50 px-3 py-1.5 rounded-md border border-blue-200/60 font-medium animate-pulse">
                            <svg class="animate-spin h-3.5 w-3.5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span>Uploading image... (Max size 1MB)</span>
                        </div>

                        @error('imageUpload') <span class="text-[11px] text-red-500 font-medium block">{{ $message }}</span> @enderror
                    </div>

                    <!-- External URL Input Alternative -->
                    <div class="space-y-2">
                        <label class="block text-[11px] text-zinc-500 font-medium">Or External Image URL</label>
                        <input type="text" 
                               wire:model.live="image" 
                               placeholder="https://images.unsplash.com/photo-..." 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                        @error('image') <span class="text-[11px] text-red-500 font-medium block">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Image Preview Section -->
                @if ($imageUpload)
                    <div class="mt-2 p-3 bg-zinc-50 rounded-lg border border-zinc-200 flex items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <img src="{{ $imageUpload->temporaryUrl() }}" class="h-16 w-24 object-cover rounded-md border border-zinc-200 shadow-xs">
                            <div>
                                <p class="text-xs font-semibold text-zinc-900">New Image Selected</p>
                                <p class="text-[11px] text-emerald-600 font-medium flex items-center gap-1 mt-0.5">
                                    <i class="ri-checkbox-circle-fill"></i> Ready to upload on save
                                </p>
                            </div>
                        </div>
                        <button type="button" wire:click="removeImageUpload" class="text-xs text-red-600 hover:text-red-700 bg-red-50 hover:bg-red-100 border border-red-200 px-2.5 py-1 rounded-md font-medium transition-colors">
                            Remove
                        </button>
                    </div>
                @elseif ($image)
                    <div class="mt-2 p-3 bg-zinc-50 rounded-lg border border-zinc-200 flex items-center gap-3">
                        <img src="{{ $image }}" class="h-16 w-24 object-cover rounded-md border border-zinc-200 shadow-xs" onerror="this.onerror=null; this.src='https://placehold.co/600x400?text=Invalid+Image';">
                        <div>
                            <p class="text-xs font-semibold text-zinc-900">Image Preview</p>
                            <p class="text-[11px] text-zinc-500 font-mono truncate max-w-md">{{ $image }}</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Active & Featured Checkboxes -->
            <div class="pt-2 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                <label class="flex items-center gap-2.5 cursor-pointer select-none">
                    <input type="checkbox" wire:model="is_active" class="w-4 h-4 rounded bg-white border-zinc-300 text-zinc-900 focus:ring-zinc-950">
                    <span class="text-xs font-medium text-zinc-700">Publish service immediately on website</span>
                </label>
                <label class="flex items-center gap-2.5 cursor-pointer select-none">
                    <input type="checkbox" wire:model="is_featured" class="w-4 h-4 rounded bg-white border-zinc-300 text-amber-600 focus:ring-amber-500">
                    <span class="text-xs font-semibold text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">Feature on Home Page Slider</span>
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
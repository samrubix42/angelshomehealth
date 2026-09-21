<div class="space-y-8" x-data="{ modalOpen: false, deleteModalOpen: false }">
    
    <!-- 1. HEADER SECTION -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-6 sm:p-7 rounded-3xl border border-slate-200/80 shadow-xs">
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <span class="text-[10px] font-bold uppercase tracking-widest text-[#C8A14F] bg-[#C8A14F]/10 px-2.5 py-0.5 rounded-md border border-[#C8A14F]/20">
                    Reputation Management
                </span>
                <span class="text-xs text-slate-400">• {{ count($this->testimonials) }} Reviews Total</span>
            </div>
            <h1 class="font-heading font-extrabold text-2xl sm:text-3xl text-slate-900 tracking-tight flex items-center gap-2">
                <i class="ri-star-smile-fill text-amber-500"></i>
                <span>Patient Testimonials</span>
            </h1>
            <p class="text-xs text-slate-500 max-w-2xl">
                Manage patient reviews, family stories, and physician recommendations displayed on the Angels Home Health website.
            </p>
        </div>

        <button wire:click="openCreateModal" type="button" class="inline-flex items-center justify-center gap-2 bg-slate-900 hover:bg-slate-800 text-white font-heading font-bold px-5 py-3 rounded-xl text-xs uppercase tracking-wider transition-all shadow-md shrink-0">
            <i class="ri-add-line text-base text-[#C8A14F]"></i>
            <span>Add Testimonial</span>
        </button>
    </div>

    <!-- 2. FEEDBACK NOTIFICATION BANNER -->
    @if($feedbackMessage)
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" class="bg-emerald-50 border border-emerald-200/80 p-4 rounded-2xl text-xs text-emerald-800 flex items-center justify-between transition-all">
            <div class="flex items-center gap-2">
                <i class="ri-checkbox-circle-fill text-emerald-600 text-base"></i>
                <span class="font-semibold">{{ $feedbackMessage }}</span>
            </div>
            <button @click="show = false" type="button" class="text-emerald-500 hover:text-emerald-700">
                <i class="ri-close-line"></i>
            </button>
        </div>
    @endif

    <!-- 3. SEARCH & STATUS FILTER BAR -->
    <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-4">
        
        <!-- Search Input -->
        <div class="relative w-full sm:w-80">
            <i class="ri-search-line absolute left-3.5 top-2.5 text-slate-400 text-sm"></i>
            <input type="text" 
                   wire:model.live="search" 
                   placeholder="Search by name, role, or review text..." 
                   class="w-full bg-slate-100/80 border border-slate-200 focus:border-[#C8A14F] focus:bg-white rounded-xl pl-9 pr-4 py-2 text-xs text-slate-800 placeholder-slate-400 focus:outline-none transition-all">
        </div>

        <!-- Filter Buttons -->
        <div class="flex items-center gap-1.5 w-full sm:w-auto overflow-x-auto">
            @foreach(['All', 'Active', 'Hidden'] as $filter)
                <button type="button" 
                        wire:click="$set('statusFilter', '{{ $filter }}')"
                        class="px-3.5 py-1.5 rounded-xl text-xs font-bold transition-all whitespace-nowrap {{ $statusFilter === $filter ? 'bg-slate-900 text-white shadow-xs' : 'bg-slate-100 text-slate-600 hover:bg-slate-200/80' }}">
                    {{ $filter }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- 4. TESTIMONIALS CARDS GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($this->testimonials as $testimonial)
            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-xs hover:border-[#C8A14F]/40 transition-all space-y-4 flex flex-col justify-between group">
                
                <div class="space-y-3">
                    <!-- Top Bar: Avatar, Info & Active Switch -->
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-2xl bg-slate-900 text-[#C8A14F] font-bold text-sm flex items-center justify-center border border-slate-800 shrink-0">
                                {{ substr($testimonial->name, 0, 1) }}
                            </div>
                            <div>
                                <h3 class="font-heading font-extrabold text-base text-slate-900 leading-tight">
                                    {{ $testimonial->name }}
                                </h3>
                                <p class="text-[11px] text-slate-500 font-medium">
                                    {{ $testimonial->designation }}
                                </p>
                            </div>
                        </div>

                        <!-- Status Badge & Inline Toggle Switch -->
                        <button wire:click="toggleActive({{ $testimonial->id }})" type="button" class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold border transition-colors shrink-0 {{ $testimonial->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-slate-100 text-slate-500 border-slate-200' }}" title="Click to toggle status">
                            <span class="w-1.5 h-1.5 rounded-full {{ $testimonial->is_active ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                            <span>{{ $testimonial->is_active ? 'Published' : 'Hidden' }}</span>
                        </button>
                    </div>

                    <!-- 5-Star Rating Icons -->
                    <div class="flex items-center gap-1">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="ri-star-fill text-sm {{ $i <= $testimonial->rating ? 'text-amber-400' : 'text-slate-200' }}"></i>
                        @endfor
                        <span class="text-[11px] font-bold text-slate-400 ml-1">({{ $testimonial->rating }}.0)</span>
                    </div>

                    <!-- Review Body -->
                    <p class="text-xs text-slate-600 leading-relaxed font-normal bg-slate-50/70 p-4 rounded-2xl border border-slate-100 italic">
                        "{{ $testimonial->review }}"
                    </p>
                </div>

                <!-- Bottom Action Controls -->
                <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                    <span class="text-[10px] text-slate-400">Added {{ $testimonial->created_at->format('M d, Y') }}</span>

                    <div class="flex items-center gap-2">
                        <button wire:click="openEditModal({{ $testimonial->id }})" type="button" class="px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200/80 text-slate-700 font-bold text-[11px] border border-slate-200 transition-colors flex items-center gap-1">
                            <i class="ri-edit-line text-slate-500"></i>
                            <span>Edit</span>
                        </button>

                        <button wire:click="openDeleteModal({{ $testimonial->id }})" type="button" class="p-1.5 rounded-xl text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete Testimonial">
                            <i class="ri-delete-bin-line text-base"></i>
                        </button>
                    </div>
                </div>

            </div>
        @empty
            <div class="md:col-span-2 bg-white p-12 rounded-3xl border border-slate-200/80 text-center space-y-3">
                <i class="ri-star-smile-line text-4xl text-slate-300"></i>
                <h4 class="font-heading font-bold text-base text-slate-800">No Testimonials Found</h4>
                <p class="text-xs text-slate-400 max-w-sm mx-auto">No patient reviews match your current search or status filter.</p>
            </div>
        @endforelse
    </div>

    <!-- 5. ALPINE.JS FORM MODAL (CREATE / EDIT) -->
    <div x-show="$wire.showModal" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-cloak
         class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center p-4">
        
        <div x-show="$wire.showModal" 
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 translate-y-4"
             @click.outside="$wire.closeModal()"
             class="bg-white rounded-3xl border border-slate-200 shadow-2xl max-w-lg w-full p-6 sm:p-8 space-y-6">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-lg border border-amber-200/80">
                        <i class="ri-star-smile-fill"></i>
                    </div>
                    <div>
                        <h3 class="font-heading font-extrabold text-lg text-slate-900">
                            {{ $isEditing ? 'Edit Testimonial' : 'Add New Testimonial' }}
                        </h3>
                        <p class="text-xs text-slate-500">Patient story or physician recommendation.</p>
                    </div>
                </div>

                <button wire:click="closeModal" type="button" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 flex items-center justify-center transition-colors">
                    <i class="ri-close-line text-lg"></i>
                </button>
            </div>

            <!-- Form Body -->
            <form wire:submit.prevent="save" class="space-y-4">
                
                <!-- Patient Name -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Full Name *</label>
                    <input type="text" wire:model="name" placeholder="e.g. Sarah Jenkins" class="w-full bg-slate-100/80 border border-slate-200 focus:border-[#C8A14F] focus:bg-white rounded-xl px-4 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none transition-all">
                    @error('name') <span class="text-[10px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Designation / Role -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Designation / Location *</label>
                    <input type="text" wire:model="designation" placeholder="e.g. Daughter of Patient • Mount Dora, FL" class="w-full bg-slate-100/80 border border-slate-200 focus:border-[#C8A14F] focus:bg-white rounded-xl px-4 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none transition-all">
                    @error('designation') <span class="text-[10px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Rating Selector (1 to 5 Stars) -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Star Rating (1 to 5) *</label>
                    <div class="flex items-center gap-2">
                        @for($star = 1; $star <= 5; $star++)
                            <button type="button" 
                                    wire:click="$set('rating', {{ $star }})" 
                                    class="p-2 rounded-xl border transition-all flex items-center gap-1 {{ $rating >= $star ? 'bg-amber-50 border-amber-300 text-amber-500' : 'bg-slate-100 border-slate-200 text-slate-300' }}">
                                <i class="ri-star-fill text-base"></i>
                            </button>
                        @endfor
                        <span class="text-xs font-bold text-slate-700 ml-2">{{ $rating }} / 5 Stars</span>
                    </div>
                    @error('rating') <span class="text-[10px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Review Text -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Review Content *</label>
                    <textarea wire:model="review" rows="4" placeholder="Write the patient's testimonial quote..." class="w-full bg-slate-100/80 border border-slate-200 focus:border-[#C8A14F] focus:bg-white rounded-xl px-4 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none transition-all"></textarea>
                    @error('review') <span class="text-[10px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Active Status Checkbox -->
                <div class="pt-1">
                    <label class="flex items-center gap-2.5 cursor-pointer select-none">
                        <input type="checkbox" wire:model="is_active" class="w-4 h-4 rounded bg-slate-100 border-slate-300 text-slate-900 focus:ring-slate-900">
                        <span class="text-xs font-bold text-slate-700">Publish on Website Immediately</span>
                    </label>
                </div>

                <!-- Modal Actions -->
                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                    <button wire:click="closeModal" type="button" class="px-5 py-2.5 rounded-xl border border-slate-200 bg-slate-100 text-slate-700 font-bold text-xs hover:bg-slate-200 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-6 py-2.5 rounded-xl bg-slate-900 text-white font-heading font-bold text-xs uppercase tracking-wider hover:bg-slate-800 transition-all shadow-md">
                        {{ $isEditing ? 'Update Testimonial' : 'Save Testimonial' }}
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- 6. ALPINE.JS DELETE CONFIRMATION MODAL -->
    <div x-show="$wire.showDeleteModal" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-cloak
         class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center p-4">
        
        <div x-show="$wire.showDeleteModal" 
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.outside="$wire.closeDeleteModal()"
             class="bg-white rounded-3xl border border-slate-200 shadow-2xl max-w-sm w-full p-6 text-center space-y-4">
            
            <div class="w-12 h-12 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center text-2xl mx-auto border border-red-200/80">
                <i class="ri-delete-bin-fill"></i>
            </div>

            <div class="space-y-1">
                <h4 class="font-heading font-extrabold text-lg text-slate-900">Delete Testimonial?</h4>
                <p class="text-xs text-slate-500">This action cannot be undone. Are you sure you want to remove this review?</p>
            </div>

            <div class="flex items-center justify-center gap-3 pt-2">
                <button wire:click="closeDeleteModal" type="button" class="px-5 py-2.5 rounded-xl border border-slate-200 bg-slate-100 text-slate-700 font-bold text-xs hover:bg-slate-200 transition-colors">
                    Cancel
                </button>
                <button wire:click="delete" type="button" class="px-5 py-2.5 rounded-xl bg-red-600 text-white font-heading font-bold text-xs uppercase tracking-wider hover:bg-red-700 transition-all shadow-md">
                    Yes, Delete
                </button>
            </div>
        </div>
    </div>

</div>
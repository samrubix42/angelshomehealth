<div class="space-y-6" x-data="{ modalOpen: false, deleteModalOpen: false }">
    
    <!-- 1. HEADER SECTION -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2 border-b border-zinc-200/80">
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-zinc-100 text-zinc-800 border border-zinc-200">
                    <i class="ri-star-smile-fill text-amber-500"></i>
                    <span>Reputation Management</span>
                </span>
                <span class="text-xs text-zinc-400">• {{ count($this->testimonials) }} Reviews Total</span>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900">
                Patient Testimonials
            </h1>
            <p class="text-xs text-zinc-500 max-w-2xl">
                Manage patient reviews, family stories, and physician recommendations displayed on the Angels Home Health website.
            </p>
        </div>

        <button wire:click="openCreateModal" type="button" class="inline-flex items-center justify-center gap-2 bg-zinc-900 hover:bg-zinc-800 text-zinc-50 font-medium px-4 py-2 rounded-lg text-xs transition-all shadow-xs shrink-0">
            <i class="ri-add-line text-sm"></i>
            <span>Add Testimonial</span>
        </button>
    </div>

    <!-- 2. FEEDBACK NOTIFICATION BANNER -->
    @if($feedbackMessage)
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" class="bg-emerald-50 border border-emerald-200 p-3.5 rounded-xl text-xs text-emerald-800 flex items-center justify-between transition-all">
            <div class="flex items-center gap-2">
                <i class="ri-checkbox-circle-fill text-emerald-600 text-base"></i>
                <span class="font-medium">{{ $feedbackMessage }}</span>
            </div>
            <button @click="show = false" type="button" class="text-emerald-500 hover:text-emerald-700">
                <i class="ri-close-line"></i>
            </button>
        </div>
    @endif

    <!-- 3. SEARCH & STATUS FILTER BAR -->
    <div class="bg-white p-4 rounded-xl border border-zinc-200 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-4">
        
        <!-- Search Input -->
        <div class="relative w-full sm:w-80">
            <i class="ri-search-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
            <input type="text" 
                   wire:model.live="search" 
                   placeholder="Search by name, role, or review text..." 
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

    <!-- 4. TESTIMONIALS CARDS GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @forelse($this->testimonials as $testimonial)
            <div class="bg-white p-5 rounded-xl border border-zinc-200 shadow-xs hover:border-zinc-300 transition-all space-y-4 flex flex-col justify-between group">
                
                <div class="space-y-3">
                    <!-- Top Bar: Avatar, Info & Active Switch -->
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg bg-zinc-900 text-white font-semibold text-xs flex items-center justify-center border border-zinc-800 shrink-0">
                                {{ substr($testimonial->name, 0, 1) }}
                            </div>
                            <div>
                                <h3 class="font-semibold text-sm text-zinc-900 leading-tight">
                                    {{ $testimonial->name }}
                                </h3>
                                <p class="text-[11px] text-zinc-500 font-normal">
                                    {{ $testimonial->designation }}
                                </p>
                            </div>
                        </div>

                        <!-- Status Badge & Inline Toggle Switch -->
                        <button wire:click="toggleActive({{ $testimonial->id }})" type="button" class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-medium border transition-colors shrink-0 {{ $testimonial->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-zinc-100 text-zinc-500 border-zinc-200' }}" title="Click to toggle status">
                            <span class="w-1.5 h-1.5 rounded-full {{ $testimonial->is_active ? 'bg-emerald-500' : 'bg-zinc-400' }}"></span>
                            <span>{{ $testimonial->is_active ? 'Published' : 'Hidden' }}</span>
                        </button>
                    </div>

                    <!-- 5-Star Rating Icons -->
                    <div class="flex items-center gap-1">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="ri-star-fill text-xs {{ $i <= $testimonial->rating ? 'text-amber-400' : 'text-zinc-200' }}"></i>
                        @endfor
                        <span class="text-[11px] font-medium text-zinc-400 ml-1">({{ $testimonial->rating }}.0)</span>
                    </div>

                    <!-- Review Body -->
                    <p class="text-xs text-zinc-700 leading-relaxed font-normal bg-zinc-50 p-3.5 rounded-lg border border-zinc-100 italic">
                        "{{ $testimonial->review }}"
                    </p>
                </div>

                <!-- Bottom Action Controls -->
                <div class="pt-3 border-t border-zinc-100 flex items-center justify-between text-xs">
                    <span class="text-[11px] text-zinc-400">Added {{ $testimonial->created_at->format('M d, Y') }}</span>

                    <div class="flex items-center gap-1.5">
                        <button wire:click="openEditModal({{ $testimonial->id }})" type="button" class="px-2.5 py-1 rounded-md bg-white border border-zinc-200 hover:bg-zinc-100 text-zinc-800 font-medium text-[11px] transition-colors shadow-xs flex items-center gap-1">
                            <i class="ri-edit-line text-zinc-400"></i>
                            <span>Edit</span>
                        </button>

                        <button wire:click="openDeleteModal({{ $testimonial->id }})" type="button" class="p-1 text-zinc-400 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors" title="Delete Testimonial">
                            <i class="ri-delete-bin-line text-sm"></i>
                        </button>
                    </div>
                </div>

            </div>
        @empty
            <div class="md:col-span-2 bg-white p-12 rounded-xl border border-zinc-200 text-center space-y-2">
                <i class="ri-star-smile-line text-3xl text-zinc-300"></i>
                <h4 class="font-semibold text-sm text-zinc-800">No Testimonials Found</h4>
                <p class="text-xs text-zinc-500 max-w-sm mx-auto">No patient reviews match your current search or status filter.</p>
            </div>
        @endforelse
    </div>

    <!-- 5. ALPINE.JS FORM MODAL (CREATE / EDIT) -->
    <div x-show="$wire.showModal" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-cloak
         class="fixed inset-0 bg-black/80 backdrop-blur-xs z-50 flex items-center justify-center p-4">
        
        <div x-show="$wire.showModal" 
             x-transition:enter="transition ease-out duration-200 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.outside="$wire.closeModal()"
             class="bg-white rounded-xl border border-zinc-200 shadow-xl max-w-md w-full p-6 space-y-5">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between border-b border-zinc-100 pb-3">
                <div class="space-y-0.5">
                    <h3 class="font-semibold text-base text-zinc-900">
                        {{ $isEditing ? 'Edit Testimonial' : 'Add New Testimonial' }}
                    </h3>
                    <p class="text-xs text-zinc-500">Patient story or physician recommendation.</p>
                </div>

                <button wire:click="closeModal" type="button" class="w-7 h-7 rounded-md bg-zinc-100 hover:bg-zinc-200 text-zinc-500 flex items-center justify-center transition-colors">
                    <i class="ri-close-line text-base"></i>
                </button>
            </div>

            <!-- Form Body -->
            <form wire:submit.prevent="save" class="space-y-4">
                
                <!-- Patient Name -->
                <div>
                    <label class="block text-xs font-medium text-zinc-700 mb-1">Full Name *</label>
                    <input type="text" wire:model="name" placeholder="e.g. Sarah Jenkins" class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                    @error('name') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Designation / Role -->
                <div>
                    <label class="block text-xs font-medium text-zinc-700 mb-1">Designation / Location *</label>
                    <input type="text" wire:model="designation" placeholder="e.g. Daughter of Patient • Mount Dora, FL" class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                    @error('designation') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Rating Selector (1 to 5 Stars) -->
                <div>
                    <label class="block text-xs font-medium text-zinc-700 mb-1">Star Rating *</label>
                    <div class="flex items-center gap-1.5">
                        @for($star = 1; $star <= 5; $star++)
                            <button type="button" 
                                    wire:click="$set('rating', {{ $star }})" 
                                    class="p-1.5 rounded-lg border transition-all flex items-center justify-center {{ $rating >= $star ? 'bg-amber-50 border-amber-300 text-amber-500' : 'bg-zinc-50 border-zinc-200 text-zinc-300' }}">
                                <i class="ri-star-fill text-sm"></i>
                            </button>
                        @endfor
                        <span class="text-xs font-medium text-zinc-700 ml-2">{{ $rating }} / 5 Stars</span>
                    </div>
                    @error('rating') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Review Text -->
                <div>
                    <label class="block text-xs font-medium text-zinc-700 mb-1">Review Content *</label>
                    <textarea wire:model="review" rows="4" placeholder="Write the patient's testimonial quote..." class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all"></textarea>
                    @error('review') <span class="text-[11px] text-red-500 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Active Status Checkbox -->
                <div class="pt-1">
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" wire:model="is_active" class="w-4 h-4 rounded bg-white border-zinc-300 text-zinc-900 focus:ring-zinc-950">
                        <span class="text-xs font-medium text-zinc-700">Publish on Website Immediately</span>
                    </label>
                </div>

                <!-- Modal Actions -->
                <div class="pt-3 border-t border-zinc-100 flex items-center justify-end gap-2">
                    <button wire:click="closeModal" type="button" class="px-4 py-2 rounded-lg border border-zinc-200 bg-white text-zinc-900 font-medium text-xs hover:bg-zinc-100 transition-colors shadow-xs">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 rounded-lg bg-zinc-900 text-zinc-50 font-medium text-xs hover:bg-zinc-800 transition-all shadow-xs">
                        {{ $isEditing ? 'Update Testimonial' : 'Save Testimonial' }}
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- 6. ALPINE.JS DELETE CONFIRMATION MODAL -->
    <div x-show="$wire.showDeleteModal" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-cloak
         class="fixed inset-0 bg-black/80 backdrop-blur-xs z-50 flex items-center justify-center p-4">
        
        <div x-show="$wire.showDeleteModal" 
             x-transition:enter="transition ease-out duration-200 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.outside="$wire.closeDeleteModal()"
             class="bg-white rounded-xl border border-zinc-200 shadow-xl max-w-sm w-full p-6 text-center space-y-4">
            
            <div class="w-10 h-10 rounded-full bg-red-50 text-red-600 flex items-center justify-center text-lg mx-auto border border-red-200">
                <i class="ri-delete-bin-line"></i>
            </div>

            <div class="space-y-1">
                <h4 class="font-semibold text-base text-zinc-900">Delete Testimonial?</h4>
                <p class="text-xs text-zinc-500">This action cannot be undone. Are you sure you want to remove this review?</p>
            </div>

            <div class="flex items-center justify-center gap-2 pt-2">
                <button wire:click="closeDeleteModal" type="button" class="px-4 py-2 rounded-lg border border-zinc-200 bg-white text-zinc-900 font-medium text-xs hover:bg-zinc-100 transition-colors shadow-xs">
                    Cancel
                </button>
                <button wire:click="delete" type="button" class="px-4 py-2 rounded-lg bg-red-600 text-white font-medium text-xs hover:bg-red-700 transition-all shadow-xs">
                    Yes, Delete
                </button>
            </div>
        </div>
    </div>

</div>
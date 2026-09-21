<div class="space-y-6">

    <!-- 1. PAGE HEADER -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-zinc-200/80">
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <a href="/admin" class="text-xs text-zinc-500 hover:text-zinc-900 inline-flex items-center gap-1 font-medium transition-colors">
                    <i class="ri-arrow-left-line"></i>
                    <span>Dashboard</span>
                </a>
                <span class="text-xs text-zinc-300">•</span>
                <span class="text-xs text-zinc-500 font-medium">Categories</span>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900">
                Categories Management
            </h1>
            <p class="text-xs text-zinc-500">
                Create and manage service categories for Angels Home Health.
            </p>
        </div>

        <div class="flex items-center gap-3">
            <button wire:click="openCreateModal" type="button" class="px-4 py-2.5 rounded-lg bg-zinc-900 hover:bg-zinc-800 text-zinc-50 font-medium text-xs shadow-xs transition-all flex items-center gap-2 cursor-pointer">
                <i class="ri-add-line text-sm"></i>
                <span>Add Category</span>
            </button>
        </div>
    </div>

    <!-- 3. SEARCH & FILTERS -->
    <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3 bg-white p-3 rounded-xl border border-zinc-200 shadow-xs">
        <!-- Search Input -->
        <div class="relative flex-1">
            <i class="ri-search-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
            <input type="text" 
                   wire:model.live.debounce.250ms="search" 
                   placeholder="Search categories by title or slug..." 
                   class="w-full bg-zinc-50/50 border border-zinc-200 focus:border-zinc-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
        </div>

        <!-- Filter Status Buttons -->
        <div class="flex items-center gap-1 bg-zinc-100 p-1 rounded-lg border border-zinc-200/80 shrink-0">
            @foreach (['All', 'Active', 'Disabled'] as $status)
                <button type="button" 
                        wire:click="$set('statusFilter', '{{ $status }}')" 
                        class="px-3 py-1.5 rounded-md text-xs font-medium transition-all {{ $statusFilter === $status ? 'bg-white text-zinc-900 shadow-xs border border-zinc-200' : 'text-zinc-500 hover:text-zinc-900' }}">
                    {{ $status }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- 4. CATEGORIES TABLE -->
    <div class="bg-white rounded-xl border border-zinc-200 shadow-xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50/70 text-[11px] font-semibold uppercase tracking-wider text-zinc-500">
                        <th class="py-3 px-4">Category Title</th>
                        <th class="py-3 px-4">URL Slug</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100 text-xs text-zinc-700">
                    @forelse ($this->categories as $category)
                        <tr class="hover:bg-zinc-50/80 transition-colors">
                            <td class="py-3.5 px-4 font-semibold text-zinc-900">
                                {{ $category->title }}
                            </td>
                            <td class="py-3.5 px-4 font-mono text-[11px] text-zinc-500">
                                /{{ $category->slug }}
                            </td>
                            <td class="py-3.5 px-4">
                                @if ($category->is_activate)
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                        Active
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-zinc-100 text-zinc-600 border border-zinc-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-zinc-400"></span>
                                        Disabled
                                    </span>
                                @endif
                            </td>
                            <td class="py-3.5 px-4 text-right space-x-1">
                                <!-- Edit Button -->
                                <button type="button" 
                                        wire:click="openEditModal({{ $category->id }})" 
                                        class="p-1.5 text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 rounded-md transition-colors" 
                                        title="Edit Category">
                                    <i class="ri-edit-line text-sm"></i>
                                </button>

                                <!-- Toggle Active Status Button -->
                                <button type="button" 
                                        wire:click="toggleActivate({{ $category->id }})" 
                                        class="p-1.5 {{ $category->is_activate ? 'text-amber-600 hover:bg-amber-50' : 'text-emerald-600 hover:bg-emerald-50' }} rounded-md transition-colors" 
                                        title="{{ $category->is_activate ? 'Deactivate Category' : 'Activate Category' }}">
                                    <i class="{{ $category->is_activate ? 'ri-eye-off-line' : 'ri-eye-line' }} text-sm"></i>
                                </button>

                                <!-- Delete Button -->
                                <button type="button" 
                                        wire:click="openDeleteModal({{ $category->id }})" 
                                        class="p-1.5 text-zinc-400 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors" 
                                        title="Delete Category">
                                    <i class="ri-delete-bin-line text-sm"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-12 text-center text-zinc-500">
                                <div class="max-w-xs mx-auto space-y-3">
                                    <div class="w-12 h-12 rounded-full bg-zinc-100 flex items-center justify-center mx-auto text-zinc-400">
                                        <i class="ri-folder-3-line text-2xl"></i>
                                    </div>
                                    <p class="text-xs font-medium text-zinc-900">No categories found</p>
                                    <p class="text-[11px] text-zinc-500">Get started by creating a new category for your services.</p>
                                    <button wire:click="openCreateModal" type="button" class="px-3 py-1.5 rounded-lg bg-zinc-900 text-zinc-50 text-xs font-medium hover:bg-zinc-800 transition-colors inline-flex items-center gap-1.5">
                                        <i class="ri-add-line"></i>
                                        <span>Create Category</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- 5. CREATE / EDIT MODAL -->
    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4">
            <!-- Modal Backdrop -->
            <div wire:click="closeModal" 
                 x-transition:enter="ease-out duration-200" 
                 x-transition:enter-start="opacity-0" 
                 x-transition:enter-end="opacity-100" 
                 x-transition:leave="ease-in duration-150" 
                 x-transition:leave-start="opacity-100" 
                 x-transition:leave-end="opacity-0" 
                 class="fixed inset-0 bg-zinc-950/40 backdrop-blur-xs"></div>

            <!-- Modal Content Card -->
            <div x-transition:enter="ease-out duration-200" 
                 x-transition:enter-start="opacity-0 scale-95" 
                 x-transition:enter-end="opacity-100 scale-100" 
                 x-transition:leave="ease-in duration-150" 
                 x-transition:leave-start="opacity-100 scale-100" 
                 x-transition:leave-end="opacity-0 scale-95" 
                 class="relative w-full max-w-md bg-white rounded-xl border border-zinc-200 shadow-xl overflow-hidden z-10">
                
                <!-- Modal Header -->
                <div class="px-6 py-4 border-b border-zinc-100 flex items-center justify-between">
                    <h3 class="text-sm font-semibold text-zinc-900 flex items-center gap-2">
                        <i class="{{ $isEditing ? 'ri-edit-line' : 'ri-folder-add-line' }} text-zinc-400"></i>
                        <span>{{ $isEditing ? 'Edit Category' : 'Add New Category' }}</span>
                    </h3>
                    <button wire:click="closeModal" type="button" class="text-zinc-400 hover:text-zinc-600 p-1 rounded-md hover:bg-zinc-100 transition-colors">
                        <i class="ri-close-line text-lg"></i>
                    </button>
                </div>

                <!-- Modal Body Form -->
                <form wire:submit.prevent="save" class="p-6 space-y-4">
                    <!-- Title Input -->
                    <div>
                        <label class="block text-xs font-medium text-zinc-700 mb-1">Category Title *</label>
                        <input type="text" 
                               wire:model.live="title" 
                               placeholder="e.g. Elderly Care Services" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
                        @error('title') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                    </div>

                    <!-- Slug Input -->
                    <div>
                        <label class="block text-xs font-medium text-zinc-700 mb-1">URL Slug *</label>
                        <input type="text" 
                               wire:model="slug" 
                               placeholder="elderly-care-services" 
                               class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs font-mono text-zinc-900 placeholder:text-zinc-400 transition-all">
                        @error('slug') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                    </div>

                    <!-- Active Checkbox -->
                    <div class="pt-2">
                        <label class="flex items-center gap-2.5 cursor-pointer select-none">
                            <input type="checkbox" wire:model="is_activate" class="w-4 h-4 rounded bg-white border-zinc-300 text-zinc-900 focus:ring-zinc-950">
                            <span class="text-xs font-medium text-zinc-700">Active status (Visible in platform)</span>
                        </label>
                    </div>

                    <!-- Modal Actions -->
                    <div class="pt-4 flex items-center justify-end gap-3 border-t border-zinc-100">
                        <button type="button" wire:click="closeModal" class="px-4 py-2 rounded-lg border border-zinc-200 bg-white text-zinc-700 font-medium text-xs hover:bg-zinc-100 transition-colors shadow-xs">
                            Cancel
                        </button>
                        <button type="submit" class="px-5 py-2 rounded-lg bg-zinc-900 text-zinc-50 font-medium text-xs hover:bg-zinc-800 transition-all shadow-xs flex items-center gap-1.5">
                            <i class="ri-check-line text-sm"></i>
                            <span>{{ $isEditing ? 'Update Category' : 'Create Category' }}</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    <!-- 6. DELETE CONFIRMATION MODAL -->
    @if ($showDeleteModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4">
            <div wire:click="closeDeleteModal" class="fixed inset-0 bg-zinc-950/40 backdrop-blur-xs"></div>
            <div class="relative w-full max-w-sm bg-white rounded-xl border border-zinc-200 shadow-xl overflow-hidden z-10 p-6 space-y-4">
                <div class="w-10 h-10 rounded-full bg-red-50 text-red-600 flex items-center justify-center border border-red-100">
                    <i class="ri-error-warning-line text-xl"></i>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-zinc-900">Delete Category</h3>
                    <p class="text-xs text-zinc-500 mt-1">
                        Are you sure you want to delete this category? This action cannot be undone.
                    </p>
                </div>
                <div class="flex items-center justify-end gap-2 pt-2">
                    <button type="button" wire:click="closeDeleteModal" class="px-4 py-2 rounded-lg border border-zinc-200 bg-white text-zinc-700 font-medium text-xs hover:bg-zinc-100 transition-colors shadow-xs">
                        Cancel
                    </button>
                    <button type="button" wire:click="delete" class="px-4 py-2 rounded-lg bg-red-600 text-white font-medium text-xs hover:bg-red-700 transition-all shadow-xs">
                        Delete Permanently
                    </button>
                </div>
            </div>
        </div>
    @endif

</div>

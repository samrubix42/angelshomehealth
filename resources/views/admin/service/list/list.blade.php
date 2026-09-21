<div class="space-y-6">
    
    <!-- 1. HEADER SECTION -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2 border-b border-zinc-200/80">
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-zinc-100 text-zinc-800 border border-zinc-200">
                    <i class="ri-stethoscope-line text-zinc-600"></i>
                    <span>Clinical Catalog</span>
                </span>
                <span class="text-xs text-zinc-400">• {{ count($this->services) }} Services Total</span>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900">
                Services Management
            </h1>
            <p class="text-xs text-zinc-500 max-w-2xl">
                Create, update, and manage in-home care services, skilled nursing programs, and patient therapy offerings.
            </p>
        </div>

        <a href="/admin/services/create" class="inline-flex items-center justify-center gap-2 bg-zinc-900 hover:bg-zinc-800 text-zinc-50 font-medium px-4 py-2 rounded-lg text-xs transition-all shadow-xs shrink-0">
            <i class="ri-add-line text-sm"></i>
            <span>Add New Service</span>
        </a>
    </div>

    <!-- 3. SEARCH & STATUS FILTER BAR -->
    <div class="bg-white p-4 rounded-xl border border-zinc-200 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-4">
        
        <!-- Search Input -->
        <div class="relative w-full sm:w-80">
            <i class="ri-search-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
            <input type="text" 
                   wire:model.live="search" 
                   placeholder="Search services by title or description..." 
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

    <!-- 4. SERVICES TABLE / LIST -->
    <div class="bg-white rounded-xl border border-zinc-200 shadow-xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-zinc-200 text-xs font-medium text-zinc-500 bg-zinc-50/50">
                        <th class="py-3 px-4">Service Details</th>
                        <th class="py-3 px-4">URL Slug</th>
                        <th class="py-3 px-4">SEO Metadata</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100 text-xs">
                    @forelse($this->services as $service)
                        <tr class="hover:bg-zinc-50/70 transition-colors">
                            <td class="py-4 px-4 max-w-sm">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-zinc-100 text-zinc-800 font-semibold text-base flex items-center justify-center border border-zinc-200 shrink-0 mt-0.5">
                                        <i class="ri-stethoscope-line text-zinc-700"></i>
                                    </div>
                                    <div class="space-y-0.5">
                                        <h3 class="font-semibold text-sm text-zinc-900 leading-tight">
                                            {{ $service->title }}
                                        </h3>
                                        <p class="text-[11px] text-zinc-500 line-clamp-2 leading-relaxed">
                                            {{ $service->short_description }}
                                        </p>
                                    </div>
                                </div>
                            </td>

                            <td class="py-4 px-4 text-zinc-600 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 font-mono text-[11px] bg-zinc-100 text-zinc-800 px-2 py-0.5 rounded border border-zinc-200">
                                    /services/{{ $service->slug }}
                                </span>
                            </td>

                            <td class="py-4 px-4 text-zinc-500 whitespace-nowrap text-[11px]">
                                @if($service->meta_title)
                                    <span class="text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200 font-medium inline-flex items-center gap-1">
                                        <i class="ri-check-line"></i> Configured
                                    </span>
                                @else
                                    <span class="text-zinc-400 font-normal">Default</span>
                                @endif
                            </td>

                            <td class="py-4 px-4 whitespace-nowrap">
                                <button wire:click="toggleActive({{ $service->id }})" type="button" class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-medium border transition-colors shrink-0 {{ $service->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-zinc-100 text-zinc-500 border-zinc-200' }}" title="Click to toggle status">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $service->is_active ? 'bg-emerald-500' : 'bg-zinc-400' }}"></span>
                                    <span>{{ $service->is_active ? 'Published' : 'Hidden' }}</span>
                                </button>
                            </td>

                            <td class="py-4 px-4 text-right whitespace-nowrap">
                                <div class="flex items-center justify-end gap-1.5">
                                    <a href="/services/{{ $service->slug }}" target="_blank" class="p-1.5 text-zinc-400 hover:text-zinc-700 hover:bg-zinc-100 rounded-md transition-colors" title="View Public Page">
                                        <i class="ri-external-link-line text-sm"></i>
                                    </a>

                                    <a href="/admin/services/{{ $service->id }}/edit" class="px-2.5 py-1 rounded-md bg-white border border-zinc-200 hover:bg-zinc-100 text-zinc-800 font-medium text-[11px] transition-colors shadow-xs inline-flex items-center gap-1">
                                        <i class="ri-edit-line text-zinc-400"></i>
                                        <span>Edit</span>
                                    </a>

                                    <button wire:click="openDeleteModal({{ $service->id }})" type="button" class="p-1.5 text-zinc-400 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors" title="Delete Service">
                                        <i class="ri-delete-bin-line text-sm"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-zinc-400 text-xs">
                                <div class="space-y-2">
                                    <i class="ri-stethoscope-line text-3xl text-zinc-300"></i>
                                    <p class="font-medium text-zinc-700">No Services Found</p>
                                    <p class="text-zinc-400 text-[11px]">No clinical services match your search or status filter.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
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
                    <h4 class="font-bold text-base text-zinc-900">Delete Service?</h4>
                    <p class="text-xs text-zinc-500 leading-relaxed">This action cannot be undone. Are you sure you want to remove this service from your catalog?</p>
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
<div class="space-y-6">
    
    <!-- 1. HEADER SECTION -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2 border-b border-zinc-200/80">
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-zinc-100 text-zinc-800 border border-zinc-200">
                    <i class="ri-mail-unread-line text-amber-500"></i>
                    <span>Patient Communications</span>
                </span>
                <span class="text-xs text-zinc-400">• {{ $this->totalCount }} Inquiries Recorded</span>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900">
                Contact Inquiries & Care Leads
            </h1>
            <p class="text-xs text-zinc-500 max-w-2xl">
                Review, filter, inspect, and manage consultation requests and clinical inquiries submitted through the public website.
            </p>
        </div>

        <div class="flex items-center gap-2.5 shrink-0">
            @if ($this->unreadCount > 0)
                <button wire:click="markAllAsRead" 
                        wire:loading.attr="disabled"
                        type="button" 
                        class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-zinc-50 text-zinc-700 border border-zinc-200 font-medium px-3.5 py-2 rounded-lg text-xs transition-all shadow-xs">
                    <span wire:loading.remove wire:target="markAllAsRead" class="flex items-center gap-1.5">
                        <i class="ri-check-double-line text-sm text-emerald-600"></i>
                        <span>Mark All As Read</span>
                    </span>
                    <span wire:loading wire:target="markAllAsRead" class="flex items-center gap-1.5">
                        <i class="ri-loader-4-line animate-spin text-sm"></i>
                        <span>Updating...</span>
                    </span>
                </button>
            @endif

            <button wire:click="openCreateModal" 
                    type="button" 
                    class="inline-flex items-center justify-center gap-2 bg-zinc-900 hover:bg-zinc-800 text-zinc-50 font-medium px-4 py-2 rounded-lg text-xs transition-all shadow-xs">
                <i class="ri-add-line text-sm"></i>
                <span>Add New Inquiry</span>
            </button>
        </div>
    </div>

    <!-- 2. QUICK METRIC STATS STRIP -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <!-- Metric 1: Total Leads -->
        <div class="bg-white p-4 rounded-xl border border-zinc-200 shadow-xs flex items-center justify-between">
            <div>
                <p class="text-[11px] font-medium text-zinc-500 uppercase tracking-wider">Total Inquiries</p>
                <h3 class="text-2xl font-extrabold text-zinc-900 tracking-tight mt-0.5">{{ $this->totalCount }}</h3>
            </div>
            <div class="w-10 h-10 rounded-lg bg-zinc-100 text-zinc-700 flex items-center justify-center text-lg border border-zinc-200">
                <i class="ri-inbox-archive-line"></i>
            </div>
        </div>

        <!-- Metric 2: Unread Leads -->
        <div class="bg-white p-4 rounded-xl border border-zinc-200 shadow-xs flex items-center justify-between">
            <div>
                <p class="text-[11px] font-medium text-amber-600 uppercase tracking-wider font-semibold">Unread Inquiries</p>
                <h3 class="text-2xl font-extrabold text-amber-600 tracking-tight mt-0.5">{{ $this->unreadCount }}</h3>
            </div>
            <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center text-lg border border-amber-200">
                <i class="ri-mail-unread-fill"></i>
            </div>
        </div>

        <!-- Metric 3: Read / Processed Leads -->
        <div class="bg-white p-4 rounded-xl border border-zinc-200 shadow-xs flex items-center justify-between">
            <div>
                <p class="text-[11px] font-medium text-emerald-600 uppercase tracking-wider font-semibold">Processed / Read</p>
                <h3 class="text-2xl font-extrabold text-emerald-700 tracking-tight mt-0.5">{{ $this->readCount }}</h3>
            </div>
            <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg border border-emerald-200">
                <i class="ri-mail-check-line"></i>
            </div>
        </div>
    </div>

    <!-- 3. SEARCH & STATUS FILTER BAR -->
    <div class="bg-white p-3.5 rounded-xl border border-zinc-200 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-4">
        
        <!-- Search Input -->
        <div class="relative w-full sm:w-96">
            <i class="ri-search-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
            <input type="text" 
                   wire:model.live.debounce.300ms="search" 
                   placeholder="Search by patient name, phone, email, service..." 
                   class="w-full bg-zinc-50/50 border border-zinc-200 focus:border-zinc-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-4 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all">
        </div>

        <!-- Filter Buttons -->
        <div class="flex items-center gap-1.5 w-full sm:w-auto overflow-x-auto">
            @foreach(['All', 'Unread', 'Read'] as $filter)
                <button type="button" 
                        wire:click="$set('statusFilter', '{{ $filter }}')"
                        class="px-3.5 py-1.5 rounded-lg text-xs font-medium transition-all whitespace-nowrap {{ $statusFilter === $filter ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'bg-zinc-100 text-zinc-600 hover:bg-zinc-200/70' }}">
                    {{ $filter }}
                    @if ($filter === 'Unread' && $this->unreadCount > 0)
                        <span class="ml-1 px-1.5 py-0.2 rounded-full text-[10px] bg-amber-500 text-black font-bold">
                            {{ $this->unreadCount }}
                        </span>
                    @endif
                </button>
            @endforeach
        </div>
    </div>

    <!-- 4. INQUIRIES DATA TABLE (WITH LOADING OVERLAY) -->
    <div class="bg-white rounded-xl border border-zinc-200 shadow-xs overflow-hidden relative min-h-[300px]">
        
        <!-- Livewire Loading Overlay -->
        <div wire:loading.flex 
             wire:target="search, statusFilter, toggleRead, markAllAsRead, deleteContact" 
             class="absolute inset-0 bg-white/70 backdrop-blur-xs z-30 items-center justify-center">
            <div class="inline-flex items-center gap-2 bg-zinc-900 text-zinc-100 px-4 py-2 rounded-xl text-xs shadow-lg font-medium">
                <i class="ri-loader-4-line animate-spin text-amber-400 text-base"></i>
                <span>Refreshing inquiries...</span>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50/70 text-[11px] font-semibold uppercase tracking-wider text-zinc-500">
                        <th class="py-3 px-4 w-12 text-center">Status</th>
                        <th class="py-3 px-4">Patient / Contact</th>
                        <th class="py-3 px-4">Requested Service</th>
                        <th class="py-3 px-4">Notes / Preview</th>
                        <th class="py-3 px-4">Date Received</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100 text-xs text-zinc-700">
                    @forelse ($this->contacts as $contact)
                        <tr class="hover:bg-zinc-50/80 transition-colors {{ !$contact->is_read ? 'bg-amber-50/30 font-medium' : '' }}">
                            
                            <!-- Read / Unread Status Badge & Quick Toggle -->
                            <td class="py-3.5 px-4 text-center">
                                <button type="button" 
                                        wire:click="toggleRead({{ $contact->id }})" 
                                        class="cursor-pointer group focus:outline-none"
                                        title="{{ $contact->is_read ? 'Click to mark as Unread' : 'Click to mark as Read' }}">
                                    @if ($contact->is_read)
                                        <span class="w-7 h-7 rounded-full bg-zinc-100 group-hover:bg-zinc-200 text-zinc-400 group-hover:text-zinc-600 flex items-center justify-center transition-colors">
                                            <i class="ri-mail-check-line text-sm"></i>
                                        </span>
                                    @else
                                        <span class="w-7 h-7 rounded-full bg-amber-100 group-hover:bg-amber-200 text-amber-600 flex items-center justify-center transition-colors shadow-xs">
                                            <i class="ri-mail-unread-fill text-sm"></i>
                                        </span>
                                    @endif
                                </button>
                            </td>

                            <!-- Contact Name, Email, Phone -->
                            <td class="py-3.5 px-4">
                                <div class="space-y-0.5">
                                    <div class="flex items-center gap-2">
                                        <span class="font-bold text-zinc-900 {{ !$contact->is_read ? 'text-zinc-950 font-extrabold' : '' }}">
                                            {{ $contact->name }}
                                        </span>
                                        @if (!$contact->is_read)
                                            <span class="px-1.5 py-0.5 text-[9px] font-extrabold uppercase tracking-wider rounded bg-amber-500 text-black">
                                                New
                                            </span>
                                        @endif
                                    </div>
                                    <div class="flex items-center gap-3 text-[11px] text-zinc-500">
                                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $contact->phone) }}" class="hover:text-amber-600 transition-colors flex items-center gap-1 font-mono">
                                            <i class="ri-phone-line text-xs"></i>
                                            <span>{{ $contact->phone }}</span>
                                        </a>
                                        <span>•</span>
                                        <a href="mailto:{{ $contact->email }}" class="hover:text-amber-600 transition-colors flex items-center gap-1">
                                            <i class="ri-mail-line text-xs"></i>
                                            <span class="truncate max-w-[150px]">{{ $contact->email }}</span>
                                        </a>
                                    </div>
                                </div>
                            </td>

                            <!-- Service -->
                            <td class="py-3.5 px-4">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg text-[11px] font-medium bg-zinc-100 text-zinc-800 border border-zinc-200">
                                    <i class="ri-heart-pulse-line text-amber-500 text-xs"></i>
                                    <span>{{ $contact->service ?: 'General Inquiry' }}</span>
                                </span>
                            </td>

                            <!-- Notes Preview -->
                            <td class="py-3.5 px-4 max-w-xs">
                                <p class="truncate text-zinc-600 text-xs" title="{{ $contact->notes }}">
                                    {{ $contact->notes ?: '— No special notes provided —' }}
                                </p>
                            </td>

                            <!-- Received Date -->
                            <td class="py-3.5 px-4 whitespace-nowrap text-[11px] text-zinc-500">
                                <div>{{ $contact->created_at->format('M d, Y') }}</div>
                                <div class="text-[10px] text-zinc-400">{{ $contact->created_at->diffForHumans() }}</div>
                            </td>

                            <!-- Actions -->
                            <td class="py-3.5 px-4 text-right space-x-1 whitespace-nowrap">
                                
                                <!-- View Details -->
                                <button type="button" 
                                        wire:click="viewDetails({{ $contact->id }})" 
                                        class="p-1.5 text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 rounded-md transition-colors" 
                                        title="View Full Inquiry">
                                    <i class="ri-eye-line text-sm"></i>
                                </button>

                                <!-- Edit Button -->
                                <button type="button" 
                                        wire:click="openEditModal({{ $contact->id }})" 
                                        class="p-1.5 text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 rounded-md transition-colors" 
                                        title="Edit Inquiry">
                                    <i class="ri-edit-line text-sm"></i>
                                </button>

                                <!-- Direct WhatsApp Reply if callable -->
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->phone) }}?text={{ urlencode('Hello '.$contact->name.', this is Angels Home Health following up regarding your care consultation inquiry.') }}" 
                                   target="_blank" 
                                   rel="noopener noreferrer" 
                                   class="inline-block p-1.5 text-emerald-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-md transition-colors" 
                                   title="Reply via WhatsApp">
                                    <i class="ri-whatsapp-line text-sm"></i>
                                </a>

                                <!-- Delete -->
                                <button type="button" 
                                        wire:click="confirmDelete({{ $contact->id }})" 
                                        class="p-1.5 text-zinc-400 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors" 
                                        title="Delete Inquiry">
                                    <i class="ri-delete-bin-line text-sm"></i>
                                </button>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-zinc-500">
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <div class="w-12 h-12 rounded-full bg-zinc-100 text-zinc-400 flex items-center justify-center text-2xl">
                                        <i class="ri-inbox-line"></i>
                                    </div>
                                    <p class="text-sm font-medium text-zinc-700">No contact inquiries found</p>
                                    <p class="text-xs text-zinc-400">Try adjusting your search criteria or filter options.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination Bar -->
        @if ($this->contacts->hasPages())
            <div class="p-4 border-t border-zinc-100 bg-zinc-50/50">
                {{ $this->contacts->links() }}
            </div>
        @endif

    </div>

    <!-- 5. INQUIRY DETAIL MODAL (Z-[100]) -->
    @if ($isDetailModalOpen && $this->selectedContact)
        <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-zinc-950/60 backdrop-blur-xs overflow-y-auto">
            <div class="bg-white rounded-2xl border border-zinc-200 shadow-2xl w-full max-w-xl overflow-hidden my-8 transform transition-all"
                 @click.away="$wire.closeDetailModal()">
                
                <!-- Modal Header -->
                <div class="px-6 py-4 border-b border-zinc-100 bg-zinc-50/50 flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 rounded-xl bg-zinc-900 text-white flex items-center justify-center text-base shadow-xs">
                            <i class="ri-user-heart-line text-amber-400"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-base text-zinc-900">Inquiry Details</h3>
                            <p class="text-[11px] text-zinc-500">Received {{ $this->selectedContact->created_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                    <button type="button" 
                            wire:click="closeDetailModal" 
                            class="text-zinc-400 hover:text-zinc-700 p-1.5 rounded-lg hover:bg-zinc-100 transition-colors">
                        <i class="ri-close-line text-xl"></i>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="p-6 space-y-5 text-xs text-zinc-700">
                    
                    <!-- Patient Basic Info Strip -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-zinc-50 p-4 rounded-xl border border-zinc-100">
                        <div>
                            <span class="text-[10px] font-semibold text-zinc-400 uppercase tracking-wider block">Patient Full Name</span>
                            <span class="text-sm font-bold text-zinc-900 block mt-0.5">{{ $this->selectedContact->name }}</span>
                        </div>
                        <div>
                            <span class="text-[10px] font-semibold text-zinc-400 uppercase tracking-wider block">Service Requested</span>
                            <span class="text-xs font-semibold text-amber-600 block mt-0.5">{{ $this->selectedContact->service ?: 'General Care Inquiry' }}</span>
                        </div>
                        <div>
                            <span class="text-[10px] font-semibold text-zinc-400 uppercase tracking-wider block">Phone Number</span>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $this->selectedContact->phone) }}" class="text-xs font-mono font-bold text-zinc-900 hover:text-amber-600 transition-colors block mt-0.5">
                                {{ $this->selectedContact->phone }}
                            </a>
                        </div>
                        <div>
                            <span class="text-[10px] font-semibold text-zinc-400 uppercase tracking-wider block">Email Address</span>
                            <a href="mailto:{{ $this->selectedContact->email }}" class="text-xs font-medium text-zinc-900 hover:text-amber-600 transition-colors block mt-0.5">
                                {{ $this->selectedContact->email }}
                            </a>
                        </div>
                    </div>

                    <!-- Clinical / Patient Notes -->
                    <div class="space-y-1.5">
                        <span class="text-[11px] font-bold text-zinc-800 uppercase tracking-wider block">Patient Care Notes & Details</span>
                        <div class="p-4 rounded-xl bg-white border border-zinc-200 text-xs text-zinc-800 leading-relaxed min-h-[100px] whitespace-pre-line">
                            {{ $this->selectedContact->notes ?: 'No additional patient details provided.' }}
                        </div>
                    </div>

                    <!-- Direct Quick Communication Bar -->
                    <div class="pt-2 flex flex-wrap items-center gap-2">
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $this->selectedContact->phone) }}" 
                           class="inline-flex items-center gap-1.5 bg-zinc-900 hover:bg-zinc-800 text-zinc-50 font-medium px-4 py-2 rounded-lg text-xs transition-all shadow-xs">
                            <i class="ri-phone-fill text-amber-400"></i>
                            <span>Call Patient</span>
                        </a>

                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $this->selectedContact->phone) }}?text={{ urlencode('Hello '.$this->selectedContact->name.', this is Angels Home Health following up regarding your care consultation inquiry.') }}" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="inline-flex items-center gap-1.5 bg-emerald-600 hover:bg-emerald-500 text-white font-medium px-4 py-2 rounded-lg text-xs transition-all shadow-xs">
                            <i class="ri-whatsapp-line"></i>
                            <span>Chat on WhatsApp</span>
                        </a>

                        <a href="mailto:{{ $this->selectedContact->email }}?subject={{ urlencode('Angels Home Health Care Consultation Follow-up') }}" 
                           class="inline-flex items-center gap-1.5 bg-white hover:bg-zinc-50 text-zinc-800 border border-zinc-200 font-medium px-4 py-2 rounded-lg text-xs transition-all shadow-xs">
                            <i class="ri-mail-line"></i>
                            <span>Send Email</span>
                        </a>

                        <button type="button" 
                                wire:click="toggleRead({{ $this->selectedContact->id }})" 
                                class="inline-flex items-center gap-1.5 px-3 py-2 rounded-lg text-xs font-medium border transition-all {{ $this->selectedContact->is_read ? 'border-zinc-200 text-zinc-600 hover:bg-zinc-50' : 'border-amber-300 bg-amber-50 text-amber-800' }}">
                            <i class="{{ $this->selectedContact->is_read ? 'ri-mail-line' : 'ri-mail-check-line' }}"></i>
                            <span>{{ $this->selectedContact->is_read ? 'Mark as Unread' : 'Mark as Read' }}</span>
                        </button>
                    </div>

                </div>

                <!-- Modal Footer -->
                <div class="px-6 py-3.5 border-t border-zinc-100 bg-zinc-50/50 flex items-center justify-between">
                    <button type="button" 
                            wire:click="confirmDelete({{ $this->selectedContact->id }})" 
                            class="text-xs text-red-600 hover:text-red-700 font-medium flex items-center gap-1 p-1">
                        <i class="ri-delete-bin-line"></i>
                        <span>Delete Inquiry</span>
                    </button>

                    <button type="button" 
                            wire:click="closeDetailModal" 
                            class="bg-zinc-100 hover:bg-zinc-200 text-zinc-700 px-4 py-2 rounded-lg text-xs font-medium transition-colors">
                        Close
                    </button>
                </div>

            </div>
        </div>
    @endif

    <!-- 6. CREATE / EDIT INQUIRY MODAL (Z-[100]) -->
    @if ($isFormModalOpen)
        <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-zinc-950/60 backdrop-blur-xs overflow-y-auto">
            <div class="bg-white rounded-2xl border border-zinc-200 shadow-2xl w-full max-w-lg overflow-hidden my-8 transform transition-all"
                 @click.away="$wire.closeFormModal()">
                
                <!-- Modal Header -->
                <div class="px-6 py-4 border-b border-zinc-100 bg-zinc-50/50 flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white flex items-center justify-center text-sm shadow-xs">
                            <i class="ri-edit-2-line text-amber-400"></i>
                        </div>
                        <h3 class="font-bold text-sm text-zinc-900">
                            {{ $isEditMode ? 'Edit Contact Inquiry' : 'Add New Contact Inquiry' }}
                        </h3>
                    </div>
                    <button type="button" 
                            wire:click="closeFormModal" 
                            class="text-zinc-400 hover:text-zinc-700 p-1.5 rounded-lg hover:bg-zinc-100 transition-colors">
                        <i class="ri-close-line text-lg"></i>
                    </button>
                </div>

                <!-- Form -->
                <form wire:submit.prevent="saveContact">
                    <div class="p-6 space-y-4">
                        
                        <!-- Name -->
                        <div>
                            <label class="block text-xs font-semibold text-zinc-700 mb-1">Patient / Contact Name *</label>
                            <input type="text" 
                                   wire:model="name" 
                                   placeholder="Full Name (e.g. John Doe)" 
                                   class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 transition-all">
                            @error('name') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>

                        <!-- Phone & Email Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-zinc-700 mb-1">Phone Number *</label>
                                <input type="tel" 
                                       wire:model="phone" 
                                       placeholder="+1 (352) 000-0000" 
                                       class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 transition-all">
                                @error('phone') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-zinc-700 mb-1">Email Address *</label>
                                <input type="email" 
                                       wire:model="email" 
                                       placeholder="contact@example.com" 
                                       class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 transition-all">
                                @error('email') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <!-- Service -->
                        <div>
                            <label class="block text-xs font-semibold text-zinc-700 mb-1">Service Required</label>
                            <input type="text" 
                                   wire:model="service" 
                                   placeholder="e.g. Skilled Nursing & Rehabilitation" 
                                   class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg px-3 py-2 text-xs text-zinc-900 transition-all">
                            @error('service') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>

                        <!-- Notes -->
                        <div>
                            <label class="block text-xs font-semibold text-zinc-700 mb-1">Care Details / Clinical Notes</label>
                            <textarea wire:model="notes" 
                                      rows="3" 
                                      placeholder="Special care requirements, diagnosis, schedule preferences..." 
                                      class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg p-3 text-xs text-zinc-900 transition-all"></textarea>
                            @error('notes') <span class="text-[11px] text-red-500 mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>

                        <!-- is_read boolean checkbox toggle -->
                        <div class="flex items-center gap-2 pt-1">
                            <input type="checkbox" 
                                   id="is_read" 
                                   wire:model="is_read" 
                                   class="rounded border-zinc-300 text-zinc-900 focus:ring-zinc-950/10 h-4 w-4">
                            <label for="is_read" class="text-xs text-zinc-700 font-medium select-none cursor-pointer">
                                Mark as Read / Processed
                            </label>
                        </div>

                    </div>

                    <!-- Modal Actions -->
                    <div class="px-6 py-3.5 border-t border-zinc-100 bg-zinc-50/50 flex items-center justify-end gap-2.5">
                        <button type="button" 
                                wire:click="closeFormModal" 
                                class="bg-white border border-zinc-200 hover:bg-zinc-50 text-zinc-700 px-4 py-2 rounded-lg text-xs font-medium transition-colors">
                            Cancel
                        </button>
                        <button type="submit" 
                                wire:loading.attr="disabled"
                                class="bg-zinc-900 hover:bg-zinc-800 text-zinc-50 px-5 py-2 rounded-lg text-xs font-semibold transition-all shadow-xs flex items-center gap-1.5">
                            <span wire:loading.remove wire:target="saveContact" class="flex items-center gap-1.5">
                                <i class="ri-check-line text-sm"></i>
                                <span>{{ $isEditMode ? 'Update Inquiry' : 'Create Inquiry' }}</span>
                            </span>
                            <span wire:loading wire:target="saveContact" class="flex items-center gap-1.5">
                                <i class="ri-loader-4-line animate-spin text-sm"></i>
                                <span>Saving...</span>
                            </span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    @endif

    <!-- 7. DELETE CONFIRMATION MODAL (Z-[100]) -->
    @if ($isDeleteModalOpen)
        <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-zinc-950/60 backdrop-blur-xs">
            <div class="bg-white rounded-2xl border border-zinc-200 shadow-2xl w-full max-w-sm overflow-hidden transform transition-all"
                 @click.away="$wire.closeDeleteModal()">
                <div class="p-6 text-center space-y-4">
                    <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center mx-auto text-2xl">
                        <i class="ri-delete-bin-line"></i>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-bold text-base text-zinc-900">Delete Inquiry Record?</h3>
                        <p class="text-xs text-zinc-500">
                            Are you sure you want to permanently delete this contact inquiry? This action cannot be reversed.
                        </p>
                    </div>
                    <div class="flex items-center justify-center gap-3 pt-2">
                        <button type="button" 
                                wire:click="closeDeleteModal" 
                                class="bg-zinc-100 hover:bg-zinc-200 text-zinc-700 px-4 py-2 rounded-lg text-xs font-medium transition-colors">
                            Cancel
                        </button>
                        <button type="button" 
                                wire:click="deleteContact" 
                                wire:loading.attr="disabled"
                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-xs font-medium transition-colors shadow-xs">
                            <span wire:loading.remove wire:target="deleteContact">Yes, Delete</span>
                            <span wire:loading wire:target="deleteContact" class="flex items-center gap-1">
                                <i class="ri-loader-4-line animate-spin text-xs"></i>
                                <span>Deleting...</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
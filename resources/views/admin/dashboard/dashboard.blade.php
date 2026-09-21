<div class="space-y-8">
    
    <!-- 1. PAGE HEADER -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2 border-b border-zinc-200/80">
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-zinc-100 text-zinc-800 border border-zinc-200">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    <span>Admin Dashboard</span>
                </span>
                <span class="text-xs text-zinc-400">• {{ date('l, F j, Y') }}</span>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900">
                Welcome back, Administrator
            </h1>
            <p class="text-xs text-zinc-500 max-w-2xl">
                Angels Home Health of Florida patient inquiry tracking, clinical care coordination, and operations portal.
            </p>
        </div>

        <div class="flex items-center gap-2 shrink-0">
            <a href="/services" target="_blank" class="inline-flex items-center gap-2 bg-white hover:bg-zinc-100 text-zinc-900 border border-zinc-200 font-medium px-4 py-2 rounded-lg text-xs transition-all shadow-xs">
                <i class="ri-stethoscope-line text-zinc-500"></i>
                <span>View Services</span>
            </a>
            <a href="/contact" target="_blank" class="inline-flex items-center gap-2 bg-zinc-900 hover:bg-zinc-800 text-zinc-50 font-medium px-4 py-2 rounded-lg text-xs transition-all shadow-xs">
                <i class="ri-add-line text-sm"></i>
                <span>New Inquiry</span>
            </a>
        </div>
    </div>

    <!-- 2. METRIC SUMMARY CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Metric 1 -->
        <div class="bg-white p-5 rounded-xl border border-zinc-200 shadow-xs space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Total Inquiries</span>
                <div class="w-9 h-9 rounded-lg bg-zinc-100 text-zinc-700 flex items-center justify-center font-semibold text-base border border-zinc-200">
                    <i class="ri-inbox-archive-line"></i>
                </div>
            </div>
            <div>
                <p class="text-2xl font-bold tracking-tight text-zinc-900">128</p>
                <div class="flex items-center gap-1 text-xs text-emerald-600 font-medium pt-1">
                    <i class="ri-arrow-up-line"></i>
                    <span>+14.2% from last month</span>
                </div>
            </div>
        </div>

        <!-- Metric 2 -->
        <div class="bg-white p-5 rounded-xl border border-zinc-200 shadow-xs space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Active Patient Cases</span>
                <div class="w-9 h-9 rounded-lg bg-zinc-100 text-zinc-700 flex items-center justify-center font-semibold text-base border border-zinc-200">
                    <i class="ri-heart-pulse-line"></i>
                </div>
            </div>
            <div>
                <p class="text-2xl font-bold tracking-tight text-zinc-900">42</p>
                <div class="flex items-center gap-1 text-xs text-zinc-500 pt-1">
                    <i class="ri-user-heart-line text-zinc-600"></i>
                    <span>RN & Therapy Supervised</span>
                </div>
            </div>
        </div>

        <!-- Metric 3 -->
        <div class="bg-white p-5 rounded-xl border border-zinc-200 shadow-xs space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Published Articles</span>
                <div class="w-9 h-9 rounded-lg bg-zinc-100 text-zinc-700 flex items-center justify-center font-semibold text-base border border-zinc-200">
                    <i class="ri-article-line"></i>
                </div>
            </div>
            <div>
                <p class="text-2xl font-bold tracking-tight text-zinc-900">18</p>
                <div class="flex items-center gap-1 text-xs text-zinc-500 font-medium pt-1">
                    <i class="ri-check-double-line text-zinc-600"></i>
                    <span>TinyMCE Compatible</span>
                </div>
            </div>
        </div>

        <!-- Metric 4 -->
        <div class="bg-white p-5 rounded-xl border border-zinc-200 shadow-xs space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Licensed Staff</span>
                <div class="w-9 h-9 rounded-lg bg-zinc-100 text-zinc-700 flex items-center justify-center font-semibold text-base border border-zinc-200">
                    <i class="ri-nurse-line"></i>
                </div>
            </div>
            <div>
                <p class="text-2xl font-bold tracking-tight text-zinc-900">24</p>
                <div class="flex items-center gap-1 text-xs text-zinc-500 pt-1">
                    <i class="ri-shield-star-line text-zinc-600"></i>
                    <span>ACHC Accredited</span>
                </div>
            </div>
        </div>

    </div>

    <!-- 3. MAIN CONTENT: CONSULTATIONS & SIDEBAR WIDGETS -->
    <div class="grid lg:grid-cols-12 gap-6 items-start">
        
        <!-- CONSULTATIONS TABLE -->
        <div class="lg:col-span-8 bg-white rounded-xl border border-zinc-200 shadow-xs p-6 space-y-6">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-zinc-100 pb-4">
                <div>
                    <h3 class="text-base font-semibold text-zinc-900 flex items-center gap-2">
                        <i class="ri-history-line text-zinc-500"></i>
                        <span>In-Home Care Consultations</span>
                    </h3>
                    <p class="text-xs text-zinc-500">Manage incoming patient assessment requests and care leads.</p>
                </div>

                <div class="flex items-center gap-1 overflow-x-auto py-1">
                    @foreach(['All', 'New', 'Contacted', 'Scheduled', 'Completed'] as $filter)
                        <button type="button" 
                                wire:click="$set('statusFilter', '{{ $filter }}')"
                                class="px-3 py-1 rounded-md text-xs font-medium transition-colors whitespace-nowrap {{ $statusFilter === $filter ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'bg-zinc-100 text-zinc-600 hover:bg-zinc-200/70' }}">
                            {{ $filter }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-zinc-200 text-xs font-medium text-zinc-500 bg-zinc-50/50">
                            <th class="py-2.5 px-3 rounded-l-lg">Patient</th>
                            <th class="py-2.5 px-3">Requested Service</th>
                            <th class="py-2.5 px-3">Date</th>
                            <th class="py-2.5 px-3">Status</th>
                            <th class="py-2.5 px-3 text-right rounded-r-lg">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-100 text-xs">
                        @forelse($this->filteredInquiries as $inquiry)
                            <tr class="hover:bg-zinc-50/70 transition-colors">
                                <td class="py-3 px-3">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-full bg-zinc-100 text-zinc-800 font-semibold text-xs flex items-center justify-center border border-zinc-200 shrink-0">
                                            {{ substr($inquiry['name'], 0, 1) }}
                                        </div>
                                        <div>
                                            <p class="font-medium text-zinc-900">{{ $inquiry['name'] }}</p>
                                            <p class="text-[11px] text-zinc-500">{{ $inquiry['phone'] }}</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="py-3 px-3 text-zinc-700">
                                    <span class="inline-block bg-zinc-100 border border-zinc-200 px-2 py-0.5 rounded text-[11px] font-medium text-zinc-800">
                                        {{ $inquiry['service'] }}
                                    </span>
                                </td>

                                <td class="py-3 px-3 text-zinc-500 text-[11px] whitespace-nowrap">
                                    {{ $inquiry['date'] }}
                                </td>

                                <td class="py-3 px-3 whitespace-nowrap">
                                    @if($inquiry['status'] === 'New')
                                        <span class="bg-amber-50 text-amber-800 border border-amber-200 px-2.5 py-0.5 rounded-full text-[11px] font-medium inline-flex items-center gap-1.5">
                                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                            <span>New Inquiry</span>
                                        </span>
                                    @elseif($inquiry['status'] === 'Contacted')
                                        <span class="bg-blue-50 text-blue-800 border border-blue-200 px-2.5 py-0.5 rounded-full text-[11px] font-medium inline-flex items-center gap-1.5">
                                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                            <span>Contacted</span>
                                        </span>
                                    @elseif($inquiry['status'] === 'Scheduled')
                                        <span class="bg-purple-50 text-purple-800 border border-purple-200 px-2.5 py-0.5 rounded-full text-[11px] font-medium inline-flex items-center gap-1.5">
                                            <span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>
                                            <span>Scheduled</span>
                                        </span>
                                    @else
                                        <span class="bg-emerald-50 text-emerald-800 border border-emerald-200 px-2.5 py-0.5 rounded-full text-[11px] font-medium inline-flex items-center gap-1.5">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                            <span>Completed</span>
                                        </span>
                                    @endif
                                </td>

                                <td class="py-3 px-3 text-right whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-1.5">
                                        @if($inquiry['status'] === 'New')
                                            <button wire:click="updateStatus({{ $inquiry['id'] }}, 'Contacted')" type="button" class="px-2.5 py-1 rounded-md bg-white border border-zinc-200 hover:bg-zinc-100 text-zinc-800 text-[11px] font-medium transition-colors shadow-xs">
                                                Mark Contacted
                                            </button>
                                        @elseif($inquiry['status'] === 'Contacted')
                                            <button wire:click="updateStatus({{ $inquiry['id'] }}, 'Scheduled')" type="button" class="px-2.5 py-1 rounded-md bg-white border border-zinc-200 hover:bg-zinc-100 text-zinc-800 text-[11px] font-medium transition-colors shadow-xs">
                                                Schedule Visit
                                            </button>
                                        @else
                                            <button wire:click="updateStatus({{ $inquiry['id'] }}, 'Completed')" type="button" class="px-2.5 py-1 rounded-md bg-white border border-zinc-200 hover:bg-zinc-100 text-zinc-800 text-[11px] font-medium transition-colors shadow-xs">
                                                Complete
                                            </button>
                                        @endif

                                        <button wire:click="deleteInquiry({{ $inquiry['id'] }})" type="button" class="p-1 text-zinc-400 hover:text-red-600 rounded transition-colors" title="Delete Inquiry">
                                            <i class="ri-delete-bin-line text-sm"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-zinc-400 text-xs">
                                    No patient inquiries matching your filter criteria.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- SIDEBAR WIDGETS -->
        <div class="lg:col-span-4 space-y-6">
            
            <!-- Service Demand Breakdown -->
            <div class="bg-white p-5 rounded-xl border border-zinc-200 shadow-xs space-y-4">
                <h4 class="text-sm font-semibold text-zinc-900 border-b border-zinc-100 pb-3 flex items-center justify-between">
                    <span>Service Demand</span>
                    <i class="ri-pie-chart-line text-zinc-400"></i>
                </h4>

                <div class="space-y-3 text-xs">
                    <div>
                        <div class="flex justify-between font-medium text-zinc-700 mb-1">
                            <span>Skilled Nursing & Rehab</span>
                            <span class="text-zinc-900 font-semibold">45%</span>
                        </div>
                        <div class="w-full bg-zinc-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-zinc-900 h-full rounded-full w-[45%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between font-medium text-zinc-700 mb-1">
                            <span>Physical & Occupational Therapy</span>
                            <span class="text-zinc-900 font-semibold">30%</span>
                        </div>
                        <div class="w-full bg-zinc-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-zinc-700 h-full rounded-full w-[30%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between font-medium text-zinc-700 mb-1">
                            <span>Memory Care & Alzheimer's</span>
                            <span class="text-zinc-900 font-semibold">15%</span>
                        </div>
                        <div class="w-full bg-zinc-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-zinc-500 h-full rounded-full w-[15%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between font-medium text-zinc-700 mb-1">
                            <span>Chronic Disease Management</span>
                            <span class="text-zinc-900 font-semibold">10%</span>
                        </div>
                        <div class="w-full bg-zinc-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-zinc-400 h-full rounded-full w-[10%]"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Feed -->
            <div class="bg-white p-5 rounded-xl border border-zinc-200 shadow-xs space-y-4">
                <h4 class="text-sm font-semibold text-zinc-900 border-b border-zinc-100 pb-3 flex items-center justify-between">
                    <span>Clinical Activity Feed</span>
                    <i class="ri-pulse-line text-zinc-400"></i>
                </h4>

                <div class="space-y-3.5 text-xs">
                    <div class="flex items-start gap-2.5">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-700 flex items-center justify-center font-medium shrink-0 mt-0.5 border border-emerald-200">
                            <i class="ri-check-line text-xs"></i>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-900">RN Visit Scheduled</p>
                            <p class="text-zinc-500 text-[11px]">Senior RN assigned to Eleanor Vance for post-op care.</p>
                            <span class="text-[10px] text-zinc-400 font-mono">15 mins ago</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-2.5">
                        <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-700 flex items-center justify-center font-medium shrink-0 mt-0.5 border border-blue-200">
                            <i class="ri-article-line text-xs"></i>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-900">TinyMCE Article Published</p>
                            <p class="text-zinc-500 text-[11px]">"5 Benefits of In-Home Skilled Nursing" published to blog.</p>
                            <span class="text-[10px] text-zinc-400 font-mono">2 hours ago</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-2.5">
                        <div class="w-6 h-6 rounded-full bg-amber-50 text-amber-700 flex items-center justify-center font-medium shrink-0 mt-0.5 border border-amber-200">
                            <i class="ri-phone-fill text-xs"></i>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-900">Patient Phone Contact</p>
                            <p class="text-zinc-500 text-[11px]">Robert Sterling contacted regarding therapy schedule.</p>
                            <span class="text-[10px] text-zinc-400 font-mono">4 hours ago</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

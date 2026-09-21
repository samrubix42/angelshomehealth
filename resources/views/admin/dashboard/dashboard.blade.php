<div class="space-y-8">
    
    <!-- 1. WELCOME HERO BANNER -->
    <div class="bg-slate-900 p-6 sm:p-8 rounded-3xl text-white shadow-lg relative overflow-hidden border border-slate-800">
        <div class="absolute right-0 top-0 w-96 h-96 bg-[#C8A14F]/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 relative z-10">
            <div class="space-y-2">
                <div class="flex items-center gap-2">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#C8A14F] bg-[#C8A14F]/10 px-3 py-1 rounded-full border border-[#C8A14F]/30 flex items-center gap-1.5">
                        <i class="ri-shield-flash-line"></i>
                        <span>Admin Command Center</span>
                    </span>
                    <span class="text-xs text-slate-400">• {{ date('l, F j, Y') }}</span>
                </div>
                <h1 class="font-heading font-extrabold text-2xl sm:text-4xl text-white tracking-tight">
                    Welcome back, <span class="text-[#C8A14F]">Administrator</span>
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 max-w-xl leading-relaxed">
                    Angels Home Health of Florida patient inquiry tracking, clinical care coordination, and operations portal.
                </p>
            </div>

            <div class="flex items-center gap-3 shrink-0">
                <a href="/services" target="_blank" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 px-4 py-2.5 rounded-xl font-heading font-bold text-xs uppercase tracking-wider transition-all flex items-center gap-1.5">
                    <i class="ri-stethoscope-line"></i>
                    <span>View Services</span>
                </a>
                <a href="/contact" target="_blank" class="bg-[#C8A14F] hover:bg-[#d8b260] text-black px-5 py-2.5 rounded-xl font-heading font-bold text-xs uppercase tracking-wider transition-all shadow-md flex items-center gap-2">
                    <i class="ri-add-line text-sm"></i>
                    <span>New Consultation</span>
                </a>
            </div>
        </div>
    </div>

    <!-- 2. METRIC SUMMARY CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        
        <!-- Metric 1 -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs hover:border-[#C8A14F]/50 transition-all space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Inquiries</span>
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-lg border border-amber-200/60">
                    <i class="ri-inbox-archive-line"></i>
                </div>
            </div>
            <div>
                <p class="font-heading font-extrabold text-3xl text-slate-900">128</p>
                <div class="flex items-center gap-1.5 text-xs text-emerald-600 font-semibold pt-1">
                    <i class="ri-arrow-up-line"></i>
                    <span>+14.2% this month</span>
                </div>
            </div>
        </div>

        <!-- Metric 2 -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs hover:border-[#C8A14F]/50 transition-all space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Active Patient Cases</span>
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-lg border border-emerald-200/60">
                    <i class="ri-heart-pulse-line"></i>
                </div>
            </div>
            <div>
                <p class="font-heading font-extrabold text-3xl text-slate-900">42</p>
                <div class="flex items-center gap-1.5 text-xs text-slate-500 pt-1">
                    <i class="ri-user-heart-line text-emerald-600"></i>
                    <span>RN & Therapy Supervised</span>
                </div>
            </div>
        </div>

        <!-- Metric 3 -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs hover:border-[#C8A14F]/50 transition-all space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Published Articles</span>
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-lg border border-blue-200/60">
                    <i class="ri-article-line"></i>
                </div>
            </div>
            <div>
                <p class="font-heading font-extrabold text-3xl text-slate-900">18</p>
                <div class="flex items-center gap-1.5 text-xs text-blue-600 font-semibold pt-1">
                    <i class="ri-check-double-line"></i>
                    <span>TinyMCE Compatible</span>
                </div>
            </div>
        </div>

        <!-- Metric 4 -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs hover:border-[#C8A14F]/50 transition-all space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Licensed Staff</span>
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold text-lg border border-purple-200/60">
                    <i class="ri-nurse-line"></i>
                </div>
            </div>
            <div>
                <p class="font-heading font-extrabold text-3xl text-slate-900">24</p>
                <div class="flex items-center gap-1.5 text-xs text-slate-500 pt-1">
                    <i class="ri-shield-star-line text-purple-600"></i>
                    <span>ACHC Accredited</span>
                </div>
            </div>
        </div>

    </div>

    <!-- 3. MAIN CONTENT: CONSULTATIONS & SIDEBAR WIDGETS -->
    <div class="grid lg:grid-cols-12 gap-8 items-start">
        
        <!-- CONSULTATIONS TABLE -->
        <div class="lg:col-span-8 bg-white rounded-3xl border border-slate-200/80 shadow-xs p-6 sm:p-7 space-y-6">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-100 pb-5">
                <div>
                    <h3 class="font-heading font-extrabold text-xl text-slate-900 flex items-center gap-2">
                        <i class="ri-history-line text-amber-600"></i>
                        <span>Recent In-Home Care Consultations</span>
                    </h3>
                    <p class="text-xs text-slate-500">Manage incoming patient assessment requests and care leads.</p>
                </div>

                <div class="flex items-center gap-1.5 overflow-x-auto py-1">
                    @foreach(['All', 'New', 'Contacted', 'Scheduled', 'Completed'] as $filter)
                        <button type="button" 
                                wire:click="$set('statusFilter', '{{ $filter }}')"
                                class="px-3 py-1.5 rounded-xl text-xs font-bold transition-colors whitespace-nowrap {{ $statusFilter === $filter ? 'bg-slate-900 text-white shadow-xs' : 'bg-slate-100 text-slate-600 hover:bg-slate-200/80' }}">
                            {{ $filter }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-200/80 text-[11px] font-bold text-slate-400 uppercase tracking-wider bg-slate-50/50">
                            <th class="py-3 px-4 rounded-l-xl">Patient Name</th>
                            <th class="py-3 px-4">Requested Service</th>
                            <th class="py-3 px-4">Date</th>
                            <th class="py-3 px-4">Status</th>
                            <th class="py-3 px-4 text-right rounded-r-xl">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-xs">
                        @forelse($this->filteredInquiries as $inquiry)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-4 px-4 font-semibold text-slate-900">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 font-bold text-xs flex items-center justify-center border border-slate-200/80 shrink-0">
                                            {{ substr($inquiry['name'], 0, 1) }}
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">{{ $inquiry['name'] }}</p>
                                            <p class="text-[11px] text-slate-500 font-normal">{{ $inquiry['phone'] }}</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="py-4 px-4 text-slate-700">
                                    <span class="inline-block bg-slate-100 border border-slate-200/80 px-2.5 py-1 rounded-lg text-[11px] font-semibold text-slate-800">
                                        {{ $inquiry['service'] }}
                                    </span>
                                </td>

                                <td class="py-4 px-4 text-slate-500 text-[11px] whitespace-nowrap">
                                    {{ $inquiry['date'] }}
                                </td>

                                <td class="py-4 px-4 whitespace-nowrap">
                                    @if($inquiry['status'] === 'New')
                                        <span class="bg-amber-50 text-amber-800 border border-amber-200/80 px-2.5 py-1 rounded-full text-[10px] font-bold inline-flex items-center gap-1">
                                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                            <span>New Inquiry</span>
                                        </span>
                                    @elseif($inquiry['status'] === 'Contacted')
                                        <span class="bg-blue-50 text-blue-800 border border-blue-200/80 px-2.5 py-1 rounded-full text-[10px] font-bold inline-flex items-center gap-1">
                                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                            <span>Contacted</span>
                                        </span>
                                    @elseif($inquiry['status'] === 'Scheduled')
                                        <span class="bg-purple-50 text-purple-800 border border-purple-200/80 px-2.5 py-1 rounded-full text-[10px] font-bold inline-flex items-center gap-1">
                                            <span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>
                                            <span>Scheduled</span>
                                        </span>
                                    @else
                                        <span class="bg-emerald-50 text-emerald-800 border border-emerald-200/80 px-2.5 py-1 rounded-full text-[10px] font-bold inline-flex items-center gap-1">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                            <span>Completed</span>
                                        </span>
                                    @endif
                                </td>

                                <td class="py-4 px-4 text-right whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-1.5">
                                        @if($inquiry['status'] === 'New')
                                            <button wire:click="updateStatus({{ $inquiry['id'] }}, 'Contacted')" type="button" class="px-2.5 py-1 rounded-lg bg-blue-50 text-blue-700 hover:bg-blue-100 text-[11px] font-semibold border border-blue-200/60 transition-colors">
                                                Mark Contacted
                                            </button>
                                        @elseif($inquiry['status'] === 'Contacted')
                                            <button wire:click="updateStatus({{ $inquiry['id'] }}, 'Scheduled')" type="button" class="px-2.5 py-1 rounded-lg bg-purple-50 text-purple-700 hover:bg-purple-100 text-[11px] font-semibold border border-purple-200/60 transition-colors">
                                                Schedule Visit
                                            </button>
                                        @else
                                            <button wire:click="updateStatus({{ $inquiry['id'] }}, 'Completed')" type="button" class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-700 hover:bg-emerald-100 text-[11px] font-semibold border border-emerald-200/60 transition-colors">
                                                Complete
                                            </button>
                                        @endif

                                        <button wire:click="deleteInquiry({{ $inquiry['id'] }})" type="button" class="p-1 text-slate-400 hover:text-red-600 rounded-lg transition-colors" title="Delete Inquiry">
                                            <i class="ri-delete-bin-line text-sm"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-slate-400 text-xs">
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
            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-xs space-y-4">
                <h4 class="font-heading font-extrabold text-base text-slate-900 border-b border-slate-100 pb-3 flex items-center justify-between">
                    <span>Service Demand Breakdown</span>
                    <i class="ri-pie-chart-line text-amber-600"></i>
                </h4>

                <div class="space-y-3.5 text-xs">
                    <div>
                        <div class="flex justify-between font-semibold text-slate-700 mb-1">
                            <span>Skilled Nursing & Rehab</span>
                            <span class="text-amber-600 font-bold">45%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-[#C8A14F] h-full rounded-full w-[45%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between font-semibold text-slate-700 mb-1">
                            <span>Physical & Occupational Therapy</span>
                            <span class="text-emerald-600 font-bold">30%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-emerald-500 h-full rounded-full w-[30%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between font-semibold text-slate-700 mb-1">
                            <span>Memory Care & Alzheimer's</span>
                            <span class="text-purple-600 font-bold">15%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-purple-500 h-full rounded-full w-[15%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between font-semibold text-slate-700 mb-1">
                            <span>Chronic Disease Management</span>
                            <span class="text-blue-600 font-bold">10%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-blue-500 h-full rounded-full w-[10%]"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Feed -->
            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-xs space-y-4">
                <h4 class="font-heading font-extrabold text-base text-slate-900 border-b border-slate-100 pb-3 flex items-center justify-between">
                    <span>Clinical Activity Feed</span>
                    <i class="ri-pulse-line text-emerald-600"></i>
                </h4>

                <div class="space-y-4 text-xs">
                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0 mt-0.5">
                            <i class="ri-check-line text-sm"></i>
                        </div>
                        <div>
                            <p class="font-bold text-slate-800">RN Visit Scheduled</p>
                            <p class="text-slate-500 text-[11px]">Senior RN assigned to Eleanor Vance for post-op care.</p>
                            <span class="text-[10px] text-slate-400">15 mins ago</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold shrink-0 mt-0.5">
                            <i class="ri-article-line text-sm"></i>
                        </div>
                        <div>
                            <p class="font-bold text-slate-800">TinyMCE Article Published</p>
                            <p class="text-slate-500 text-[11px]">"5 Benefits of In-Home Skilled Nursing" published to blog.</p>
                            <span class="text-[10px] text-slate-400">2 hours ago</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center font-bold shrink-0 mt-0.5">
                            <i class="ri-phone-fill text-sm"></i>
                        </div>
                        <div>
                            <p class="font-bold text-slate-800">Patient Phone Contact</p>
                            <p class="text-slate-500 text-[11px]">Robert Sterling contacted regarding therapy schedule.</p>
                            <span class="text-[10px] text-slate-400">4 hours ago</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<aside class="fixed top-0 left-0 bottom-0 w-64 bg-white border-r border-slate-200/80 z-50 flex flex-col justify-between transition-all duration-300 transform lg:translate-x-0"
       x-bind:class="{
           'translate-x-0': sidebarOpen,
           '-translate-x-full lg:translate-x-0': !sidebarOpen,
           'lg:w-20': sidebarCollapsed,
           'lg:w-64': !sidebarCollapsed
       }">

    <!-- BRAND LOGO HEADER -->
    <div class="h-16 px-5 border-b border-slate-200/80 flex items-center justify-between shrink-0">
        <a href="/admin" class="flex items-center gap-3 overflow-hidden group">
            <div class="w-9 h-9 rounded-xl bg-slate-900 text-[#C8A14F] font-bold text-lg flex items-center justify-center shrink-0 shadow-sm border border-slate-800 transition-transform group-hover:scale-105">
                <i class="ri-heart-pulse-fill"></i>
            </div>
            <div class="space-y-0.5 leading-none transition-opacity duration-200" x-show="!sidebarCollapsed" x-cloak>
                <span class="font-heading font-extrabold text-base text-slate-900 tracking-tight block">Angels Care</span>
                <span class="text-[10px] font-bold uppercase tracking-widest text-[#C8A14F] bg-[#C8A14F]/10 px-2 py-0.5 rounded-md inline-block border border-[#C8A14F]/20">Admin Portal</span>
            </div>
        </a>

        <!-- Mobile Close Button -->
        <button @click="sidebarOpen = false" type="button" class="lg:hidden text-slate-400 hover:text-slate-600 p-1">
            <i class="ri-close-line text-xl"></i>
        </button>
    </div>

    <!-- ONLY AVAILABLE NAVIGATION LINKS -->
    <div class="flex-1 py-6 px-3.5 space-y-6 overflow-y-auto scrollbar-none">
        
        <div class="space-y-1">
            <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2" x-show="!sidebarCollapsed" x-cloak>
                Portal Navigation
            </p>

            <!-- 1. Dashboard -->
            <a href="/admin" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-heading font-semibold text-xs transition-all {{ request()->is('admin') ? 'bg-slate-900 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100/80 hover:text-slate-900' }}">
                <i class="ri-dashboard-3-line text-base {{ request()->is('admin') ? 'text-[#C8A14F]' : 'text-slate-400' }}"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Dashboard</span>
            </a>

            <!-- 2. Services -->
            <a href="/services" target="_blank" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-heading font-semibold text-xs text-slate-600 hover:bg-slate-100/80 hover:text-slate-900 transition-all">
                <i class="ri-stethoscope-line text-base text-slate-400"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Services Overview</span>
            </a>

            <!-- 3. Blog -->
            <a href="/blog" target="_blank" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-heading font-semibold text-xs text-slate-600 hover:bg-slate-100/80 hover:text-slate-900 transition-all">
                <i class="ri-article-line text-base text-slate-400"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Blog & Insights</span>
            </a>

            <!-- 4. Contact -->
            <a href="/contact" target="_blank" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-heading font-semibold text-xs text-slate-600 hover:bg-slate-100/80 hover:text-slate-900 transition-all">
                <i class="ri-mail-send-line text-base text-slate-400"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Contact Page</span>
            </a>

            <!-- 5. Main Website -->
            <a href="/" target="_blank" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-heading font-semibold text-xs text-slate-600 hover:bg-slate-100/80 hover:text-slate-900 transition-all">
                <i class="ri-external-link-line text-base text-slate-400"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Main Website</span>
            </a>
        </div>

    </div>

    <!-- USER PROFILE & LOGOUT CARD -->
    <div class="p-3 border-t border-slate-200/80 shrink-0 space-y-2 bg-slate-50/60">
        <button @click="sidebarCollapsed = !sidebarCollapsed" type="button" class="hidden lg:flex items-center justify-center w-full py-1 text-xs text-slate-400 hover:text-slate-600 rounded-lg transition-colors">
            <i class="ri-side-bar-line text-base transition-transform" x-bind:class="sidebarCollapsed ? 'rotate-180' : ''"></i>
        </button>

        <div class="flex items-center justify-between p-2 rounded-xl bg-white border border-slate-200/80 shadow-xs" x-show="!sidebarCollapsed" x-cloak>
            <div class="flex items-center gap-2.5 min-w-0">
                <div class="w-8 h-8 rounded-lg bg-slate-900 text-[#C8A14F] font-bold text-xs flex items-center justify-center shrink-0 border border-slate-800">
                    AD
                </div>
                <div class="min-w-0 leading-tight">
                    <p class="text-xs font-bold text-slate-900 truncate">Administrator</p>
                    <p class="text-[10px] text-slate-400 truncate">admin@angelshomehealth.com</p>
                </div>
            </div>

            <button wire:click="logout" type="button" class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Log Out">
                <i class="ri-logout-box-r-line text-base"></i>
            </button>
        </div>
    </div>

</aside>
<header class="sticky top-0 z-30 bg-white/90 backdrop-blur-md border-b border-slate-200/80 h-16 px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-4">
    
    <!-- LEFT SIDE: MOBILE TOGGLE & SEARCH -->
    <div class="flex items-center gap-3 flex-1 max-w-md">
        <!-- Mobile Menu Toggle Button -->
        <button @click="sidebarOpen = true" type="button" class="lg:hidden text-slate-500 hover:text-slate-900 p-2 rounded-xl hover:bg-slate-100 transition-colors">
            <i class="ri-menu-2-line text-xl"></i>
        </button>

        <!-- Search Input -->
        <div class="relative w-full">
            <i class="ri-search-line absolute left-3.5 top-2.5 text-slate-400 text-sm"></i>
            <input type="text" 
                   wire:model.live="searchQuery" 
                   placeholder="Search records, inquiries..." 
                   class="w-full bg-slate-100/80 border border-slate-200 focus:border-[#C8A14F] focus:bg-white rounded-xl pl-9 pr-4 py-2 text-xs text-slate-800 placeholder-slate-400 focus:outline-none transition-all shadow-inner">
        </div>
    </div>

    <!-- RIGHT SIDE: PUBLIC SITE LINK & USER PROFILE DROPDOWN -->
    <div class="flex items-center gap-3">
        
        <!-- Visit Public Site -->
        <a href="/" target="_blank" class="hidden sm:inline-flex items-center gap-1.5 bg-slate-100 hover:bg-slate-200/80 text-slate-700 font-heading font-bold px-3.5 py-2 rounded-xl text-xs transition-all border border-slate-200">
            <i class="ri-external-link-line text-sm"></i>
            <span>View Website</span>
        </a>

        <!-- User Profile Dropdown -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" type="button" class="flex items-center gap-2 p-1.5 rounded-xl hover:bg-slate-100 transition-colors focus:outline-none">
                <div class="w-8 h-8 rounded-xl bg-slate-900 text-[#C8A14F] font-bold text-xs flex items-center justify-center border border-slate-800 shadow-xs">
                    AD
                </div>
                <i class="ri-arrow-down-s-line text-slate-400 text-sm transition-transform duration-200" x-bind:class="open ? 'rotate-180' : ''"></i>
            </button>

            <div x-show="open" 
                 @click.outside="open = false" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 x-cloak
                 class="absolute right-0 mt-2 w-52 bg-white rounded-2xl border border-slate-200 shadow-xl p-2 z-50 space-y-1 text-xs">
                
                <div class="px-3 py-2 border-b border-slate-100">
                    <p class="font-bold text-slate-900">Administrator</p>
                    <p class="text-[10px] text-slate-400 truncate">admin@angelshomehealth.com</p>
                </div>

                <a href="/" target="_blank" class="flex items-center gap-2 px-3 py-2 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-slate-900 transition-colors">
                    <i class="ri-home-3-line text-slate-400"></i>
                    <span>Public Website</span>
                </a>

                <div class="border-t border-slate-100 pt-1">
                    <button type="button" wire:click="logout" class="w-full flex items-center gap-2 px-3 py-2 rounded-xl text-red-600 hover:bg-red-50 transition-colors font-semibold text-left">
                        <i class="ri-logout-box-r-line text-red-500"></i>
                        <span>Log Out</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</header>
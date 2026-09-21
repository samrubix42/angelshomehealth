<header class="sticky top-0 z-30 bg-white/80 backdrop-blur-md border-b border-zinc-200 h-16 px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-4">
    
    <!-- LEFT SIDE: MOBILE TOGGLE & SEARCH -->
    <div class="flex items-center gap-3 flex-1 max-w-md">
        <!-- Mobile Menu Toggle Button -->
        <button @click="sidebarOpen = true" type="button" class="lg:hidden text-zinc-500 hover:text-zinc-900 p-2 rounded-lg hover:bg-zinc-100 transition-colors">
            <i class="ri-menu-2-line text-xl"></i>
        </button>

        <!-- Search Input -->
        <div class="relative w-full">
            <i class="ri-search-line absolute left-3 top-2.5 text-zinc-400 text-sm"></i>
            <input type="text" 
                   wire:model.live="searchQuery" 
                   placeholder="Search records, inquiries..." 
                   class="w-full bg-white border border-zinc-200 focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-950/10 rounded-lg pl-9 pr-4 py-2 text-xs text-zinc-900 placeholder:text-zinc-400 transition-all shadow-xs">
        </div>
    </div>

    <!-- RIGHT SIDE: PUBLIC SITE LINK & USER PROFILE DROPDOWN -->
    <div class="flex items-center gap-3">
        
        <!-- Visit Public Site -->
        <a href="/" target="_blank" class="hidden sm:inline-flex items-center gap-1.5 bg-white hover:bg-zinc-100 text-zinc-900 font-medium px-3.5 py-1.5 rounded-lg text-xs transition-all border border-zinc-200 shadow-xs">
            <i class="ri-external-link-line text-sm text-zinc-500"></i>
            <span>View Website</span>
        </a>

        <!-- User Profile Dropdown -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" type="button" class="flex items-center gap-2 p-1 rounded-lg hover:bg-zinc-100 transition-colors focus:outline-none">
                <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white font-semibold text-xs flex items-center justify-center border border-zinc-800 shadow-xs">
                    AD
                </div>
                <i class="ri-arrow-down-s-line text-zinc-400 text-sm transition-transform duration-200" x-bind:class="open ? 'rotate-180' : ''"></i>
            </button>

            <div x-show="open" 
                 @click.outside="open = false" 
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-100"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 x-cloak
                 class="absolute right-0 mt-2 w-56 bg-white rounded-xl border border-zinc-200 shadow-lg p-1.5 z-50 space-y-1 text-xs">
                
                <div class="px-3 py-2 border-b border-zinc-100">
                    <p class="font-semibold text-zinc-900">Administrator</p>
                    <p class="text-[11px] text-zinc-500 truncate">admin@angelshomehealth.com</p>
                </div>

                <a href="/" target="_blank" class="flex items-center gap-2 px-3 py-2 rounded-lg text-zinc-700 hover:bg-zinc-100 hover:text-zinc-900 transition-colors">
                    <i class="ri-home-3-line text-zinc-400"></i>
                    <span>Public Website</span>
                </a>

                <div class="border-t border-zinc-100 pt-1">
                    <button type="button" wire:click="logout" class="w-full flex items-center gap-2 px-3 py-2 rounded-lg text-red-600 hover:bg-red-50 transition-colors font-medium text-left">
                        <i class="ri-logout-box-r-line text-red-500"></i>
                        <span>Log Out</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</header>
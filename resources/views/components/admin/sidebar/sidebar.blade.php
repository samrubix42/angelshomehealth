<aside class="fixed top-0 left-0 bottom-0 w-64 bg-white border-r border-zinc-200 z-40 flex flex-col justify-between transition-all duration-300 transform lg:translate-x-0"
       x-bind:class="{
           'translate-x-0': sidebarOpen,
           '-translate-x-full lg:translate-x-0': !sidebarOpen,
           'lg:w-20': sidebarCollapsed,
           'lg:w-64': !sidebarCollapsed
       }">

    <!-- BRAND LOGO HEADER -->
    <div class="h-16 px-5 border-b border-zinc-200 flex items-center justify-between shrink-0">
        <a href="/admin" class="flex items-center gap-3 overflow-hidden group">
            <div class="w-9 h-9 rounded-lg bg-zinc-900 text-white font-semibold text-lg flex items-center justify-center shrink-0 shadow-xs border border-zinc-800 transition-transform group-hover:scale-105">
                <i class="ri-heart-pulse-fill text-amber-400"></i>
            </div>
            <div class="space-y-0.5 leading-none transition-opacity duration-200" x-show="!sidebarCollapsed" x-cloak>
                <span class="font-bold text-sm text-zinc-900 tracking-tight block">Angels Care</span>
                <span class="text-[10px] font-medium tracking-wide text-zinc-500 bg-zinc-100 px-2 py-0.5 rounded border border-zinc-200 inline-block">Admin Portal</span>
            </div>
        </a>

        <!-- Mobile Close Button -->
        <button @click="sidebarOpen = false" type="button" class="lg:hidden text-zinc-400 hover:text-zinc-600 p-1">
            <i class="ri-close-line text-xl"></i>
        </button>
    </div>

    <!-- ONLY AVAILABLE NAVIGATION LINKS -->
    <div class="flex-1 py-4 px-3 space-y-4 overflow-y-auto scrollbar-none">
        
        <div class="space-y-1">
            <p class="px-3 text-[11px] font-semibold text-zinc-400 uppercase tracking-wider mb-2" x-show="!sidebarCollapsed" x-cloak>
                Menu
            </p>

            <!-- 1. Dashboard -->
            <a href="/admin" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition-all {{ request()->is('admin') && !request()->is('admin/*') ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900' }}">
                <i class="ri-dashboard-3-line text-base {{ request()->is('admin') && !request()->is('admin/*') ? 'text-zinc-50' : 'text-zinc-400' }}"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Dashboard</span>
            </a>

            <!-- 1.5. Home Sliders -->
            <a href="/admin/homesliders" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition-all {{ request()->is('admin/homesliders*') ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900' }}">
                <i class="ri-slideshow-line text-base {{ request()->is('admin/homesliders*') ? 'text-zinc-50' : 'text-zinc-400' }}"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Home Sliders</span>
            </a>

            <!-- 2. Services Management -->
            <a href="/admin/services" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition-all {{ request()->is('admin/services*') ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900' }}">
                <i class="ri-stethoscope-line text-base {{ request()->is('admin/services*') ? 'text-zinc-50' : 'text-zinc-400' }}"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Services</span>
            </a>

            <!-- 3. Testimonials -->
            <a href="/admin/testimonials" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition-all {{ request()->is('admin/testimonials*') ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900' }}">
                <i class="ri-star-smile-line text-base {{ request()->is('admin/testimonials*') ? 'text-zinc-50' : 'text-zinc-400' }}"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Testimonials</span>
            </a>

            <!-- 4. Categories -->
            <a href="/admin/categories" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition-all {{ request()->is('admin/categories*') ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900' }}">
                <i class="ri-folder-3-line text-base {{ request()->is('admin/categories*') ? 'text-zinc-50' : 'text-zinc-400' }}"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Categories</span>
            </a>

            <!-- 5. Blogs Management -->
            <a href="/admin/blogs" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition-all {{ request()->is('admin/blogs*') ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900' }}">
                <i class="ri-newspaper-line text-base {{ request()->is('admin/blogs*') ? 'text-zinc-50' : 'text-zinc-400' }}"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Blogs</span>
            </a>

            <!-- 6. General Settings -->
            <a href="/admin/settings" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition-all {{ request()->is('admin/settings*') ? 'bg-zinc-900 text-zinc-50 shadow-xs' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900' }}">
                <i class="ri-settings-4-line text-base {{ request()->is('admin/settings*') ? 'text-zinc-50' : 'text-zinc-400' }}"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Settings</span>
            </a>

            <!-- 4. Public Services Preview -->
            <a href="/services" target="_blank" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900 transition-all">
                <i class="ri-external-link-line text-base text-zinc-400"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Public Services</span>
            </a>

            <!-- 4. Blog -->
            <a href="/blog" target="_blank" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900 transition-all">
                <i class="ri-article-line text-base text-zinc-400"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Blog & Insights</span>
            </a>

            <!-- 5. Contact -->
            <a href="/contact" target="_blank" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900 transition-all">
                <i class="ri-mail-send-line text-base text-zinc-400"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Contact Page</span>
            </a>

            <!-- 6. Main Website -->
            <a href="/" target="_blank" class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900 transition-all">
                <i class="ri-external-link-line text-base text-zinc-400"></i>
                <span class="truncate" x-show="!sidebarCollapsed" x-cloak>Main Website</span>
            </a>
        </div>

    </div>

    <!-- USER PROFILE & LOGOUT CARD -->
    <div class="p-3 border-t border-zinc-200 shrink-0 space-y-2 bg-zinc-50/50">
        <button @click="sidebarCollapsed = !sidebarCollapsed" type="button" class="hidden lg:flex items-center justify-center w-full py-1 text-xs text-zinc-400 hover:text-zinc-700 rounded-md transition-colors">
            <i class="ri-side-bar-line text-base transition-transform" x-bind:class="sidebarCollapsed ? 'rotate-180' : ''"></i>
        </button>

        <div class="flex items-center justify-between p-2 rounded-lg bg-white border border-zinc-200 shadow-xs" x-show="!sidebarCollapsed" x-cloak>
            <div class="flex items-center gap-2.5 min-w-0">
                <div class="w-8 h-8 rounded-md bg-zinc-900 text-white font-semibold text-xs flex items-center justify-center shrink-0 border border-zinc-800">
                    AD
                </div>
                <div class="min-w-0 leading-tight">
                    <p class="text-xs font-semibold text-zinc-900 truncate">Administrator</p>
                    <p class="text-[10px] text-zinc-500 truncate">admin@angelshomehealth.com</p>
                </div>
            </div>

            <button wire:click="logout" type="button" class="p-1.5 text-zinc-400 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors" title="Log Out">
                <i class="ri-logout-box-r-line text-base"></i>
            </button>
        </div>
    </div>

</aside>
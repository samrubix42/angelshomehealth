<div class="w-full space-y-6">
    
    <!-- BRANDING & LOGO -->
    <div class="text-center space-y-3">
        <a href="/" wire:navigate class="inline-block group transition-transform hover:scale-105">
            <img src="/logo.png" alt="Angels Home Health" class="h-12 w-auto mx-auto object-contain drop-shadow-md">
        </a>

        <div class="space-y-1.5">
            <span class="inline-flex items-center gap-1.5 text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/25 px-3 py-1 rounded-full uppercase tracking-wider">
                <i class="ri-shield-keyhole-line text-xs"></i>
                <span>Admin Staff Portal</span>
            </span>
            <h1 class="font-heading font-extrabold text-2xl sm:text-3xl text-white tracking-tight">
                Sign in to Portal
            </h1>
            <p class="text-xs text-[#a1a1aa]">
                Manage patient consultations, care services, and operations.
            </p>
        </div>
    </div>

    <!-- LOGIN CARD -->
    <div class="bg-[#0a0a0a] p-6 sm:p-8 rounded-2xl border border-[#27272a] shadow-2xl space-y-5 relative">
        
        @if($errorMessage)
            <div class="bg-red-500/10 border border-red-500/30 p-3.5 rounded-xl text-xs text-red-300 flex items-start gap-2.5">
                <i class="ri-error-warning-fill text-base text-red-400 shrink-0 mt-0.5"></i>
                <span class="leading-relaxed">{{ $errorMessage }}</span>
            </div>
        @endif

        <form wire:submit.prevent="login" autocomplete="off" class="space-y-4" x-data="{ showPassword: false }">
            
            <!-- Email Field -->
            <div>
                <label for="admin-email" class="block text-xs font-semibold text-[#d4d4d8] mb-1.5">
                    Email Address
                </label>
                <div class="relative">
                    <i class="ri-mail-line absolute left-3.5 top-1/2 -translate-y-1/2 text-[#71717a] text-base pointer-events-none"></i>
                    <input id="admin-email"
                           type="email" 
                           wire:model="email" 
                           autocomplete="off"
                           placeholder="admin@angelshomehealthfl.com" 
                           class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl pl-10 pr-4 py-2.5 sm:py-3 text-xs sm:text-sm text-white placeholder-[#52525b] focus:outline-none transition-all">
                </div>
                @error('email') <span class="text-[11px] text-red-400 mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>

            <!-- Password Field -->
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <label for="admin-password" class="block text-xs font-semibold text-[#d4d4d8]">
                        Password
                    </label>
                </div>
                <div class="relative">
                    <i class="ri-lock-2-line absolute left-3.5 top-1/2 -translate-y-1/2 text-[#71717a] text-base pointer-events-none"></i>
                    <input id="admin-password"
                           x-bind:type="showPassword ? 'text' : 'password'" 
                           wire:model="password" 
                           autocomplete="new-password"
                           placeholder="••••••••••••" 
                           class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-xl pl-10 pr-11 py-2.5 sm:py-3 text-xs sm:text-sm text-white placeholder-[#52525b] focus:outline-none transition-all">
                    <button type="button" 
                            @click="showPassword = !showPassword" 
                            class="absolute right-3.5 top-1/2 -translate-y-1/2 text-[#71717a] hover:text-[#C8A14F] transition-colors p-1 flex items-center justify-center focus:outline-none" 
                            aria-label="Toggle password visibility">
                        <i x-bind:class="showPassword ? 'ri-eye-off-line' : 'ri-eye-line'" class="text-base"></i>
                    </button>
                </div>
                @error('password') <span class="text-[11px] text-red-400 mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2.5 cursor-pointer select-none">
                    <input type="checkbox" 
                           wire:model="remember" 
                           class="w-4 h-4 rounded bg-[#121212] border-[#27272a] text-[#C8A14F] focus:ring-[#C8A14F] focus:ring-offset-0 focus:ring-offset-transparent transition-colors cursor-pointer">
                    <span class="text-xs text-[#a1a1aa] hover:text-[#d4d4d8] transition-colors">Keep me signed in</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                    wire:loading.attr="disabled"
                    class="w-full bg-[#C8A14F] hover:bg-[#d8b260] active:scale-[0.99] text-[#000000] font-heading font-bold py-3 px-4 rounded-xl text-xs uppercase tracking-wider transition-all shadow-lg shadow-[#C8A14F]/10 flex items-center justify-center gap-2 disabled:opacity-70 disabled:cursor-not-allowed">
                <span wire:loading.remove wire:target="login" class="flex items-center gap-2">
                    <span>Sign In to Dashboard</span>
                    <i class="ri-arrow-right-line text-sm"></i>
                </span>
                <span wire:loading wire:target="login" class="flex items-center gap-2">
                    <i class="ri-loader-4-line text-sm animate-spin"></i>
                    <span>Authenticating...</span>
                </span>
            </button>
        </form>
    </div>

    <!-- FOOTER LINKS & SECURITY -->
    <div class="space-y-3 text-center">
        <a href="/" wire:navigate class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#71717a] hover:text-[#C8A14F] transition-colors group">
            <i class="ri-arrow-left-line transition-transform group-hover:-translate-x-0.5"></i>
            <span>Return to Angels Home Health</span>
        </a>
        <p class="text-[11px] text-[#52525b] flex items-center justify-center gap-1.5">
            <i class="ri-shield-check-line text-xs text-[#71717a]"></i>
            <span>Secure 256-bit encrypted administrative session</span>
        </p>
    </div>
</div>

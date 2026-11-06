<div class="min-h-[85vh] bg-[#000000] text-white flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden selection:bg-[#C8A14F] selection:text-black">
    
    <!-- MINIMAL AMBIENT RADIAL GOLD GLOW -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(200,161,79,0.12)_0,transparent_65%)] pointer-events-none"></div>

    <div class="max-w-md w-full space-y-7 relative z-10">
        
        <!-- BRANDING & LOGO -->
        <div class="text-center space-y-3">
            <a href="/" class="inline-block group">
                <img src="/logo.png" alt="Angels Home Health" class="h-11 w-auto mx-auto object-contain transition-transform group-hover:scale-105">
            </a>

            <div class="space-y-1">
                <span class="inline-flex items-center gap-1.5 text-[10px] font-bold text-[#C8A14F] bg-[#C8A14F]/10 border border-[#C8A14F]/20 px-3 py-1 rounded-full uppercase tracking-widest">
                    <i class="ri-shield-keyhole-line text-xs"></i>
                    <span>Admin Staff Access</span>
                </span>
                <h1 class="font-heading font-extrabold text-2xl sm:text-3xl text-white tracking-tight pt-1">
                    Sign in to Portal
                </h1>
                <p class="text-xs text-[#a1a1aa] font-medium">
                    Manage patient care consultations and operations.
                </p>
            </div>
        </div>

        <!-- MINIMAL LOGIN CARD -->
        <div class="bg-[#0a0a0a] p-7 sm:p-9 rounded-3xl border border-[#27272a]/80 shadow-2xl space-y-5 relative">
            
            @if($errorMessage)
                <div class="bg-red-500/10 border border-red-500/30 p-3.5 rounded-2xl text-xs text-red-400 flex items-center gap-2.5">
                    <i class="ri-error-warning-fill text-base shrink-0"></i>
                    <span>{{ $errorMessage }}</span>
                </div>
            @endif

            <form wire:submit.prevent="login" autocomplete="off" class="space-y-4" x-data="{ showPassword: false }">
                
                <!-- Email -->
                <div>
                    <label class="block text-xs font-semibold text-[#d4d4d8] mb-1.5 flex items-center justify-between">
                        <span>Email Address</span>
                    </label>
                    <div class="relative">
                        <i class="ri-mail-line absolute left-3.5 top-3.5 text-[#71717a] text-sm"></i>
                        <input type="email" 
                               wire:model="email" 
                               autocomplete="off"
                               placeholder="Enter your admin email" 
                               class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-2xl pl-10 pr-4 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-all">
                    </div>
                    @error('email') <span class="text-[10px] text-red-400 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-xs font-semibold text-[#d4d4d8] mb-1.5 flex items-center justify-between">
                        <span>Password</span>
                    </label>
                    <div class="relative">
                        <i class="ri-lock-2-line absolute left-3.5 top-3.5 text-[#71717a] text-sm"></i>
                        <input x-bind:type="showPassword ? 'text' : 'password'" 
                               wire:model="password" 
                               autocomplete="new-password"
                               placeholder="Enter your password" 
                               class="w-full bg-[#121212] border border-[#27272a] focus:border-[#C8A14F] focus:ring-1 focus:ring-[#C8A14F] rounded-2xl pl-10 pr-10 py-3 text-xs text-white placeholder-[#52525b] focus:outline-none transition-all">
                        <button type="button" @click="showPassword = !showPassword" class="absolute right-3.5 top-3.5 text-[#71717a] hover:text-white transition-colors" aria-label="Toggle password visibility">
                            <i x-bind:class="showPassword ? 'ri-eye-off-line' : 'ri-eye-line'" class="text-sm"></i>
                        </button>
                    </div>
                    @error('password') <span class="text-[10px] text-red-400 mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between pt-0.5">
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" wire:model="remember" class="w-4 h-4 rounded bg-[#121212] border-[#27272a] text-[#C8A14F] focus:ring-[#C8A14F]">
                        <span class="text-xs text-[#a1a1aa]">Remember session</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-[#C8A14F] hover:bg-[#d8b260] text-[#000000] font-heading font-bold py-3.5 rounded-2xl text-xs uppercase tracking-wider transition-all transform hover:scale-[1.01] shadow-lg flex items-center justify-center gap-2">
                    <span>Sign In to Dashboard</span>
                    <i class="ri-arrow-right-line text-sm"></i>
                </button>
            </form>
        </div>

        <!-- RETURN TO WEBSITE -->
        <div class="text-center">
            <a href="/" class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#71717a] hover:text-[#C8A14F] transition-colors">
                <i class="ri-arrow-left-line"></i>
                <span>Return to Angels Home Health Main Website</span>
            </a>
        </div>

    </div>
</div>
<nav class="bg-[#5b6b79] shadow-lg ml-27">
    <div class="flex justify-between items-center px-6 py-4">
        <!-- Search Bar -->
        <div class="flex items-center gap-3 flex-1 max-w-2xl">
            <div class="relative w-full">
                <input 
                    type="text" 
                    placeholder="Search anything..." 
                    class="w-full px-4 py-2.5 pl-12 pr-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/30 focus:bg-white/20 transition-all duration-300"
                >
                <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-white/60"></i>
            </div>
            <button class="px-4 py-2.5 bg-white/10 hover:bg-white/20 rounded-xl text-white transition-all duration-300 backdrop-blur-sm border border-white/20 font-medium">
                Search
            </button>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-2 ml-6">
            <a href="{{ route('profile') }}" class="group flex items-center gap-2 px-4 py-2 rounded-xl text-white hover:bg-white/20 backdrop-blur-sm transition-all duration-300">
                <i class="fas fa-user-circle text-lg group-hover:scale-110 transition-transform"></i>
                <span class="font-medium">Profile</span>
            </a>
            <a href="{{ route('settings') }}" class="group flex items-center gap-2 px-4 py-2 rounded-xl text-white hover:bg-white/20 backdrop-blur-sm transition-all duration-300">
                <i class="fas fa-cog text-lg group-hover:rotate-90 transition-transform duration-300"></i>
                <span class="font-medium">Settings</span>
            </a>
            <a href="{{ route('logout') }}" class="group flex items-center gap-2 px-4 py-2 rounded-xl bg-white/10 text-white hover:bg-red-500 hover:shadow-lg transition-all duration-300 ml-2">
                <i class="fas fa-sign-out-alt text-lg group-hover:translate-x-1 transition-transform"></i>
                <span class="font-medium">Logout</span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenu = !mobileMenu" class="md:hidden text-white p-2 rounded-lg hover:bg-white/20 transition-all ml-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!mobileMenu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                <path x-show="mobileMenu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenu" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         class="md:hidden border-t border-white/20 bg-white/10 backdrop-blur-sm">
        <!-- Mobile Search -->
        <div class="px-4 pt-3 pb-2">
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Search..." 
                    class="w-full px-4 py-2.5 pl-10 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/30"
                >
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-white/60 text-sm"></i>
            </div>
        </div>
        
        <!-- Mobile Menu Items -->
        <div class="px-4 py-3 space-y-2">
            <a href="{{ route('profile') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/20 transition-all">
                <i class="fas fa-user-circle text-lg"></i>
                <span class="font-medium">Profile</span>
            </a>
            <a href="{{ route('settings') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/20 transition-all">
                <i class="fas fa-cog text-lg"></i>
                <span class="font-medium">Settings</span>
            </a>
            <a href="{{ route('logout') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white bg-red-500/80 hover:bg-red-500 transition-all">
                <i class="fas fa-sign-out-alt text-lg"></i>
                <span class="font-medium">Logout</span>
            </a>
        </div>
    </div>
</nav>

<div class="w-64 h-screen bg-gray-100 text-gray-500 shadow-xl overflow-y-auto fixed left-0 top-0 border-r border-gray-200 scrollbar-hide leading-0.5 text-sm" style="font-family: 'Inter var', sans-serif;">
    <!-- Header -->
    <div class="basis-2xs mt-3 ml-2 mr-2 p-3 bg-gray-200 border-black text-gray-500 rounded-xl ">
    <!-- <div class="basis-xs border-2 bg-white/20 border-black text-gray-500 rounded-xl "> -->
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center shadow-md">
                <img src="{{ asset('img/logo.png') }}" alt="Profile" class=" rounded-xl object-cover">
            </div>
            <span class="text-2xl font-bold">Morsoft</span>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="p-5 text-gray-500">
        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-3">Master Menu</div>
        <ul class="space-y-1">
            <li x-data="{ open: false }">
                <button @click="open = !open" class="group w-full flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-600 hover:text-[#5b6b79]">
                    <i class="ep--avatar text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium flex-1 text-left text-gray-500">User</span>
                    <svg class="w-4 h-4 transition-transform duration-300 text-gray-500" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                
                <!-- Animated Dropdown -->
                                <div 
                    x-show="open" 
                    x-transition:enter="transition-all ease-out duration-500"
                    x-transition:enter-start="max-h-0"
                    x-transition:enter-end="max-h-96"
                    x-transition:leave="transition-all ease-in duration-300"
                    x-transition:leave-start="max-h-96"
                    x-transition:leave-end="max-h-0"
                    class="ml-8 mt-1 space-y-1 overflow-hidden"
                >
                    <a href="" class="flex items-center px-4 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-100 hover:text-[#5b6b79] transition-all duration-300 group transform hover:translate-x-1">
                        <span class="w-2 h-2 rounded-full bg-gray-300 mr-3 group-hover:bg-[#5b6b79] transition-all"></span>
                        Sub Layout User
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-100 hover:text-[#5b6b79] transition-all duration-300 group transform hover:translate-x-1">
                        <span class="w-2 h-2 rounded-full bg-gray-300 mr-3 group-hover:bg-[#5b6b79] transition-all"></span>
                        Sub Layout 2
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-100 hover:text-[#5b6b79] transition-all duration-300 group transform hover:translate-x-1">
                        <span class="w-2 h-2 rounded-full bg-gray-300 mr-3 group-hover:bg-[#5b6b79] transition-all"></span>
                        Sub Layout 3
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Widgets Section -->
    <!-- <div class="px-5 pb-6">
        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-3">Widgets</div>
        <ul class="space-y-1">
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-600 hover:text-[#5b6b79] hover:translate-x-1">
                    <i class="fas fa-chart-pie text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium flex-1">Statistics</span>
                    <span class="px-2 py-1 text-xs font-semibold bg-red-500 text-white rounded-full">12</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-600 hover:text-[#5b6b79] hover:translate-x-1">
                    <i class="fas fa-database text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Data</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-600 hover:text-[#5b6b79] hover:translate-x-1">
                    <i class="fas fa-chart-line text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Chart</span>
                </a>
            </li>
        </ul>
    </div> -->

    <!-- Admin Panel Section
    <div class="px-5 pb-6 ">
        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-3">Admin Panel</div>
        <ul class="space-y-1">
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-600 hover:text-[#5b6b79] hover:translate-x-1">
                    <i class="fas fa-book text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Online Courses</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-600 hover:text-[#5b6b79] hover:translate-x-1">
                    <i class="fas fa-users text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium flex-1">Membership</span>
                    <span class="px-2 py-1 text-xs font-semibold bg-green-500 text-white rounded-full">New</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-600 hover:text-[#5b6b79] hover:translate-x-1">
                    <i class="fas fa-headset text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Helpdesk</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-600 hover:text-[#5b6b79] hover:translate-x-1">
                    <i class="fas fa-file-invoice text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Invoice</span>
                </a>
            </li>
        </ul>
    </div> -->
</div>

<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    
    /* Hide scrollbar for IE, Edge and Firefox */
    .scrollbar-hide {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>

<!-- Tambahkan di bagian <head> layout Blade yang menggunakan sidebar ini -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
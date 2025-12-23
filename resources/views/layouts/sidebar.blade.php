<div class="w-64 h-screen bg-white text-gray-600 shadow-lg overflow-y-auto fixed left-0 top-0 border-r border-gray-100 scrollbar-hide" style="font-family: 'Plus Jakarta Sans', sans-serif;">
    
    <!-- Header -->
    <div class="m-4 p-4 bg-blue-50 rounded-2xl shadow-sm">
        <div class="flex items-center gap-3">
            <div class="w-11 h-11 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-md">
                <img src="{{ asset('img/logo.png') }}" alt="Profile" class="rounded-xl object-cover">
            </div>
            <span class="text-xl font-bold text-gray-800">Morsoft</span>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="px-3 py-2">
        <div class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-2 px-3">Navigation</div>
        
        <ul class="space-y-0.5">
            <!-- Dashboard Module with dropdown -->
            <li x-data="{ open: true }">
                <button @click="open = !open" class="group w-full flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 bg-blue-50 text-blue-600">
                    <i class="fas fa-chart-line text-base w-4"></i>
                    <span class="font-medium flex-1 text-left text-sm">Dashboard</span>
                    <span class="w-5 h-5 bg-blue-500 text-white rounded-full flex items-center justify-center text-xs font-semibold">2</span>
                    <svg class="w-3.5 h-3.5 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Dropdown Items -->
                <div 
                    x-show="open" 
                    x-transition:enter="transition-all ease-out duration-300"
                    x-transition:enter-start="opacity-0 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-96"
                    x-transition:leave="transition-all ease-in duration-200"
                    x-transition:leave-start="opacity-100 max-h-96"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="mt-0.5 space-y-0.5 overflow-hidden"
                >
                    <a href="#" class="flex items-center gap-3 px-3 py-2 pl-10 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-all duration-200 group">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>
                        <span>Default</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 pl-10 rounded-lg text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-gray-400 transition-colors"></span>
                        <span>Analytics</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 pl-10 rounded-lg text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-gray-400 transition-colors"></span>
                        <span>Finance</span>
                    </a>
                </div>
            </li>

            <!-- Layouts with arrow -->
            <li>
                <a href="#" class="group w-full flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-layer-group text-base w-4 text-gray-400"></i>
                    <span class="font-medium flex-1 text-left text-sm">Layouts</span>
                    <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </li>
        </ul>

        <!-- Widget Section -->
        <div class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-2 px-3 mt-5">Widget</div>
        <ul class="space-y-0.5">
            <li>
                <a href="#" class="group w-full flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-chart-pie text-base w-4 text-gray-400"></i>
                    <span class="font-medium text-sm">Statistics</span>
                </a>
            </li>
            <li>
                <a href="#" class="group w-full flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-database text-base w-4 text-gray-400"></i>
                    <span class="font-medium text-sm">Data</span>
                </a>
            </li>
            <li>
                <a href="#" class="group w-full flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-chart-bar text-base w-4 text-gray-400"></i>
                    <span class="font-medium text-sm">Chart</span>
                </a>
            </li>
        </ul>

        <!-- Admin Panel Section -->
        <div class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-2 px-3 mt-5">Admin Panel</div>
        <ul class="space-y-0.5">
            <!-- User Management with dropdown -->
            <li x-data="{ open: false }">
                <button @click="open = !open" class="group w-full flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-users text-base w-4 text-gray-400"></i>
                    <span class="font-medium flex-1 text-left text-sm">User Management</span>
                    <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-300" :class="{ 'rotate-90': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <div 
                    x-show="open" 
                    x-transition:enter="transition-all ease-out duration-300"
                    x-transition:enter-start="opacity-0 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-96"
                    x-transition:leave="transition-all ease-in duration-200"
                    x-transition:leave-start="opacity-100 max-h-96"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="mt-0.5 space-y-0.5 overflow-hidden"
                >
                    <a href="#" class="flex items-center gap-3 px-3 py-2 pl-10 rounded-lg text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-gray-400 transition-colors"></span>
                        <span>User List</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 pl-10 rounded-lg text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-gray-400 transition-colors"></span>
                        <span>Add User</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 pl-10 rounded-lg text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-gray-400 transition-colors"></span>
                        <span>User Roles</span>
                    </a>
                </div>
            </li>

            <!-- Product Management with dropdown -->
            <li x-data="{ open: false }">
                <button @click="open = !open" class="group w-full flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-box text-base w-4 text-gray-400"></i>
                    <span class="font-medium flex-1 text-left text-sm">Product</span>
                    <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-300" :class="{ 'rotate-90': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <div 
                    x-show="open" 
                    x-transition:enter="transition-all ease-out duration-300"
                    x-transition:enter-start="opacity-0 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-96"
                    x-transition:leave="transition-all ease-in duration-200"
                    x-transition:leave-start="opacity-100 max-h-96"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="mt-0.5 space-y-0.5 overflow-hidden"
                >
                    <a href="#" class="flex items-center gap-3 px-3 py-2 pl-10 rounded-lg text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-gray-400 transition-colors"></span>
                        <span>Product List</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 pl-10 rounded-lg text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-gray-400 transition-colors"></span>
                        <span>Add Product</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 pl-10 rounded-lg text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-gray-400 transition-colors"></span>
                        <span>Categories</span>
                    </a>
                </div>
            </li>

            <li>
                <a href="#" class="group w-full flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-life-ring text-base w-4 text-gray-400"></i>
                    <span class="font-medium flex-1 text-left text-sm">Helpdesk</span>
                    <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group w-full flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-file-invoice text-base w-4 text-gray-400"></i>
                    <span class="font-medium flex-1 text-left text-sm">Invoice</span>
                    <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>

</div>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<div class="w-72 h-screen bg-white shadow-xl overflow-y-auto fixed left-0 top-0 border-r border-gray-200">
    <!-- Header -->
    <div class="p-6 border-b border-gray-200 bg-[#5b6b79]">
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center shadow-md">
                <i class="fas fa-layer-group text-gray-600 text-xl"></i>
            </div>
            <span class="text-2xl font-bold text-gray-600">Dashboard</span>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="p-6">
        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-3">Navigation</div>
        <ul class="space-y-1">
            <li x-data="{ open: false }">
                <button @click="open = !open" class="group w-full flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-700 hover:text-[#5b6b79]">
                    <i class="fas fa-th text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium flex-1 text-left">Layouts</span>
                    <svg class="w-4 h-4 transition-transform duration-300 text-gray-500" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="ml-8 mt-1 space-y-1">
                    <a href="#" class="flex items-center px-4 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-100 hover:text-[#5b6b79] transition-all duration-300 group">
                        <span class="w-2 h-2 rounded-full bg-gray-300 mr-3 group-hover:bg-[#5b6b79] transition-all"></span>
                        Sub Layout 1
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-100 hover:text-[#5b6b79] transition-all duration-300 group">
                        <span class="w-2 h-2 rounded-full bg-gray-300 mr-3 group-hover:bg-[#5b6b79] transition-all"></span>
                        Sub Layout 2
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-100 hover:text-[#5b6b79] transition-all duration-300 group">
                        <span class="w-2 h-2 rounded-full bg-gray-300 mr-3 group-hover:bg-[#5b6b79] transition-all"></span>
                        Sub Layout 3
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Widgets Section -->
    <div class="px-6 pb-6">
        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-3">Widgets</div>
        <ul class="space-y-1">
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-700 hover:text-[#5b6b79]">
                    <i class="fas fa-chart-pie text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium flex-1">Statistics</span>
                    <span class="px-2 py-1 text-xs font-semibold bg-red-500 text-white rounded-full">12</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-700 hover:text-[#5b6b79]">
                    <i class="fas fa-database text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Data</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-700 hover:text-[#5b6b79]">
                    <i class="fas fa-chart-line text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Chart</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Admin Panel Section -->
    <div class="px-6 pb-6">
        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-3">Admin Panel</div>
        <ul class="space-y-1">
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-700 hover:text-[#5b6b79]">
                    <i class="fas fa-book text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Online Courses</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-700 hover:text-[#5b6b79]">
                    <i class="fas fa-users text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium flex-1">Membership</span>
                    <span class="px-2 py-1 text-xs font-semibold bg-green-500 text-white rounded-full">New</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-700 hover:text-[#5b6b79]">
                    <i class="fas fa-headset text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Helpdesk</span>
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-gray-100 text-gray-700 hover:text-[#5b6b79]">
                    <i class="fas fa-file-invoice text-lg w-5 text-gray-600"></i>
                    <span class="ml-3 font-medium">Invoice</span>
                </a>
            </li>
        </ul>
    </div>
</div>
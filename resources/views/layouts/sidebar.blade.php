<div class="w-64 h-screen bg-gray-800 text-white">
    <div class="p-6">
        <h2 class="text-xl font-bold">Dashboard</h2>
        <ul class="mt-8 space-y-4">
            <li><a href="{{ route('home') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Home</a></li>
            <li><a href="{{ route('profile') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Profile</a></li>
            <li><a href="{{ route('settings') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Settings</a></li>
            <li><a href="{{ route('logout') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Logout</a></li>
        </ul>
    </div>
</div>

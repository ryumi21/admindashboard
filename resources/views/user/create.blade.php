<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">

    <!-- Sidebar and Main Content Layout -->
    <div class="flex">

        <!-- Sidebar -->
        <div class="w-64 h-screen text-gray-500">
            @include('layouts.sidebar')
        </div>

        <!-- Main Content Area -->
        <div class="flex-1">
            <!-- Navbar -->
            @include('layouts.navbar')

            <!-- Content Section -->
            <div class="mt-8">
                @yield('content')
<div class="bg-white rounded-xl shadow-sm mb-10 mt-auto mr-3 ml-3 overflow-hidden">
    <!-- Form Header -->
    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Add New User</h2>
            <p class="text-sm text-gray-500 mt-1">Fill in the information below to create a new user account</p>
        </div>
        <a href="/user" class="text-gray-400 hover:text-gray-600 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </a>
    </div>

    <!-- Form Body -->
    <form action="/users/store" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf
        
        <div class="space-y-6">
            <!-- Profile Photo Section -->
            <div class="flex items-center gap-6">
                <div class="relative">
                    <div id="preview-container" class="w-24 h-24 rounded-full bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center text-white text-2xl font-semibold border-4 border-gray-100">
                        <span id="initial-preview">U</span>
                        <img id="image-preview" src="" alt="Preview" class="w-24 h-24 rounded-full object-cover hidden">
                    </div>
                    <label for="photo" class="absolute bottom-0 right-0 w-8 h-8 bg-[#5b6b79] rounded-full flex items-center justify-center cursor-pointer hover:bg-[#4a5a68] transition-colors shadow-lg">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </label>
                    <input type="file" id="photo" name="photo" accept="image/*" class="hidden">
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-700 mb-1">Profile Photo</h3>
                    <p class="text-xs text-gray-500">JPG, PNG or GIF. Max size 2MB</p>
                </div>
            </div>

            <!-- Personal Information -->
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Personal Information
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            required
                            placeholder="John Doe"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                        >
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            placeholder="john.doe@example.com"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                        >
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone"
                            placeholder="+1 234 567 8900"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                        >
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <label for="dob" class="block text-sm font-medium text-gray-700 mb-2">
                            Date of Birth
                        </label>
                        <input 
                            type="date" 
                            id="dob" 
                            name="date_of_birth"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                        >
                    </div>
                </div>
            </div>

            <!-- Account Settings -->
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Account Settings
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                required
                                placeholder="••••••••"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                            >
                            <button type="button" onclick="togglePassword('password')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                required
                                placeholder="••••••••"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                            >
                            <button type="button" onclick="togglePassword('password_confirmation')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Role -->
                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-700 mb-2">
                            Role <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="role" 
                            name="role" 
                            required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                        >
                            <option value="">Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="editor">Editor</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="status" 
                            name="status" 
                            required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                        >
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Address Information -->
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Address Information
                </h3>
                <div class="grid grid-cols-1 gap-4">
                    <!-- Street Address -->
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                            Street Address
                        </label>
                        <input 
                            type="text" 
                            id="address" 
                            name="address"
                            placeholder="123 Main Street"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                        >
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700 mb-2">
                                City
                            </label>
                            <input 
                                type="text" 
                                id="city" 
                                name="city"
                                placeholder="New York"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                            >
                        </div>

                        <!-- State -->
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700 mb-2">
                                State
                            </label>
                            <input 
                                type="text" 
                                id="state" 
                                name="state"
                                placeholder="NY"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                            >
                        </div>

                        <!-- Zip Code -->
                        <div>
                            <label for="zip" class="block text-sm font-medium text-gray-700 mb-2">
                                Zip Code
                            </label>
                            <input 
                                type="text" 
                                id="zip" 
                                name="zip_code"
                                placeholder="10001"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bio -->
            <!-- <div>
                <label for="bio" class="block text-sm font-medium text-gray-700 mb-2">
                    Bio
                </label>
                <textarea 
                    id="bio" 
                    name="bio" 
                    rows="4"
                    placeholder="Write a short bio about the user..."
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5b6b79] focus:border-transparent transition-all resize-none"
                ></textarea>
                <p class="text-xs text-gray-500 mt-1">Maximum 500 characters</p>
            </div> -->
        </div>

        <!-- Form Footer -->
        <div class="flex items-center justify-end gap-3 mt-8 pt-6 border-t border-gray-200">
            <a href="/users" class="px-6 py-2.5 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium">
                Cancel
            </a>
            <button type="submit" class="px-6 py-2.5 border border-gray-300 text-black rounded-lg  bg-blue-700 transition-colors font-medium flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Create User
            </button>
        </div>
    </form>
</div>            </div>
        </div>

    </div>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.getElementById('dropdownLayouts');
    const submenu = document.getElementById('submenuLayouts');

    if (dropdownButton && submenu) {
        dropdownButton.addEventListener('click', function() {
            submenu.classList.toggle('hidden');
            submenu.classList.toggle('max-h-0');
            submenu.classList.toggle('max-h-96');
        });
    }
});

document.addEventListener('alpine:init', () => {
    Alpine.data('navbar', () => ({
        mobileMenu: false
    }))
})
</script>


<script>
// Image preview
document.getElementById('photo').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('image-preview').src = e.target.result;
            document.getElementById('image-preview').classList.remove('hidden');
            document.getElementById('initial-preview').classList.add('hidden');
        }
        reader.readAsDataURL(file);
    }
});

// Update initial preview based on name input
document.getElementById('name').addEventListener('input', function(e) {
    const name = e.target.value.trim();
    if (name && document.getElementById('image-preview').classList.contains('hidden')) {
        const initials = name.split(' ').map(word => word[0]).join('').toUpperCase().substring(0, 2);
        document.getElementById('initial-preview').textContent = initials || 'U';
    }
});

// Toggle password visibility
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    field.type = field.type === 'password' ? 'text' : 'password';
}
</script>
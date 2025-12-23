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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
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
                @include('user.index')
            </div>
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
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
</head>
<body class="font-sans bg-gray-100">

    <!-- Sidebar and Main Content Layout -->
    <div class="flex">

        <!-- Sidebar -->
        <div class="w-64 h-screen bg-gray-800 text-white">
            @include('layouts.sidebar')
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-8">
            <!-- Navbar -->
            @include('layouts.navbar')

            <!-- Content Section -->
            <div class="mt-8">
                @yield('content')
            </div>
        </div>

    </div>

</body>
</html>


<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.getElementById('dropdownLayouts');
    const submenu = document.getElementById('submenuLayouts');

    dropdownButton.addEventListener('click', function() {
        // Toggle the 'max-h-0' to 'max-h-96' for dropdown animation
        submenu.classList.toggle('hidden'); // To show/hide the menu
        submenu.classList.toggle('max-h-0'); // Toggle animation for opening/closing
        submenu.classList.toggle('max-h-96'); // Adjust max height based on content
    });
});
   document.addEventListener('alpine:init', () => {
        Alpine.data('navbar', () => ({
            mobileMenu: false
        }))
    })

</script>
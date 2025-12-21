<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard with Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">

    <div class="flex">
        <!-- Include Sidebar -->
        <div>
            @include('layouts.sidebar')
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-3xl font-semibold text-gray-800">@yield('title', 'Welcome to Dashboard')</h1>
            <p class="mt-4 text-gray-600">@yield('content')</p>
        </div>
    </div>

</body>
</html>

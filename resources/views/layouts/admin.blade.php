<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3b82f6;
            --primary-dark: #1d4ed8;
            --secondary-color: #10b981;
            --background: #f8fafc;
            --card-bg: #ffffff;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --border-color: #e5e7eb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background);
            color: var(--text-primary);
            line-height: 1.5;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 260px;
            height: 100vh;
            background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
            color: #e2e8f0;
            transition: width 0.3s ease, transform 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar-header {
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border-bottom: 1px solid #374151;
        }

        .sidebar-header h2 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #fff;
            transition: opacity 0.2s ease;
        }

        .sidebar.collapsed .sidebar-header h2 {
            opacity: 0;
            width: 0;
        }

        .sidebar-toggle {
            background: none;
            border: none;
            color: #e2e8f0;
            font-size: 1.125rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
        }

        .sidebar-toggle:hover {
            background-color: #374151;
            color: #fff;
        }

        .sidebar-menu {
            padding: 1rem 0;
            list-style: none;
        }

        .sidebar-menu li {
            margin: 0.25rem 0.75rem;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            color: #cbd5e1;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .sidebar-menu a:hover {
            background-color: #374151;
            color: #fff;
            transform: translateX(0.25rem);
        }

        .sidebar-menu a.active {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: #fff;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }

        .sidebar-menu i {
            width: 1.5rem;
            font-size: 1rem;
            text-align: center;
        }

        .sidebar-menu span {
            transition: opacity 0.2s ease;
        }

        .sidebar.collapsed .sidebar-menu span {
            opacity: 0;
            width: 0;
            overflow: hidden;
        }

        .sidebar.collapsed .sidebar-menu a {
            justify-content: center;
            padding: 0.75rem;
        }

        /* Main Content */
        .main-content {
            margin-left: 260px;
            transition: margin-left 0.3s ease;
            min-height: 100vh;
        }

        .main-content.expanded {
            margin-left: 70px;
        }

        /* Header */
        .header {
            background: var(--card-bg);
            padding: 1rem 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .header-left {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .breadcrumb {
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .search-bar {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 0.5rem 2.5rem 0.5rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 0.5rem;
            background: #f9fafb;
            font-size: 0.875rem;
            color: var(--text-primary);
            width: 200px;
            transition: all 0.3s ease;
        }

        .search-bar input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .search-bar i {
            position: absolute;
            right: 0.75rem;
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 0.75rem;
            border-radius: 0.5rem;
            background-color: #f9fafb;
            border: 1px solid var(--border-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .user-info:hover {
            background-color: #e5e7eb;
        }

        .user-avatar {
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 600;
            font-size: 0.875rem;
        }

        /* Content Area */
        .content {
            padding: 1.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-260px);
            }

            .sidebar.collapsed {
                transform: translateX(0);
                width: 70px;
            }

            .main-content {
                margin-left: 0;
            }

            .main-content.expanded {
                margin-left: 70px;
            }

            .header {
                flex-wrap: wrap;
            }

            .search-bar {
                width: 100%;
            }

            .search-bar input {
                width: 100%;
            }
        }

        @media (max-width: 640px) {
            .header-title {
                font-size: 1.25rem;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <button class="sidebar-toggle" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            <h2>AdminPanel</h2>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.products') }}" class="{{ request()->routeIs('admin.products*') ? 'active' : '' }}">
                    <i class="fas fa-box"></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.orders') }}" class="{{ request()->routeIs('admin.orders*') ? 'active' : '' }}">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.analytics') }}" class="{{ request()->routeIs('admin.analytics') ? 'active' : '' }}">
                    <i class="fas fa-chart-bar"></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings') }}" class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="#" onclick="alert('Logout akan tersedia setelah auth system dibuat!')">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Header -->
        <div class="header">
            <div class="header-left">
                <h1 class="header-title">@yield('page-title', 'Dashboard')</h1>
                @if(isset($breadcrumb))
                    <div class="breadcrumb">{{ $breadcrumb }}</div>
                @endif
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <input type="text" placeholder="Search..." id="searchInput">
                    <i class="fas fa-search"></i>
                </div>
                <div class="user-info">
                    <div class="user-avatar">A</div>
                    <span>Admin User</span>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>
    </div>

    <script>
        // Sidebar Toggle
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const sidebarToggle = document.getElementById('sidebarToggle');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
            localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
        });

        // Restore sidebar state
        document.addEventListener('DOMContentLoaded', () => {
            const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
            if (isCollapsed) {
                sidebar.classList.add('collapsed');
                mainContent.classList.add('expanded');
            }
        });

        // Search functionality (placeholder)
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            // Implement search logic here
            console.log('Searching for:', searchTerm);
        });

        // Active menu highlighting
        const menuLinks = document.querySelectorAll('.sidebar-menu a');
        menuLinks.forEach(link => {
            if (link.getAttribute('href') === window.location.pathname) {
                link.classList.add('active');
            }
        });
    </script>

    @stack('scripts')
</body>
</html>

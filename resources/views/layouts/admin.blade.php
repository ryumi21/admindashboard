
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
            --secondary-color: #10b981;
            --accent-color: #f59e0b;
            --danger-color: #ef4444;
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
            transition: margin-left 0.3s ease;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.5rem;
            background: var(--card-bg);
            border-bottom: 1px solid var(--border-color);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: padding 0.3s ease;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-card {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .user-card:hover {
            transform: translateY(-2px);
        }

        .user-avatar {
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            background: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 600;
        }

        .user-name {
            font-size: 0.875rem;
            color: var(--text-primary);
        }

        .user-role {
            font-size: 0.75rem;
            color: var(--text-secondary);
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: var(--card-bg);
            border-right: 1px solid var(--border-color);
            padding: 1rem 0;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: transform 0.3s ease;
            z-index: 999;
        }

        .sidebar.collapsed {
            transform: translateX(-250px);
        }

        .sidebar-toggle {
            position: absolute;
            right: -40px;
            top: 1rem;
            background: var(--primary-color);
            border: none;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 0 0.5rem 0.5rem 0;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s ease;
            z-index: 1001;
        }

        .sidebar-toggle:hover {
            background: #1d4ed8;
        }

        .sidebar-nav {
            list-style: none;
        }

        .sidebar-nav li {
            padding: 0.5rem 1rem;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            transition: color 0.3s ease, background 0.3s ease;
        }

        .sidebar-nav a:hover {
            color: var(--primary-color);
            background: #f1f5f9;
        }

        .sidebar-nav a.active {
            color: var(--primary-color);
            font-weight: 500;
            background: #e0f2fe;
        }

        .sidebar-nav i {
            width: 1rem;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 2rem;
            transition: margin-left 0.3s ease;
        }

        .main-content.expanded {
            margin-left: 0;
        }

        /* Cards */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .card {
            background: var(--card-bg);
            border-radius: 0.5rem;
            padding: 1rem;
            border: 1px solid var(--border-color);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card-icon {
            width: 2.5rem;
            height: 2.5rem;
            margin: 0 auto 1rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: transform 0.3s ease;
        }

        .card:hover .card-icon {
            transform: rotate(15deg);
        }

        .card-icon.blue {
            background: var(--primary-color);
        }

        .card-icon.green {
            background: var(--secondary-color);
        }

        .card-icon.yellow {
            background: var(--accent-color);
        }

        .card-icon.red {
            background: var(--danger-color);
        }

        .card-value {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .card-label {
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        .card-date {
            font-size: 0.75rem;
            color: var(--text-secondary);
        }

        /* Additional Sections */
        .additional-section {
            background: var(--card-bg);
            border-radius: 0.5rem;
            padding: 1rem;
            border: 1px solid var(--border-color);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }

        .buy-now-btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: var(--danger-color);
            color: #fff;
            text-decoration: none;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .buy-now-btn:hover {
            background: #dc2626;
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-250px);
            }

            .sidebar.collapsed {
                transform: translateX(0);
                width: 250px;
            }

            .main-content {
                margin-left: 0;
            }

            .main-content.expanded {
                margin-left: 250px;
            }

            .cards-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-left">
            <h1 class="header-title">@yield('page-title', 'Dashboard')</h1>
        </div>
        <div class="header-right">
            <div class="user-card">
                <div class="user-avatar">JS</div>
                <div>
                    <div class="user-name">John Smith</div>
                    <div class="user-role">Administrator</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <button class="sidebar-toggle" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="sidebar-nav">
            <li><a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard <span>2</span></a></li>
            <li><a href="#"><i class="fas fa-th-large"></i> Layouts</a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i> Statistics</a></li>
            <li><a href="#"><i class="fas fa-table"></i> Data</a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i> Chart</a></li>
            <li><a href="#"><i class="fas fa-cogs"></i> Admin Panel</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon blue"><i class="fas fa-user-plus"></i></div>
                <div class="card-value">980+</div>
                <div class="card-label">Registrations</div>
                <div class="card-date">May 23 - June 01 (2018)</div>
            </div>
            <div class="card">
                <div class="card-icon green"><i class="fas fa-sync-alt"></i></div>
                <div class="card-value">1,563</div>
                <div class="card-label">Renewals</div>
                <div class="card-date">May 23 - June 01 (2018)</div>
            </div>
            <div class="card">
                <div class="card-icon yellow"><i class="fas fa-dollar-sign"></i></div>
                <div class="card-value">42.6%</div>
                <div class="card-label">Revenue</div>
                <div class="card-date">Today, August 06, 2025</div>
            </div>
            <div class="card">
                <div class="card-icon red"><i class="fas fa-times"></i></div>
                <div class="card-value">42.6%</div>
                <div class="card-label">Cancellations</div>
                <div class="card-date">Today, August 06, 2025</div>
            </div>
        </div>

        <div class="additional-section">
            <div>Revenue analytics</div>
            <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
                <span style="background: var(--accent-color); width: 1rem; height: 1rem; border-radius: 50%;"></span>
                <span>Revenue</span>
                <span style="background: var(--primary-color); width: 1rem; height: 1rem; border-radius: 50%;"></span>
                <span>Sales</span>
            </div>
            <div style="margin-top: 0.5rem;">Monthly <span style="color: var(--text-secondary);">&darr;</span></div>
        </div>

        <div class="additional-section">
            <div>Calendar</div>
            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-top: 0.5rem;">
                Today: Wednesday, August 06, 2025, 02:42 PM +08
            </div>
        </div>

        <a href="#" class="buy-now-btn">Buy Now</a>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const sidebarToggle = document.getElementById('sidebarToggle');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
            sidebarToggle.innerHTML = sidebar.classList.contains('collapsed') ? '<i class="fas fa-arrow-right"></i>' : '<i class="fas fa-bars"></i>';
            localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
        });

        // Restore sidebar state on page load
        document.addEventListener('DOMContentLoaded', () => {
            const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
            if (isCollapsed) {
                sidebar.classList.add('collapsed');
                mainContent.classList.add('expanded');
                sidebarToggle.innerHTML = '<i class="fas fa-arrow-right"></i>';
            }
        });
    </script>
</body>
</html>

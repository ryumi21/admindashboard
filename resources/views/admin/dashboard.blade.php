
@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')
@section('page-title', 'Dashboard')

@section('content')
<style>
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: #ffffff;
        border-radius: 1rem;
        padding: 1.5rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #1d4ed8);
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.15);
    }

    .stat-card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .stat-card-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #1f2937;
    }

    .stat-card-icon {
        width: 40px;
        height: 40px;
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: transform 0.3s ease;
    }

    .stat-card:hover .stat-card-icon {
        transform: scale(1.1);
    }

    .stat-card-value {
        font-size: 2rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 0.5rem;
    }

    .stat-card-change {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .positive { color: #10b981; }
    .negative { color: #ef4444; }
    .blue { background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); }
    .green { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
    .yellow { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }
    .red { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); }

    .content-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 1.5rem;
    }

    @media (max-width: 768px) {
        .content-grid {
            grid-template-columns: 1fr;
        }
    }

    .card {
        background: #ffffff;
        border-radius: 1rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        padding: 1.5rem;
        border-bottom: 1px solid #e5e7eb;
        background: #f9fafb;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1f2937;
    }

    .card-body {
        padding: 1.5rem;
    }

    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }

    .table th {
        font-weight: 600;
        color: #374151;
        padding: 1rem;
        text-align: left;
        background: #f9fafb;
    }

    .table td {
        padding: 1rem;
        color: #1f2937;
        border-bottom: 1px solid #f3f4f6;
        transition: background 0.3s ease;
    }

    .table tr:hover td {
        background: #f9fafb;
    }

    .status-badge {
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .status-badge:hover {
        transform: scale(1.05);
    }

    .action-button {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem;
        border-radius: 0.5rem;
        text-decoration: none;
        color: #374151;
        transition: all 0.3s ease;
        border: 1px solid #e5e7eb;
    }

    .action-button:hover {
        background: #f9fafb;
        transform: translateY(-2px);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .action-icon {
        width: 40px;
        height: 40px;
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: transform 0.3s ease;
    }

    .action-button:hover .action-icon {
        transform: rotate(15deg);
    }
</style>

<!-- Stats Cards -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-card-header">
            <div class="stat-card-title">Total Users</div>
            <div class="stat-card-icon blue">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <div class="stat-card-value">1,234</div>
        <div class="stat-card-change positive">
            <i class="fas fa-arrow-up"></i> +12.5% from last month
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-card-header">
            <div class="stat-card-title">Total Orders</div>
            <div class="stat-card-icon green">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
        <div class="stat-card-value">5,678</div>
        <div class="stat-card-change positive">
            <i class="fas fa-arrow-up"></i> +8.2% from last month
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-card-header">
            <div class="stat-card-title">Revenue</div>
            <div class="stat-card-icon yellow">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
        <div class="stat-card-value">$45,678</div>
        <div class="stat-card-change positive">
            <i class="fas fa-arrow-up"></i> +15.3% from last month
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-card-header">
            <div class="stat-card-title">Products</div>
            <div class="stat-card-icon red">
                <i class="fas fa-box"></i>
            </div>
        </div>
        <div class="stat-card-value">892</div>
        <div class="stat-card-change negative">
            <i class="fas fa-arrow-down"></i> -2.1% from last month
        </div>
    </div>
</div>

<!-- Content Cards -->
<div class="content-grid">
    <!-- Recent Orders -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Orders</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="color: #6b7280;">#ORD-001</td>
                            <td>John Doe</td>
                            <td>$125.00</td>
                            <td>
                                <span class="status-badge" style="background: #dcfce7; color: #166534;">Completed</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #6b7280;">#ORD-002</td>
                            <td>Jane Smith</td>
                            <td>$89.50</td>
                            <td>
                                <span class="status-badge" style="background: #fef3c7; color: #92400e;">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #6b7280;">#ORD-003</td>
                            <td>Mike Johnson</td>
                            <td>$200.00</td>
                            <td>
                                <span class="status-badge" style="background: #dbeafe; color: #1e40af;">Processing</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="text-align: right; margin-top: 1rem; color: #6b7280;">
                Last updated: August 06, 2025, 02:33 PM +08
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Quick Actions</h3>
        </div>
        <div class="card-body">
            <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                <a href="#" onclick="alert('Feature not yet available')" class="action-button">
                    <div class="action-icon blue">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div>
                        <div style="font-weight: 600;">Add New User</div>
                        <div style="font-size: 0.875rem; color: #6b7280;">Create a new user account</div>
                    </div>
                </a>

                <a href="#" onclick="alert('Feature not yet available')" class="action-button">
                    <div class="action-icon green">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div>
                        <div style="font-weight: 600;">Add Product</div>
                        <div style="font-size: 0.875rem; color: #6b7280;">Add a new product to inventory</div>
                    </div>
                </a>

                <a href="#" onclick="alert('Feature not yet available')" class="action-button">
                    <div class="action-icon yellow">
                        <i class="fas fa-list"></i>
                    </div>
                    <div>
                        <div style="font-weight: 600;">View All Orders</div>
                        <div style="font-size: 0.875rem; color: #6b7280;">Manage customer orders</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const actionButtons = document.querySelectorAll('.action-button');
    actionButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            // Future implementation for dynamic actions
        });
    });

    // Dynamic date update (for demonstration)
    const now = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', timeZoneName: 'short' };
    document.querySelector('.table-responsive + div').textContent = `Last updated: ${now.toLocaleString('en-US', options)}`;
});
</script>
@endsection

<div class="grid grid-cols-1 md:grid-cols-1 gap-6 rounded mb-10 mt-auto mr-3 ml-3">
    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
        <h2 class="text-base font-semibold mb-4 text-gray-700">Overview - Barang Masuk & Keluar</h2>
        <div class="h-80">
            <canvas id="chartOverview"></canvas>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 rounded mb-10 mt-auto mr-3 ml-3">
    <!-- Chart Barang Masuk -->
    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
        <h2 class="text-base font-semibold mb-4 text-gray-700">Barang Masuk</h2>
        <div class="h-64">
            <canvas id="chartBarangMasuk"></canvas>
        </div>
    </div>

    <!-- Chart Barang Keluar -->
    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
        <h2 class="text-base font-semibold mb-4 text-gray-700">Barang Keluar</h2>
        <div class="h-64">
            <canvas id="chartBarangKeluar"></canvas>
        </div>
    </div>

    <!-- Chart 1 -->
    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
        <h2 class="text-base font-semibold mb-4 text-gray-700">Chart 1 (Bar)</h2>
        <div class="h-64">
            <canvas id="chart1"></canvas>
        </div>
    </div>

    <!-- Chart 2 -->
    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
        <h2 class="text-base font-semibold mb-4 text-gray-700">Chart 2 (Line)</h2>
        <div class="h-64">
            <canvas id="chart2"></canvas>
        </div>
    </div>

    <!-- Chart 3 -->
    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
        <h2 class="text-base font-semibold mb-4 text-gray-700">Chart 3 (Pie)</h2>
        <div class="h-64">
            <canvas id="chart3"></canvas>
        </div>
    </div>

    <!-- Chart 4 -->
    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
        <h2 class="text-base font-semibold mb-4 text-gray-700">Chart 4 (Doughnut)</h2>
        <div class="h-64">
            <canvas id="chart4"></canvas>
        </div>
    </div>
</div>

{{-- Chart.js CDN --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Chart configuration with smaller font
    const chartConfig = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                labels: {
                    font: {
                        size: 11
                    }
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    font: {
                        size: 10
                    }
                }
            },
            y: {
                ticks: {
                    font: {
                        size: 10
                    }
                }
            }
        }
    };

    // Chart Overview - Barang Masuk & Keluar (Mixed Chart)
    new Chart(document.getElementById('chartOverview'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    type: 'bar',
                    label: 'Barang Masuk',
                    data: [65, 59, 80, 81, 56, 70, 75, 68, 85, 90, 78, 88],
                    backgroundColor: '#34d399',
                    borderColor: '#10b981',
                    borderWidth: 1
                },
                {
                    type: 'bar',
                    label: 'Barang Keluar',
                    data: [45, 49, 60, 71, 46, 50, 55, 48, 65, 70, 58, 68],
                    backgroundColor: '#f87171',
                    borderColor: '#ef4444',
                    borderWidth: 1
                },
                {
                    type: 'line',
                    label: 'Trend Masuk',
                    data: [65, 59, 80, 81, 56, 70, 75, 68, 85, 90, 78, 88],
                    borderColor: '#10b981',
                    backgroundColor: 'transparent',
                    borderWidth: 2,
                    tension: 0.4,
                    pointRadius: 0
                }
            ]
        },
        options: {
            ...chartConfig,
            scales: {
                ...chartConfig.scales,
                y: {
                    ...chartConfig.scales.y,
                    beginAtZero: true
                }
            }
        }
    });

    // Chart Barang Masuk (Line)
    new Chart(document.getElementById('chartBarangMasuk'), {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'Barang Masuk',
                data: [150, 200, 180, 220],
                borderColor: '#10b981',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#10b981',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5
            }]
        },
        options: chartConfig
    });

    // Chart Barang Keluar (Line)
    new Chart(document.getElementById('chartBarangKeluar'), {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'Barang Keluar',
                data: [120, 160, 140, 190],
                borderColor: '#ef4444',
                backgroundColor: 'rgba(239, 68, 68, 0.1)',
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#ef4444',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5
            }]
        },
        options: chartConfig
    });

    // Chart 1 (Bar)
    new Chart(document.getElementById('chart1'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Sales',
                data: [12, 19, 3, 5, 2],
                backgroundColor: '#5b6b79'
            }]
        },
        options: chartConfig
    });

    // Chart 2 (Line)
    new Chart(document.getElementById('chart2'), {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            datasets: [{
                label: 'Visitors',
                data: [30, 25, 40, 20, 50],
                borderColor: '#5b6b79',
                backgroundColor: 'rgba(91,107,121,0.2)',
                fill: true,
                tension: 0.4
            }]
        },
        options: chartConfig
    });

    // Chart 3 (Pie)
    new Chart(document.getElementById('chart3'), {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                data: [10, 20, 30],
                backgroundColor: ['#f87171','#60a5fa','#facc15']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: {
                        font: {
                            size: 11
                        }
                    }
                }
            }
        }
    });

    // Chart 4 (Doughnut)
    new Chart(document.getElementById('chart4'), {
        type: 'doughnut',
        data: {
            labels: ['Apple', 'Samsung', 'Xiaomi'],
            datasets: [{
                data: [50, 25, 25],
                backgroundColor: ['#34d399','#60a5fa','#fbbf24']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: {
                        font: {
                            size: 11
                        }
                    }
                }
            }
        }
    });
});
</script>
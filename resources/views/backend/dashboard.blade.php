@extends('backend.master')

@section('title', 'Dashboard - E-Commerce Admin')
@section('breadcrumb', 'Dashboard')

@push('styles')
<style>
    .stats-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
    }

    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .stat-icon {
        width: 48px;
        height: 48px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: rgba(255,255,255,0.2);
    }

    .chart-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    .mini-chart {
        height: 70px;
        margin-top: 1rem;
    }

    .social-card {
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s;
    }

    .social-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .progress-group {
        margin-bottom: 1rem;
    }

    .progress-group-header {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .progress-thin {
        height: 4px;
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-4">
    <!-- Stats Cards Row -->
    <div class="row g-4 mb-4">
        <!-- Users Card -->
        <div class="col-sm-6 col-xl-3">
            <div class="card stats-card text-white bg-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <div class="fs-4 fw-semibold">26K</div>
                            <div class="small">Total Users</div>
                            <div class="small mt-1">
                                <span class="text-white-50">-12.4%</span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="stat-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-chart">
                        <canvas id="userChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Income Card -->
        <div class="col-sm-6 col-xl-3">
            <div class="card stats-card text-white bg-info">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <div class="fs-4 fw-semibold">$6,200</div>
                            <div class="small">Total Income</div>
                            <div class="small mt-1">
                                <span class="text-white-50">+40.9%</span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="stat-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-chart">
                        <canvas id="incomeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Conversion Card -->
        <div class="col-sm-6 col-xl-3">
            <div class="card stats-card text-white bg-warning">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <div class="fs-4 fw-semibold">2.49%</div>
                            <div class="small">Conversion Rate</div>
                            <div class="small mt-1">
                                <span class="text-white-50">+84.7%</span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="stat-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-chart">
                        <canvas id="conversionChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sessions Card -->
        <div class="col-sm-6 col-xl-3">
            <div class="card stats-card text-white bg-danger">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <div class="fs-4 fw-semibold">44K</div>
                            <div class="small">Total Sessions</div>
                            <div class="small mt-1">
                                <span class="text-white-50">-23.6%</span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="stat-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-chart">
                        <canvas id="sessionChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Traffic Chart -->
    <div class="card chart-card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h4 class="card-title mb-0">Traffic Overview</h4>
                    <div class="small text-muted">Monthly statistics for 2025</div>
                </div>
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-outline-secondary" onclick="updateMainChart('day', this)">Day</button>
                    <button class="btn btn-outline-secondary active" onclick="updateMainChart('month', this)">Month</button>
                    <button class="btn btn-outline-secondary" onclick="updateMainChart('year', this)">Year</button>
                </div>
            </div>
            <div style="height: 300px; position: relative;">
                <canvas id="mainChart"></canvas>
            </div>
        </div>
        <div class="card-footer bg-white">
            <div class="row text-center">
                <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="text-muted small mb-1">Visits</div>
                    <div class="fw-semibold">29,703 Users</div>
                    <div class="progress mt-2 progress-thin">
                        <div class="progress-bar bg-success" style="width: 40%" role="progressbar"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="text-muted small mb-1">Unique</div>
                    <div class="fw-semibold">24,093 Users</div>
                    <div class="progress mt-2 progress-thin">
                        <div class="progress-bar bg-info" style="width: 20%" role="progressbar"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="text-muted small mb-1">Pageviews</div>
                    <div class="fw-semibold">78,706 Views</div>
                    <div class="progress mt-2 progress-thin">
                        <div class="progress-bar bg-warning" style="width: 60%" role="progressbar"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="text-muted small mb-1">New Users</div>
                    <div class="fw-semibold">22,123 Users</div>
                    <div class="progress mt-2 progress-thin">
                        <div class="progress-bar bg-danger" style="width: 80%" role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Social Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card social-card text-white" style="background: #3b5998;">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="fs-4 fw-semibold">89k</div>
                            <div class="small text-white-50">Friends</div>
                        </div>
                        <div class="col">
                            <div class="fs-4 fw-semibold">459</div>
                            <div class="small text-white-50">Feeds</div>
                        </div>
                    </div>
                    <div style="height: 60px; margin-top: 1rem;">
                        <canvas id="facebookChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card social-card text-white" style="background: #1da1f2;">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="fs-4 fw-semibold">973k</div>
                            <div class="small text-white-50">Followers</div>
                        </div>
                        <div class="col">
                            <div class="fs-4 fw-semibold">1.8k</div>
                            <div class="small text-white-50">Tweets</div>
                        </div>
                    </div>
                    <div style="height: 60px; margin-top: 1rem;">
                        <canvas id="twitterChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card social-card text-white" style="background: #0077b5;">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="fs-4 fw-semibold">500+</div>
                            <div class="small text-white-50">Contacts</div>
                        </div>
                        <div class="col">
                            <div class="fs-4 fw-semibold">292</div>
                            <div class="small text-white-50">Feeds</div>
                        </div>
                    </div>
                    <div style="height: 60px; margin-top: 1rem;">
                        <canvas id="linkedinChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Mini charts setup
    const miniChartData = [12,19,3,5,2,3,9];

    function createMiniChart(ctx, color) {
        return new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
                datasets: [{
                    data: miniChartData,
                    borderColor: color,
                    backgroundColor: color+'33',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 0
                }]
            },
            options: {
                responsive:true,
                plugins:{ legend:{ display:false } },
                scales:{ x:{ display:false }, y:{ display:false } }
            }
        });
    }

    createMiniChart(document.getElementById('userChart'), '#fff');
    createMiniChart(document.getElementById('incomeChart'), '#fff');
    createMiniChart(document.getElementById('conversionChart'), '#fff');
    createMiniChart(document.getElementById('sessionChart'), '#fff');
    createMiniChart(document.getElementById('facebookChart'), '#fff');
    createMiniChart(document.getElementById('twitterChart'), '#fff');
    createMiniChart(document.getElementById('linkedinChart'), '#fff');

    // Main Chart setup
    const mainChartCtx = document.getElementById('mainChart').getContext('2d');
    let mainChart = new Chart(mainChartCtx, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
            datasets: [{
                label: 'Visitors',
                data: [30,45,60,50,70,90,100,120,130,125,140,150],
                borderColor: '#007bff',
                backgroundColor: 'rgba(0,123,255,0.2)',
                fill: true,
                tension:0.4
            }]
        },
        options:{
            responsive:true,
            plugins:{ legend:{ display:false } },
            scales:{ y:{ beginAtZero:true } }
        }
    });

    window.updateMainChart = function(type, btn) {
        document.querySelectorAll('.btn-group button').forEach(b => b.classList.remove('active'));
        if(btn) btn.classList.add('active');
        console.log('Chart updated to:', type);
        // You can update data here dynamically based on 'type'
    }
</script>
@endpush
</html>

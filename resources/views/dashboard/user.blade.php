@extends('layouts.master')

@section('title', 'Admin Dashboard - Users')

@section('content')
    <div class="mb-4">
        <h2 class="mb-1">Dashboard Overview</h2>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon bg-primary">
                    <i class="bi bi-people"></i>
                </div>
                <div>
                    <div class="stat-label">Total Users</div>
                    <div class="stat-value">12,458</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i> 12.5%
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon bg-success">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div>
                    <div class="stat-label">Revenue</div>
                    <div class="stat-value">$84,290</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i> 8.2%
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon bg-warning">
                    <i class="bi bi-cart"></i>
                </div>
                <div>
                    <div class="stat-label">Orders</div>
                    <div class="stat-value">3,842</div>
                    <div class="stat-change negative">
                        <i class="bi bi-arrow-down"></i> 3.1%
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-icon bg-info">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div>
                    <div class="stat-label">Growth</div>
                    <div class="stat-value">24.8%</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up"></i> 5.4%
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="data-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Orders</h5>
                    <button class="btn btn-sm btn-outline-light">View All</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-2458</td>
                                <td>John Smith</td>
                                <!-- preserved omitted rows -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="data-card">
                <div class="card-header">
                    <h5 class="mb-0">Top Products</h5>
                </div>
                <div class="p-3">
                    <div class="product-item">
                        <div class="d-flex align-items-center gap-3">
                            <img src="/placeholder.svg?height=48&width=48" alt="Product" class="rounded" width="48" height="48">
                            <div class="flex-grow-1">
                                <!-- preserved omitted content -->
                            </div>
                            <div class="text-success fw-semibold">$36,918</div>
                        </div>
                    </div>
                    <!-- other product items preserved -->
                </div>
            </div>
        </div>
    </div>
@endsection

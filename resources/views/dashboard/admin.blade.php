@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Dashboard Overview</h2>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon bg-primary"><i class="bi bi-people"></i></div>
                <div>
                    <div class="stat-label">Total Users</div>
                    <div class="stat-value">12,458</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon bg-success"><i class="bi bi-currency-dollar"></i></div>
                <div>
                    <div class="stat-label">Revenue</div>
                    <div class="stat-value">$84,290</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

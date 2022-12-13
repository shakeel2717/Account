@extends('layout.app')
@section('head')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Welcome {{ auth()->user()->name }}</h3>
            <div class="nk-block-des text-soft">
                <p>Welcome to {{ env('APP_NAME') }} Dashboard.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="nk-block">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">All Partners</h4>
                    <br>
                    <h2>{{ $users->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Customers</h4>
                    <br>
                    <h2>{{ totalCustomers()->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Vendors</h4>
                    <br>
                    <h2>{{ totalVendors()->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Employee</h4>
                    <br>
                    <h2>{{ totalEmployee()->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Expense</h4>
                    <br>
                    <h2>{{ number_format(totalExpense(),2) }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Income</h4>
                    <br>
                    <h2>{{ number_format(totalIncome(),2) }}</h2>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Abid Expense</h4>
                    <br>
                    <h2>{{ number_format(abidExpense(),2) }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Atif Expense</h4>
                    <br>
                    <h2>{{ number_format(atifExpense(),2) }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Shakeel Expense</h4>
                    <br>
                    <h2>{{ number_format(shakeelExpense(),2) }}</h2>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Paid Salary</h4>
                    <br>
                    <h2>{{ number_format(totalSalary(),2) }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
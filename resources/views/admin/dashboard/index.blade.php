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
                    <h4 class="title">Total Expense</h4>
                    <br>
                    <h2>{{ number_format(totalExpense(),2) }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Out</h4>
                    <br>
                    <h2>{{ totalOut() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total In</h4>
                    <br>
                    <h2>{{ totalIn() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Salary Paid</h4>
                    <br>
                    <h2>{{ totalSalary() }}</h2>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Abid Balance</h4>
                    <br>
                    <h4>{{ number_format(balance(1),2) }} | {{ number_format(totalPaid(1),2) }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Shakeel Balance</h4>
                    <br>
                    <h4>{{ number_format(balance(2),2) }} | {{ number_format(totalPaid(2),2) }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Atif Balance</h4>
                    <br>
                    <h4>{{ number_format(balance(3),2) }} | {{ number_format(totalPaid(3),2) }}</h4>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Service Pay</h4>
                    <br>
                    <h4>{{ number_format(totalVisaCharges(3),2) }} | {{ number_format(totalVisa(3),2) }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Due Receivable Funds</h4>
                    <br>
                    <h4>{{ number_format(duePayment(3),2) }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Due Payable Funds</h4>
                    <br>
                    <h4>{{ number_format(duePayablePayment(3),2) }}</h4>
                </div>
            </div>
        </div>
        <hr>
        @foreach ($types as $type)
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">{{$type->value}}</h4>
                    <br>
                    <h4>{{ number_format(typeBalance($type->value),2) }}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
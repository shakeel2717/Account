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
                    <h2>{{ number_format(totalOut(),2) }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total In</h4>
                    <br>
                    <h2>{{ number_format(totalIn(),2) }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Salary Paid</h4>
                    <br>
                    <h2>{{ number_format(totalSalary(),2) }}</h2>
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
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Donation</h4>
                    <br>
                    <h4>{{ number_format(balance(4),2) }} | {{ number_format(totalPaid(4),2) }}</h4>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Visa Only</h4>
                    <br>
                    <h4>{{ number_format(totalVisaCharges(3),2) }} | {{ number_format(totalVisa(3),2) }}</h4>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Service Pay</h4>
                    <br>
                    <h4>{{ number_format(totalServiceCharges(3),2) }} | {{ number_format(totalService(3),2) }}</h4>
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
        <hr>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Abid Investment</h4>
                    <br>
                    <h2>{{ number_format(invest(1),2) }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Shakeel Investment</h4>
                    <br>
                    <h2>{{ number_format(invest(2),2) }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Atif Investment</h4>
                    <br>
                    <h2>{{ number_format(invest(3),2) }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Investment</h4>
                    <br>
                    <h2>{{ number_format(invest(1) + invest(2) + invest(3) ,2) }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
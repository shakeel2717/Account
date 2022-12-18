@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Add Company Investment</h3>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('admin.invest.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="reference">Reference</label>
                            <input type="text" name="reference" id="reference" placeholder="Transaction Reference" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" id="amount" placeholder="Transaction Amount" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="customer_id">Select Person</label>
                            <select name="customer_id" id="customer_id" class="form-control">
                                <option value="">Select Customer</option>
                                @foreach ($customers as $customer)
                                <option class="text-uppercase" value="{{ $customer->id }}">{{ $customer->name }} | ({{ $customer->type }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sum">Investment</label>
                            <select name="sum" id="sum" class="form-control">
                                <option value="in">In</option>
                                <option value="out">Out</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Add Transaction">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nk-block">
    <div class="row">
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
    </div>
</div>
@endsection
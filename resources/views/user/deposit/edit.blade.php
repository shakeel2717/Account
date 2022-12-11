@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Step 1: {{ $gateway->name }} Payment Gateway</h3>
        <div class="nk-block-des">
            <p>Please Send {{ number_format($amount,2) }} to the following Wallet/Account to process your Payment</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="team">
                <div class="user-card user-card-s2">
                    <img src="{{ asset('assets/wallet') }}\{{$gateway->icon}}" alt="Gateway" width="100">
                    <div class="user-info">
                        <h6>{{ $gateway->name }} Gateway</h6>
                        <span class="sub-text">{{ $gateway->status ? "Active now" : "InActive" }}</span>
                    </div>
                </div>
                <ul class="team-info">
                    <li><span>Bank Name</span><span>{{ $gateway->name }}</span></li>
                    <li><span>Account Title</span><span>{{ $gateway->title }}</span></li>
                    <li><span>Account Number</span><span>{{ $gateway->number }}</span></li>
                    <li><span>Receiving Number</span><span>{{ $gateway->r_number }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Step 2: Enter Transaction ID</h3>
        <div class="nk-block-des">
            <p>After Payment Sent to the Above Wallet Account, Now Enter Transaction/Reference Id Below for the Automatic Deposit Approval</p>
        </div>
    </div>
</div>
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('user.deposit.tid') }}" method="POST">
                        <input type="hidden" name="gateway_id" value="{{ $gateway->id }}">
                        <input type="hidden" name="amount" value="{{ $amount }}">
                        @csrf
                        <div class="form-group">
                            <label for="tid">Transaction/Reference ID</label>
                            <input type="text" name="tid" id="tid" placeholder="Transaction/Reference ID" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Complete Deposit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
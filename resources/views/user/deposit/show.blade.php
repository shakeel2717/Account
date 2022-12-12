@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">{{ $gateway->name }} Payment Gateway</h3>
        <div class="nk-block-des">
            <p>Please Enter Amount you want to Deposit via {{ $gateway->name }} Payment Gateway</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <img src="{{ asset('assets/wallet') }}/{{ $gateway->icon }}" alt="Gateway Icon" width="50">
                </div>
            </div>
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('user.deposit.update',['deposit' => $gateway->id]) }}" method="POST">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="amount">Amount in PKR</label>
                            <input type="text" name="amount" id="amount" placeholder="Amount in PKR" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Deposit Fund">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
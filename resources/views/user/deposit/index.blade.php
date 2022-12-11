@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Add Funds to your account</h3>
        <div class="nk-block-des">
            <p>Please choose a Payment Gateway to Top up your account</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="row g-gs">
        @foreach($gateways as $gateway)
        <div class="col-md-6">
            <div class="card card-bordered card-full">
                <div class="nk-wg1">
                    <div class="nk-wg1-block">
                        <div class="nk-wg1-img">
                            <img src="{{ asset('assets/wallet') }}/{{ $gateway->icon }}" alt="{{ $gateway->name }} Payment Method">
                        </div>
                        <div class="nk-wg1-text">
                            <h5 class="title">{{ $gateway->name }} Payment Gateway</h5>
                            <p>Add Funds in your Account via {{ $gateway->name }} Gateway</p>
                        </div>
                    </div>
                    <div class="nk-wg1-action">
                        <a href="{{ route('user.deposit.show',['deposit' => $gateway->id]) }}" class="link"><span>Deposit now</span> <em class="icon ni ni-chevron-right"></em></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
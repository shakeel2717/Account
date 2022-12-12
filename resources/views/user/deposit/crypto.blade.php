@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Step 1: Send Payment to the Following Address or Scan QR Code. </h3>
        <div class="nk-block-des">
            <p>Please Send {{ number_format($amount,2) }} to the following USDT TRC20 Address, or Scan QR Code.</p>
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
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <form action="#">
                                <div class="form-group text-center">
                                    <div class="mb-4">
                                        <img src="{{$data['qrcode_url']}}" alt="QR Code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Amount in USDT</label>
                                    <input type="text" name="address" id="address" value="{{ $amount }}" class="form-control text-center" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="address">USDT Trc20 Address</label>
                                    <input type="text" name="address" id="address" value="{{ $data['address'] }}" class="form-control text-center" readonly>
                                </div>
                            </form>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Your Payment will be transfer Automatically in your account. </h3>
    </div>
</div>
@endsection
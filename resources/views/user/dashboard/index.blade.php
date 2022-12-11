@extends('layout.app')
@section('head')
<div class="nk-block">
    <div class="card" style="background-image: url('/assets/images/back/back1.jpg'); background-size:cover">
        <div class="p-4 my-5">
            <h2 class="text-white text-center">Join us & Get $10 For Free</h2>
            <h4 class="text-white text-center">Join and Invite your Friends for Try and Earn Reward</h4>
            <br>
            <div class="text-center">
                <a href="#" class="btn btn-white btn-lg">Promote</a>
            </div>
        </div>
    </div>
</div>
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Welcome {{ auth()->user()->name }}</h3>
            <div class="nk-block-des text-soft">
                <p>Welcome to {{ env('APP_NAME') }} Dashboard.</p>
            </div>
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt"><a href="{{ route('user.deposit.index') }}" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Add Fund</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="nk-block">
    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <em class="icon h4 ni ni-cc-alt-fill text-primary"></em>
                        <h2 class="amount mt-2">0.0000000</h2>
                        <p class="title" style="font-size:20px;">Balance</p>
                    </div>
                    <div class="m-2">
                        <img src="{{ asset('assets/images/balance.png') }}" alt="Balance" width="120">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <em class="icon h4 ni ni-cc-alt-fill text-primary"></em>
                        <h2 class="amount mt-2">0.0000000</h2>
                        <p class="title" style="font-size:20px;">Total Bonus</p>
                    </div>
                    <div class="m-2">
                        <img src="{{ asset('assets/images/bonus.png') }}" alt="Balance" width="80">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <em class="icon h4 ni ni-cc-alt-fill text-primary"></em>
                        <h2 class="amount mt-2">0.0000000</h2>
                        <p class="title" style="font-size:20px;">Total Profit</p>
                    </div>
                    <div class="m-2">
                        <img src="{{ asset('assets/images/deposit.png') }}" alt="Balance" width="120">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <em class="icon h4 ni ni-cc-alt-fill text-primary"></em>
                        <h2 class="amount mt-2">0.0000000</h2>
                        <p class="title" style="font-size:20px;">Withdraw</p>
                    </div>
                    <div class="m-2">
                        <img src="{{ asset('assets/images/withdraw.png') }}" alt="Balance" width="120">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inc.tids')
@include('inc.fund')
@endsection
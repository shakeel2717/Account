@extends('layout.app')
@section('head')
<div class="nk-block">
    <div class="card" style="background-image: url('/assets/images/back/back5.jpg'); background-size:cover;background-position: center;">
        <div class="p-4 my-5">
            <h2 class="text-white text-center">Invite Friends & Earn Reward</h2>
            <h4 class="text-white text-center">Share This Promote link to Start Earning in no time.</h4>
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <div class="">
                        <div class="form-group">
                            <input type="text" name="refer" id="refer" value="{{ route('register') }}" class="form-control text-center">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center">
                <button href="#" onclick="copyLink();" class="btn btn-secondary btn-lg">Copy Link</button>
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
                        <li class="nk-block-tools-opt"><a href="{{ route('user.dashboard.index') }}" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Back to Dashboard</span></a></li>
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
                        <h2 class="amount mt-2">{{ levelFirst(auth()->user()->id)->count() }}</h2>
                        <p class="title" style="font-size:20px;">First Level Joiners</p>
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
                        <h2 class="amount mt-2">{{ levelSecond(auth()->user()->id)->count() }}</h2>
                        <p class="title" style="font-size:20px;">Second Level Joiners</p>
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
                        <h2 class="amount mt-2">{{ levelThird(auth()->user()->id)->count() }}</h2>
                        <p class="title" style="font-size:20px;">Third Level Joiners</p>
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
                        <h2 class="amount mt-2">{{ number_format(bonus(auth()->user()->id),2) }}</h2>
                        <p class="title" style="font-size:20px;">Total Commission Earned</p>
                    </div>
                    <div class="m-2">
                        <img src="{{ asset('assets/images/withdraw.png') }}" alt="Balance" width="120">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>
    function copyLink() {
        var copyText = document.getElementById("refer");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
    }
</script>
@endsection
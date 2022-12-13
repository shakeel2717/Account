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
        <div class="col-md-6 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2 p-3">
                        <em class="icon h4 ni ni-cc-alt-fill text-primary"></em>
                        <h2 class="amount mt-2">0.00</h2>
                        <p class="title" style="font-size:20px;">My Investment</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2 p-3">
                        <em class="icon h4 ni ni-cc-alt-fill text-primary"></em>
                        <h2 class="amount mt-2">0.00</h2>
                        <p class="title" style="font-size:20px;">My Expense</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2 p-3">
                        <em class="icon h4 ni ni-cc-alt-fill text-primary"></em>
                        <h2 class="amount mt-2">0.00</h2>
                        <p class="title" style="font-size:20px;">Company Expense</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
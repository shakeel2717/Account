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
                    <h4 class="title">All Users</h4>
                    <br>
                    <h2>{{ $users->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Active Users</h4>
                    <br>
                    <h2>{{ $users->where('status','active')->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Suspended Users</h4>
                    <br>
                    <h2>{{ $users->where('status','suspend')->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Betting</h4>
                    <br>
                    <h2>{{ $bets->sum('amount') }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Active Betting</h4>
                    <br>
                    <h2>{{ $bets->where('status','active')->sum('amount') }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Closed Betting</h4>
                    <br>
                    <h2>{{ $bets->where('status','close')->sum('amount') }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Tids</h4>
                    <br>
                    <h2>{{ $tids->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Pending Tids</h4>
                    <br>
                    <h2>{{ $tids->where('status','pending')->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Approved Tids</h4>
                    <br>
                    <h2>{{ $tids->where('status','pending')->sum('amount') }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
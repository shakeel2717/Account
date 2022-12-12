@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Add Balance in User's Wallet</h3>
        <div class="nk-block-des">
            <p>Admin can Add Balance to any user account</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('admin.finance.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username </label>
                            <input type="text" name="username" id="username" placeholder="Enter User's Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount </label>
                            <input type="text" name="amount" id="amount" placeholder="Amount" class="form-control">
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
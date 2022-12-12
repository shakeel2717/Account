@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Withdraw Funds</h3>
        <div class="nk-block-des">
            <p>Withdraw your Available Balance to your Local Bank account</p>
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
                    <form action="{{ route('user.withdraw.store') }}" method="POST">
                        @csrf
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Balance: {{ number_format(balance(auth()->user()->id),2) }}</h3>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="amount">Amount to Withdraw </label>
                            <input type="text" name="amount" id="amount" placeholder="Amount" class="form-control">
                        </div>
                        <div class="my-3">
                            <hr>
                            <div class="nk-block-des">
                                <p>Note: Please Fill Carefully Bank Detail!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bank">Bank Name </label>
                                    <input type="text" name="bank" id="bank" placeholder="Bank Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="number">Account Number </label>
                                    <input type="text" name="number" id="number" placeholder="Account Number" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Account Title </label>
                                    <input type="text" name="title" id="title" placeholder="Account Title" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="r_number">Receiving Number </label>
                                    <input type="text" name="r_number" id="r_number" placeholder="Receiving Number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Submit Withdraw Request">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
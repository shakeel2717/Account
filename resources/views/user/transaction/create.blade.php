@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Add Transaction</h3>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('user.transaction.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="reference">Reference</label>
                            <input type="text" name="reference" id="reference" placeholder="Transaction Reference" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" id="amount" placeholder="Transaction Amount" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Add Transaction">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
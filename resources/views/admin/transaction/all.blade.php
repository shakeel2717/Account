@extends('layout.app')
@section('head')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">All Transactions List</h3>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="nk-block">
    <livewire:admin.all-transaction :type="array('Reverse Principle','Deposit','Bet','Level 1 Commission','Level 2 Commission','Level 3 Commission')" />
</div>
@endsection
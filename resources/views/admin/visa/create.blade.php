@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Add Service Job</h3>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('admin.visa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="type">Service Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="Visa">Visa</option>
                                <option value="Website Development">Website Development</option>
                                <option value="CCTV Project">CCTV Project</option>
                                <option value="Other Service">Other Service</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reference">Reference</label>
                            <input type="text" name="reference" id="reference" placeholder="Transaction Reference" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="amount">Customer Total Payment</label>
                            <input type="text" name="amount" id="amount" placeholder="Transaction Amount" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="due">Payment Due</label>
                            <input type="text" name="due" id="due" placeholder="Payment Due" class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <label for="charges">Govt Charges UAE</label>
                            <input type="text" name="charges" id="charges" placeholder="Govt Charges UAE" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="customer_id">Select Person</label>
                            <select name="customer_id" id="customer_id" class="form-control">
                                <option value="">Select Customer</option>
                                @foreach ($customers as $customer)
                                <option class="text-uppercase" value="{{ $customer->id }}">{{ $customer->name }} | ({{ $customer->type }})</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Add Service Job">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
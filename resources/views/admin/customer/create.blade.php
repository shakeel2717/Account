@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Add Person In System</h3>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('admin.customer.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="address">Person Type </label>
                            <select name="type" id="type" class="form-control">
                                <option value="customer">Customer</option>
                                <option value="vendor">Vendor</option>
                                <option value="employee">Employee</option>
                                <option value="partner">Business Partner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Person Name *</label>
                            <input type="text" name="name" id="name" placeholder="Person Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Person Phone (Optional) </label>
                            <input type="text" name="phone" id="phone" placeholder="Person Phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Person Address (Optional) </label>
                            <input type="text" name="address" id="address" placeholder="Person Address" class="form-control">
                        </div>
                        <div class="employeeSection">
                            <div class="form-group">
                                <label for="salary">Employee Salary (Optional) </label>
                                <input type="text" name="salary" id="salary" placeholder="Employee Salary" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Add Person">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>
    $(".employeeSection").hide();
    $("#type").change(function() {
        if ($("#type").val() == "employee") {
            $(".employeeSection").show();
        } else {
            $(".employeeSection").hide();
        }
    })
</script>
@endsection
@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Add Salary</h3>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('admin.salary.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="amount">Salary Amount</label>
                            <input type="text" name="amount" id="amount" placeholder="Salary Amount" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="amount">Select Employee</label>
                            <select name="employee_id" id="employee_id" class="form-control">
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Add Salary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
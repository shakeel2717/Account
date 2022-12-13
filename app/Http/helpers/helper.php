<?php

use App\Models\Customer;
use App\Models\Setting;
use App\Models\Transaction;


function setting($key)
{
    $setting = Setting::where('key', $key)->first();
    return $setting->value;
}


function totalExpense()
{
    $out = Transaction::where('sum', 'out')->sum('amount');
    return $out;
}


function totalEmployee()
{
    $customer = Customer::where('type', 'employee')->get();
    return $customer;
}


function totalIncome()
{
    $in = Transaction::where('sum', 'in')->sum('amount');
    return $in;
}


function totalSalary()
{
    $in = Transaction::where('sum', 'out')->where('type', 'salary')->sum('amount');
    return $in;
}


function totalCustomers()
{
    $customer = Customer::where('type', 'customer')->get();
    return $customer;
}


function totalVendors()
{
    $customer = Customer::where('type', 'vendor')->get();
    return $customer;
}



function abidExpense()
{
    $out = Transaction::where('user_id', 2)->sum('amount');
    return $out;
}


function shakeelExpense()
{
    $out = Transaction::where('user_id', 3)->sum('amount');
    return $out;
}


function atifExpense()
{
    $out = Transaction::where('user_id', 4)->sum('amount');
    return $out;
}

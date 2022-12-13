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
    $out = Transaction::sum('amount');
    return $out;
}


function totalCustomers()
{
    $customer = Customer::where('type','customer')->get();
    return $customer;
}


function totalVendors()
{
    $customer = Customer::where('type','vendor')->get();
    return $customer;
}
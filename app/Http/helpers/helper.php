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

function totalIn()
{
    $in = Transaction::where('sum', 'in')->sum('amount');
    return $in;
}


function totalSalary()
{
    $out = Transaction::where('sum', 'out')->where('type', 'salary')->sum('amount');
    return $out;
}

function balance($partner_id)
{
    $in = Transaction::where('sum', 'in')->where('customer_id', $partner_id)->sum('amount');
    $out = Transaction::where('sum', 'out')->where('customer_id', $partner_id)->sum('amount');
    return $in - $out;
}


function totalPaid($partner_id)
{
    $out = Transaction::where('sum', 'out')->where('type', 'Partners Share')->where('customer_id', $partner_id)->sum('amount');
    return $out;
}


function typeBalance($type)
{
    $out = Transaction::where('sum', 'out')->where('type', $type)->sum('amount');
    return $out;
}

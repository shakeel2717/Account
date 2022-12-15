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


function totalSalary()
{
    $out = Transaction::where('sum', 'out')->where('type', 'salary')->sum('amount');
    return $out;
}

function totalOfficeExpense()
{
    $out = Transaction::where('sum', 'out')->where('type', 'Office Expense')->sum('amount');
    return $out;
}



function balance($partner_id)
{
    $in = Transaction::where('sum', 'in')->where('customer_id', $partner_id)->sum('amount');
    $out = Transaction::where('sum', 'out')->where('customer_id', $partner_id)->sum('amount');
    return $in - $out;
}

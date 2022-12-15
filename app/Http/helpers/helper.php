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

<?php

use App\Models\Customer;
use App\Models\DuePayment;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Type;
use App\Models\Visa;

function setting($key)
{
    $setting = Setting::where('key', $key)->first();
    return $setting->value;
}


function totalExpense()
{
    $fields = Type::get();
    $total = 0;
    foreach ($fields as $field) {
        $query = Transaction::where('type', $field->value)->sum('amount');
        $total += $query;
    }
    return $total;
}


function totalOut()
{
    $out = Transaction::where('sum', 'out')->sum('amount');
    return $out;
}


function totalVisa()
{
    $in = Visa::sum('amount');
    return $in;
}

function totalVisaCharges()
{
    $in = Visa::sum('charges');
    return $in;
}

function duePayment()
{
    $due = DuePayment::where('type', 'receivable')->sum('amount');
    return $due;
}

function duePayablePayment()
{
    $due = DuePayment::where('type', 'payable')->sum('amount');
    return $due;
}

function totalIn()
{
    $in = Transaction::where('sum', 'in')->where('type', '!=', 'Profit Share')->where('type', '!=', 'Debit Received')->sum('amount');
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

<?php

use App\Models\Setting;
use App\Models\Transaction;

function balance($user_id)
{
    $in = Transaction::where('user_id', $user_id)->where('sum', true)->sum('amount');
    $out = Transaction::where('user_id', $user_id)->where('sum', false)->sum('amount');
    return $in - $out;
}


function profit($user_id)
{
    $in = Transaction::where('user_id', $user_id)->where('type', 'Profit')->where('sum', true)->sum('amount');
    return $in;
}

function withdraw($user_id)
{
    $in = Transaction::where('user_id', $user_id)->where('type', 'Withdraw')->where('sum', false)->sum('amount');
    return $in;
}


function bonus($user_id)
{
    $in = Transaction::where('user_id', $user_id)->where('type', 'Profit')->where('sum', true)->sum('amount');
    return $in;
}


function setting($key)
{
    $setting = Setting::where('key', $key)->first();
    return $setting->value;
}

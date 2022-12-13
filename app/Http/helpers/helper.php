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

function firstLevelBonus($user_id)
{
    $in = Transaction::where('user_id', $user_id)
        ->where('type', 'Level 1 Commission')
        ->where('sum', true)
        ->sum('amount');
    return $in;
}
function secondLevelBonus($user_id)
{
    $in = Transaction::where('user_id', $user_id)
        ->where('type', 'Level 2 Commission')
        ->where('sum', true)
        ->sum('amount');
    return $in;
}

function thirdLevelBonus($user_id)
{
    $in = Transaction::where('user_id', $user_id)
        ->where('type', 'Level 3 Commission')
        ->where('sum', true)
        ->sum('amount');
    return $in;
}


function bonus($user_id)
{
    return firstLevelBonus($user_id) + secondLevelBonus($user_id) + thirdLevelBonus($user_id);
}


function setting($key)
{
    $setting = Setting::where('key', $key)->first();
    return $setting->value;
}


function edie($string)
{
    info("Website Error:" . $string);
    die();
}

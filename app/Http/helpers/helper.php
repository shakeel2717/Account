<?php

use App\Models\Setting;
use App\Models\Transaction;
use App\Models\User;

function balance($user_id)
{
    $in = Transaction::where('user_id', $user_id)->where('sum', true)->sum('amount');
    $out = Transaction::where('user_id', $user_id)->where('sum', false)->sum('amount');
    return $in - $out;
}


function levelFirst($user_id)
{
    $user =  User::find($user_id);
    $direct = User::where('refer', $user->username)->get();
    return $direct;
}


function levelSecond($user_id)
{
    $user =  User::find($user_id);
    $referCount = [];
    $refers = User::where('refer', $user->username)->get();
    foreach ($refers as $refer) {
        $refersIndirect = User::where('refer', $refer->username)->get();
        foreach ($refersIndirect as $downlineRefer) {
            $referCount[] = $downlineRefer->id;
        }
    }
    $totalRefers = User::whereIn('id', $referCount)->get();
    return $totalRefers;
}


function levelThird($user_id)
{
    $referCount = [];
    $referId = [];
    foreach (levelSecond($user_id) as $referid) {
        $referId[] = $referid->id;
    }
    $thirdRefers = User::whereIn('id', $referId)->get();
    foreach ($thirdRefers as $refer) {
        $refersIndirect = User::where('refer', $refer->username)->get();
        foreach ($refersIndirect as $downlineRefer) {
            $referCount[] = $downlineRefer->id;
        }
    }
    $totalRefers = User::whereIn('id', $referCount)->get();
    return $totalRefers;
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

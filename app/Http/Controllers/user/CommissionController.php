<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function first()
    {
        return view('user.commission.first');
    }

    public function second()
    {
        return view('user.commission.second');
    }

    public function third()
    {
        return view('user.commission.third');
    }
}

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BetTransactionController extends Controller
{
    public function all()
    {
        return view('user.bet.all');
    }
}

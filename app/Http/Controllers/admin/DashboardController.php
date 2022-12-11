<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bet;
use App\Models\Tid;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::get();
        $bets = Bet::get();
        $tids = Tid::get();
        return view('admin.dashboard.index', compact('users','bets','tids'));
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function first()
    {
        return view('admin.commission.first');
    }


    public function second()
    {
        return view('admin.commission.second');
    }


    public function third()
    {
        return view('admin.commission.third');
    }
}

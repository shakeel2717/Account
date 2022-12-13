<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function all()
    {
        return view('admin.transaction.all');
    }


    public function deposit()
    {
        return view('admin.transaction.deposit');
    }

    public function withdraw()
    {
        return view('admin.transaction.withdraw');
    }
}

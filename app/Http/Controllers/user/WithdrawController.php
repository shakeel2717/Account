<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.withdraw.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1|max:200000',
            'bank' => 'required|string',
            'number' => 'required|string',
            'title' => 'required|string',
            'r_number' => 'nullable|string',
        ]);

        // checking if balance is enough
        if ($validated['amount'] > balance(auth()->user()->id)) {
            return redirect()->route('user.dashboard.index')->withErrors("Insufficient balance, Please Add Funds to your account and try again.");
        }
        $amount = $validated['amount'];
        $feeId = null;
        // withdraw fees
        if (setting('withdraw_fees') > 0) {
            $fees = $validated['amount'] * setting('withdraw_fees') / 100;
            $amount = $validated['amount'] - $fees;

            $withdrawFee = new Transaction();
            $withdrawFee->user_id = auth()->user()->id;
            $withdrawFee->type = "Withdraw Fees";
            $withdrawFee->amount = $fees;
            $withdrawFee->status = 'pending';
            $withdrawFee->sum = false;
            $withdrawFee->save();
            $feeId = $withdrawFee->id;
        }

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->type = "Withdraw";
        $transaction->amount = $amount;
        $transaction->status = 'pending';
        $transaction->sum = false;
        $transaction->note = $feeId;
        $transaction->save();

        $withdraw = new Withdraw();
        $withdraw->user_id = auth()->user()->id;
        $withdraw->bank = $validated['bank'];
        $withdraw->amount = $amount;
        $withdraw->title = $validated['title'];
        $withdraw->number = $validated['number'];
        $withdraw->r_number = $validated['r_number'];
        $withdraw->save();

        return redirect()->back()->with('success', 'Withdraw Request Sent Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

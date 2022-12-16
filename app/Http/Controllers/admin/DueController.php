<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DuePayment;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::get();
        return view('admin.due.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = DuePayment::get();
        return view('admin.due.create', compact('customers'));
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
            'amount' => 'required|numeric',
            'customer_id' => 'required|integer',
            'reference' => 'nullable|string',
        ]);


        $duePayment = DuePayment::find($validated['customer_id']);

        if ($duePayment->amount > $validated['amount']) {
            $duePayment->amount = $duePayment->amount - $validated['amount'];
            $duePayment->save();

            $transaction = new Transaction();
            $transaction->user_id = auth()->user()->id;
            $transaction->customer_id = $duePayment->customer_id;
            $transaction->amount = $validated['amount'];
            $transaction->reference = $validated['reference'];
            $transaction->type = 'Due Paid';
            if ($duePayment->type == "payable") {
                $transaction->sum = 'out';
            } elseif ($duePayment->type == "receivable") {
                $transaction->sum = 'in';
            }
            $transaction->save();
        } elseif ($duePayment->amount == $validated['amount']) {
            $transaction = new Transaction();
            if ($duePayment->type == "payable") {
                $transaction->sum = 'out';
            } elseif ($duePayment->type == "receivable") {
                $transaction->sum = 'in';
            }
            $transaction->user_id = auth()->user()->id;
            $transaction->customer_id = $duePayment->customer_id;
            $transaction->amount = $validated['amount'];
            $transaction->reference = $validated['reference'];
            $transaction->type = 'Due Paid';
            $transaction->save();

            $duePayment->delete();
        }

        return redirect()->back()->with('success', 'Payment Submitted Successfully!');
    }


    public function loan(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'customer_id' => 'required|integer',
            'reference' => 'nullable|string',
        ]);

        // adding due amount
        $dueAmount = new DuePayment();
        $dueAmount->customer_id = $validated['customer_id'];
        $dueAmount->amount = $validated['amount'];
        $dueAmount->reference = $validated['reference'];
        $dueAmount->type = "payable";
        $dueAmount->save();

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->customer_id = $validated['customer_id'];
        $transaction->amount = $validated['amount'];
        $transaction->reference = $validated['reference'];
        $transaction->type = 'Company Loan';
        $transaction->sum = 'in';
        $transaction->save();

        return redirect()->back()->with('success', 'Company Loan Added');
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

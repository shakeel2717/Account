<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DuePayment;
use App\Models\Transaction;
use App\Models\Visa;
use App\Models\VisaProfit;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.visa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::where('type', 'customer')->get();
        return view('admin.visa.create', compact('customers'));
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
            'reference' => 'nullable|string',
            'amount' => 'required|numeric',
            'charges' => 'required|numeric',
            'due' => 'required|numeric',
            'customer_id' => 'required|integer',
            'type' => 'required|string'
        ]);

        $profit = $validated['amount'] - $validated['charges'];
        $customer = Customer::find($validated['customer_id']);

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->customer_id = $validated['customer_id'];
        $transaction->type = $validated['type'] . ' Service';
        $transaction->reference = $validated['reference'];
        $transaction->amount = $validated['amount'];
        $transaction->sum = 'in';
        $transaction->save();

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->customer_id = $validated['customer_id'];
        $transaction->type = $validated['type'] . ' Service Charges';
        $transaction->reference = $validated['reference'];
        $transaction->amount = $validated['charges'];
        $transaction->sum = 'out';
        $transaction->save();

        $partners = VisaProfit::get();
        foreach ($partners as $partner) {
            $thisUserProfitAmount = $profit * $partner->amount / 100;

            // detecting this user 10% amount for donation
            $donation = 10;
            $donationAmount = $thisUserProfitAmount * $donation / 100;

            $transaction = new Transaction();
            $transaction->user_id = auth()->user()->id;
            $transaction->customer_id = $partner->id;
            $transaction->type = 'Profit Share';
            $transaction->reference = $validated['reference'];
            $transaction->amount = $thisUserProfitAmount - $donationAmount;
            $transaction->sum = 'in';
            $transaction->save();
        }

        $visa = new Visa();
        $visa->customer_id = $validated['customer_id'];
        $visa->amount = $validated['amount'];
        $visa->charges = $validated['charges'];
        $visa->type = $validated['type'];
        $visa->reference = $validated['reference'];
        $visa->save();

        if ($validated['due'] > 0) {
            // adding due amount
            $dueAmount = new DuePayment();
            $dueAmount->visa_id = $visa->id;
            $dueAmount->customer_id = $validated['customer_id'];
            $dueAmount->amount = $validated['due'];
            $dueAmount->type = "receivable";
            $dueAmount->save();
        }

        return redirect()->back()->with('success', 'Visa Job Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function show(Visa $visa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function edit(Visa $visa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visa $visa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visa $visa)
    {
        //
    }
}

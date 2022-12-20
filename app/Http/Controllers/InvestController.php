<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invest;
use App\Models\Transaction;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::where('type', 'partner')->get();
        return view('admin.invest.index', compact('customers'));
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
            'reference' => 'nullable|string',
            'amount' => 'required|numeric',
            'sum' => 'required|string',
            'customer_id' => 'required|integer',
        ]);

        // adding investment
        $invest = new Invest();
        $invest->customer_id = $validated['customer_id'];
        $invest->amount = $validated['amount'];
        $invest->sum = $validated['sum'];
        $invest->reference = $validated['reference'];
        $invest->save();

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->customer_id = $validated['customer_id'];
        $transaction->type = "Company Investment";
        $transaction->reference = $validated['reference'];
        $transaction->amount = $validated['amount'];
        $transaction->sum = $validated['sum'];
        $transaction->invest_id = $invest->id;
        $transaction->save();

        return redirect()->back()->with('success', 'Investment Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function show(Invest $invest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function edit(Invest $invest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invest $invest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invest $invest)
    {
        //
    }
}

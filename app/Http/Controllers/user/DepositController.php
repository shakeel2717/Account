<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Gateway;
use App\Models\Tid;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gateways = Gateway::where('status', true)->get();
        return view('user.deposit.index', compact('gateways'));
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
        //
    }


    public function tid(Request $request)
    {
        $validated = $request->validate([
            'gateway_id' => 'required|numeric|exists:gateways,id',
            'amount' => 'required|numeric|min:1|max:2000000',
            'tid' => 'required|numeric|unique:tids',
        ]);

        // inserting new transaction

        $tid = new Tid();
        $tid->gateway_id = $validated['gateway_id'];
        $tid->user_id = auth()->user()->id;
        $tid->amount = $validated['amount'];
        $tid->tid = $validated['tid'];
        $tid->save();

        return redirect()->route('user.dashboard.index')->with('success', 'Your Deposit Request Received. Please wait until your Deposit Approved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gateway = Gateway::findOrFail($id);
        return view('user.deposit.show', compact('gateway'));
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
        $validated = $request->validate([
            'amount' => 'numeric|min:1|max:2000000',
        ]);
        $amount = $validated['amount'];

        $gateway = Gateway::findOrFail($id);
        return view('user.deposit.edit', compact('gateway', 'amount'));
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

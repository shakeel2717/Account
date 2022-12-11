<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Bet;
use App\Models\Group;
use App\Models\Slab;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'group_id' => 'required|integer|exists:groups,id',
            'slab_id' => 'required|integer|exists:slabs,id',
            'amount' => 'required|numeric|min:1|max:20000000'
        ]);

        // checking if balance is enough
        if ($validated['amount'] > balance(auth()->user()->id)) {
            return redirect()->route('user.dashboard.index')->withErrors("Insufficient balance, Please Add Funds to your account and try again.");
        }

        // inserting this user active bet
        $bet = new Bet();
        $bet->user_id = auth()->user()->id;
        $bet->slab_id = $validated['slab_id'];
        $bet->group_id = $validated['group_id'];
        $bet->amount = $validated['amount'];
        $bet->status = 'active';
        $bet->save();

        // adding transaction

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->type = "Bet";
        $transaction->amount = $validated['amount'];
        $transaction->status = 'approved';
        $transaction->sum = false;
        $transaction->save();

        auth()->user()->status = 'active';
        auth()->user()->save();


        return redirect()->route('user.dashboard.index')->with('success', 'Submitted Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::findOrFail($id);
        $slabs = Slab::get();
        return view('user.team.show', compact('group', 'slabs'));
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
            'group_id' => 'required|exists:groups,id'
        ]);

        $slab = Slab::findOrFail($id);
        $group = Group::findOrFail($validated['group_id']);

        return view('user.team.edit', compact('slab', 'group'));
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

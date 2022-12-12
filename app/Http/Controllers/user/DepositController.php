<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use App\Models\Gateway;
use App\Models\Tid;
use CoinpaymentsAPI;
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

        $gateway = Gateway::findOrFail($id);
        // checking if this method is online
        if ($gateway->offline != true) {
            // getting live rate
            $url = "https://v6.exchangerate-api.com/v6/106d34bcdb628f9cbe2ca3dd/pair/USD/PKR/";
            $data = json_decode(file_get_contents($url));
            $amount = $validated['amount'] / $data->conversion_rate;
            $private_key = env('PRIKEY');
            $public_key = env('PUBKEY');
            try {
                $cps_api = new CoinpaymentsAPI($private_key, $public_key, 'json');
                $currency1 = "USD";
                $currency2 = "USDT.TRC20";
                $buyer_email = auth()->user()->email;
                $ipn_url = env('IPN_URL');
                $information = $cps_api->CreateSimpleTransactionWithConversion($amount, $currency1, $currency2, $buyer_email, $ipn_url);
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
                exit();
            }

            if ($information['error'] == 'ok') {
                $qr = $information['result']['address'];

                // adding this request into database
                $task = new Crypto();
                $task->user_id = auth()->user()->id;
                $task->currencyf = $currency1;
                $task->amount = $amount;
                $task->address = $information['result']['address'];
                $task->dest_tag = "USDT.TRC20";
                $task->txn_id = $information['result']['txn_id'];
                $task->checkout_url = $information['result']['checkout_url'];
                $task->status_url = $information['result']['status_url'];
                $task->save();
                $data = $information['result'];
            } else {
                dd("API Connection Problem, Please Contact Administrator");
            }

            return view('user.deposit.crypto', compact('gateway', 'data', 'amount'));
        }
        $amount = $validated['amount'];
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

<?php

namespace App\Console\Commands;

use App\Models\Bet;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Console\Command;

class Blockchain extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blockchain:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        info('Blockchain Started!');
        // getting all active users with active bet
        $bets = Bet::where('status', 'active')->where('created_at', '>=', Carbon::now()->subHours(3)->toDateTimeString())->get();
        foreach ($bets as $bet) {

            // checking the slab ratio for the profit
            $profitRatio = $bet->slab->odds;
            $profit = $bet->amount * $profitRatio / 100;

            $transaction = new Transaction();
            $transaction->user_id = $bet->user_id;
            $transaction->type = "Profit";
            $transaction->amount = $profit;
            $transaction->status = 'approved';
            $transaction->sum = true;
            $transaction->reference = number_format($profitRatio, 2) . "% Profit " . number_format($bet->amount, 2) . ": Total Amount";
            $transaction->note = "Blockchain";
            $transaction->save();

            $transaction = new Transaction();
            $transaction->user_id = $bet->user_id;
            $transaction->type = "Reverse Principle";
            $transaction->amount = $bet->amount;
            $transaction->status = 'approved';
            $transaction->sum = true;
            $transaction->reference = 'Reverse Invested Amount';
            $transaction->note = "Blockchain";
            $transaction->save();

            $bet->status = 'closed';
            $bet->save();

            info($bet->user_id . " This User Id Bet is Successfully Closed");
        }

        return Command::SUCCESS;
    }
}

<?php

namespace App\Listeners;

use App\Events\CommissionToRefersEvent;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddCommissionToRefersListeners
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CommissionToRefersEvent  $event
     * @return void
     */
    public function handle(CommissionToRefersEvent $event)
    {
        info('Checking if user have Valid Upliners');

        if (auth()->user()->refer != "default") {
            $upliner1 = User::where('username', auth()->user()->refer)->first();
            $first_level = setting('first_level');

            $transaction = new Transaction();
            $transaction->user_id = $upliner1->id;
            $transaction->type = "Level 1 Commission";
            $transaction->amount = $event->bet->amount * $first_level / 100;
            $transaction->status = 'approved';
            $transaction->sum = true;
            $transaction->from = auth()->user()->username;
            $transaction->save();

            if ($upliner1->refer != "default") {
                $upliner2 = User::where('username', auth()->user()->refer)->first();
                $second_level = setting('second_level');

                $transaction = new Transaction();
                $transaction->user_id = $upliner2->id;
                $transaction->type = "Level 2 Commission";
                $transaction->amount = $event->bet->amount * $second_level / 100;
                $transaction->status = 'approved';
                $transaction->sum = true;
                $transaction->from = auth()->user()->username;
                $transaction->save();

                if ($upliner2->refer != "default") {
                    $upliner3 = User::where('username', auth()->user()->refer)->first();
                    $third_level = setting('third_level');

                    $transaction = new Transaction();
                    $transaction->user_id = $upliner3->id;
                    $transaction->type = "Level 3 Commission";
                    $transaction->amount = $event->bet->amount * $third_level / 100;
                    $transaction->status = 'approved';
                    $transaction->sum = true;
                    $transaction->from = auth()->user()->username;
                    $transaction->save();
                } else {
                    info('No Third Level Refer Found');
                }
            } else {
                info('No Second Level Refer Found');
            }
        } else {
            info('No First Level Refer Found');
        }
        info('Refer System Complete');
    }
}

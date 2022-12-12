<?php

namespace App\Http\Livewire\admin;

use App\Models\Transaction;
use App\Models\Withdraw;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class WithdrawRequeest extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Withdraw>
     */
    public function datasource(): Builder
    {
        return Withdraw::query()->where('status', false);
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('username', function (Withdraw $model) {
                return $model->user->username;
            })
            ->addColumn('amount')
            ->addColumn('bank')

            /** Example of custom column using a closure **/
            ->addColumn('bank_lower', function (Withdraw $model) {
                return strtolower(e($model->bank));
            })

            ->addColumn('number')
            ->addColumn('title')
            ->addColumn('r_number')
            ->addColumn('status')
            ->addColumn('created_at_formatted', fn (Withdraw $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Withdraw $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('USER ID', 'username'),

            Column::make('AMOUNT', 'amount')
                ->searchable(),

            Column::make('BANK', 'bank')
                ->searchable(),

            Column::make('NUMBER', 'number')
                ->searchable(),

            Column::make('TITLE', 'title')
                ->searchable(),

            Column::make('R NUMBER', 'r_number')
                ->searchable(),

            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable(),

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Withdraw Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            Button::make('approve', 'Approve')
                ->class('btn btn-primary')
                ->emit('approve', ['id' => 'id']),

            // Button::make('destroy', 'Delete')
            //     ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
            //     ->route('withdraw.destroy', ['withdraw' => 'id'])
            //     ->method('delete')
        ];
    }

    protected function getListeners()
    {
        return array_merge(
            parent::getListeners(),
            [
                'approve',
            ]
        );
    }



    public function approve($id)
    {
        $withdraw = Withdraw::find($id['id']);
        $withdraw->status = true;
        $withdraw->save();

        $withdrawTransaction = Transaction::find($withdraw->reference);
        $withdrawTransaction->status = "approved";
        $withdrawTransaction->save();

        $withdrawTransactionFees = Transaction::find($withdrawTransaction->note);
        $withdrawTransactionFees->status = "approved";
        $withdrawTransactionFees->save();
    }


    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Withdraw Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($withdraw) => $withdraw->id === 1)
                ->hide(),
        ];
    }
    */
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    use HasFactory;


    protected $fillable = [
        'customer_id',
        'reference',
        'type',
        'amount',
        'charges',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

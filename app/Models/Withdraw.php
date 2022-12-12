<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'amount',
        'bank',
        'number',
        'title',
        'r_number',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

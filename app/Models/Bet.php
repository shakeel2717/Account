<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    use HasFactory;



    protected $fillable = [
        'user_id',
        'group_id',
        'slab_id',
        'amount',
        'status',
    ];


    public function slab()
    {
        return $this->belongsTo(Slab::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}

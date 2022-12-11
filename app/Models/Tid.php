<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tid extends Model
{
    use HasFactory;



    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function gateway()
    {
        return $this->belongsTo(Gateway::class);
    }
}

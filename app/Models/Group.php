<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;


    public function firstTeam()
    {
        return $this->belongsTo(Team::class, 'first');
    }


    public function secondTeam()
    {
        return $this->belongsTo(Team::class, 'second');
    }
}

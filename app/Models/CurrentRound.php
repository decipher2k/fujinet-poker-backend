<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentRound extends Model
{
    use HasFactory;
    protected $table="current_round";
    protected $primaryKey="id";

     protected $fillable = [
        'id',
        'current_player',
        'round_num'
    ];
}

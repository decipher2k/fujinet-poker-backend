<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerBets extends Model
{
    use HasFactory;
    protected $table="player_bets";
    protected $primaryKey="id";

     protected $fillable = [
        'id',
        'player',
        'round',
        'bet',
        'bcrf'
    ];
}

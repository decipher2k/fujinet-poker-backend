<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerCards extends Model
{
    use HasFactory;
    protected $table="player_cards";
    protected $primaryKey="id";

     protected $fillable = [
        'id',
        'player',
        'round',
        'card',
        'is_hidden'
    ];
}

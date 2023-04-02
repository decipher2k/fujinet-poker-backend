<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoundHistory extends Model
{
    use HasFactory;
    protected $table="round_history";
    protected $primaryKey="id";

     protected $fillable = [
        'id',
        'player_won',
        'round_num'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $table="players";
    protected $primaryKey="id";

     protected $fillable = [
        'id',
        'player_name',
        'money',
        'position'
    ];
}

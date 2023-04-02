<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;
    protected $table="cards";
    protected $primaryKey="id";

     protected $fillable = [
        'id',
        'color',
        'value',
        'played'
    ];

}

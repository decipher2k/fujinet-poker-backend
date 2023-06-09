<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localization extends Model
{
    use HasFactory;
    protected $table="localization";
    protected $primaryKey="id";

     protected $fillable = [
        'id',
        'token',
        'string'
    ];
}

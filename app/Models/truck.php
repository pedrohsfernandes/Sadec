<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truck extends Model
{
    protected $fillable = 
    [
        'placa',
        'modelo',
        'ano',
        'user_id',
    ];
}

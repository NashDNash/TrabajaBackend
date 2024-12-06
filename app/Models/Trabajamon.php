<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajamon extends Model
{
    use HasFactory;
    protected $table = "trabajamons";
    protected $fillable = [
        'nombre', 'profesion', 'edad', 'vida', 'ataque', 'defensa', 'velocidad'
    ];
}

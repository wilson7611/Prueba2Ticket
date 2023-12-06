<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    use HasFactory;
    protected $fillable = [
        'ci', 
        'nombre_completo',
        'codigo',
        'celular',
        'email', 
    ];
}
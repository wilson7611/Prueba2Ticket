<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'estado',
        'medico_id',
    ];
    public function medicos()
    {
       return $this->belongsTo(Medico::class, 'medico_id');
    }
}

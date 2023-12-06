<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_hora',
        'codigo',
        'estado',
        'observacion',
        'afiliado_id',
        'medico_id',
    ];

    public function afiliados()
    {
        return $this->belongsTo(Afiliado::class, 'afiliado_id');
    }

    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
}

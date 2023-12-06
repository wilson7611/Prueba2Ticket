<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'medico_id',
        'hospital_id',
    ];

    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
    public function hospitales()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }
}

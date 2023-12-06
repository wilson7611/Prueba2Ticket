<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'propietario',
        'hospital_id',
    ];

    public function hospitales()
    {
        return $this->belongsTo(Hospitals::class, 'hospital_id');
    }
}

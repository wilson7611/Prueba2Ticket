<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;
    protected $fillable = [
        'hora',
        'atencion_id',
    ];

    public function atenciones()
    {
        return $this->belongsTo(Atencion::class, 'atencion_id');
    }
}

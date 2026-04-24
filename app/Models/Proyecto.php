<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proyecto extends Model
{
    //

    protected $fillable = [
        'cliente_id',
        'nombre',
        'descripcion',
        'estado',
    ];

    public function cliente(): BelongsTo{
        return $this->belongsTo(Cliente::class);
    }

}

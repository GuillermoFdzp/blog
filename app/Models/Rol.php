<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\BelongsToMany;

class Rol extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function usuario():BelongsToMany{
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'name',
        'email'
    ];


    public function perfil(){
        return $this->hasOne(perfil::class, 'usario_id');
    }
}

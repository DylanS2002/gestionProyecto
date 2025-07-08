<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = ['nombre', 'apellido', 'direccion', 'fecha_nacimiento', 'telefono', 'email', 'fecha_registro', 'genero'];

    public function factura(){
        return $this->hasMany(factura::class);
    }
}

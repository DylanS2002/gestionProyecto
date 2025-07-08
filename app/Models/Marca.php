<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['nombre','description'];

    public function producto(){
        return $this->hasMany(producto::class);
    }
}

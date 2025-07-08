<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio', 'precio_compra', 'stock', 'fecha_creacion', 'estado','idcategoria','idmarca'];

    public function marca(){
        return $this->belongsTo(marca::class, 'idmarca');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class,'idcategoria');
    }


    public function detalleFactura(){
        return $this->hasMany(DetalleFactura::class);
    }
}

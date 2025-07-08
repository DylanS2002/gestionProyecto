<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detalleFactura extends Model
{
    protected $fillable = ['cantidad', 'preciounitario', 'totalinea', 'idfactura', 'idproducto'];

    public function producto(){
        return $this->belongsTo(producto::class, 'idproducto');
    }

    public function factura(){
        return $this->belongsTo(factura::class,'idfactura');
    }
}

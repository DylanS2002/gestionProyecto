<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $fillable = ['fecha', 'Subtotal', 'impuestos', 'total','idcliente', 'idestado', 'idpago'];

    public function modoPago(){
        return $this->belongsTo(modo_pago::class, 'idpago');
    }

    public function cliente(){
        return $this->belongsTo(cliente::class, 'idcliente');
    }

    public function estado(){
        return $this->belongsTo( estado::class,'idestado');
    }

    public function detalleFactura(){
        return $this->hasMany(DetalleFactura::class);
    }
}

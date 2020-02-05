<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalle_venta';

    protected $primaryKey='iddetalle_venta';

    public $timestamp=false;

    protected $fillable=[
        'idventa',
        'idarticulo',
        'cantidad',
        'precio_venta',
        'descuento'
    ];
}

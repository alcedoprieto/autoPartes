<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
        'codigo','nombre','descripcion','stock','punto_reorden','precio', 'impuesto','monto_impuesto','monto_total','moneda','url_foto','tienda_id','subcategoria_id'
    ];
}

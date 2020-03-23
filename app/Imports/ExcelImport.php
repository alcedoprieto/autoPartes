<?php

namespace App\Imports;

use App\Articulo;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Articulo([
            'codigo'     => $row[0],
            'nombre'     => $row[1],
            'descripcion'     => $row[1],
            'stock'     => $row[6],
            'punto_reorden'     =>0,
            'precio'     => $row[5], 
            'impuesto'     => 16,
            'monto_impuesto'     => $row[5]*0.16,
            'monto_total'     => $row[5]*1.16,
            'moneda'        => 'USD'
            'tienda_id'     => 1,
            'subcategoria_id'     => 1
        ]);
    }
}

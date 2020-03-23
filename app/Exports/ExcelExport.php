<?php

namespace App\Exports;

use App\Articulo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Exportable;

class ExcelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Articulo::all();
    }
}

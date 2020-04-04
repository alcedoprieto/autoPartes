<?php

namespace App\Http\Controllers;

use App\Exports\ExcelExport;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Prestashop;

class ExcelController extends Controller
{
    public function create() 
    {
        //$opt['resource'] = 'products';
        //$opt['url'] = 'http://mundoyeti.local/api/products/113';
        //$xml=Prestashop::get($opt);
        //dd($xml);
        return view('excel');
    }
    
    public function export() 
    {
        return Excel::download(new ExcelExport, 'excel.xlsx');

    }
    public function import(Request $request) 
    {
    	/*
        $request->validate([
            'fileToUpload' => 'required|file|max:2048|mimes:xls,xlsx',
        ]);
		*/
        Excel::import(new ExcelImport, request()->file('fileToUpload'));
        
        return back()->with('success', 'Excel Imported, Download to see the imported data.');
    }

    public function json() 
    {
        return view('excelJson');
    }
}

<?php

namespace App\Http\Controllers;

use App\Exports\ExcelExport;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function create() 
    {
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
}

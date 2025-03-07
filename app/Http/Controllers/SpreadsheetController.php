<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets as FacadesSheets;

class SpreadsheetController extends Controller
{
    public function index()
    {
        $row = [['name' => 'Christian Quelonio', 'email' => 'cequelonio@joy-nostalg.com', 'id' => 4]];
        FacadesSheets::spreadsheet('1PmNM_MX06WH59aWXjpLVSuCRkiDxvmPce9umBiouzhQ')->sheet('Demo')->append($row);
        dd('done');
        // $values = Sheets::all();
        // [
        //   ['id', 'name', 'mail'],
        //   ['1', 'name1', 'mail1'],
        //   ['2', 'name1', 'mail2'],
        //   ['3', 'name3', 'mail3'],
        //   ['4', 'name4', 'mail4'],
        // ]
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassificaController extends Controller
{
    public function index()
    {
        $data = file_get_contents('https://www.terzadivisione.com/2019-power-ranking/');
        $data = explode('<table', $data);
        $data = explode('</table>', $data[1]);

        $table = '<table' . $data[0] . '</table>';

        return view('pages.table', compact('table'));
    }
}

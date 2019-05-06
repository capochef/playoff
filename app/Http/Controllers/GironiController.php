<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GironiController extends Controller
{
    public function index()
    {
        $data = file_get_contents('https://www.terzadivisione.com/2019-standings/');
        $data = explode('<table', $data);
        $data = explode('</table>', $data[1]);

        $table = '<table' . $data[0] . '</table>';

        return view('pages.table', compact('table'));
    }
}

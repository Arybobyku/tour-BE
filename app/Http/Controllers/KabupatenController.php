<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function show()
    {
        $kabupaten = Kabupaten::all();
        return view('kabupaten',["kabupaten"=>$kabupaten]);
    }

}

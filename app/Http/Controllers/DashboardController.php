<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kabupaten = Kabupaten::all();
        return view('dashboard',["kabupaten"=>$kabupaten]);
    }
}

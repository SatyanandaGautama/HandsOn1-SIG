<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function ShowMapsGabungan() {
        return view('mapsGabungan');
    } 
}
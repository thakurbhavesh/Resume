<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiController extends Controller
{
    function show(){
        return view('services');
    }
}

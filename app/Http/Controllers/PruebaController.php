<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    function prueba(){
        echo "Hola mundo!";
    }

    function tarea(){
        return view('prueba');
    }
}

<?php

namespace App\Http\Controllers;

use App\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function is_null;

class DocenteController extends Controller
{
    function index(){
        $docente = new Docente();
        $docente->nombre = 'Gonzalo';
        $docente->apellido = 'Apaza';
        $docente->ci = '12345';
        $docente->save();
        echo print_r($docente->getAttributes());
    }

    function show($idDocente = null){
        // Metodo 1
        //$docentes = DB::table('docentes')->get();
        // Metodo 2
        /*if ( $idDocente == 0) {
            $docentes = DB::select(DB::raw("SELECT * FROM docentes"));
        } else {
            $docentes = DB::select(DB::raw("SELECT * FROM docentes where id_docente = :id"), array('id' => $idDocente));
        }*/
        // Metodo 3
        if ( $idDocente == 0) {
            $docentes = Docente::all();
        } else {
            $docentes = Docente::where('id_docente','=', $idDocente)->get();
        }


        //echo print_r($docentes->toArray());
        echo print_r($docentes->toArray());

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
         return view('proyectos.nuevo_proyecto');
    }

    public function store(Request $request)
    {
        $data = array(
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha_fin' => $request->fecha_fin);
        return $data;
    }
}

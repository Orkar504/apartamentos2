<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\propiedade;

class adminController extends Controller
{
    public function mostrarPropiedades()
    {
        $propiedades = Propiedade::all();
        return view('allPropiedades', compact('propiedades'));

    }
}

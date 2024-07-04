<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\propiedade;
use App\Models\duenio;

class adminController extends Controller
{
    public function mostrarPropiedades()
    {
        $propiedades = Propiedade::all();
        return view('allPropiedades', compact('propiedades'));

    }

    public function mostrarDuenios()
    {
        $duenios = Duenio::all();
        return view('duenio', compact('duenios'));
    }
}

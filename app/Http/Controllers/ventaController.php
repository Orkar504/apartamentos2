<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ventaController extends Controller
{
    function calcPrecio(float $area, int $piso)
    {
        $costoExtra = 1.01;
        $costXmetro2 = 1500;
        $precio;

        if ($piso == null || $piso == 1)
        {
            $precio = $costXmetro2 * $area ; 
        } else
        {
            $precio = $costXmetro2 * $area ;
            for ($i = 1; $i < $piso; $i++)
            {
                $precio = $precio * $costoExtra;
            }
        }

        return view('venta', compact('area','piso','precio'));
    }

    
}

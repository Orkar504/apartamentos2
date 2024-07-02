<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ventaController extends Controller
{
    function calcPrecio(float $area, int $piso)
    {   
        $controller = new ventaController();
        $costoExtra = 1.01;
        $costXmetro2 = 1500;
        $precio;

        if ($piso == null || $piso == 1)
        {
            $precio = $costXmetro2 * $area ; 
            $controller->returnVentaView($area,$piso,$precio);
        } elseif($piso >0 && $piso <13)
        {
            $precio = $costXmetro2 * $area ;
            for ($i = 1; $i < $piso; $i++)
            {
                $precio = $precio * $costoExtra;
            }
            $controller->returnVentaView($area,$piso,$precio);
        }

       
    }

    private function returnVentaView(float $area,int $piso,float $precio)
    {
        return view('venta', compact('area','piso','precio'));

    }

    
}

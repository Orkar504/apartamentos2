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

    public function agregarDuenio()
    {
        return view('addDuenio');
    }

    public function guardarDuenio(Request $request)
    {
        $newDuenio = new duenio();
        $newDuenio->nombre =$request->name;
        $newDuenio->apellido =$request->apellido;
        $newDuenio->correo =$request->correo;
        $newDuenio->save();
        return redirect('/administracion/duenios');
    }

    public function preguntarDuenioID()
    {
        
        return view ('buscarDuenio');
    }

    public function buscarDuenio(Request $request)
    {
        $duenioID = $request->duenioID;
        $theDuenio = duenio::where('idDuenio',$duenioID)->get();
        return view('mostrarDuenio',compact('theDuenio'));

    }

    public function preguntarDuenioDeApartamento()
    {
        return view ('buscarDuenioDeApartamento');
    }
    public function  buscarDuenioDeApartamento(Request $request)
    {
        $apartamentoID = $request->propiedadID;
        $apartamentoData = propiedade::where('idDuenio',$apartamentoID)->get();
        $duenioID = $apartamentoData[0]["idDuenio"];
        $theDuenio = duenio::where('idDuenio',$duenioID)->get();
        
        return view('mostrarDuenio',compact('theDuenio'));
    }
    
    public function editarDuenio ($id)
    {
        
        $getDuenio = duenio::where('idDuenio',$id)->get();
        $duenioEditar = $getDuenio[0];
        return view('editarDuenio', compact('duenioEditar'));
    }

    public function guardarEdicionDuenio(Request $request,$id)
    {
        $duenioEDIT = duenio::find($id);
        $duenioEDIT->nombre = $request->name;
        $duenioEDIT->apellido = $request->apellido;
        $duenioEDIT->correo = $request->correo;

        $duenioEDIT->save();
        return redirect('/administracion/duenios');

        /*
       $getDuenio = duenio::where('idDuenio',$id)->get();
   
      
        $duenioEditar = $getDuenio[0];
      
         
        $duenioEditar->nombre = $request->name;
      
        
        $duenioEditar->apellido = $request->apellido;
        $duenioEditar->correo = $request->correo;
        echo $duenioEditar;
        $duenioEditar->save();
       // return redirect('/administracion/duenios');
        
        */
    }
}

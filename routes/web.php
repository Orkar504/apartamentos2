<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ventaController;
use App\Http\Controllers\adminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/venta/{area}/{piso}',[ventaController:: class,'calcPrecio' ]);
Route::get('/venta/{area}/',[ventaController:: class,'calcPrecioNoPiso' ]);


Route::get('/renta',function()
{
    echo "vista renta";

});
Route::get('/administracion',function()
{
    echo "vista admin";
});

Route::get ('/administracion/apartamentos',
[adminController:: class, 'mostrarPropiedades']);

Route::get ('/administracion/duenios',
[adminController:: class, 'mostrarDuenios'])
->name('duenio.mostrar');

Route::get ('/administracion/agregar/duenio',
[adminController:: class, 'agregarDuenio']);

;

Route::post ('/administracion/guardar/duenio',
[adminController:: class, 'guardarDuenio'])
->name('duenio.guardar');

//buscar los duenios

// Por duenio ID

Route::get('/administracion/buscar/duenio',
[adminController:: class, 'preguntarDuenioID']);

Route::post('/administracion/mostrar/duenio',
[adminController:: class, 'buscarDuenio'])
->name('duenio.buscar');

// Por apartamento id
Route::get('/administracion/buscar/apartamento/duenio',
[adminController:: class, 'preguntarDuenioDeApartamento']);

Route::post('/administracion/mostrar/apartamento/duenio',
[adminController:: class, 'buscarDuenioDeApartamento'])
->name('duenio.buscar2');

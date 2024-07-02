<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ventaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/venta/{area}/{piso?}',[ventaController:: class,'calcPrecio' ]);


Route::get('/renta',function()
{
    echo "vista renta";

});
Route::get('/administracion',function()
{
    echo "vista admin";
});

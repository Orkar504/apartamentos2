<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/venta/{area}/{piso$}',function()
{
    echo "vista venta";
});
Route::get('/renta',function()
{
    echo "vista renta";

});
Route::get('/administracion',function()
{
    echo "vista admin";
});

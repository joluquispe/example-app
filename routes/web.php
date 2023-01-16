<?php

use Hamcrest\TypeSafeDiagnosingMatcher;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * Route::get   | Consultar
 * Route::post  | Guardar
 * Route::delete| Eliminar
 * Route::put   | Actualizar
 */

Route::get('/', function () {
    return view('home');
});

 Route::get('blog', function () {
    //consulta a base de datos
    $post = [
        ['id' => 1, ]
    ];
    return 'HOME PAGE';
});
 Route::get('blog', function () {
    return 'Lista de Publicaciones';
});

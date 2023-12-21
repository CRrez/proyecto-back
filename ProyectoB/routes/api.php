<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ArticuloCOntroller;
use App\http\Controllers\LocalCOntroller;
use App\http\Controllers\TraspasoCOntroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'articulo'], function () {

    Route::post('registrarArticulo', [ArticuloCOntroller::class, 'registrarArticulo']);
    Route::post('actualizaArticulo', [ArticuloCOntroller::class, 'actualizaArticulo']);
    Route::get('listaArticulo', [ArticuloCOntroller::class, 'listaArticulo']);
    Route::delete('EliminarArticulo', [ArticuloCOntroller::class, 'EliminarArticulo']);

   
   
});


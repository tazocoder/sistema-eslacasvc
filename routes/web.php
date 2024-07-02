<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return 'Initial page';
});
*/

Route::get("/", [\App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get("/sobre", [\App\Http\Controllers\SobreController::class, 'sobre']);
Route::get("/contato", [\App\Http\Controllers\ContatoController::class, 'contato']);
// nome, categoria, assunto, msg

Route::get('/escala', [\App\Http\Controllers\EscalaController::class, 'escala']);
Route::get('/login', function(){ return 'Login';});

/* 
Route::get('/sobre', function () {
    return 'Sobre';
});

Route::get('/contato', function () {
    return 'Contato';
});
*/
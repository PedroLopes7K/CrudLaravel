<?php

use App\Http\Controllers\GamesController;
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

// criando um grupo de rotas com o mesmo prefixo (games)
Route::prefix('Games')->group(function () {
    Route::get('/', [GamesController::class, 'index'])->name('games-index');
    Route::get('/create', [GamesController::class, 'create'])->name('games-create');
    Route::post('/', [GamesController::class, 'store'])->name('games-store');
});

// funcao fallback é chamado quando ocorre um erro de  rota
Route::fallback(function () {
    return "Error 404!";
});

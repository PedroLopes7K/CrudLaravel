<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GamesController::class, 'index'])->name('games-index');

// criando um grupo de rotas com o mesmo prefixo (games)
Route::prefix('Games')->group(function () {
    // Route::get('/', [GamesController::class, 'index'])->name('games-index');
    Route::get('/create', [GamesController::class, 'create'])->name('games-create');
    Route::post('/', [GamesController::class, 'store'])->name('games-store');
    Route::get('/{id}/edit', [GamesController::class, 'edit'])->where('id', '[0-9]+')->name('games-edit');
    Route::put('/{id}', [GamesController::class, 'update'])->where('id', '[0-9]+')->name('games-update');
    Route::delete('/{id}/delete', [GamesController::class, 'destroy'])->where('id', '[0-9]+')->name('games-destroy');
});

// funcao fallback é chamado quando ocorre um erro de  rota
Route::fallback(function () {
    // return "Error 404!";
    return view('games.error');
});

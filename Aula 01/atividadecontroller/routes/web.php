<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GameController;

Route::get('/buscar/{nome}', [GameController::class, 'search']);



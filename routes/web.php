<?php

use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontEndController::class, 'home']);



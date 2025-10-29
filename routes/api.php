<?php

use App\Http\Controllers\SpellController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/cast',[SpellController::class, 'show']);

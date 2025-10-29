<?php

use App\Http\Controllers\ElementController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\SpellController;
use App\Models\Element;
use App\Models\Spell;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $fire_spells = [];

    return inertia('Welcome', [
        "elements" => Element::all(),
        "fire_spells" => Spell::all(),
    ]);
});

Route::get('/spellbook', [SpellController::class, 'index']);
Route::get('/match', [GameController::class, 'init_match']);
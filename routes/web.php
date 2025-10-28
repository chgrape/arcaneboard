<?php

use App\Http\Controllers\ElementController;
use App\Models\Element;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome', [
        "elements" => Element::all()
    ]);
});

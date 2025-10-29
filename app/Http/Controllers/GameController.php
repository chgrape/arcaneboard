<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class GameController extends Controller
{
    public function init_match(){
        Redis::hset('player:1', 'hp', 100);
        Redis::hset('player:2', 'hp', 100);

        $player1 = json_decode(Redis::hget('player:1', 'hp'), true);

        return inertia('Match', [
            "player" => $player1
        ]);
    }


}

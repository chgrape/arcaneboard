<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    protected $fillable = ["name", "element_id", "power"];

    public function element(){
        return $this->belongsTo(Element::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    public static function getOne($id)
    {
        return Personnage::find($id);
    }

    public function dessinateur()
    {
        return $this->belongsTo(Dessinateur::class);
    }
}
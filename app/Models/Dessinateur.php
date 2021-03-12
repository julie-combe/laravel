<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dessinateur extends Model
{
    use HasFactory;

    public static function getOne($id)
    {
        return Dessinateur::find($id);
    }

    public function personnages()
    {
        return $this->hasMany(Personnage::class);
    }
}
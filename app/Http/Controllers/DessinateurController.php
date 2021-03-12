<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DessinateurController extends Controller
{
    public static function add(Request $request)
    {
        $dessinateur = new Dessinateur;
        $personnage->nom = $request->nom;
        $personnage->naissance = $request->naissance;
        $personnage->nationalite = $request->nationalite;
        $personnage->save();
        return redirect ('/list');
    }
}

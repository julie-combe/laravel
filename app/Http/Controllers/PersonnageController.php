<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;

class PersonnageController extends Controller
{
    public static function add(Request $request)
    {
        $personnage = nouvelle bd;
        $personnage->nom = $request->nom;
        $personnage->creation = $request->creation;
        $personnage->affilie = $request->affilie;
        $personnage->dessinateur = $request->dessinateur;
        $personnage->save();
        return redirect ('/list');
    }

    public static function delete(Request $request)
    {
       Personnnage::destroy($request->id);
       $personnage->delete();
       return redirect('/list');
    }

    public static function modify(Request $request)
    {
        $personnage = ::find($request->id);
        $personnage = nouvelle bd;
        $personnage->nom = $request->nom;
        $personnage->creation = $request->creation;
        $personnage->affilie = $request->affilie;
        $personnage->dessinateur = $request->dessinateur;
        $personnage->save();
        return redirect('/list');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Models\Dessinateur;



class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function list()
    {
        $personnages = Personnage::all();
        return view('list', ['personnages' => $personnages]);
    }

    public function personnage($id)
    {
        $personnage = personnage::getOne($id);
        return view('personnage', ['personnage' => $personnage]);
    }

    public function add()
    {
        $dessinateurs = Dessinateur::all()->sortBy('nom');
        return view('add', ['dessinateurs' => $dessinateurs]);
    }

    public function updateBook($id)
    {
        $personnage = personnage::find($id);
        $dessinateurs = Dessinateur::all()->sortBy('name');
        return view('update', ['personnage' => $personnage]);
    }
}
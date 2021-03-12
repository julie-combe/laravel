@extends('layouts.base')
@section('title', 'Personnage')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/personnage.css') }}">
@endsection

@section('content')
    <h1 class="title">Détail du personnage</h1>
    <div id="card">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{ $personnage->nom }}</div>
            <div class="card-body text-dark flex">
                <p>Creation :</p>
                <p class="card-text">{{ $personnage->creation }}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Affilie :</p>
                <p class="card-text">{{ $personnage->affilie }}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Dessinateur :</p>
                <p class="card-text">{{ $personnage->dessinateur }}</p>
            </div>
        </div>
    </div>
@endsection
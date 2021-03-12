@extends('layouts.base')
@section('title', 'Personnage')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/list.css') }}">
@endsection

@section('content')
    <h1 class="title">Liste des personnages</h1>
    <div class="list">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Creation</th>
                    <th scope="col">Affilie</th>
                    <th scope="col">Dessinateur</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($personnages as $personnage)
                <tr>
                    <th scope="row">{{ $personnage->id }}</th>
                    <td><a href="/personnage/{{ $personnage->id }}">{{ $personnage->title }}</a></td>
                    <td>{{ $personnage->Dessinateur->nom }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
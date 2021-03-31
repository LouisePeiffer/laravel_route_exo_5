@extends('layouts.index')

@section('content')
    @include('partial.header')
    <div>
        <h3>Notre développeur frontend</h3>
        <p>Ucclois, musicien, créatif, concentré, c'est Maxence Jean-Michel Chantal Lemaire.</p>
    </div>
    
    @foreach ($fronts as $front)
        <div>
            <h2>Prénom : {{$front->nom}}</h2>
            <p>Fonction : {{$front->fonction}}</p>
        </div>
    @endforeach

@endsection
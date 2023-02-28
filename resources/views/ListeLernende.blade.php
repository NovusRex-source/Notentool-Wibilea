@extends('layouts.app')

@section('content')

<h1>Übersicht Lernende</h1>
<table border="1">
    @foreach ($Lernende as $item)
        <tr>
            <td>{{$item->pkLernende}}</td>
            <td>{{$item->fldVorname}}</td>
            <td>{{$item->fldNachname}}</td>
            <td>{{$item->fldEmail}}</td>
            <td>{{$item->fldLehrjahr}}</td>
            <td>{{$item->fldBerufsbezeichnung}}</td>
            <td><a href="/EinzelnLernende/{{$item->pkLernende}}">Notenübersicht<a></td>
            <td><a href="/Lernende/edit/{{$item->pkLernende}}">Edit</a></td>
            <td><a href="/Lernende/destroy/{{$item->pkLernende}}">Delete</a></td>

        </tr>
    @endforeach


@endsection
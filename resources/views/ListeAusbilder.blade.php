@extends('layouts.app')
@section('content')


<h1>Übersicht Ausbilder</h1>
<table border="1">
    @foreach ($Ausbilder as $item)
        <tr>
            <td>{{$item->pkAusbilder}}</td>
            <td>{{$item->fldBenutzername}}</td>
            <td>{{$item->fldBerufsbezeichnung}}</td>
            <td><a href="Ausbilder/edit/{{$item->pkAusbilder}}">Edit</a></td>
            <td><a href="Ausbilder/destroy/{{$item->pkAusbilder}}">Delete</a></td>

        </tr>
    @endforeach


@endsection
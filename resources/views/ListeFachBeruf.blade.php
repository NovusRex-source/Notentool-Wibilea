@extends('layouts.app')
@section('content')

<table border="1">
    @foreach ($Beruf as $item)
        <tr>
            <td>{{$item->pkLehrberuf}}</td>
            <td>{{$item->fldBerufsbezeichnung}}</td>
            <td><a href="destroy/{{$item->pkFachLehrberuf}}">Delete</a></td>

        </tr>
    @endforeach
    @foreach ($Fach as $Faecher)
    <td><a href="create/{{$Faecher->pkFach}}">Add</a></td>
    <h1>Übersicht {{$Faecher->fldFachname}}</h1>
    @endforeach



@endsection
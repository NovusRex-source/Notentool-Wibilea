@extends('layouts.app')
@section('content')

<table border="1">
    @foreach ($Beruf as $item)
        <tr>
            <td>{{$item->pkLehrberuf}}</td>
            <td>{{$item->fldBerufsbezeichnung}}</td>
            <td><a href="FachBeruf/destroy/{{$item->pkFachLehrberuf}}">Delete</a></td>

        </tr>
    @endforeach
    <td><a href="FachBeruf/create/{{$item->pkLehrberuf}}">Add</a></td>
    <h1>Übersicht {{$item->fldFachname}}</h1>



@endsection
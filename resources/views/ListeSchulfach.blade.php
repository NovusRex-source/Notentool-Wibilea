@extends('layouts.app')
@section('content')


<h1>Übersicht Schulfächer</h1>
<table border="1">
    @foreach ($Schulfach as $item)
        <tr>
            <td>{{$item->pkFach}}</td>
            <td>{{$item->fldFachname}}</td>
            <td>{{$item->fldEnabled}}</td>
            <td><a href="FachBeruf/{{$item->pkFach}}">Details</a></td>
            <td><a href="Schulfach/edit/{{$item->pkFach}}">Edit</a></td>
            <td><a href="Schulfach/destroy/{{$item->pkFach}}">Delete</a></td>

        </tr>
    @endforeach


@endsection
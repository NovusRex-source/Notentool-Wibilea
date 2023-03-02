@extends('layouts.app')
@section('content')


<h1>Übersicht Schulfächer</h1>
<table border="1">
    @foreach ($Schulfach as $item)
        <tr>
            <td>{{$item->pkFach}}</td>
            <td>{{$item->fldFachname}}</td>
            <td>{{$item->fldEnabledB}}</td>
            <td><a href="FachBeruf/{{$item->pkFach}}">Details</a></td>
            <td><a href="Schulfach/edit/{{$item->pkFach}}">Edit</a></td>
            <td><a href="Schulfach/destroy/{{$item->pkFach}}">Delete</a></td>

        </tr>
    @endforeach
    <form method="get" action="/Schulfach/filter">
        Filter
       <label>
        Suche:
        <input type="text" value="" name="Suche">

    </label>
    <button type="submit" value="Filter" >Filtern</button>
</form>

@endsection
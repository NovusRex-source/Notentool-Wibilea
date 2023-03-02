@extends('layouts.app')

@section('content')

<h1>Übersicht Lernende</h1>
<table border="1">
    @if ($_COOKIE['Rolle'] == "Superadmin")
    @foreach ($Lernende as $item)
        <tr>
            <td>{{$item->pkLernende}}</td>
            <td>{{$item->fldVorname}}</td>
            <td>{{$item->fldNachname}}</td>
            <td>{{$item->fldEmail}}</td>
            <td>{{$item->fldLehrjahr}}</td>
            <td>{{$item->fldBerufsbezeichnung}}</td>
            <td><a href="/Note/{{$item->pkLernende}}">Notenübersicht<a></td>
            <td><a href="/Lernende/edit/{{$item->pkLernende}}">Edit</a></td>
            <td><a href="/Lernende/destroy/{{$item->pkLernende}}">Delete</a></td>
        </tr>
    @endforeach

    <label>
    <form method="get" action="/Lernende/filter/">
        Filter
        <select name="Lehrberuf">
        @foreach($Beruf as $item)
        <option value="{{$item->pkLehrberuf}}">{{ $item->fldBerufsbezeichnung}}</option>
       @endforeach
        </select>
    </label>
    <button type="submit" value="Filter" >Filtern</button>
</form>

@endif
@if ($_COOKIE['Rolle'] == "Ausbilder")
@foreach ($Lernendefilter as $item)
<tr>
    <td>{{$item->pkLernende}}</td>
    <td>{{$item->fldVorname}}</td>
    <td>{{$item->fldNachname}}</td>
    <td>{{$item->fldEmail}}</td>
    <td>{{$item->fldLehrjahr}}</td>
    <td>{{$item->fldBerufsbezeichnung}}</td>
    <td><a href="/Note/{{$item->pkLernende}}">Notenübersicht<a></td>
    <td><a href="/Lernende/edit/{{$item->pkLernende}}">Edit</a></td>
    <td><a href="/Lernende/destroy/{{$item->pkLernende}}">Delete</a></td>
</tr>
@endforeach
@endif

@endsection
@extends('layouts.app')
@foreach ($Lernende as $item)
<h1>{{$item->fldVorname}} {{$item->fldNachname}}</h1>
@endforeach
<table border="1">
    @foreach ($Noten as $item)
        <tr>
            <td>{{$item->pkNoten}}</td>
            <td>{{$item->fldFachname}}</td>
            <td>{{$item->fldThema}}</td>
            <td>{{$item->fldTimestamp}}</td>
            <td id="Note">{{$item->fldNote}}</td>
            @if ($_COOKIE['Rolle'] !== "Lernende")
            <td><a href="/Note/destroy/{{$item->pkNoten}}">Delete</a></td>
            
            @endif
        </tr>
    @endforeach
    <label>
        @foreach ($Lernende as $item)
    <form method="get" action="/Note/filter/{{$item->pkLernende}}">
        Filter
        <select name="Fach">
        @foreach($Beruf as $item)
        <option value="{{$item->pkFach}}">{{ $item->fldFachname}}</option>
       @endforeach
        </select>
    </label>
    <button type="submit" value="Filter" >Filtern</button>
</form>
@endforeach
{{$avg}}

@section('content')
@endsection
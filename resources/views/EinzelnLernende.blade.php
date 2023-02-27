@extends('layouts.app')
@foreach ($Lernende as $item)
<h1>{{$item->fldVorname}} {{$item->fldNachname}}</h1>
@endforeach
<table border="1">
    @foreach ($Noten as $item)
        <tr>
            <td>{{$item->pkNoten}}</td>
            <td>{{$item->fkFachA}}</td>
            <td>{{$item->fldTimestamp}}</td>
            <td>{{$item->fldNote}}</td>
            <td><a href="">Edit</a></td>

        </tr>
    @endforeach
 

@section('content')
        <EinzelnLernende> </EinzelnLernende>
@endsection
@extends('layouts.app')
@section('content')


<h1>Übersicht Ausbilder</h1>
<table border="1">
    @foreach ($Ausbilder as $item)
        <tr>
            <td>{{$item->pkAusbilder}}</td>
            <td>{{$item->fldVorname}}</td>
            <td>{{$item->fldNachname}}</td>
            <td>{{$item->fldEmail}}</td>
            <td><a href="/">Edit</a></td>
            <td><a href="/">Delete</a></td>

        </tr>
    @endforeach


@endsection
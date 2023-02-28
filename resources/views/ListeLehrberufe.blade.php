@extends('layouts.app')
@section('content')


<h1>Übersicht Lehrberufe</h1>
<table border="1">
    @foreach ($Beruf as $item)
        <tr>
            <td>{{$item->pkLehrberuf}}</td>
            <td>{{$item->fldBerufsbezeichnung}}</td>
            <td><a href="Lehrberuf/edit/{{$item->pkLehrberuf}}">Edit</a></td>
            <td><a href="Lehrberuf/destroy/{{$item->pkLehrberuf}}">Delete</a></td>

        </tr>
    @endforeach


@endsection
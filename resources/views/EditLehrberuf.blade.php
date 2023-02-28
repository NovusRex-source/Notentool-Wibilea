
@extends('layouts.app')

@section('content')
@foreach ($Beruf as $item)
<h1>Lehrberufe bearbeiten</h1>
<form method="POST" action="/Lehrberuf/update/{{$item->pkLehrberuf}}"> 
    @csrf
    <input type="hidden" name="id" value="{{$item->pkLehrberuf}}">
    <label>
        Lehrberuf<input type="text" name="Beruf" value="{{$item->fldBerufsbezeichnung}}" />
    </label>
    <button type="submit" value="Erfassen" >Anpassen</button>
    </form>
    @endforeach
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection
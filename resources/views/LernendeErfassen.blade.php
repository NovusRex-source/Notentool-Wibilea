@extends('layouts.app')

@section('content')

<h1>Lernenden  erfassen</h1>
<form method="GET" action="/Lernende/post"> 
    <label>
        Vorname<input type="text" name="Vorname" value="" />
    </label>
    <label>
        Nachname<input type="text" name="Nachname" value="" />
    </label>
    <label>
        Email<input type="text" name="Email" value="" />
    </label>
    <select name="Lehrberuf">
    @foreach($Berufe as $Beruf)
    <option  value="{{ $Beruf->pkLehrberuf}}">{{ $Beruf->fldBerufsbezeichnung}}</option>
   @endforeach
    </select>
    <label>
        Lehrjahr<input type="year" name="Lehrjahr" value="2019" />
    </label>
    <button type="submit" value="Erfassen" >Erfassen</button>
    
    </form>
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection
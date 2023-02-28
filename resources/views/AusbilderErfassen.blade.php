
@extends('layouts.app')

@section('content')

<h1>Ausbilder  erfassen</h1>
<form method="GET" action="/Ausbilder/post"> 
    <label>
        Benutzername<input type="text" name="Ausbilder" value="" />

    </label>

    Lehrberuf
    <select name="Lehrberuf">
    @foreach($Berufe as $Beruf)
    <option  value="{{ $Beruf->pkLehrberuf}}">{{ $Beruf->fldBerufsbezeichnung}}</option>
   @endforeach
    </select>
    <button type="submit" value="Erfassen" >Erfassen</button>
    
    </form>
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection
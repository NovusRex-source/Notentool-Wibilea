
@extends('layouts.app')

@section('content')
@foreach ($Lernende as $item)
<h1>Lernende bearbeiten</h1>
<form method="POST" action="/Lernende/update/{{$item->pkLernende}}"> 
    @csrf
    <input type="hidden" name="id" value="{{$item->pkLernende}}">
    <label>
        Vorname<input type="text" name="Vorname" value="{{$item->fldVorname}}" />
    </label>
    <br>
    <label>
        Nachname<input type="text" name="Nachname" value="{{$item->fldNachname}}" />
    </label>
    <br>
    <label>
        Email<input type="text" name="Email" value="{{$item->fldEmail}}" />
    </label>
    <br>
    <label>
    Lehrberuf
    <select name="Lehrberuf">
    @foreach($Berufe as $Beruf)
    <option value="{{ $Beruf->pkLehrberuf}}">{{ $Beruf->fldBerufsbezeichnung}}</option>
   @endforeach
    </select>
</label>

    <br>
    <label>
        Lehrjahr<input type="text" name="Lehrjahr" value="{{$item->fldLehrjahr}}" />
    </label>
 

    <button type="submit" value="Erfassen" >Anpassen</button>
    </form>
    @endforeach
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection

@extends('layouts.app')

@section('content')
@foreach ($Ausbilder as $item)
<h1>Ausbilder bearbeiten</h1>
<form method="POST" action="/Ausbilder/update/{{$item->pkAusbilder}}"> 
    @csrf
    <input type="hidden" name="id" value="{{$item->pkAusbilder}}">
    <label>
        Benutzername<input type="text" name="Ausbilder" value="{{$item->fldBenutzername}}" />
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

    <button type="submit" value="Erfassen" >Anpassen</button>
    </form>
    @endforeach
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection
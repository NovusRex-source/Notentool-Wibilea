
@extends('layouts.app')

@section('content')
@foreach ($Schulfach as $item)
<h1>Schulfach bearbeiten</h1>
<form method="POST" action="/Schulfach/update/{{$item->pkFach}}"> 
    @csrf
    <input type="hidden" name="id" value="{{$item->pkFach}}">
    <label>
        Schulfach<input type="text" name="Fach" value="{{$item->fldFachname}}" />
    </label>
    <button type="submit" value="Erfassen" >Anpassen</button>
    </form>
    @endforeach
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection
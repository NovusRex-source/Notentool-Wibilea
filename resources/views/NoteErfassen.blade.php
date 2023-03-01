
@extends('layouts.app')

@section('content')
<h1>Note Erfassen</h1>
<form method="Post" action="/Note/post"> 
    @csrf
    <input type="hidden" name="id" value="{{$User}}">

    <label>
        Datum<input type="date" name="Datum" value="" />
    </label>
    <br>
    <label>
        Schulfach
        <select name="Fach">
        @foreach($Beruf as $item)
        <option value="{{$item->pkFach}}">{{ $item->fldFachname}}</option>
       @endforeach
        </select>
    </label>
    <br>
    <label>
        Thema<input type="text" name="Thema" value="" />
    </label>
    <br>
    <label>
        Note<input type="text" name="Note" value="" />
    </label>
<br>
<label>
    Begründung<input type="text" name="Begründung" value="" />
</label>
 

    <button type="submit" value="Erfassen" >Anpassen</button>
    </form>
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection
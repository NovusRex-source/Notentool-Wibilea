@extends('layouts.app')

@section('content')

<form method="get" action="/FachBeruf/post/{{$pkFach}}"> 

    <select name="Lehrberuf">
    @foreach($Beruf as $item)
    <option  value="{{ $item->pkLehrberuf}}">{{ $item->fldBerufsbezeichnung}}</option>
   @endforeach
    </select>
    <input type="hidden" name="Schulfach" value="{{$pkFach}}">

    <button type="submit" value="Erfassen" >Zuordnen</button>
    
    </form>
    
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection
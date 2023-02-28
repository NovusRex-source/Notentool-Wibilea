
@extends('layouts.app')

@section('content')

<h1>Lehrberuf erfassen</h1>
<form method="GET" action="/Lehrberuf/post"> 
    <label>
        Berufsbezeichnung<input type="text" name="Beruf" value="" />
    </label>
    <button type="submit" value="Erfassen" >Erfassen</button>
    
    </form>
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection
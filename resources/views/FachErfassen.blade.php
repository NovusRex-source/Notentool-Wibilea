
@extends('layouts.app')

@section('content')

<h1>Schulfach erfassen</h1>
<form method="GET" action="/Schulfach/post"> 
    <label>
        Schulfach<input type="text" name="Fach" value="" />
    </label>
    <button type="submit" value="Erfassen" >Erfassen</button>
    
    </form>
    @isset($Message)
    <p>{{$Message}}</p>
    @endisset
    
    

@endsection
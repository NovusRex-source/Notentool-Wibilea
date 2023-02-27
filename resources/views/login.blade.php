
@extends('layouts.app')


@section('content')


<form method="GET" action="/Cookie"> 
    <label>
        <input type="radio" name="Rolle" value="Lernender" />Lernender
    </label>
    <label>
        <input type="radio" name="Rolle"  value="Ausbilder" />Ausbilder
    </label>
    <label>
        <input type="radio" name="Rolle" value="Superadmin" />Superadmin
    </label>
    <input type="submit" name="Anmelden" value="Anmelden"><br>
    
    </form>
    
    
    
    

@endsection
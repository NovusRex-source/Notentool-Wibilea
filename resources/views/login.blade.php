
@extends('layouts.app')


@section('content')


<form method="GET" action="/Cookieset"> 
      <label>
        <input type="radio" name="Rolle" value="Lernende" />Lernende
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
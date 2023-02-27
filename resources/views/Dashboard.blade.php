@extends('layouts.app')

<h1 id="Rolle">{{$Rolle}}</h1>

@section('content')
<div class="Dashboardelements">
@if($Rolle == 'Lernende')
<div>
<a class="Dashboardelement" href="/EinzelnLernende">Meine Noten</a>
<a class="Dashboardelement" href="/NoteErfassen">Note erfassen</a>
</div>
@endif


@if ($Rolle == 'Ausbilder' or $Rolle == 'Superadmin')
<div>
<a class="Dashboardelement" href="/LernendeErfassen">Lernende erfassen</a>
<a class="Dashboardelement" href="/ListeLernende">Liste Lernende</a>
</div>
@endif

@if ($Rolle == 'Superadmin')
<div>
<a class="Dashboardelement" href="/AusbilderErfassen">Ausbilder erfassen</a>
<a class="Dashboardelement" href="/ListeAusbilder">Liste Ausbilder</a>
</div>
<div>
<a class="Dashboardelement" href="/Schulfach/create">Schulfach erfassen</a>
<a class="Dashboardelement" href="/Schulfach">Liste Schuflächer</a>
</div>
<div>
<a class="Dashboardelement" href="/BerufErfassen">Beruf erfassen</a>
<a class="Dashboardelement" href="/ListeBerufe">Liste Berufe</a>
</div>
@endif

</div>
    
@endsection
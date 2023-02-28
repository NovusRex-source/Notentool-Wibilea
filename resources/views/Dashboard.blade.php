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
<a class="Dashboardelement" href="/Lernende/create">Lernende erfassen</a>
<a class="Dashboardelement" href="/Lernende">Liste Lernende</a>
</div>
@endif

@if ($Rolle == 'Superadmin')
<div>
<a class="Dashboardelement" href="/Ausbilder/create">Ausbilder erfassen</a>
<a class="Dashboardelement" href="/Ausbilder">Liste Ausbilder</a>
</div>
<div>
<a class="Dashboardelement" href="/Schulfach/create">Schulfach erfassen</a>
<a class="Dashboardelement" href="/Schulfach">Liste Schuflächer</a>
</div>
<div>
<a class="Dashboardelement" href="/Lehrberuf/create">Lehrberuf erfassen</a>
<a class="Dashboardelement" href="/Lehrberuf">Liste Lehrberufe</a>
</div>
@endif

</div>
    
@endsection
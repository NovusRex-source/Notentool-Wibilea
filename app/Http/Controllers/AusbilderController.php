<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class AusbilderController extends Controller
{
    function index()
    {
        $Ausbilder = DB::table('viewAusbilderBeruf')->get();
        return view('ListeAusbilder', ['Ausbilder' => $Ausbilder]);
    }
    function create()
    {
        $Berufe = DB::table('tblLehrberuf')->get();
        return view('AusbilderErfassen', ['Berufe'=>$Berufe]);

    }
function post()
{
    if ($_GET['Ausbilder'] != "") {
        DB::table('tblAusbilder')
            ->insert(
                [
                    'fldBenutzername' => $_GET['Ausbilder'],
                    'fkLehrberufA' => $_GET['Lehrberuf'],
                ]
            );
        return redirect('Ausbilder/create');
    } 
}
function edit($pkAusbilder)
{
    {
        $Ausbilder = DB::table('viewAusbilderBeruf')->where('pkAusbilder',$pkAusbilder)->get();
        $Berufe = DB::table('tblLehrberuf')->get();
        return view('EditAusbilder', ['Ausbilder' => $Ausbilder, 'Berufe'=>$Berufe]);
    } 
}
function update(request $request){
    if ($request['Ausbilder'] != ""){
     DB::table('tblAusbilder')->where('pkAusbilder',$request['pkAusbilder'])->update(
[
    'fldBenutzername' => $request['Ausbilder'],
    'fkLehrberufA' => $request['Lehrberuf'],
]
);}
return redirect('Ausbilder');
}


function destroy($pkLehrberuf)
{
    DB::table('tblAusbilder')
    ->where('pkAusbilder', $pkLehrberuf)
    ->delete(
    );
    return redirect('Ausbilder');
}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class LernendeController extends Controller
{
function index()
{   $Lernendefilter = DB::table('viewLernendeBeruf')->where('pkLehrberuf', $_COOKIE['Beruf'])->get();
    $Lernende = DB::table('viewLernendeBeruf')->get();
    return view('ListeLernende', ['Lernende'=>$Lernende, 'Lernendefilter'=>$Lernendefilter]); 
}

function create()
{
    $Berufe = DB::table('tblLehrberuf')->get();
    return view('LernendeErfassen', ['Berufe'=>$Berufe]);

}
function post()
{
        DB::table('tblLernende')
            ->insert(
                [
                    'fldVorname' => $_GET['Vorname'],
                    'fldNachname' => $_GET['Nachname'],
                    'fldEmail' => $_GET['Email'],
                    'fkLehrberufB' => $_GET['Lehrberuf'],
                    'fldLehrjahr' => $_GET['Lehrjahr'],
                    'fldEnabledA' => 1
                ]
            );
        return redirect('Lernende/create');

}

function edit($pkLernende)
{
    {
        $Lernende = DB::table('viewLernendeBeruf')->where('pkLernende',$pkLernende)->get();
        $Berufe = DB::table('tblLehrberuf')->get();
        return view('EditLernende', ['Lernende' => $Lernende, 'Berufe'=>$Berufe]);
    } 
}
function update(request $request){
    if ($request['Vorname'] != ""){
     DB::table('tblLernende')->where('pkLernende',$request['pkLernende'])->update(
[
    'fldVorname' => $request['Vorname'],
    'fldNachname' => $request['Nachname'],
    'fldEmail' => $request['Email'],
    'fkLehrberufB' => $request['Lehrberuf'],
    'fldLehrjahr' => $request['Lehrjahr'],
    'fldEnabledA' => $request['Enabled']
]
);}
return redirect('Lernende');
}


function destroy($pkLernende)
{
    DB::table('tblLernende')
    ->where('pkLernende', $pkLernende)
    ->delete(
    );
    return redirect('Lernende');
}

}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class SchulfachController extends Controller
{
    function index()
    {
        $Schulfach = DB::table('tblFach')->get();
        return view('ListeSchulfach', ['Schulfach' => $Schulfach]);
    }
    function filter()
    {
        $Schulfach = DB::table('tblFach')->where('fldFachname', $_GET["Suche"] )->get();
        return view('ListeSchulfach', ['Schulfach' => $Schulfach]);
    }

function post()
{
    if ($_GET['Fach'] != "") {
        DB::table('tblFach')
            ->insert(
                [
                    'fldFachname' => $_GET['Fach'],
                    'fldEnabledB' => 1,
                ]
            );
        return redirect('Schulfach/create');
    } 
}
function edit($pkFach)
{
    {
        $Schulfach = DB::table('tblFach')->where('pkFach',$pkFach)->get();
        return view('EditSchulfach', ['Schulfach' => $Schulfach]);
    } 
}
function update(request $request){
    if ($request['Fach'] != ""){
     DB::table('tblFach')->where('pkFach',$request['pkFach'])->update(
[
    'fldFachname' => $request['Fach'],
    'fldEnabledB' => $request['Enabled']
]
);}
return redirect('Schulfach');
}


function destroy($pkFach)
{
    DB::table('tblFach')
    ->where('pkFach', $pkFach)
    ->delete(
    );
    return redirect('Schulfach');
}
}
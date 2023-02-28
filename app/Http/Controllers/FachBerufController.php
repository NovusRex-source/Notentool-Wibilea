<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class FachBerufController extends Controller
{
function index($pkFach)
{
    $Beruf = DB::table('viewFachLehrberuf')->where('pkFach',$pkFach)->get();
    return view('ListeFachBeruf', ['Beruf'=>$Beruf]); 
}

function create()
{
    $Berufe = DB::table('tblLehrberuf')->get();
    return view('FachBerufERfassen', ['Berufe'=>$Berufe]);

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
                    'fldEnabled' => 1
                ]
            );
        return redirect('Lernende/create');

}


function destroy($pkFachLehrberuf)
{
    DB::table('tblFachLehrberuf')
    ->where('pkFachLehrberuf', $pkFachLehrberuf)
    ->delete(
    );
    return redirect('FachBeruf');
}

}
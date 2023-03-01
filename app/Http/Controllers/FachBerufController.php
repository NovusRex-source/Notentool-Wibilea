<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use League\CommonMark\Node\Block\TightBlockInterface;

class FachBerufController extends Controller
{
function index($pkFach)
{
    $Beruf = DB::table('viewFachLehrberuf')->where('pkFach',$pkFach)->get();
    $Fach = DB::table('tblFach')->where('pkFach', $pkFach)->get();
    return view('ListeFachBeruf', ['Beruf'=>$Beruf, 'Fach'=>$Fach]); 
}

function create($pkFach)
{
    $Beruf = DB::table('tblLehrberuf')->get();
    return view('FachBerufErfassen', ['Beruf'=>$Beruf, 'pkFach'=>$pkFach]);

}
function post($pkFach)
{
        DB::table('tblFachLehrberuf')
            ->insert(
                [
                    'fkLehrberufC' => $_GET['Lehrberuf'],
                    'fkFachB' => $_GET['Schulfach'],
                ]
            );
            return redirect('Schulfach');
}


function destroy($pkFachLehrberuf)
{
    DB::table('tblFachLehrberuf')
    ->where('pkFachLehrberuf', $pkFachLehrberuf)
    ->delete(
    );
    return redirect('Schulfach');
}

}
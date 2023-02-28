<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class BerufController extends Controller
{
    function index()
    {
        $Beruf = DB::table('tblLehrberuf')->get();
        return view('ListeLehrberufe', ['Beruf' => $Beruf]);
    }

function post()
{
    if ($_GET['Beruf'] != "") {
        DB::table('tblLehrberuf')
            ->insert(
                [
                    'fldBerufsbezeichnung' => $_GET['Beruf'],
                ]
            );
        return redirect('Lehrberuf/create');
    } 
}
function edit($pkLehrberuf)
{
    {
        $Beruf = DB::table('tblLehrberuf')->where('pkLehrberuf',$pkLehrberuf)->get();
        return view('EditLehrberuf', ['Beruf' => $Beruf]);
    } 
}
function update(request $request){
    if ($request['Beruf'] != ""){
     DB::table('tblLehrberuf')->where('pkLehrberuf',$request['pkLehrberuf'])->update(
[
    'fldBerufsbezeichnung' => $request['Beruf']
]
);}
return redirect('Lehrberuf');
}


function destroy($pkLehrberuf)
{
    DB::table('tblLehrberuf')
    ->where('pkLehrberuf', $pkLehrberuf)
    ->delete(
    );
    return redirect('Lehrberuf');
}
}
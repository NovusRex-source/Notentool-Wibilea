<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class NotenController extends Controller
{
    
    function index($user)
    {
        $Beruf = DB::table('viewLernendeFachLehrberuf')->where('pkLernende', $user)->get();
        $Lernende = DB::table('viewLernendeBeruf')->where('pkLernende', $user)->get();
        $Noten = DB::table('viewFachNote')->where('fkLernende', $user)->get();
        $avg = DB::table('viewFachNote')->where('fkLernende', $user)->avg('fldNote');
        return view('ListeNoten', ['Lernende'=>$Lernende, 'Noten'=>$Noten, 'Beruf'=>$Beruf, 'avg'=>$avg]);

    }
    function filter($user)
    {
        $Beruf = DB::table('viewLernendeFachLehrberuf')->where('pkLernende', $user)->get();
        $Lernende = DB::table('viewLernendeBeruf')->where('pkLernende', $user)->get();
        $Noten = DB::table('viewFachNote')->where('fkLernende', $user)->where('fkFachA', $_GET["Fach"])->get();
        $avg = DB::table('viewFachNote')->where('fkLernende', $user)->where('fkFachA', $_GET["Fach"])->avg('fldNote');
        return view('ListeNoten', ['Lernende'=>$Lernende, 'Noten'=>$Noten, 'Beruf'=>$Beruf, 'avg'=>$avg]);
    }
    function create($User)
    {
        $Beruf = DB::table('viewLernendeFachLehrberuf')->where('pkLernende', $User)->where('fldEnabledB', 1)->get();
        return view('NoteErfassen', ['User'=> $User, 'Beruf'=>$Beruf]);
    }

    function post(request $request)
    {
            DB::table('tblNoten')->insert(
       [
           'fkLernende' => $request['id'],
           'fkFachA' => $request['Fach'],
           'fldThema' => $request['Thema'],
           'fldDatum' => $request['Datum'],
           'fldNote' => $request['Note'],
           'fldBegruendung' => $request['Begruendung']
       ]
       );
       return redirect()->back();
    }

    public function Noten(){
        return $this->belongsTo('fkNoten', 'fkNoten');
    }
    function destroy($pkNote)
    {
        DB::table('tblNoten')
        ->where('pkNoten', $pkNote)
        ->delete(
        );
        return redirect()->back();
    }

}

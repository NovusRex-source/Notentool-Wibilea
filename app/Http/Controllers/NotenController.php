<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class NotenController extends Controller
{
    
    function index($user)
    {
        $Lernende = DB::table('tblLernende')->where('pkLernende', $user)->get();
        $Noten = DB::table('viewFachNote')->where('fkLernende', $user)->get();
        return view('ListeNoten', ['Lernende'=>$Lernende, 'Noten'=>$Noten]);

    }
    function create($User)
    {
        $Beruf = DB::table('viewLernendeFachLehrberuf')->where('pkLernende', $User)->get();
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
       return redirect('/');
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
        return redirect('/');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class LernendeController extends Controller
{
    function ListeLernende()
    {
        $Lernende = DB::table('tblLernende')->get();
        return view('ListeLernende', ['Lernende'=>$Lernende]);
    }



    public function Noten(){
        return $this->belongsTo('fkNoten', 'fkNoten');
    }


    function EinzelnLernende($user)
    {
        $Lernende = DB::table('tblLernende')->where('pkLernende', $user)->get();
        $Noten = DB::table('tblNoten')->where('fkLernende', $user)->get();
        $Fach = DB::table('tblFach')->get();
        return view('EinzelnLernende', ['Lernende'=>$Lernende, 'Noten'=>$Noten, 'Fach'=>$Fach]);

    }
    function Cookie()
    {
       
            echo "Value is: " . $_COOKIE["Rolle"];
        }
}

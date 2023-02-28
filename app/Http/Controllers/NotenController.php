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
        return view('EinzelnLernende', ['Lernende'=>$Lernende, 'Noten'=>$Noten]);

    }



    public function Noten(){
        return $this->belongsTo('fkNoten', 'fkNoten');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function Login(request $request){
$cookie_name = "Rolle";
$cookie_value = $request["Rolle"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
return view('Dashboard', ["Rolle"=>$cookie_value]);
    }
}

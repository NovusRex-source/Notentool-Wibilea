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

$cookie_name_id = "UserID";
$cookie_value_id = 1;
setcookie($cookie_name_id, $cookie_value_id, time() + (86400 * 30), "/"); // 86400 = 1 day

$cookie_name_beruf = "Beruf";
$cookie_value_beruf = 8;
setcookie($cookie_name_beruf, $cookie_value_beruf, time() + (86400 * 30), "/"); // 86400 = 1 day

return view('Dashboard', ["Rolle"=>$cookie_value, "UserID"=>$cookie_value_id, "Beruf"=>$cookie_value_beruf]);
    }

    
}

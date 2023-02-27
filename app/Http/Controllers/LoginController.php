<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function Login(){
$cookie_name = "Rolle";
$cookie_value = $_GET["Rolle"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
return view('Dashboard');
    }
}

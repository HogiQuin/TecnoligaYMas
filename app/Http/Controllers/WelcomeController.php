<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($id, , ){
    	return "Estas en la pagina de inicio del sitio";
    }
}

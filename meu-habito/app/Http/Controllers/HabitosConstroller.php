<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitosConstroller extends Controller
{
    public function index(){
    	$nome = "Cristian";
    	return view('habitos', ['nome' => $nome]);
    }
}

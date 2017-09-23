<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habito;

class HabitosConstroller extends Controller
{
    public function index(){
    	$habitos = Habito::all();
    	return view('habitos', ['habitos' => $habitos]);
    }

}

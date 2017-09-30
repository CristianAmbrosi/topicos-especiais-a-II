<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habito;

class HabitosConstroller extends Controller
{
    public function index(){
    	$habitos = Habito::all();
    	return view('habitos.index', ['habitos' => $habitos]);
    }

    public function create(){
    	return view('habitos.create');
    }

}

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

  public function store(Request $request){ // Resquest é do próprio Laravel
  	$novo_habito = $request->all();
  	Habito::create($novo_habito);

  	return redirect('habitos');
  }

}

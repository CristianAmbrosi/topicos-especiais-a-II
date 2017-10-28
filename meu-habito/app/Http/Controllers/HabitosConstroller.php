<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habito;
use App\Http\Controllers\Controller;
use App\Http\Requests\HabitoRequest;

class HabitosConstroller extends Controller
{
  public function index(){
  	$habitos = Habito::all();
  	return view('habitos.index', ['habitos' => $habitos]);
  }

  public function create(){
  	return view('habitos.create');
  }

  public function store(HabitoRequest $request){ // "Resquest" seria próprio Laravel
  	$novo_habito = $request->all();
  	Habito::create($novo_habito);

  	return redirect()->route('habitos');
  }

  public function destroy($id){
    Habito::find($id)->delete();
    return redirect()->route('habitos');
  }

  public function edit($id){
    $habito = Habito::find($id);
    return view('habitos.edit', compact('habito'));
  }

  public function update(HabitoRequest $request, $id){
    $habito = Habito::find($id)->update($request->all());
    return redirect()->route('habitos');
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Http\Controllers\Controller;

class CursosController extends Controller
{
  public function index()
  {
    $cursos = Curso::all();
    return view('cursos.index', ['cursos'=>$cursos]);
  }
}

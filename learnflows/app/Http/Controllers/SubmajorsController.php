<?php

namespace App\Http\Controllers;

use App\Submajor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmajorsController extends Controller
{
  public function index()
  {
    $submajor = Submajor::all();
    return view('submajors.index', ['submajor'=>$submajor]);
  }
}

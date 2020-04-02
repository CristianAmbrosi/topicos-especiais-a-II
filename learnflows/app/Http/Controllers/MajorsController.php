<?php

namespace App\Http\Controllers;

use App\Major;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function index()
    {
      $major = Major::all();
      return view('majors.index', ['major'=>$major]);
    }
}

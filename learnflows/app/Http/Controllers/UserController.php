<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
	public function index(){
		$users = User::all();
		return view('users.index', ['users' => $users]);
	}

  public function store(UserRequest $request){
  	$newUser = $request->all();
  	User::create($newUser);

  	return redirect()->route('users');
  }

  public function edit($id){
    $users = User::find($id);
    return view('users.edit', compact('users'));
  }

  public function update(UserRequest $request, $id){
    $users = User::find($id)->update($request->all());
    return redirect()->route('users');
  }

}

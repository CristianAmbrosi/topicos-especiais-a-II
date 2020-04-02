<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'          => 'required|string|max:255',
            'dataNasc'      => 'required|string|max:255',
            'adress'        => 'required|string|max:255',
            'city'          => 'required|string|max:255',
            'state'         => 'required|string|max:255',
            'escolaridade'  => 'required|string|max:255',
            'profissao'     => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'          => $data['name'],
            'dataNasc'      => $data['dataNasc'],
            'adress'        => $data['adress'],
            'city'          => $data['city'],
            'state'         => $data['state'],
            'escolaridade'  => $data['escolaridade'],
            'profissao'     => $data['profissao'],
            'email'         => $data['email'],
            'password'      => bcrypt($data['password'])
        ]);
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Users;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate(
          [
              'nama' => 'required|min:2|max:100',
              'email' =>  'required|email:dns|',
              'password' => 'required|min:5|max:100'
          ]);

         Users::create($validatedData);
    }

}

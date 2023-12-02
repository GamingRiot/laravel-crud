<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
  public function show()
  {
    return view('users.login');
  }

  public function login()
  {
    $attributes = request()->validate([
      'email' => ['required', 'min:5', 'max:255'],
      'password' => ['required', 'min:5', 'max:64']
    ]);

    if (auth()->attempt($attributes)) {
      return redirect('/')->with('success', 'Welcome back!');
    }

    return back()
      ->withInput()
      ->withErrors(['password' => 'Your credentials could not be verified']);
  }
}

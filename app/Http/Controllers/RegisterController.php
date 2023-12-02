<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
  public function show()
  {
    return view('register.show');
  }
  public function create()
  {
    $valiidAuthentication = request()->validate([
      'name' => ['required', 'min:4', 'max:255'],
      'username' => ['required', 'min:4', 'max:255', Rule::unique('users', 'username')],
      'email' => ['required', 'min:4', 'max:255', 'email', Rule::unique('users', 'email')],
      'password' => ['required', 'min:4', 'max:255'],
    ]);

    $user = User::create($valiidAuthentication);
    auth()->login($user);
    return redirect('/')->with('success', 'You have been successfuly registered!');
  }
}

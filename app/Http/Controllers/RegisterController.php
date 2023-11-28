<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
      'username' => ['required', 'min:4', 'max:255'],
      'email' => ['required', 'min:4', 'max:255', 'email'],
      'password' => ['required', 'min:4', 'max:255'],
    ]);

    User::create($valiidAuthentication);
    return redirect('/');
  }
}

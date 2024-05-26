<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Athentification extends Controller
{
   public function loginView()
   {
       return view('auth.login');
   }
   public function registerView()
   {
       return view('auth.register');
   }
   public function register(Request $request)
   {
     // Validation des données d'entrée
     $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:8|confirmed',
  ]);

  // Création de l'utilisateur
  User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
  ]);

  // Redirection après enregistrement réussi
  return redirect()->route('home')->with('success', 'Registration successful.');
   }
   public function login(Request $request)
    {
        // Validation des données d'entrée
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }

        // Redirection en cas d'échec de la connexion
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

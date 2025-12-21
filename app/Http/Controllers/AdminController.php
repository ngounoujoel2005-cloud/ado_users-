<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
      public function showLoginForm()
    {
        return view('connexion'); // Ton fichier Blade de connexion
    }   
    public function login(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'mot_de_passe' => 'required|string',
        ]);

        // Chercher l'admin par nom
        $admin = Admin::where('nom', $request->nom)->first();

        if ($admin && Hash::check($request->mot_de_passe, $admin->password)) {
            // Authentifier l'admin via session
            Auth::guard('admin')->login($admin);

            return redirect()->intended('/index-admin'); // redirection après login
        }

        return back()->withErrors([
            'nom' => 'Nom d’utilisateur ou mot de passe incorrect.',
        ]);
    }
}

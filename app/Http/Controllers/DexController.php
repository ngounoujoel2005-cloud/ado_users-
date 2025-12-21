<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class DexController extends Controller
{

    public function indexvue()
    {
        $admin = Auth::guard('admin')->user(); // récupère l'admin connecté
        return view('deconnection-admin', compact('admin'));
    }

    public function logoutadmin()
    {
        Auth::logout();
        return redirect('/connexion')->with('status', 'Vous êtes déconnecté.');
    }

}

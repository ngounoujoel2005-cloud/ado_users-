<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DexController extends Controller
{
    public function logoutadmin()
    {
        Auth::logout();
        return redirect('/')->with('status', 'Vous êtes déconnecté.');
    }
}

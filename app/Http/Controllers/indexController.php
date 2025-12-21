<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function index(){
          $admin = Auth::guard('admin')->user(); // récupère l'admin connecté
            return view('index-admin');
    }   
}

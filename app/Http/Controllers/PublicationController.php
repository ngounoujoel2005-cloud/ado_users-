<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'desc')->get();
        return view('publication-admin', compact('publications'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'message' => 'required|string',
        ]);

        Publication::create([
            'titre' => $request->titre,
            'type' => $request->type,
            'message' => $request->message,
            'actif' => true,
        ]);

        return redirect()->back()->with('success', 'Publication ajoutée avec succès !');
    }
}

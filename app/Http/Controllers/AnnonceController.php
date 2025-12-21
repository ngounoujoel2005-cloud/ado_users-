<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use Symfony\Component\Mime\Message;

class AnnonceController extends Controller
{
   public function index()
    {
        $annonces = Annonce::orderBy('created_at', 'desc')->paginate(10);
        $totalAnnonces = Annonce::count(); // récupère le nombre total d'annonces
        $totalActives = Annonce::where('actif', 1)->count(); // nombre total d'annonces actives
        return view('annonce-admin', compact('annonces', 'totalAnnonces', 'totalActives'));
    }
    public function affiche()
    {
        $affiche = Annonce::where('actif', 1)
            ->orderBy('updated_at', 'desc')
            ->get(['message', 'type']);

        return view('index' , compact('affiche'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'type' => 'required|string',
            'date_expiration' => 'nullable|date',
            'actif' => 'nullable|boolean'
        ]);

        Annonce::create([
            'message' => $request->message,
            'type' => $request->type,
            'date_expiration' => $request->date_expiration,
            'actif' => $request->actif ? 1 : 0,
        ]);

        return back()->with('success', 'Annonce créée avec succès.');
    }

    // Activer/désactiver
    public function toggleActif($id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->actif = !$annonce->actif;
        $annonce->save();

        return back()->with('success', 'Statut de l’annonce mis à jour.');
    }

    public function destroy($id)
{
    $annonce = Annonce::findOrFail($id);
    $annonce->delete();

    return back()->with('success', 'Annonce supprimée avec succès.');
}

}

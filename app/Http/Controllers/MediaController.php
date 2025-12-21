<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class MediaController extends Controller
{
    // Méthode pour afficher la liste des médias
   public function index(Request $request)
{
    // Récupère le type depuis l'URL, par ex. /media-admin?type=Image
    $type = $request->query('type'); 

    // Filtrer si un type est choisi
    if ($type && in_array($type, ['Image', 'Vidéo'])) {
        $medias = Media::where('type', $type)->latest()->get();
    } else {
        $medias = Media::latest()->get();
    }

    // Comptages
    $totalMedias = Media::count();
    $totalImages = Media::where('type', 'Image')->count();
    $totalVideos = Media::where('type', 'Vidéo')->count();
    $admin = Auth::guard('admin')->user(); // récupère l'admin connecté

    return view('media-admin', compact('medias', 'totalMedias', 'totalImages', 'totalVideos', 'type', 'admin'));
}

    // Méthode pour stocker un nouveau média
      public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'url' => 'required|file|mimes:jpg,png,jpeg,gif,mp4,webm|max:10240',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('url')) {
            $data['url'] = $request->file('url')->store('medias', 'public');
        }

        Media::create($data);

        return redirect()->route('medias.index')->with('success', 'Média ajouté avec succès.');
    }
   }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
     public function index()
    {
        $notifications = Notification::latest()->get();
        $admin = Auth::guard('admin')->user(); // récupère l'admin connecté
        return view('notification-admin', compact('notifications', 'admin'));
    }

     // Enregistrer une nouvelle notification
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'audience' => 'required|string',
            'message' => 'required|string',
        ]);

        Notification::create([
            'title' => $request->title,
            'type' => $request->type,
            'audience' => $request->audience,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Notification envoyée avec succès !');
    }
    // Supprimer une notification existante
    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return back()->with('success', 'Notification supprimée avec succès !');
    }   
}

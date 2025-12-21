<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DexController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\PublicationController;

Route::get('/index-admin', function () {
    return view('index-admin');
});

    //--------------
        //ADMIN INTERFACE AND PROTOCOL
    //-------------


//Gestion des annonces

    // afficher des annonces
    Route::get('/annonce-admin', [AnnonceController::class, 'index'])->name('annonce.admin');
    // Activer/Désactiver
    Route::patch('/annonce/{id}/toggle', [AnnonceController::class, 'toggleActif'])->name('annonce.toggle');
    // creation annonces
    Route::post('/annonce/store', [AnnonceController::class, 'store'])->name('annonce.store');
    // suppression annonces
    Route::delete('/annonce/{id}', [AnnonceController::class, 'destroy'])->name('annonce.destroy');


//Gestion des publications

    // afficher des publications
    Route::get('/publication-admin', [PublicationController::class, 'index'])->name('publication.admin');
    // creation publications
    Route::post('/publications', [PublicationController::class, 'store'])->name('publications.store');





Route::get('/media-admin', function () {
    return view('media-admin');
});

Route::get('/historique-admin', function () {
    return view('historique-admin');
});

Route::get('/notification-admin', function () {
    return view('notification-admin');
});

Route::get('/commentaire-admin', function () {
    return view('commentaire-admin');
});

Route::get('/administration', function () {
    return view('administration');
});

Route::get('/connexion', function () {
    return view('connexion');
});




Route::get('/deconnection-admin', [DexController::class, 'logoutadmin'])->name('logout.admin');


    //--------------
        //USER INTERFACE AND PROTOCOL
    //-------------


//gestion des annonces coter user
    Route::get('/index', [AnnonceController::class, 'affiche']);

    Route::get('/A propos-user', function () {
    return view('A propos-user');
});

Route::get('/Activiter-user', function () {
    return view('Activiter-user');
});

Route::get('/bourse-user', function () {
    return view('bourse-user');
});

Route::get('/contact-user', function () {
    return view('contact-user');
});

Route::get('/femmeadolescence-user', function () {
    return view('femmeadolescence-user');
});

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/galerie',function(){
    return view('galerie');
});

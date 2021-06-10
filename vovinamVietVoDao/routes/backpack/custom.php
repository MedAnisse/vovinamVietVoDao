<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('arbitre', 'ArbitreCrudController');
    Route::crud('club', 'ClubCrudController');
    Route::crud('combat', 'CombatCrudController');
    Route::crud('entraineur', 'EntraineurCrudController');
    Route::crud('joueur', 'JoueurCrudController');
    Route::crud('juge', 'JugeCrudController');
    Route::crud('salle', 'SalleCrudController');
    Route::crud('combathistoric', 'CombatHistoricCrudController');
    Route::crud('controller', 'ControllerCrudController');
    Route::crud('technic', 'TechnicCrudController');
}); // this should be the absolute last line of this file
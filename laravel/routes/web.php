<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\SitioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SitioController::class, 'home'])->name('home');

// Páginas de ciudad: /perito-economico-valencia, /perito-economico-madrid, /perito-economico-almeria
Route::get('/perito-economico-{ciudad}', [SitioController::class, 'ciudad'])
    ->where('ciudad', 'valencia|madrid|almeria')
    ->name('ciudad');

Route::get('/servicios', [SitioController::class, 'servicios'])->name('servicios');
Route::get('/servicios/{servicio}', [SitioController::class, 'servicio'])->name('servicio');

Route::get('/equipo', [SitioController::class, 'equipo'])->name('equipo');
Route::get('/metodologia', [SitioController::class, 'metodologia'])->name('metodologia');

Route::get('/contacto', [ContactoController::class, 'form'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'enviar'])->middleware('throttle:5,1')->name('contacto.enviar');

Route::view('/aviso-legal', 'legal.aviso')->name('aviso-legal');
Route::view('/politica-de-privacidad', 'legal.privacidad')->name('privacidad');
Route::view('/politica-de-cookies', 'legal.cookies')->name('cookies');

Route::get('/sitemap.xml', [SitioController::class, 'sitemap'])->name('sitemap');

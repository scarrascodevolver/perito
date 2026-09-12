<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\View\View;

class SitioController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function ciudad(string $ciudad): View
    {
        $c = ciudad($ciudad) ?? abort(404);

        return view('ciudad', ['c' => $c]);
    }

    public function servicios(): View
    {
        return view('servicios');
    }

    public function servicio(string $servicio): View
    {
        $servicios = sitio('servicios');
        $i = collect($servicios)->search(fn ($s) => $s['slug'] === $servicio);
        if ($i === false) {
            abort(404);
        }

        return view('servicio', ['s' => $servicios[$i], 'i' => $i]);
    }

    public function equipo(): View
    {
        return view('equipo');
    }

    public function metodologia(): View
    {
        return view('metodologia');
    }

    public function sitemap(): Response
    {
        $urls = [['loc' => route('home'), 'p' => '1.0']];
        foreach (sitio('ciudades') as $c) {
            $urls[] = ['loc' => route('ciudad', $c['slug']), 'p' => '0.9'];
        }
        $urls[] = ['loc' => route('servicios'), 'p' => '0.8'];
        foreach (sitio('servicios') as $s) {
            $urls[] = ['loc' => route('servicio', $s['slug']), 'p' => '0.7'];
        }
        foreach (['equipo', 'metodologia', 'contacto'] as $r) {
            $urls[] = ['loc' => route($r), 'p' => '0.6'];
        }

        return response()->view('sitemap', ['urls' => $urls, 'hoy' => now()->toDateString()])
            ->header('Content-Type', 'application/xml');
    }
}

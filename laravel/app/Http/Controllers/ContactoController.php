<?php

namespace App\Http\Controllers;

use App\Mail\ConsultaRecibida;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactoController extends Controller
{
    public function form(Request $request): View
    {
        return view('contacto', ['sedeInicial' => $request->query('sede')]);
    }

    public function enviar(Request $request): RedirectResponse
    {
        // Honeypot anti-spam: los bots rellenan el campo oculto.
        if ($request->filled('empresa_web')) {
            return back()->with('ok', true);
        }

        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:120'],
            'telefono' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:150'],
            'sede' => ['nullable', 'string', 'max:40'],
            'tipo' => ['nullable', 'string', 'max:80'],
            'mensaje' => ['required', 'string', 'max:5000'],
            'privacidad' => ['accepted'],
        ], [
            'privacidad.accepted' => 'Debe aceptar la política de privacidad.',
            'required' => 'Este campo es obligatorio.',
            'email' => 'Indique un email válido.',
        ]);

        $mail = Mail::to(sitio('site.email'));
        if ($copia = sitio('site.email_copia')) {
            $mail->bcc($copia);
        }
        $mail->send(new ConsultaRecibida($datos));

        return redirect()->route('contacto')->with('ok', true);
    }
}

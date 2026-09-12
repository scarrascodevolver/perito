<?php

namespace Tests\Feature;

use App\Mail\ConsultaRecibida;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class SitioTest extends TestCase
{
    public static function rutasPublicas(): array
    {
        return [
            ['/', 'Perito económico con informes'],
            ['/perito-economico-valencia', 'Perito económico en'],
            ['/perito-economico-madrid', 'Plaza de Castilla'],
            ['/perito-economico-almeria', 'El Ejido'],
            ['/servicios', 'Peritaje económico, contable y financiero'],
            ['/servicios/lucro-cesante-y-dano-emergente', 'Cuándo se necesita este informe'],
            ['/equipo', 'Aurelio Fernández'],
            ['/metodologia', 'Cinco fases'],
            ['/contacto', 'Enviar consulta confidencial'],
            ['/aviso-legal', 'LSSI-CE'],
            ['/politica-de-privacidad', 'RGPD'],
            ['/politica-de-cookies', 'XSRF-TOKEN'],
        ];
    }

    #[DataProvider('rutasPublicas')]
    public function test_paginas_responden(string $ruta, string $texto): void
    {
        $this->get($ruta)->assertOk()->assertSee($texto);
    }

    public function test_todos_los_servicios_tienen_pagina(): void
    {
        foreach (config('sitio.servicios') as $s) {
            $this->get('/servicios/'.$s['slug'])->assertOk()->assertSee($s['nombre']);
        }
    }

    public function test_sitemap_incluye_ciudades(): void
    {
        $this->get('/sitemap.xml')->assertOk()
            ->assertHeader('Content-Type', 'application/xml')
            ->assertSee('perito-economico-valencia');
    }

    public function test_rutas_inexistentes_dan_404(): void
    {
        $this->get('/perito-economico-sevilla')->assertNotFound();
        $this->get('/servicios/no-existe')->assertNotFound();
    }

    public function test_formulario_envia_correo(): void
    {
        Mail::fake();
        $this->post('/contacto', [
            'nombre' => 'Prueba', 'telefono' => '600000000', 'email' => 'p@example.com',
            'sede' => 'Valencia', 'tipo' => 'Lucro cesante', 'mensaje' => 'Caso de prueba', 'privacidad' => '1',
        ])->assertRedirect('/contacto')->assertSessionHas('ok');
        Mail::assertSent(ConsultaRecibida::class, fn ($m) => $m->hasTo(config('sitio.site.email')));
    }

    public function test_formulario_exige_privacidad_y_email_valido(): void
    {
        Mail::fake();
        $this->from('/contacto')->post('/contacto', ['nombre' => 'X', 'telefono' => '1', 'email' => 'mal', 'mensaje' => 'x'])
            ->assertRedirect('/contacto')->assertSessionHasErrors(['email', 'privacidad']);
        Mail::assertNothingSent();
    }

    public function test_honeypot_descarta_bots_sin_enviar(): void
    {
        Mail::fake();
        $this->post('/contacto', ['empresa_web' => 'spam', 'nombre' => 'Bot'])->assertRedirect();
        Mail::assertNothingSent();
    }
}

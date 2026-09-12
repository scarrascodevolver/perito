@extends('layouts.app', [
    'current' => 'inicio',
    'title' => 'Perito Económico | Informes periciales económicos en Valencia, Madrid y Almería',
    'desc' => 'Perito económico y contable con sedes en Valencia, Madrid y Almería. Informes periciales de lucro cesante, valoración de empresas, contabilidad y blanqueo de capitales con validez judicial. Consulta gratuita.',
])
@php $site = sitio('site'); @endphp

@push('ld')
{!! json_ld(['@context' => 'https://schema.org', '@type' => 'ProfessionalService', 'name' => $site['marca'],
    'url' => route('home'), 'telephone' => $site['telefono'], 'email' => $site['email'], 'logo' => asset('assets/img/pluma-navy.svg'),
    'description' => 'Peritos económicos y contables. Informes periciales con validez judicial en Valencia, Madrid, Almería y toda España.',
    'areaServed' => array_merge([['@type' => 'Country', 'name' => 'España']], collect(sitio('ciudades'))->map(fn ($c) => ['@type' => 'City', 'name' => $c['nombre']])->all()),
    'memberOf' => ['@type' => 'Organization', 'name' => $site['grupo']],
    'knowsAbout' => collect(sitio('servicios'))->pluck('nombre')->all()]) !!}
@endpush

@section('content')
<section class="hero"><img class="hero-bg" src="{{ asset('assets/img/hero-perito.webp') }}" srcset="{{ asset('assets/img/hero-perito-m.webp') }} 900w, {{ asset('assets/img/hero-perito.webp') }} 1800w" sizes="100vw" alt="" fetchpriority="high" decoding="async"><div class="wrap">
  <div>
    <div class="eyebrow">Peritos económicos · Valencia · Madrid · Almería</div>
    <h1>Perito económico con informes que <em>resisten el juicio</em></h1>
    <p class="lead">Cuantificamos daños, valoramos empresas y analizamos contabilidades para procedimientos judiciales y arbitrajes. Informes periciales con rigor técnico, validez judicial y ratificación en sala.</p>
    <div class="cta"><a class="btn btn-gold" href="{{ route('contacto') }}">Solicitar consulta gratuita</a><a class="btn btn-ghost" href="{{ route('servicios') }}">Ver servicios</a></div>
    <div class="stats"><div><b>{{ $site['anios'] }} años</b><span>de experiencia pericial</span></div><div><b>{{ $site['informes'] }}</b><span>informes ratificados</span></div><div><b>3 sedes</b><span>cobertura nacional</span></div></div>
  </div>
  <div class="hero-card"><h3>Qué acreditamos</h3><ul>
    <li>Lucro cesante y daño emergente</li><li>Valor de empresas y participaciones</li><li>Irregularidades contables y flujos de fondos</li>
    <li>Blanqueo de capitales y compliance</li><li>Fraudes de inversión y criptoactivos</li><li>Herencias y patrimonios</li></ul></div>
</div></section>
<div class="trust"><div class="wrap"><span>Peritos colegiados</span><span>Informes con validez judicial</span><span>Ratificación en sala incluida</span><span>Entrega urgente en 72 h</span><span>Primera consulta gratuita</span></div></div>

<section><div class="wrap">
  <div class="sec-head"><div class="eyebrow">Sedes</div><h2>Perito económico en su ciudad</h2><p class="lead">Tres sedes con peritos de referencia en cada plaza y desplazamiento a cualquier juzgado de España.</p></div>
  @include('partials.ciudades-grid')
</div></section>

<section class="alt"><div class="wrap">
  <div class="sec-head"><div class="eyebrow">Servicios periciales</div><h2>Especialistas en peritaje económico, contable y financiero</h2><p class="lead">Cada informe se construye para responder a la pregunta concreta que el abogado necesita acreditar ante el juez.</p></div>
  @include('partials.servicios-grid')
</div></section>

<section><div class="wrap">
  <div class="sec-head"><div class="eyebrow">Metodología</div><h2>Rigor y trazabilidad en cada fase</h2><p class="lead">Un proceso estructurado conforme a la Ley de Enjuiciamiento Civil que garantiza la validez judicial del informe y una defensa sólida en sala.</p></div>
  <div class="steps">
    <div class="step"><h3>Análisis del caso</h3><p>Estudio de la documentación y definición precisa del objeto de la pericia, su alcance y sus limitaciones.</p></div>
    <div class="step"><h3>Evidencias</h3><p>Obtención y tratamiento de la prueba económica con integridad, trazabilidad y cadena de custodia.</p></div>
    <div class="step"><h3>Análisis y redacción</h3><p>Aplicación de metodologías reconocidas y redacción de un informe claro, estructurado y fundamentado.</p></div>
    <div class="step"><h3>Ratificación</h3><p>Comparecencia ante el juzgado para defender las conclusiones y responder a las partes y al juez.</p></div>
  </div>
  <p style="margin-top:2rem"><a class="btn btn-outline" href="{{ route('metodologia') }}">Conocer la metodología completa</a></p>
</div></section>

<section class="alt"><div class="wrap">
  <div class="sec-head"><div class="eyebrow">Equipo</div><h2>Peritos con trayectoria acreditada</h2><p class="lead">Economistas, abogados y analistas forenses que colaboran en la elaboración, análisis y defensa de la prueba pericial.</p></div>
  <div class="grid g3">@include('partials.equipo-cards')</div>
</div></section>

<section class="tight"><div class="wrap"><div class="sec-head" style="margin-bottom:2rem"><div class="eyebrow">Confían en nosotros</div><h2 style="font-size:1.6rem">Despachos, aseguradoras y empresas</h2></div>
  <div class="logos">@foreach(sitio('clientes') as [$f, $n])<img src="{{ asset('assets/img/clientes/'.$f) }}" alt="{{ $n }}" loading="lazy">@endforeach</div>
</div></section>

<section class="alt"><div class="wrap"><div class="two-col">
  <div><div class="eyebrow">Preguntas frecuentes</div><h2>Dudas habituales sobre el perito económico</h2><p class="lead">Si no encuentra su pregunta, llámenos o escríbanos. La primera consulta no tiene coste.</p><a class="btn btn-primary" href="{{ route('contacto') }}">Hacer una consulta</a></div>
  @include('partials.faq', ['items' => sitio('faq_general')])
</div></div></section>
@include('partials.cta-band')
@endsection

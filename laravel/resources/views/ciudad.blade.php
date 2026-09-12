@php
    $site = sitio('site');
    $n = $c['nombre'];
    $tel = $c['telefono'] ?: $site['telefono'];
    $zonas = implode(', ', $c['zonas']);
    $juzgadoPrincipal = trim(explode(' (', $c['juzgados'][0])[0]);
    $faq = [
        ["¿Cuánto cuesta un perito económico en $n?", "Depende del tipo de informe y del volumen de documentación. Tras una primera consulta gratuita en nuestra sede de $n o por videollamada, emitimos un presupuesto cerrado. Los honorarios del perito pueden incluirse en la condena en costas."],
        ["¿El perito acude a los juzgados de $n?", "Sí. La ratificación en sala está incluida en el servicio. Actuamos habitualmente en $juzgadoPrincipal y en el resto de partidos judiciales de la provincia de {$c['provincia']}."],
        ["¿Atienden fuera de $n capital?", "Sí. Cubrimos toda la provincia de {$c['provincia']} ($zonas) y, con desplazamiento, el resto de {$c['comunidad']} y de España."],
        ['¿Puedo contratar al perito antes de presentar la demanda?', 'Es lo recomendable. Un análisis pericial previo permite al abogado saber qué cifra se puede acreditar y con qué solidez, y evita reclamar cantidades indefendibles.'],
    ];
    $ld = ['@context' => 'https://schema.org', '@type' => 'ProfessionalService', 'name' => "Perito Económico $n",
        'url' => route('ciudad', $c['slug']), 'telephone' => $tel, 'email' => $site['email'],
        'parentOrganization' => ['@type' => 'Organization', 'name' => $site['marca'], 'url' => route('home')],
        'areaServed' => collect($c['zonas'])->map(fn ($z) => ['@type' => 'City', 'name' => $z])->all(),
        'priceRange' => 'Presupuesto a medida', 'openingHours' => 'Mo-Fr 09:00-19:00'];
    if ($c['direccion'] && $c['cp']) {
        $ld['address'] = ['@type' => 'PostalAddress', 'streetAddress' => $c['direccion'], 'addressLocality' => $n, 'postalCode' => $c['cp'], 'addressRegion' => $c['provincia'], 'addressCountry' => 'ES'];
    }
    if ($c['lat']) {
        $ld['geo'] = ['@type' => 'GeoCoordinates', 'latitude' => $c['lat'], 'longitude' => $c['lng']];
    }
@endphp
@extends('layouts.app', [
    'current' => $c['slug'], 'city' => $c,
    'title' => "Perito Económico en $n | Informes periciales con validez judicial",
    'desc' => "Perito económico en $n: lucro cesante, valoración de empresas, peritaje contable y blanqueo de capitales. Informes periciales para los juzgados de {$c['provincia']} con ratificación en sala. Consulta gratuita.",
])
@push('ld'){!! json_ld($ld) !!}@endpush

@section('content')
<section class="hero hero-city"><img class="hero-bg" src="{{ asset('assets/img/hero-perito.webp') }}" srcset="{{ asset('assets/img/hero-perito-m.webp') }} 900w, {{ asset('assets/img/hero-perito.webp') }} 1800w" sizes="100vw" alt="" fetchpriority="high" decoding="async"><div class="wrap">
  <div>
    <div class="eyebrow">Sede {{ $c['comunidad'] }}</div>
    <h1>Perito económico en <em>{{ $n }}</em></h1>
    <p class="lead">{{ $c['intro'] }}</p>
    <div class="cta"><a class="btn btn-gold" href="{{ route('contacto', ['sede' => $c['slug']]) }}">Consulta gratuita en {{ $n }}</a><a class="btn btn-ghost" href="tel:{{ tel_link($tel) }}">Llamar {{ $tel }}</a></div>
    <div class="stats"><div><b>{{ $site['anios'] }} años</b><span>de experiencia</span></div><div><b>{{ $site['informes'] }}</b><span>informes ratificados</span></div><div><b>72 h</b><span>entrega urgente</span></div></div>
  </div>
  <div class="city-mark"><small>Perito económico</small>{{ $n }}</div>
</div></section>
<div class="trust"><div class="wrap"><span>Juzgados de {{ $c['provincia'] }}</span><span>Ratificación en sala</span><span>Perito de parte y judicial</span><span>Primera consulta gratuita</span></div></div>

<section><div class="wrap"><div class="local">
  <div>
    <div class="eyebrow">Sede de {{ $n }}</div><h2>Su perito económico en {{ $n }}</h2>
    <p class="lead">{{ $c['contexto'] }}</p>
    <ul class="info-list">
      <li><b>Responsable</b><div style="display:flex;gap:1rem;align-items:center">
        @if($c['responsable_foto'])<img src="{{ asset('assets/img/equipo/'.$c['responsable_foto'].'.webp') }}" alt="" width="120" height="120" style="border-radius:12px">@endif
        <span>{{ todo($c['responsable'], 'Perito responsable') }}</span></div></li>
      <li><b>Dirección</b><span>{{ todo($c['direccion'], 'Dirección de la sede') }}</span></li>
      <li><b>Teléfono</b><span><a href="tel:{{ tel_link($tel) }}">{{ $tel }}</a> · <a href="https://wa.me/{{ $site['whatsapp'] }}" target="_blank" rel="noopener">WhatsApp</a></span></li>
      <li><b>Email</b><span><a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a></span></li>
      <li><b>Horario</b><span>{{ $site['horario'] }}. Cita previa, también por videollamada.</span></li>
      <li><b>Juzgados</b><div class="chips">@foreach($c['juzgados'] as $j)<span>{{ $j }}</span>@endforeach</div></li>
      <li><b>Zona</b><span>{{ $zonas }}</span></li>
    </ul>
  </div>
  @if($c['maps_embed'])
    <div class="map"><iframe src="{{ $c['maps_embed'] }}" loading="lazy" title="Mapa sede {{ $n }}" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  @else
    <div class="map">Mapa de la sede de {{ $n }}<br><span class="todo">[pendiente: dirección y mapa de Google]</span></div>
  @endif
</div></div></section>

<section class="alt"><div class="wrap">
  <div class="sec-head"><div class="eyebrow">Servicios en {{ $n }}</div><h2>Informes periciales económicos más solicitados en {{ $n }}</h2></div>
  @include('partials.servicios-grid')
</div></section>

<section><div class="wrap">
  <div class="sec-head"><div class="eyebrow">Cómo trabajamos</div><h2>De la primera llamada a la ratificación en el juzgado</h2></div>
  <div class="steps">
    <div class="step"><h3>Consulta gratuita</h3><p>Nos cuenta el caso por teléfono, videollamada o en la sede de {{ $n }}. Le decimos si procede un informe pericial y qué se puede acreditar.</p></div>
    <div class="step"><h3>Presupuesto cerrado</h3><p>Definimos el objeto de la pericia con su abogado y fijamos honorarios y plazo antes de empezar.</p></div>
    <div class="step"><h3>Informe pericial</h3><p>Analizamos la documentación y redactamos el dictamen con anexos y trazabilidad de cada cifra.</p></div>
    <div class="step"><h3>Ratificación</h3><p>Preparamos la vista con el abogado y defendemos el informe ante el juzgado de {{ $n }} que corresponda.</p></div>
  </div>
</div></section>

<section class="alt"><div class="wrap"><div class="two-col">
  <div><div class="eyebrow">Preguntas frecuentes</div><h2>Perito económico en {{ $n }}: dudas habituales</h2><p class="lead">Respuestas breves a lo que más nos preguntan abogados y particulares de {{ $c['provincia'] }}.</p></div>
  @include('partials.faq', ['items' => $faq])
</div></div></section>

<section><div class="wrap"><div class="contact">
  <div><div class="eyebrow">Contacto {{ $n }}</div><h2>Cuéntenos su caso</h2><p class="lead">Respondemos en menos de 24 horas laborables. Toda la información se trata de forma confidencial.</p>
  <p><a class="phone" style="font-family:var(--serif);font-size:1.6rem;font-weight:600;text-decoration:none" href="tel:{{ tel_link($tel) }}">{{ $tel }}</a></p></div>
  @include('partials.form-contacto', ['sede' => $c['slug']])
</div></div></section>
@endsection

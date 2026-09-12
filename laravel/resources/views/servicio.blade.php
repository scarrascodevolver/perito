@php $site = sitio('site'); @endphp
@extends('layouts.app', [
    'current' => 'servicios',
    'title' => $s['nombre'].' | Perito Económico',
    'desc' => \Illuminate\Support\Str::limit($s['corto'], 150).' Informe pericial con validez judicial en toda España.',
])
@push('ld')
{!! json_ld(['@context' => 'https://schema.org', '@type' => 'Service', 'name' => $s['nombre'], 'serviceType' => 'Peritaje económico',
    'provider' => ['@type' => 'ProfessionalService', 'name' => $site['marca'], 'url' => route('home')], 'areaServed' => 'España', 'description' => $s['corto']]) !!}
@endpush
@section('content')
<div class="page-head"><div class="wrap"><div class="crumbs"><a href="{{ route('home') }}">Inicio</a> › <a href="{{ route('servicios') }}">Servicios</a> › {{ $s['nombre'] }}</div><div class="eyebrow">Servicio 0{{ $i + 1 }}</div><h1>{{ $s['nombre'] }}</h1><p class="lead">{{ $s['corto'] }}</p></div></div>
<section><div class="wrap"><div class="two-col">
  <div class="prose">
    <p class="lead" style="color:var(--ink)">{{ $s['intro'] }}</p>
    <h2>Cuándo se necesita este informe</h2><ul>@foreach($s['cuando'] as $x)<li>{{ $x }}</li>@endforeach</ul>
    <h2>Qué incluye el informe pericial</h2><ul>@foreach($s['incluye'] as $x)<li>{{ $x }}</li>@endforeach</ul>
    <h2>Preguntas frecuentes</h2>@include('partials.faq', ['items' => $s['faq']])
  </div>
  <aside class="aside"><h3>Consulta gratuita</h3><p style="font-size:.92rem;color:var(--muted)">Cuéntenos el caso y le decimos si procede un informe pericial y con qué presupuesto.</p>
    <a class="btn btn-primary" href="{{ route('contacto') }}" style="width:100%;justify-content:center">Solicitar consulta</a>
    <p style="margin:1rem 0 0;font-size:.92rem"><a href="tel:{{ $site['telefono_link'] }}">{{ $site['telefono'] }}</a></p>
    <h3 style="margin-top:1.6rem">Otros servicios</h3><ul>
      @foreach(sitio('servicios') as $o)@if($o['slug'] !== $s['slug'])<li><a href="{{ route('servicio', $o['slug']) }}">{{ $o['nombre'] }}</a></li>@endif @endforeach
    </ul>
    <h3 style="margin-top:1.6rem">Por ciudad</h3><ul>
      @foreach(sitio('ciudades') as $c)<li><a href="{{ route('ciudad', $c['slug']) }}">{{ $s['nombre'] }} en {{ $c['nombre'] }}</a></li>@endforeach
    </ul></aside>
</div></div></section>
@include('partials.cta-band')
@endsection

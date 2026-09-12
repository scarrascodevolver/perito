@php $site = sitio('site'); @endphp
@extends('layouts.app', [
    'current' => 'contacto',
    'title' => 'Contacto | Perito Económico',
    'desc' => 'Contacte con nuestros peritos económicos en Valencia, Madrid y Almería. Primera consulta gratuita y confidencial. Teléfono, WhatsApp y formulario.',
])
@section('content')
<div class="page-head"><div class="wrap"><div class="crumbs"><a href="{{ route('home') }}">Inicio</a> › Contacto</div><div class="eyebrow">Contacto</div><h1>Solicite una consulta gratuita</h1><p class="lead">La primera consulta es gratuita y confidencial. Analizamos su caso y le orientamos sobre la estrategia pericial más adecuada.</p></div></div>
<section><div class="wrap"><div class="contact">
  <div>
    <ul class="info-list">
      <li><b>Teléfono</b><span><a href="tel:{{ $site['telefono_link'] }}">{{ $site['telefono'] }}</a> · <a href="https://wa.me/{{ $site['whatsapp'] }}" target="_blank" rel="noopener">WhatsApp</a></span></li>
      <li><b>Email</b><span><a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a></span></li>
      <li><b>Horario</b><span>{{ $site['horario'] }}</span></li>
      @foreach(sitio('ciudades') as $c)
      <li><b>{{ $c['nombre'] }}</b><span>{{ todo($c['direccion'], 'Dirección') }}<br><a href="{{ route('ciudad', $c['slug']) }}">Ver sede de {{ $c['nombre'] }} →</a></span></li>
      @endforeach
    </ul>
  </div>
  @include('partials.form-contacto', ['sede' => $sedeInicial])
</div></div></section>
@endsection

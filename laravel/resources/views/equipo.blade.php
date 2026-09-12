@extends('layouts.app', [
    'current' => 'equipo',
    'title' => 'Equipo de peritos económicos | Perito Económico',
    'desc' => 'Conozca a nuestros peritos económicos y colaboradores: expertos en blanqueo de capitales, derecho penal económico y fraudes de inversión. Sedes en Valencia, Madrid y Almería.',
])
@section('content')
<div class="page-head"><div class="wrap"><div class="crumbs"><a href="{{ route('home') }}">Inicio</a> › Equipo</div><div class="eyebrow">Equipo</div><h1>Peritos con trayectoria acreditada</h1><p class="lead">Un equipo multidisciplinar de peritos económicos, abogados y analistas forenses, integrado en {{ sitio('site.grupo') }}, una red de profesionales dedicada a la pericia económica.</p></div></div>
<section><div class="wrap">@include('partials.equipo-cards', ['full' => true])
<div class="notice">Todos nuestros peritos actúan con independencia e imparcialidad, tanto en encargos de parte como en designaciones judiciales, conforme a la Ley de Enjuiciamiento Civil y a las normas deontológicas de sus colegios profesionales.</div></div></section>
@include('partials.cta-band', ['txt' => 'Hable con un perito, no con un comercial'])
@endsection

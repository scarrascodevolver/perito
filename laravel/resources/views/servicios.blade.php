@extends('layouts.app', [
    'current' => 'servicios',
    'title' => 'Servicios de peritaje económico | Perito Económico',
    'desc' => 'Servicios de perito económico: lucro cesante, valoración de empresas, peritaje contable, blanqueo de capitales, fraude de inversión y herencias. Informes periciales con validez judicial.',
])
@section('content')
<div class="page-head"><div class="wrap"><div class="crumbs"><a href="{{ route('home') }}">Inicio</a> › Servicios</div><div class="eyebrow">Servicios periciales</div><h1>Peritaje económico, contable y financiero</h1><p class="lead">Informes periciales para procedimientos civiles, mercantiles, penales económicos, concursales y arbitrajes. En Valencia, Madrid, Almería y toda España.</p></div></div>
<section><div class="wrap">@include('partials.servicios-grid')</div></section>
<section class="alt"><div class="wrap"><div class="two-col">
  <div><div class="eyebrow">Para abogados</div><h2>Un perito que trabaja con la estrategia procesal</h2><p class="lead">Definimos el objeto de la pericia con el letrado, señalamos qué documentación conviene pedir en exhibición y preparamos la ratificación como un interrogatorio más.</p></div>
  <div><div class="eyebrow">Para empresas y particulares</div><h2>Le decimos qué se puede acreditar</h2><p class="lead">Antes de litigar conviene saber qué cifra es defendible. Una consulta previa evita reclamaciones desproporcionadas y ahorra costes.</p></div>
</div></div></section>
@include('partials.cta-band')
@endsection

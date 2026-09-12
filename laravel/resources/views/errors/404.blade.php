@extends('layouts.app', ['title' => 'Página no encontrada | Perito Económico', 'desc' => 'Página no encontrada.'])
@section('content')
<section><div class="wrap" style="text-align:center;padding:60px 24px"><div class="eyebrow" style="justify-content:center">Error 404</div><h1>Página no encontrada</h1><p class="lead" style="margin:0 auto 2rem">La página que busca no existe o ha cambiado de dirección.</p><a class="btn btn-primary" href="{{ route('home') }}">Volver al inicio</a></div></section>
@endsection

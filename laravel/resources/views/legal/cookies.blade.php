@php $ga = sitio('site.ga_id'); @endphp
@extends('layouts.app', ['title' => 'Política de cookies | Perito Económico', 'desc' => 'Política de cookies de peritoeconomico.es.'])
@section('content')
<div class="page-head"><div class="wrap"><div class="crumbs"><a href="{{ route('home') }}">Inicio</a> › Política de cookies</div><h1>Política de cookies</h1></div></div>
<section><div class="wrap prose">
<h2>¿Qué son las cookies?</h2><p>Son pequeños archivos que el sitio web almacena en su navegador para recordar información sobre su visita.</p>
<h2>Cookies que utiliza este sitio</h2>
<table class="tbl"><tr><th>Cookie</th><th>Tipo</th><th>Finalidad</th><th>Duración</th></tr>
<tr><td>XSRF-TOKEN, {{ str_replace('-', '_', \Illuminate\Support\Str::slug(config('app.name'))) }}_session</td><td>Técnica</td><td>Seguridad del formulario de contacto y sesión. Imprescindibles.</td><td>2 horas</td></tr>
<tr><td>geo-off</td><td>Técnica (localStorage)</td><td>Recordar que ha cerrado la sugerencia de sede más cercana.</td><td>Persistente</td></tr>
@if($ga)<tr><td>_ga, _ga_*</td><td>Analítica (Google Analytics)</td><td>Estadísticas anónimas de uso del sitio.</td><td>2 años</td></tr>@endif
</table>
<p>@if($ga)Las cookies analíticas solo se instalan si usted las acepta en el aviso de cookies.@else Este sitio no utiliza cookies analíticas ni publicitarias. Las fuentes tipográficas se cargan desde Google Fonts, que puede registrar la dirección IP del visitante conforme a su propia política de privacidad.@endif</p>
<h2>Cómo desactivar las cookies</h2><p>Puede configurar su navegador para bloquear o eliminar las cookies. Consulte la ayuda de Chrome, Firefox, Safari o Edge para hacerlo.</p>
</div></section>
@endsection

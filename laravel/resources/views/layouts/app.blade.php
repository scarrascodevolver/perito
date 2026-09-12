@php
    $site = sitio('site');
    $city = $city ?? null;           // array de ciudad cuando la página es de una sede
    $current = $current ?? '';       // clave del menú activo
    $title = $title ?? $site['marca'];
    $desc = $desc ?? $site['claim'];
    $canonical = url()->current();
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $desc }}">
<link rel="canonical" href="{{ $canonical }}">
<meta property="og:type" content="website"><meta property="og:locale" content="es_ES">
<meta property="og:title" content="{{ $title }}"><meta property="og:description" content="{{ $desc }}">
<meta property="og:url" content="{{ $canonical }}"><meta property="og:site_name" content="{{ $site['marca'] }}">
<meta property="og:image" content="{{ asset('assets/img/og.png') }}">
<meta name="theme-color" content="#14213D">
<link rel="icon" href="{{ asset('assets/img/favicon.svg') }}" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v=8">
@if($city)
<style>:root{--city:{{ $city['color'] }};--city-soft:{{ $city['color_soft'] }}}</style>
@endif
@if($site['ga_id'])
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $site['ga_id'] }}"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag('js',new Date());gtag('config','{{ $site['ga_id'] }}',{anonymize_ip:true});</script>
@endif
@stack('ld')
@unless(request()->routeIs('home'))
{!! json_ld(['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => [
    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => route('home')],
    ['@type' => 'ListItem', 'position' => 2, 'name' => trim(explode('|', $title)[0]), 'item' => $canonical],
]]) !!}
@endunless
</head>
<body>
<a class="skip" href="#main">Ir al contenido</a>
@include('partials.header')
<main id="main">
@yield('content')
</main>
@include('partials.footer')
</body>
</html>

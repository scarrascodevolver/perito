@php $site = sitio('site'); $citySlug = $city['slug'] ?? ''; @endphp
<div class="topbar"><div class="wrap">
  <span>Perito económico en <span class="cities">
    @foreach(sitio('ciudades') as $c)
      <a href="{{ route('ciudad', $c['slug']) }}" @class(['on' => $c['slug'] === $citySlug])>{{ $c['nombre'] }}</a>
    @endforeach
  </span></span>
  <a href="tel:{{ $site['telefono_link'] }}">☎ {{ $site['telefono'] }}</a>
</div></div>
<header class="site"><div class="wrap">
  <a class="brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/pluma-navy.svg') }}" alt="" width="44" height="52"><span><b>Perito Económico</b><small>Informes periciales · Valencia · Madrid · Almería</small></span></a>
  <button class="burger" aria-label="Menú" aria-expanded="false" onclick="var n=document.getElementById('nav');n.classList.toggle('open');this.setAttribute('aria-expanded',n.classList.contains('open'))">☰</button>
  <nav class="main" id="nav" aria-label="Principal">
    <a href="{{ route('servicios') }}" @class(['on' => $current === 'servicios'])>Servicios</a>
    @foreach(sitio('ciudades') as $c)
      <a href="{{ route('ciudad', $c['slug']) }}" @class(['on' => $current === $c['slug']])>{{ $c['nombre'] }}</a>
    @endforeach
    <a href="{{ route('equipo') }}" @class(['on' => $current === 'equipo'])>Equipo</a>
    <a href="{{ route('metodologia') }}" @class(['on' => $current === 'metodologia'])>Metodología</a>
    <a class="btn btn-primary" href="{{ route('contacto') }}">Consulta gratuita</a>
  </nav>
</div></header>
<div class="geo" id="geo"><div class="wrap"><span id="geo-txt"></span><button aria-label="Cerrar" onclick="document.getElementById('geo').classList.remove('show');try{localStorage.setItem('geo-off','1')}catch(e){}">×</button></div></div>

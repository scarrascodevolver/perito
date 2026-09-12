@php $full = $full ?? false; @endphp
@foreach(sitio('equipo') as $p)
  @if($full)
  <article class="person person-full" id="{{ $p['id'] }}">
    <img src="{{ asset('assets/img/equipo/'.$p['id'].'.webp') }}" alt="{{ $p['nombre'] }}" loading="lazy" width="220" height="220">
    <div><h3>{{ $p['nombre'] }}</h3><div class="role">{{ $p['rol'] }}</div>
      @foreach($p['bio'] as $par)<p>{{ $par }}</p>@endforeach
      <div class="creds">@foreach($p['creds'] as $cr)<span>{{ $cr }}</span>@endforeach</div></div>
  </article>
  @else
  <a class="card link person-card" href="{{ route('equipo') }}#{{ $p['id'] }}">
    <img src="{{ asset('assets/img/equipo/'.$p['id'].'.webp') }}" alt="{{ $p['nombre'] }}" loading="lazy" width="640" height="640">
    <h3>{{ $p['nombre'] }}</h3><div class="role">{{ $p['rol'] }}</div><p>{{ $p['corto'] }}</p><span class="more">Ver perfil</span></a>
  @endif
@endforeach

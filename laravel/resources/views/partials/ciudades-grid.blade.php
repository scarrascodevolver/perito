<div class="grid g3">
@foreach(sitio('ciudades') as $c)
  <a class="card link city-card" style="--cc:{{ $c['color'] }}" href="{{ route('ciudad', $c['slug']) }}">
    <div class="tag">Sede {{ $c['comunidad'] }}</div><div class="city-name">{{ $c['nombre'] }}</div>
    <p>Perito económico en {{ $c['nombre'] }} y provincia. Informes periciales para los juzgados de {{ $c['provincia'] }} y ratificación en sala.</p>
    <span class="more">Perito económico {{ $c['nombre'] }}</span></a>
@endforeach
</div>

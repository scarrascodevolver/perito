<div class="grid g3">
@foreach(sitio('servicios') as $i => $s)
  <a class="card link" href="{{ route('servicio', $s['slug']) }}"><div class="num">0{{ $i + 1 }}</div><h3>{{ $s['nombre'] }}</h3><p>{{ $s['corto'] }}</p><span class="more">Ver servicio</span></a>
@endforeach
</div>

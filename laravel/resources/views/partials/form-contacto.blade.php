@php $sede = $sede ?? null; $site = sitio('site'); @endphp
<form class="f" action="{{ route('contacto.enviar') }}" method="POST" id="form">
  @csrf
  <input type="text" name="empresa_web" style="display:none" tabindex="-1" autocomplete="off">
  @if(session('ok'))
    <div class="ok" style="display:block">Consulta recibida. Le contactaremos en menos de 24 horas laborables.</div>
  @endif
  @if($errors->any())
    <div class="full" style="background:#FDECEC;color:#8E2A2F;padding:1rem;border-radius:8px;font-size:.9rem">{{ $errors->first() }}</div>
  @endif
  <div><label for="f-nombre">Nombre y apellidos *</label><input id="f-nombre" name="nombre" value="{{ old('nombre') }}" required></div>
  <div><label for="f-tel">Teléfono *</label><input id="f-tel" name="telefono" type="tel" value="{{ old('telefono') }}" required></div>
  <div><label for="f-email">Email *</label><input id="f-email" name="email" type="email" value="{{ old('email') }}" required></div>
  <div><label for="f-sede">Sede más cercana</label><select id="f-sede" name="sede">
    @foreach(sitio('ciudades') as $c)<option @selected(old('sede', $sede) === $c['slug'] || old('sede', $sede) === $c['nombre'])>{{ $c['nombre'] }}</option>@endforeach
    <option>Otra provincia</option></select></div>
  <div class="full"><label for="f-tipo">Tipo de peritaje</label><select id="f-tipo" name="tipo">
    @foreach(sitio('servicios') as $s)<option @selected(old('tipo') === $s['nombre'])>{{ $s['nombre'] }}</option>@endforeach
    <option>Otro / no lo sé</option></select></div>
  <div class="full"><label for="f-msg">Describa brevemente su caso *</label><textarea id="f-msg" name="mensaje" required placeholder="Tipo de procedimiento, partes implicadas, plazos y qué necesita acreditar.">{{ old('mensaje') }}</textarea></div>
  <label class="full check"><input type="checkbox" name="privacidad" value="1" required><span>He leído y acepto la <a href="{{ route('privacidad') }}">política de privacidad</a>. Sus datos se utilizarán exclusivamente para atender su consulta.</span></label>
  <div class="full"><button class="btn btn-primary" type="submit">Enviar consulta confidencial</button></div>
</form>

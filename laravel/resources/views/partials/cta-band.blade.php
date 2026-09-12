@php
    $txt = $txt ?? '¿Necesita un perito económico?';
    $sub = $sub ?? 'La primera consulta es gratuita y confidencial. Le indicamos si su caso requiere informe pericial y un presupuesto cerrado.';
    $tel = $tel ?? sitio('site.telefono');
@endphp
<section class="tight"><div class="wrap"><div class="cta-band">
  <div><h2>{{ $txt }}</h2><p>{{ $sub }}</p></div>
  <div style="display:flex;gap:1rem;align-items:center;flex-wrap:wrap"><a class="phone" href="tel:{{ tel_link($tel) }}">{{ $tel }}</a><a class="btn btn-gold" href="{{ route('contacto') }}">Solicitar consulta</a></div>
</div></div></section>

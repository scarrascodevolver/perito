@php $site = sitio('site'); @endphp
<footer><div class="wrap">
  <div class="cols">
    <div>
      <a class="brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/pluma-white.svg') }}" alt="" width="44" height="52"><span><b>Perito Económico</b><small>Miembros de {{ $site['grupo'] }}</small></span></a>
      <p>{{ $site['claim'] }}. Peritos económicos y contables con cobertura nacional y sedes en Valencia, Madrid y Almería.</p>
      <p><a href="tel:{{ $site['telefono_link'] }}">{{ $site['telefono'] }}</a><br><a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a><br>{{ $site['horario'] }}</p>
    </div>
    <div><h4>Servicios</h4><ul>
      @foreach(sitio('servicios') as $s)<li><a href="{{ route('servicio', $s['slug']) }}">{{ $s['nombre'] }}</a></li>@endforeach
    </ul></div>
    <div><h4>Sedes</h4><ul>
      @foreach(sitio('ciudades') as $c)<li><a href="{{ route('ciudad', $c['slug']) }}">Perito económico {{ $c['nombre'] }}</a></li>@endforeach
    </ul></div>
    <div><h4>Despacho</h4><ul>
      <li><a href="{{ route('equipo') }}">Equipo</a></li><li><a href="{{ route('metodologia') }}">Metodología pericial</a></li>
      <li><a href="{{ route('contacto') }}">Contacto</a></li><li><a href="{{ route('aviso-legal') }}">Aviso legal</a></li>
      <li><a href="{{ route('privacidad') }}">Política de privacidad</a></li><li><a href="{{ route('cookies') }}">Política de cookies</a></li>
    </ul></div>
  </div>
  <div class="legal"><span>© {{ date('Y') }} {{ $site['marca'] }}. Todos los derechos reservados.</span><span>Informes periciales económicos con validez judicial en toda España.</span></div>
</div></footer>
<a class="wa" href="https://wa.me/{{ $site['whatsapp'] }}?text=Hola%2C%20necesito%20un%20perito%20econ%C3%B3mico" target="_blank" rel="noopener" aria-label="WhatsApp"><svg viewBox="0 0 24 24"><path d="M17.5 14.4c-.3-.1-1.8-.9-2-1s-.5-.1-.7.1-.8 1-1 1.2-.4.2-.7.1a8 8 0 0 1-4-3.5c-.3-.5.3-.5.9-1.6.1-.2 0-.4 0-.5l-.9-2.2c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4s-1 1-1 2.5 1.1 2.9 1.2 3.1c.2.2 2.1 3.2 5.1 4.5 1.9.8 2.6.9 3.6.7.6-.1 1.8-.7 2-1.4s.3-1.3.2-1.4c-.1-.2-.3-.3-.6-.5zM12 21.8a9.8 9.8 0 0 1-5-1.4l-.4-.2-3.7 1 1-3.6-.2-.4A9.8 9.8 0 1 1 12 21.8zm0-21.6A11.8 11.8 0 0 0 1.9 17.9L.2 24l6.3-1.6A11.8 11.8 0 1 0 12 .2z"/></svg></a>
<script>
(function(){
  // Sugerencia de sede cercana: solo si el usuario concede geolocalización y no está ya en una sede. Nunca redirige.
  if(location.pathname.indexOf('perito-economico-')>-1)return;
  try{if(localStorage.getItem('geo-off'))return;}catch(e){}
  if(!navigator.geolocation)return;
  var sedes=[{n:'Valencia',s:'valencia',la:39.47,lo:-0.38},{n:'Madrid',s:'madrid',la:40.42,lo:-3.70},{n:'Almería',s:'almeria',la:36.83,lo:-2.46}];
  setTimeout(function(){navigator.geolocation.getCurrentPosition(function(p){
    var b=null,bd=1e9;sedes.forEach(function(c){var d=Math.hypot(c.la-p.coords.latitude,(c.lo-p.coords.longitude)*Math.cos(c.la*Math.PI/180));if(d<bd){bd=d;b=c}});
    if(b&&bd<2.2){document.getElementById('geo-txt').innerHTML='Parece que está cerca de <b>'+b.n+'</b>. <a href="/perito-economico-'+b.s+'">Ver nuestra sede en '+b.n+' →</a>';document.getElementById('geo').classList.add('show');}
  },function(){},{timeout:6000,maximumAge:6e5})},2500);
})();
</script>
<script src="{{ asset('assets/js/site.js') }}?v=1" defer></script>

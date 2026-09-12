@php $site = sitio('site'); @endphp
@extends('layouts.app', ['title' => 'Aviso legal | Perito Económico', 'desc' => 'Aviso legal del sitio web peritoeconomico.es.'])
@section('content')
<div class="page-head"><div class="wrap"><div class="crumbs"><a href="{{ route('home') }}">Inicio</a> › Aviso legal</div><h1>Aviso legal</h1></div></div>
<section><div class="wrap prose">
<h2>1. Datos identificativos</h2>
<p>En cumplimiento de la Ley 34/2002, de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE), se informa de que el titular del sitio web <strong>peritoeconomico.es</strong> es:</p>
<ul><li>Titular: {{ todo($site['titular_nombre'], 'Nombre o razón social del titular') }}</li><li>NIF: {{ todo($site['titular_nif'], 'NIF') }}</li><li>Domicilio: {{ todo($site['titular_domicilio'], 'Domicilio') }}</li><li>Correo electrónico: {{ $site['email'] }}</li><li>Teléfono: {{ $site['telefono'] }}</li></ul>
<h2>2. Objeto</h2><p>El presente aviso regula el acceso y uso del sitio web, que tiene por finalidad informar sobre los servicios de peritaje económico prestados por el titular y facilitar el contacto con los usuarios interesados.</p>
<h2>3. Propiedad intelectual e industrial</h2><p>Los contenidos del sitio (textos, imágenes, logotipos, diseño y código) son titularidad del titular o de terceros que han autorizado su uso, y están protegidos por la legislación de propiedad intelectual e industrial. Queda prohibida su reproducción, distribución o transformación sin autorización expresa.</p>
<h2>4. Responsabilidad</h2><p>La información de este sitio tiene carácter general e informativo y no constituye asesoramiento profesional ni relación contractual alguna. El titular no se hace responsable de los daños derivados del uso de la información contenida en la web ni de los contenidos de sitios de terceros enlazados.</p>
<h2>5. Legislación aplicable</h2><p>La relación entre el titular y el usuario se regirá por la legislación española. Para cualquier controversia, las partes se someten a los juzgados y tribunales que correspondan conforme a la normativa vigente.</p>
</div></section>
@endsection

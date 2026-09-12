@php $site = sitio('site'); @endphp
@extends('layouts.app', ['title' => 'Política de privacidad | Perito Económico', 'desc' => 'Política de privacidad y protección de datos de peritoeconomico.es conforme al RGPD.'])
@section('content')
<div class="page-head"><div class="wrap"><div class="crumbs"><a href="{{ route('home') }}">Inicio</a> › Política de privacidad</div><h1>Política de privacidad</h1></div></div>
<section><div class="wrap prose">
<h2>1. Responsable del tratamiento</h2><ul><li>Identidad: {{ todo($site['titular_nombre'], 'Nombre o razón social del titular') }}</li><li>NIF: {{ todo($site['titular_nif'], 'NIF') }}</li><li>Domicilio: {{ todo($site['titular_domicilio'], 'Domicilio') }}</li><li>Correo: {{ $site['email'] }}</li></ul>
<h2>2. Finalidad</h2><p>Tratamos los datos que nos facilita a través del formulario de contacto, por correo electrónico, teléfono o WhatsApp con la finalidad de atender su consulta, valorar la viabilidad de un encargo pericial y, en su caso, prestar el servicio solicitado. No se toman decisiones automatizadas ni se elaboran perfiles.</p>
<h2>3. Legitimación</h2><p>La base legal es el consentimiento del interesado al remitir la consulta (art. 6.1.a RGPD) y, en caso de contratación, la ejecución de un contrato (art. 6.1.b RGPD). Los datos relativos a procedimientos judiciales se tratan bajo el deber de secreto profesional.</p>
<h2>4. Conservación</h2><p>Los datos de consultas no contratadas se conservan durante un máximo de 12 meses. Los datos de encargos periciales se conservan durante la vigencia del encargo y los plazos de prescripción de las responsabilidades legales aplicables.</p>
<h2>5. Destinatarios</h2><p>No se ceden datos a terceros salvo obligación legal o cuando sea necesario para la prestación del servicio (por ejemplo, el abogado que dirige el procedimiento). Las consultas del formulario se reciben por correo electrónico en los sistemas del titular.</p>
<h2>6. Derechos</h2><p>Puede ejercer sus derechos de acceso, rectificación, supresión, oposición, limitación y portabilidad escribiendo a {{ $site['email'] }} indicando el derecho que desea ejercer y adjuntando copia de su documento de identidad. También puede presentar una reclamación ante la Agencia Española de Protección de Datos (www.aepd.es).</p>
<h2>7. Seguridad</h2><p>Aplicamos medidas técnicas y organizativas adecuadas para garantizar la confidencialidad e integridad de la información, especialmente de la relativa a procedimientos judiciales.</p>
</div></section>
@endsection

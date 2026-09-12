@php
    $principios = [
        ['Objetividad e independencia', 'El perito actúa con total independencia de las partes y emite conclusiones basadas exclusivamente en el análisis de los hechos y la documentación.'],
        ['Rigor técnico y metodológico', 'Todos los análisis se realizan conforme a metodologías reconocidas y buenas prácticas profesionales, garantizando la coherencia y reproducibilidad del informe.'],
        ['Trazabilidad de la prueba', 'Se documenta el origen, tratamiento y análisis de cada evidencia, asegurando la integridad de la información y la verificabilidad de cada cifra.'],
        ['Cumplimiento normativo', 'El informe se ajusta a la Ley de Enjuiciamiento Civil, a la Ley de Enjuiciamiento Criminal cuando procede y a la regulación de cada ámbito pericial.'],
    ];
    $fases = [
        ['Análisis inicial del caso', 'Estudio detallado del asunto objeto de la pericia, analizando la documentación facilitada y definiendo con precisión el objeto del informe. Se establece el alcance, los objetivos y las limitaciones técnicas o documentales que puedan afectar al análisis.', ['Estudio documental', 'Definición del objeto', 'Alcance y limitaciones']],
        ['Recopilación y análisis de evidencias', 'Obtención de la prueba económica mediante revisión documental, extractos bancarios, contabilidad y, cuando procede, evidencias digitales. Todo se trata con protocolos que garantizan integridad, fiabilidad y trazabilidad.', ['Revisión documental', 'Cadena de custodia', 'Exhibición de documentos']],
        ['Aplicación de metodología técnica y normativa', 'Las evidencias se analizan con metodologías reconocidas en economía, contabilidad y finanzas, aplicando la normativa sectorial y los criterios jurisprudenciales relevantes, para llegar a un análisis objetivo de los hechos.', ['Normativa contable', 'Métodos de valoración', 'Jurisprudencia aplicable']],
        ['Redacción del informe pericial', 'El informe se redacta de forma clara, estructurada y comprensible, con lenguaje técnico-jurídico adecuado al entorno judicial: antecedentes, metodología, análisis, conclusiones justificadas y anexos con la trazabilidad de cada cifra.', ['Estructura procesal', 'Conclusiones fundamentadas', 'Anexos verificables']],
        ['Ratificación judicial', 'El perito comparece ante el juzgado para ratificar el informe, defender técnicamente las conclusiones y responder a las aclaraciones del juez y de las partes. Preparamos la vista con el abogado como un interrogatorio más.', ['Comparecencia', 'Defensa técnica', 'Aclaraciones al juez']],
    ];
    $faq = [
        ['¿Qué es la metodología de un informe pericial?', 'Es el conjunto de procedimientos técnicos y legales que se aplican para elaborar un informe objetivo, fundamentado y válido en un proceso judicial: desde la recopilación de evidencias hasta la defensa del informe ante el juzgado.'],
        ['¿Por qué es importante en un juicio?', 'Sin una metodología rigurosa, las conclusiones pueden ser cuestionadas por la parte contraria o por el propio juzgado. La metodología garantiza que el informe se pueda defender con solvencia y que el juez lo valore con garantías.'],
        ['¿Cualquier informe se puede ratificar?', 'Solo los elaborados con rigor técnico, trazabilidad de la prueba y cumplimiento normativo se defienden con garantías. Acompañamos cada informe con la preparación necesaria para superar la fase de ratificación.'],
    ];
@endphp
@extends('layouts.app', [
    'current' => 'metodologia',
    'title' => 'Metodología pericial | Perito Económico',
    'desc' => 'Metodología de elaboración de informes periciales económicos: análisis del caso, evidencias, aplicación normativa, redacción y ratificación judicial. Rigor, trazabilidad e independencia.',
])
@section('content')
<div class="page-head"><div class="wrap"><div class="crumbs"><a href="{{ route('home') }}">Inicio</a> › Metodología</div><div class="eyebrow">Metodología pericial</div><h1>Informes periciales con garantías judiciales</h1><p class="lead">Una metodología rigurosa, objetiva y alineada con los requisitos legales y técnicos vigentes. Cada informe se desarrolla conforme a los principios de independencia, imparcialidad y trazabilidad de la prueba.</p></div></div>
<section><div class="wrap"><div class="sec-head"><div class="eyebrow">Principios</div><h2>Fundamentos de nuestra metodología</h2></div>
<div class="grid g2">@foreach($principios as [$t, $d])<div class="card"><h3>{{ $t }}</h3><p>{{ $d }}</p></div>@endforeach</div></div></section>
<section class="alt"><div class="wrap"><div class="sec-head"><div class="eyebrow">Proceso</div><h2>Cinco fases para un informe defendible</h2></div><div class="grid g3">
@foreach($fases as $i => [$t, $d, $tags])
  <div class="card"><div class="num">Fase 0{{ $i + 1 }}</div><h3>{{ $t }}</h3><p>{{ $d }}</p><div class="creds">@foreach($tags as $x)<span>{{ $x }}</span>@endforeach</div></div>
@endforeach
</div></div></section>
<section><div class="wrap"><div class="two-col"><div><div class="eyebrow">Preguntas frecuentes</div><h2>Dudas sobre la metodología</h2></div>@include('partials.faq', ['items' => $faq])</div></div></section>
@include('partials.cta-band', ['txt' => '¿Necesita un informe pericial con plenas garantías?'])
@endsection

<?php

/*
|--------------------------------------------------------------------------
| Datos del sitio Perito Económico
|--------------------------------------------------------------------------
| Único archivo que hay que editar para cambiar textos, ciudades, servicios,
| equipo o datos de contacto. Los valores null con comentario TODO se
| rellenan cuando Aurelio envíe la información; mientras tanto se pintan
| resaltados en amarillo en la web.
*/

return [
    'site' => [
        'dominio' => 'https://peritoeconomico.es',
        'marca' => 'Perito Económico',
        'claim' => 'Informes periciales económicos con validez judicial',
        'telefono' => '+34 711 541 524',
        'telefono_link' => '+34711541524',
        'whatsapp' => '34711541524',
        'email' => 'contacto@peritoeconomico.es',
        'horario' => 'Lunes a viernes, 9:00 a 19:00',
        'anios' => '15',
        'informes' => '500+',
        // El formulario se envía por correo al email de arriba (MAIL_* en .env)
        'ga_id' => env('GA_ID', ''), // Google Analytics 4 (opcional)
        'titular_nombre' => null, // TODO nombre o razón social (aviso legal)
        'titular_nif' => null, // TODO NIF
        'titular_domicilio' => null, // TODO domicilio del titular
        'grupo' => 'Grupo Orcet',
    ],

    'ciudades' => [
        [
            'slug' => 'valencia',
            'nombre' => 'Valencia',
            'provincia' => 'Valencia',
            'comunidad' => 'Comunidad Valenciana',
            'color' => '#C4622D',
            'color_soft' => '#F7E6DC',
            'direccion' => "Carrer de Colón, 4, L'Eixample, 46004 Valencia",
            'telefono' => null, // TODO null = usa el central
            'maps_embed' => 'https://www.google.com/maps?q=Carrer+de+Col%C3%B3n+4%2C+46004+Valencia&z=16&output=embed',
            'cp' => '46004',
            'lat' => 39.4670076,
            'lng' => -0.3743553,
            'juzgados' => [
                'Ciudad de la Justicia de Valencia (Av. del Profesor López Piñero, 14)',
                'Juzgados de lo Mercantil de Valencia',
                'Audiencia Provincial de Valencia',
            ],
            'zonas' => [
                'Valencia capital',
                'Torrent',
                'Paterna',
                'Gandía',
                'Sagunto',
                'Alzira',
                'Xàtiva',
                'Castellón',
                'Alicante',
            ],
            'intro' => 'Elaboramos informes periciales económicos para procedimientos que se tramitan en los juzgados de Valencia y de toda la Comunidad Valenciana. Cuantificamos daños, lucro cesante y valoraciones de empresa con una metodología defendible en sala y ratificamos el informe ante el tribunal.',
            'contexto' => 'Valencia concentra un tejido empresarial de pymes, empresas familiares, sector agroalimentario, cerámica, logística portuaria y turismo. Es habitual que los conflictos mercantiles, las disputas entre socios, las herencias con empresa de por medio y las reclamaciones por incumplimiento contractual requieran un perito económico que traduzca la contabilidad en cifras que el juez pueda valorar.',
        ],
        [
            'slug' => 'madrid',
            'nombre' => 'Madrid',
            'provincia' => 'Madrid',
            'comunidad' => 'Comunidad de Madrid',
            'color' => '#8E2A2F',
            'color_soft' => '#F3E1E2',
            'direccion' => 'Calle Velázquez, 10, 1º, 28001 Madrid',
            'telefono' => null, // TODO null = usa el central
            'maps_embed' => 'https://www.google.com/maps?q=Calle+de+Vel%C3%A1zquez+10%2C+28001+Madrid&z=16&output=embed',
            'cp' => '28001',
            'lat' => 40.4224760,
            'lng' => -3.6841342,
            'juzgados' => [
                'Juzgados de Plaza de Castilla (Madrid)',
                'Juzgados de lo Mercantil de Madrid (Gran Vía, 52)',
                'Audiencia Provincial de Madrid',
                'Audiencia Nacional',
            ],
            'zonas' => [
                'Madrid capital',
                'Alcalá de Henares',
                'Getafe',
                'Móstoles',
                'Leganés',
                'Alcobendas',
                'Pozuelo de Alarcón',
                'Las Rozas',
                'Majadahonda',
            ],
            'intro' => 'Perito económico en Madrid con experiencia en procedimientos civiles, mercantiles, penales económicos y arbitrajes. Elaboramos dictámenes periciales para despachos de abogados, empresas y particulares, y los defendemos en los juzgados de Plaza de Castilla, la Audiencia Provincial y la Audiencia Nacional.',
            'contexto' => 'Madrid concentra la mayor parte de los grandes procedimientos económicos del país: litigios societarios, responsabilidad de administradores, concursos de acreedores, delitos económicos, blanqueo de capitales y reclamaciones contra entidades financieras. Nuestros peritos aportan la cuantificación económica y la defienden con solvencia frente a la parte contraria.',
        ],
        [
            'slug' => 'almeria',
            'nombre' => 'Almería',
            'provincia' => 'Almería',
            'comunidad' => 'Andalucía',
            'color' => '#1F7A8C',
            'color_soft' => '#DCEEF2',
            'direccion' => 'Calle Chillida, 4, 04740 Roquetas de Mar (Almería)',
            'telefono' => null, // TODO null = usa el central
            'maps_embed' => 'https://www.google.com/maps?q=Calle+Chillida+4%2C+Roquetas+de+Mar%2C+Almer%C3%ADa&z=16&output=embed',
            'cp' => '04740',
            'localidad' => 'Roquetas de Mar', // municipio real de la sede (para el LocalBusiness)
            'lat' => 36.8190388,
            'lng' => -2.5975909,
            'juzgados' => [
                'Ciudad de la Justicia de Almería (Carretera de Ronda, 120)',
                'Juzgado de lo Mercantil de Almería',
                'Audiencia Provincial de Almería',
            ],
            'zonas' => [
                'Almería capital',
                'El Ejido',
                'Roquetas de Mar',
                'Níjar',
                'Huércal-Overa',
                'Vera',
                'Adra',
                'Vícar',
                'Granada',
                'Murcia',
            ],
            'intro' => 'Perito económico en Almería para procedimientos judiciales en la provincia y en el resto de Andalucía oriental. Valoramos empresas agrícolas y comercializadoras, cuantificamos lucro cesante y daños y elaboramos informes contables para herencias, divorcios y disputas societarias.',
            'contexto' => 'La economía almeriense gira en torno a la agricultura intensiva, las comercializadoras hortofrutícolas, la piedra natural, la construcción y el turismo. Muchas empresas son familiares y los conflictos entre socios o herederos, las valoraciones de participaciones y las reclamaciones por pérdida de cosecha o incumplimientos comerciales exigen un perito económico que conozca el sector y sepa defender las cifras ante el juzgado.',
        ],
    ],

    'servicios' => [
        [
            'slug' => 'lucro-cesante-y-dano-emergente',
            'nombre' => 'Lucro cesante y daño emergente',
            'corto' => 'Cuantificación de los beneficios dejados de obtener y de las pérdidas efectivamente sufridas por un incumplimiento, un siniestro o un acto ilícito.',
            'intro' => 'Cuando una empresa o un particular sufre un perjuicio económico, el juez necesita una cifra fundamentada. El informe pericial de lucro cesante y daño emergente demuestra, con datos contables y proyecciones razonables, cuánto se ha perdido y por qué.',
            'cuando' => [
                'Incumplimiento de contratos de suministro, distribución, franquicia o agencia',
                'Resolución anticipada de contratos de arrendamiento o de obra',
                'Paralización de actividad por siniestro, obras o decisiones administrativas',
                'Competencia desleal, uso indebido de marca o captación de clientela',
                'Responsabilidad civil profesional y reclamaciones a aseguradoras',
            ],
            'incluye' => [
                'Reconstrucción de la evolución histórica de ingresos y márgenes',
                'Proyección del escenario hipotético sin el hecho dañoso',
                'Cálculo del daño emergente: gastos incurridos, activos perdidos, costes de mitigación',
                'Análisis de causalidad y de la razonabilidad de la reclamación',
                'Informe pericial estructurado para su ratificación en sala',
            ],
            'faq' => [
                [
                    '¿Qué diferencia hay entre lucro cesante y daño emergente?',
                    'El daño emergente es la pérdida efectivamente sufrida en el patrimonio (gastos, bienes perdidos). El lucro cesante es la ganancia que se dejó de obtener a causa del hecho dañoso. Ambos son indemnizables, pero el lucro cesante exige acreditar con rigor que esa ganancia era probable y no meramente hipotética.',
                ],
                [
                    '¿Qué documentación necesita el perito?',
                    'Cuentas anuales, libros contables, facturación por cliente y producto, contratos afectados, presupuestos y cualquier prueba del hecho dañoso. En la primera consulta le indicamos exactamente qué reunir.',
                ],
                [
                    '¿Cuánto tarda el informe?',
                    'Depende del volumen de documentación. Un informe de lucro cesante habitual se entrega entre dos y cuatro semanas. Disponemos de servicio urgente cuando el plazo procesal lo exige.',
                ],
            ],
        ],
        [
            'slug' => 'valoracion-de-empresas-y-participaciones',
            'nombre' => 'Valoración de empresas y participaciones',
            'corto' => 'Determinación del valor razonable de una empresa, de un negocio o de un paquete de participaciones sociales para litigios, separaciones de socios, herencias o divorcios.',
            'intro' => 'La salida de un socio, una herencia con empresa, un divorcio con participaciones gananciales o una expropiación de acciones exigen saber cuánto vale realmente la compañía. Elaboramos valoraciones con métodos reconocidos (descuento de flujos, múltiplos, valor patrimonial ajustado) y las defendemos ante el tribunal.',
            'cuando' => [
                'Separación o exclusión de socios y ejercicio del derecho de separación',
                'Disolución de sociedades y liquidación del haber social',
                'Herencias y particiones con empresas familiares',
                'Liquidación de sociedad de gananciales con participaciones',
                'Impugnación de valoraciones de la parte contraria o de un experto independiente',
            ],
            'incluye' => [
                'Análisis histórico y normalización de los estados financieros',
                'Aplicación de varios métodos de valoración y contraste entre ellos',
                'Estimación de la tasa de descuento y de las primas de riesgo y de iliquidez',
                'Valoración de activos no operativos, inmuebles y marcas',
                'Dictamen pericial contradictorio si existe otra valoración en el procedimiento',
            ],
            'faq' => [
                [
                    '¿Qué método de valoración se utiliza?',
                    'No hay un único método correcto. El perito elige el más adecuado según el tipo de empresa y la finalidad, y suele contrastarlo con otro método para dar solidez al resultado. Lo importante es que el informe explique y justifique cada hipótesis.',
                ],
                [
                    '¿Se puede valorar una empresa sin colaboración de la otra parte?',
                    'Sí. Se trabaja con las cuentas depositadas en el Registro Mercantil, la información pública y la documentación a la que se tenga acceso. En el informe se detallan las limitaciones y, si procede, se solicita judicialmente la documentación adicional.',
                ],
                [
                    '¿Vale el mismo informe para una negociación y para un juicio?',
                    'Un informe pensado para un procedimiento judicial es más exigente: debe resistir el contrainterrogatorio y el informe de la otra parte. Elaboramos siempre con ese estándar, de modo que también sirve para negociar desde una posición sólida.',
                ],
            ],
        ],
        [
            'slug' => 'peritaje-contable-y-financiero',
            'nombre' => 'Peritaje contable y financiero',
            'corto' => 'Análisis de balances, cuentas anuales, libros y movimientos bancarios para acreditar hechos económicos ante el juzgado.',
            'intro' => 'Un perito contable examina la contabilidad de una empresa o los movimientos de un particular para determinar qué ocurrió realmente: si las cuentas reflejan la imagen fiel, si hubo salidas injustificadas de fondos, si el administrador actuó con diligencia o si una deuda está correctamente calculada.',
            'cuando' => [
                'Responsabilidad de administradores y acciones de reintegración en concursos',
                'Impugnación de cuentas anuales y de acuerdos sociales',
                'Análisis de la insolvencia y de su fecha de origen',
                'Reclamaciones de cantidad y liquidación de deudas entre empresas',
                'Rendición de cuentas entre socios, comuneros o herederos',
            ],
            'incluye' => [
                'Revisión de libros contables, mayores, facturas y conciliaciones bancarias',
                'Detección de irregularidades contables y flujos de fondos anómalos',
                'Reconstrucción de la contabilidad cuando es incompleta o inexistente',
                'Análisis de ratios, solvencia, liquidez y capacidad de pago',
                'Informe pericial con anexos documentales y trazabilidad de cada cifra',
            ],
            'faq' => [
                [
                    '¿Un perito contable es lo mismo que un auditor?',
                    'No. El auditor emite una opinión sobre las cuentas anuales conforme a la normativa de auditoría. El perito contable analiza hechos concretos por encargo de una parte o del juzgado y emite un dictamen sobre cuestiones controvertidas para que el juez pueda resolver.',
                ],
                [
                    '¿Puede el perito acceder a la contabilidad de la otra parte?',
                    'El abogado puede solicitar al juzgado la exhibición de documentos contables de la parte contraria. El perito indica qué documentación es imprescindible para que la petición sea precisa y eficaz.',
                ],
                [
                    '¿Actúan como perito judicial designado por el juzgado?',
                    'Sí. Nuestros peritos figuran en las listas de los colegios profesionales y aceptan designaciones judiciales, además de encargos de parte.',
                ],
            ],
        ],
        [
            'slug' => 'blanqueo-de-capitales-y-compliance',
            'nombre' => 'Blanqueo de capitales y compliance',
            'corto' => 'Peritaje en prevención del blanqueo de capitales, análisis de estructuras societarias y trazabilidad de fondos en procedimientos penales y administrativos.',
            'intro' => 'En los procedimientos por blanqueo de capitales, fraude o delitos económicos, la prueba pericial económica es determinante. Analizamos el origen y el destino de los fondos, las estructuras societarias utilizadas y el cumplimiento de las obligaciones de prevención, tanto para la defensa como para la acusación.',
            'cuando' => [
                'Procedimientos penales por blanqueo de capitales, estafa o insolvencia punible',
                'Expedientes sancionadores del SEPBLAC y de la Comisión de Prevención del Blanqueo',
                'Análisis de estructuras societarias, testaferros y operaciones vinculadas',
                'Verificación del programa de compliance y de los controles internos de la empresa',
                'Responsabilidad penal de la persona jurídica',
            ],
            'incluye' => [
                'Trazabilidad de fondos a través de cuentas, sociedades y jurisdicciones',
                'Análisis de la razonabilidad económica de las operaciones investigadas',
                'Evaluación del cumplimiento de la Ley 10/2010 de prevención del blanqueo',
                'Contraste con informes de la UDEF, la Agencia Tributaria o el SEPBLAC',
                'Informe pericial y comparecencia en instrucción y juicio oral',
            ],
            'faq' => [
                [
                    '¿El perito puede trabajar para la defensa?',
                    'Sí. La defensa tiene derecho a aportar prueba pericial que contraste las conclusiones de los informes policiales o de la Agencia Tributaria. Un contrainforme económico riguroso cambia con frecuencia el resultado del procedimiento.',
                ],
                [
                    '¿Qué formación tiene el perito en esta materia?',
                    'Aurelio Fernández es perito experto en prevención del blanqueo de capitales, con posgrado en Cumplimiento Normativo y PBC por la UNED y acreditación profesional en compliance y PBC/FT.',
                ],
                [
                    '¿Analizan también criptoactivos?',
                    'Sí. Contamos con perito especializada en trazabilidad de criptoactivos y análisis forense de evidencias digitales para fraudes de inversión y operaciones con activos virtuales.',
                ],
            ],
        ],
        [
            'slug' => 'fraude-de-inversion-y-criptoactivos',
            'nombre' => 'Fraude de inversión y criptoactivos',
            'corto' => 'Investigación y cuantificación de estafas de inversión, chiringuitos financieros y operaciones con criptomonedas, con trazabilidad de los fondos.',
            'intro' => 'Las estafas de inversión, las plataformas fraudulentas y las operaciones con criptoactivos dejan un rastro económico y digital. Lo seguimos, cuantificamos el perjuicio y lo documentamos en un informe pericial válido en sede judicial, tanto para denunciar como para reclamar a bancos y plataformas.',
            'cuando' => [
                'Estafas de inversión en plataformas de trading, forex o criptomonedas',
                'Reclamaciones a entidades bancarias por transferencias fraudulentas',
                'Trazabilidad de criptoactivos en procedimientos penales y civiles',
                'Esquemas piramidales y captación irregular de fondos',
                'Disputas sobre carteras de criptoactivos en herencias y divorcios',
            ],
            'incluye' => [
                'Trazado de transacciones en cadenas de bloques y exchanges',
                'Cuantificación del capital aportado, rendimientos ficticios y pérdida real',
                'Análisis de la diligencia del banco o la plataforma en la prevención del fraude',
                'Preservación de evidencias digitales con cadena de custodia',
                'Informe pericial económico y tecnológico conjunto',
            ],
            'faq' => [
                [
                    '¿Se puede recuperar el dinero de una estafa con criptomonedas?',
                    'Depende de cada caso, pero el primer paso es siempre demostrar el camino que siguieron los fondos. Un informe pericial de trazabilidad permite al abogado dirigir la reclamación contra el exchange, el banco o los responsables identificados.',
                ],
                [
                    '¿Qué necesito aportar?',
                    'Extractos bancarios, capturas de la plataforma, direcciones de monedero, correos y mensajes con los captadores. En la primera consulta revisamos lo que tiene y le indicamos cómo preservarlo correctamente.',
                ],
                [
                    '¿Actúan en toda España?',
                    'Sí. Con sedes en Valencia, Madrid y Almería y desplazamiento a cualquier juzgado del territorio nacional.',
                ],
            ],
        ],
        [
            'slug' => 'herencias-y-valoracion-patrimonial',
            'nombre' => 'Herencias y valoración patrimonial',
            'corto' => 'Valoración de bienes, empresas y patrimonios en herencias, particiones, divorcios y controversias entre comuneros.',
            'intro' => 'Repartir un patrimonio exige saber cuánto vale cada bien y qué movimientos se han producido antes de la partición. Elaboramos informes periciales que valoran empresas, inmuebles, carteras y negocios, y que analizan las cuentas del causante o de la sociedad de gananciales.',
            'cuando' => [
                'Particiones hereditarias con empresa familiar o inmuebles',
                'Impugnación de la partición o del cuaderno particional',
                'Liquidación de la sociedad de gananciales en divorcios',
                'Colación de donaciones y análisis de disposiciones en vida del causante',
                'Disolución de comunidades de bienes y proindivisos',
            ],
            'incluye' => [
                'Inventario y valoración económica de los bienes del caudal hereditario',
                'Análisis de movimientos bancarios previos al fallecimiento',
                'Valoración de participaciones sociales y negocios en funcionamiento',
                'Cálculo de legítimas, cuotas y compensaciones entre herederos',
                'Informe pericial para la partición judicial o el procedimiento de división',
            ],
            'faq' => [
                [
                    '¿El perito económico valora también los inmuebles?',
                    'El perito económico integra en el informe las valoraciones de inmuebles. Cuando el caso lo exige, colaboramos con tasadores homologados para que la valoración inmobiliaria tenga plena validez.',
                ],
                [
                    '¿Pueden analizar si hubo disposiciones de dinero antes del fallecimiento?',
                    'Sí. El análisis de movimientos bancarios del causante en los años previos es una de las periciales más solicitadas en herencias conflictivas, y permite acreditar donaciones encubiertas o retiradas injustificadas.',
                ],
                [
                    '¿Cuánto cuesta el informe?',
                    'El presupuesto depende de la complejidad del caudal y de la documentación disponible. La primera consulta es gratuita y le indicamos un presupuesto cerrado antes de empezar.',
                ],
            ],
        ],
    ],

    'equipo' => [
        [
            'id' => 'aurelio',
            'nombre' => 'Aurelio Fernández',
            'rol' => 'Perito económico · Compliance y blanqueo de capitales',
            'corto' => 'Perito experto en prevención del blanqueo de capitales, análisis económico-financiero y estructuras societarias. Dirige el equipo y coordina las sedes de Valencia, Madrid y Almería.',
            'bio' => [
                'Aurelio Fernández es perito experto en prevención e investigación del blanqueo de capitales, con una sólida trayectoria profesional y formación especializada. Cuenta con un posgrado en Cumplimiento Normativo y Prevención del Blanqueo de Capitales por la UNED y con la acreditación 000-00016/G5 de Professional Group Conversia, que avala sus competencias en materia de compliance y PBC/FT.',
                'Ha formado parte de SIGMA CORPORATE Consultora, firma especializada en corporate compliance, donde ha intervenido en análisis de riesgos, diseño de controles y evaluación de estructuras corporativas. Ejerce como perito en investigación mercantil, con práctica en el estudio técnico-documental de operaciones económicas y societarias.',
                'Completa su perfil con un Máster en Asesoría Laboral y Financiera y un Máster en Asesoría Financiera y Planificación Fiscal Internacional por el Instituto Tecnológico de Estudios Financieros (ITEF), lo que le permite integrar los enfoques fiscal, financiero y regulatorio en cada análisis pericial.',
            ],
            'creds' => [
                'Acreditación 000-00016/G5 · Compliance y PBC/FT',
                'Posgrado PBC · UNED',
                'Máster Asesoría Financiera · ITEF',
                'Perito en investigación mercantil',
            ],
        ],
        [
            'id' => 'juan-angel',
            'nombre' => 'Juan Ángel García',
            'rol' => 'Abogado penalista · Dirección de prueba pericial',
            'corto' => 'Abogado con más de 20 años de experiencia en Derecho Penal, especializado en procedimientos económicos complejos y en la coordinación y defensa de la prueba pericial en sala.',
            'bio' => [
                'Juan Ángel García es licenciado en Derecho y cuenta con una amplia trayectoria en el ámbito del Derecho Penal, área en la que ha concentrado su actividad profesional durante más de dos décadas de ejercicio.',
                'Su experiencia abarca la dirección técnica de procedimientos penales complejos, tanto en defensa como en acusación, con especial dedicación a las causas de naturaleza patrimonial y económica. Una parte fundamental de su trabajo se centra en la coordinación de pruebas periciales y en la preparación de los peritos para su intervención en sala, garantizando que los dictámenes técnicos se integren con eficacia en la estrategia procesal.',
                'Colegiado en el Ilustre Colegio de Abogados desde 1998, posee formación específica en Mediación Civil y Mercantil y en la gestión de procedimientos concursales.',
            ],
            'creds' => [
                'Colegiado desde 1998',
                'Derecho Penal económico',
                'Mediación Civil y Mercantil',
                'Procedimientos concursales',
            ],
        ],
        [
            'id' => 'rosa',
            'nombre' => 'Rosa María Gascón Fernández',
            'rol' => 'Perito en fraude de inversión · Trazabilidad de criptoactivos',
            'corto' => 'Ingeniera Informática y Criminóloga, especialista en fraudes de inversión, ciberdelitos económicos y trazabilidad de criptoactivos para su cuantificación en sede judicial.',
            'bio' => [
                'Rosa María Gascón Fernández es perito judicial experta en informática forense y criminología forense, con un perfil técnico especializado en la investigación de delitos económicos cometidos a través de medios tecnológicos y en el análisis de evidencias digitales.',
                'Es doble graduada en Ingeniería Informática y Criminología por la Universidad Rey Juan Carlos, cuenta con un Máster en Investigación Criminal por la UNIR y es Experta en Criminología Forense para los Tribunales de Justicia por el Campus CIIP. Está acreditada como Auditor Líder ISO 22301 y especializada en el Esquema Nacional de Seguridad conforme a los criterios del CCN-CERT.',
                'Interviene en procedimientos de estafas de inversión, fraudes con criptoactivos y ciberdelitos, aportando la trazabilidad de los fondos y la preservación de las evidencias que sustentan la cuantificación económica del perjuicio. Colabora habitualmente con despachos de abogados y gabinetes periciales.',
            ],
            'creds' => [
                'Ingeniería Informática y Criminología · URJC',
                'Máster Investigación Criminal · UNIR',
                'Auditor Líder ISO 22301',
                'Trazabilidad de criptoactivos',
            ],
        ],
    ],

    'clientes' => [
        [
            'nh.png',
            'NH Hoteles',
        ],
        [
            'eurostar.png',
            'Eurostars Hotels',
        ],
        [
            'crow.png',
            'Crowe',
        ],
        [
            'bancomat.png',
            'Bancomat',
        ],
        [
            'campus-training.png',
            'Campus Training',
        ],
        [
            'jubel.png',
            'Jubel',
        ],
    ],

    'faq_general' => [
        [
            '¿Qué es un perito económico?',
            'Es un profesional con formación en economía, contabilidad o finanzas que analiza hechos económicos controvertidos y emite un dictamen técnico para que el juez, el árbitro o las partes puedan resolver con fundamento. Su informe se ratifica en el juicio y puede ser objeto de preguntas de ambas partes.',
        ],
        [
            '¿Cuándo necesito un perito económico?',
            'Siempre que en un procedimiento haya que cuantificar un daño, valorar una empresa o un patrimonio, analizar una contabilidad o seguir el rastro de unos fondos. El abogado dirige la estrategia jurídica y el perito aporta la prueba económica que la sustenta.',
        ],
        [
            '¿Cuánto cuesta un informe pericial económico?',
            'Depende de la complejidad del caso, del volumen de documentación y de la urgencia. Tras una primera consulta gratuita y confidencial emitimos un presupuesto cerrado. El coste del perito puede repercutirse a la parte contraria en la condena en costas.',
        ],
        [
            '¿Trabajan en toda España?',
            'Sí. Tenemos sedes en Valencia, Madrid y Almería y nos desplazamos a cualquier juzgado del territorio nacional. Buena parte del trabajo de análisis se realiza a distancia con documentación digital.',
        ],
        [
            '¿El perito acude al juicio?',
            'Sí. La ratificación del informe en sala forma parte del servicio. Preparamos la comparecencia con el abogado y respondemos a las preguntas del juez y de la parte contraria defendiendo cada cifra del dictamen.',
        ],
        [
            '¿Cuál es la diferencia entre perito de parte y perito judicial?',
            'El perito de parte es contratado por una de las partes para aportar su dictamen al procedimiento. El perito judicial es designado por el juzgado de las listas oficiales. Nuestros peritos actúan en ambas modalidades con el mismo rigor y la misma independencia técnica.',
        ],
    ],
];

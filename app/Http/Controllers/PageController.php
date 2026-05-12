<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function show(string $page): View
    {
        $pages = $this->pages();

        abort_unless(array_key_exists($page, $pages), 404);

        return view('pages.show', $pages[$page]);
    }

    public function program(string $program): View
    {
        $programs = $this->programs();

        abort_unless(array_key_exists($program, $programs), 404);

        return view('programs.show', $programs[$program] + [
            'programs' => $programs,
        ]);
    }

    protected function pages(): array
    {
        return [
            'nuestra-facultad' => [
                'route' => 'nuestra-facultad',
                'title' => 'Nuestra Facultad',
                'description' => 'Una comunidad universitaria que integra formacion academica, identidad institucional y compromiso con el desarrollo del entorno.',
                'heroImage' => [
                    'src' => 'images/fca/fca-fac.jpg',
                    'alt' => 'Instalaciones y comunidad de la FCA UADY',
                    'position' => 'center 45%',
                ],
                'stats' => [
                    ['value' => '1962', 'label' => 'Origen institucional'],
                    ['value' => 'Comunidad activa', 'label' => 'Vida academica y estudiantil'],
                    ['value' => 'Enfoque integral', 'label' => 'Formacion con vision global'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Historia',
                        'title' => 'Trayectoria academica',
                        'text' => 'La FCA UADY ha consolidado una propuesta educativa orientada a la administracion, la contaduria y la innovacion en los negocios.',
                    ],
                    [
                        'eyebrow' => 'Infraestructura',
                        'title' => 'Espacios para aprender y colaborar',
                        'text' => 'Aulas, salas de trabajo y espacios de encuentro favorecen una experiencia universitaria dinamica y conectada con las necesidades actuales.',
                    ],
                    [
                        'eyebrow' => 'Identidad',
                        'title' => 'Compromiso institucional',
                        'text' => 'La facultad promueve valores, participacion responsable y una formacion centrada en la excelencia academica.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Vida institucional',
                        'content' => 'La pagina institucional de la facultad comunica su oferta, sus proyectos y sus servicios desde una identidad coherente con la UADY y con la experiencia de su comunidad.',
                    ],
                    [
                        'title' => 'Experiencia universitaria',
                        'content' => 'Las actividades academicas, culturales y de integracion fortalecen el sentido de pertenencia y acompanian el desarrollo integral del estudiantado.',
                    ],
                ],
                'cta' => [
                    'title' => 'Conoce las areas clave de la FCA UADY',
                    'text' => 'Explora la oferta educativa, la vida estudiantil y las rutas de vinculacion academica y profesional.',
                    'primary' => ['label' => 'Ver oferta educativa', 'href' => '/oferta'],
                    'secondary' => ['label' => 'Vida estudiantil', 'href' => '/estudiantes'],
                ],
            ],
            'oferta' => [
                'route' => 'oferta',
                'title' => 'Oferta Educativa',
                'description' => 'Programas academicos orientados a formar profesionales con vision estrategica, compromiso social y capacidad para responder a los retos del entorno.',
                'stats' => [
                    ['value' => 'Licenciaturas', 'label' => 'Formacion inicial'],
                    ['value' => 'Posgrados', 'label' => 'Especializacion avanzada'],
                    ['value' => 'Educacion continua', 'label' => 'Actualizacion profesional'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Licenciaturas',
                        'title' => 'Formacion profesional de base',
                        'text' => 'Programas orientados al analisis, la gestion y la toma de decisiones en contextos organizacionales y empresariales.',
                        'href' => '#licenciaturas',
                    ],
                    [
                        'eyebrow' => 'Posgrados',
                        'title' => 'Profundizacion disciplinar',
                        'text' => 'Opciones academicas para fortalecer competencias especializadas y proyectos con impacto profesional o investigativo.',
                    ],
                    [
                        'eyebrow' => 'Formacion continua',
                        'title' => 'Actualizacion permanente',
                        'text' => 'Cursos, diplomados y actividades academicas para responder a los cambios del entorno laboral y universitario.',
                    ],
                ],
                'programs' => $this->programs(),
                'sections' => [
                    [
                        'title' => 'Aprendizaje con pertinencia',
                        'content' => 'La oferta educativa de la facultad se articula con retos reales de los sectores publico, privado y social, promoviendo habilidades analiticas y de liderazgo.',
                    ],
                    [
                        'title' => 'Acompanamiento academico',
                        'content' => 'La trayectoria formativa se complementa con orientacion, seguimiento y experiencias que fortalecen el desarrollo de competencias en cada etapa.',
                    ],
                ],
                'cta' => [
                    'title' => 'Explora rutas de ingreso y permanencia',
                    'text' => 'Consulta informacion para aspirantes y estudiantes sobre acompanamiento, servicios y experiencia universitaria.',
                    'primary' => ['label' => 'Ir a aspirantes', 'href' => '/aspirantes'],
                    'secondary' => ['label' => 'Ver estudiantes', 'href' => '/estudiantes'],
                ],
            ],
            'aspirantes' => [
                'route' => 'aspirantes',
                'title' => 'Aspirantes',
                'description' => 'Informacion institucional para quienes desean integrarse a la FCA UADY y conocer su propuesta academica, formativa y universitaria.',
                'heroImage' => [
                    'src' => 'images/fca/fca-asp.jpg',
                    'alt' => 'Instalaciones de la FCA UADY para aspirantes',
                    'position' => 'center 45%',
                ],
                'stats' => [
                    ['value' => 'Ingreso informado', 'label' => 'Orientacion oportuna'],
                    ['value' => 'Oferta visible', 'label' => 'Programas y servicios'],
                    ['value' => 'Trayectoria clara', 'label' => 'Ruta de incorporacion'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Primer contacto',
                        'title' => 'Informacion de ingreso',
                        'text' => 'La seccion para aspirantes concentra informacion clave sobre la facultad, su oferta y los servicios que acompanian el inicio de la vida universitaria.',
                    ],
                    [
                        'eyebrow' => 'Decision vocacional',
                        'title' => 'Conocer el perfil de formacion',
                        'text' => 'Permite identificar los enfoques academicos y las posibilidades de desarrollo profesional vinculadas con la FCA UADY.',
                    ],
                    [
                        'eyebrow' => 'Integracion',
                        'title' => 'Inicio de la experiencia universitaria',
                        'text' => 'Desde el acceso a informacion hasta la incorporacion a la comunidad, la facultad promueve acompanamiento y claridad institucional.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Ruta de acercamiento',
                        'content' => 'Quienes aspiran a ingresar encuentran una vision general de la facultad, sus programas y los espacios de desarrollo que ofrece la vida universitaria.',
                    ],
                    [
                        'title' => 'Preparacion para el ingreso',
                        'content' => 'La orientacion institucional favorece una decision informada y ayuda a reconocer las fortalezas de cada programa academico.',
                    ],
                ],
                'cta' => [
                    'title' => 'Da el siguiente paso',
                    'text' => 'Conoce la oferta educativa y la experiencia estudiantil para visualizar tu futuro dentro de la FCA UADY.',
                    'primary' => ['label' => 'Ver oferta educativa', 'href' => '/oferta'],
                    'secondary' => ['label' => 'Conocer estudiantes', 'href' => '/estudiantes'],
                ],
            ],
            'estudiantes' => [
                'route' => 'estudiantes',
                'title' => 'Estudiantes',
                'description' => 'Servicios, acompanamiento y espacios de participacion para fortalecer la trayectoria academica y la vida universitaria.',
                'heroSlides' => [
                    [
                        'src' => 'images/fca/fca-est1.jpg',
                        'alt' => 'Estudiantes de la FCA UADY participando en actividades universitarias',
                        'position' => 'center 45%',
                    ],
                    [
                        'src' => 'images/fca/fca-est2.jpg',
                        'alt' => 'Comunidad estudiantil en actividad academica',
                        'position' => 'center 45%',
                    ],
                    [
                        'src' => 'images/fca/fca-est3.jpg',
                        'alt' => 'Espacios de convivencia y aprendizaje en la FCA UADY',
                        'position' => 'center 45%',
                    ],
                ],
                'stats' => [
                    ['value' => 'Acompanamiento', 'label' => 'Trayectoria academica'],
                    ['value' => 'Servicios', 'label' => 'Apoyo universitario'],
                    ['value' => 'Participacion', 'label' => 'Vida estudiantil activa'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Trayectoria',
                        'title' => 'Seguimiento academico',
                        'text' => 'La facultad promueve acompanamiento constante para fortalecer el aprendizaje, la permanencia y el desarrollo de competencias.',
                    ],
                    [
                        'eyebrow' => 'Comunidad',
                        'title' => 'Participacion e integracion',
                        'text' => 'Las actividades universitarias complementan la experiencia del aula y fortalecen la identidad institucional.',
                    ],
                    [
                        'eyebrow' => 'Servicios',
                        'title' => 'Apoyos y orientacion',
                        'text' => 'Informacion, acompanamiento y recursos forman parte de una experiencia universitaria mas completa y articulada.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Vida academica con acompanamiento',
                        'content' => 'La pagina para estudiantes se enfoca en ofrecer accesos claros a informacion relevante sobre servicios, procesos y apoyo institucional.',
                    ],
                    [
                        'title' => 'Aprender y participar',
                        'content' => 'La experiencia en la facultad incluye actividades complementarias que fortalecen la colaboracion, el liderazgo y la pertenencia a la comunidad.',
                    ],
                ],
                'cta' => [
                    'title' => 'Explora tu experiencia universitaria',
                    'text' => 'Consulta oportunidades de vinculacion, internacionalizacion y continuidad profesional dentro del ecosistema FCA UADY.',
                    'primary' => ['label' => 'Ver vinculacion', 'href' => '/vinculacion'],
                    'secondary' => ['label' => 'Ver internacionalizacion', 'href' => '/internacionalizacion'],
                ],
            ],
            'investigacion' => [
                'route' => 'investigacion',
                'title' => 'Investigacion',
                'description' => 'Impulso al conocimiento, al analisis aplicado y a la colaboracion academica en temas vinculados con la contaduria, la administracion y los negocios.',
                'heroImage' => [
                    'src' => 'images/fca/fca-inv.jpg',
                    'alt' => 'Investigacion y trabajo academico en la FCA UADY',
                    'position' => 'center 45%',
                ],
                'stats' => [
                    ['value' => 'Analisis aplicado', 'label' => 'Conocimiento pertinente'],
                    ['value' => 'Colaboracion', 'label' => 'Trabajo academico'],
                    ['value' => 'Impacto', 'label' => 'Proyectos con sentido social'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Produccion academica',
                        'title' => 'Proyectos y lineas de trabajo',
                        'text' => 'Las iniciativas de investigacion fortalecen el dialogo entre docencia, analisis y resolucion de retos del entorno.',
                    ],
                    [
                        'eyebrow' => 'Vinculo con la formacion',
                        'title' => 'Aprendizaje y generacion de conocimiento',
                        'text' => 'La investigacion complementa la experiencia formativa y favorece una mirada critica sobre la realidad organizacional y social.',
                    ],
                    [
                        'eyebrow' => 'Comunidad academica',
                        'title' => 'Participacion colegiada',
                        'text' => 'El trabajo conjunto entre docentes y cuerpos academicos impulsa propuestas con pertinencia institucional y profesional.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Entorno de investigacion',
                        'content' => 'La facultad integra investigacion y docencia para enriquecer la experiencia academica y fortalecer la aportacion al conocimiento.',
                    ],
                    [
                        'title' => 'Desarrollo de proyectos',
                        'content' => 'Los proyectos se orientan a necesidades actuales de las organizaciones, el territorio y la formacion universitaria.',
                    ],
                ],
                'cta' => [
                    'title' => 'Conecta investigacion con formacion',
                    'text' => 'Explora tambien las areas de oferta educativa e internacionalizacion para ampliar la experiencia academica.',
                    'primary' => ['label' => 'Ver oferta', 'href' => '/oferta'],
                    'secondary' => ['label' => 'Ver internacionalizacion', 'href' => '/internacionalizacion'],
                ],
            ],
            'vinculacion' => [
                'route' => 'vinculacion',
                'title' => 'Vinculacion',
                'description' => 'Relacion institucional con sectores y actores externos para fortalecer la formacion, los servicios y la proyeccion profesional.',
                'stats' => [
                    ['value' => 'Entorno profesional', 'label' => 'Conexion con sectores'],
                    ['value' => 'Servicios', 'label' => 'Extension universitaria'],
                    ['value' => 'Aprendizaje aplicado', 'label' => 'Experiencia pertinente'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Entorno',
                        'title' => 'Relacion con organizaciones',
                        'text' => 'La vinculacion acerca a la comunidad universitaria a escenarios de practica, servicio y colaboracion con distintos sectores.',
                    ],
                    [
                        'eyebrow' => 'Impacto',
                        'title' => 'Proyectos con proyeccion social y profesional',
                        'text' => 'Las acciones de vinculacion fortalecen la presencia de la facultad y favorecen aprendizajes conectados con la realidad.',
                    ],
                    [
                        'eyebrow' => 'Servicios',
                        'title' => 'Atencion y acompanamiento externo',
                        'text' => 'Las iniciativas institucionales integran formacion, colaboracion y servicios con enfoque universitario.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Conexion con el entorno',
                        'content' => 'La vinculacion articula experiencias formativas con necesidades y oportunidades del contexto organizacional y social.',
                    ],
                    [
                        'title' => 'Experiencia aplicada',
                        'content' => 'La participacion en proyectos y servicios favorece la construccion de perfiles profesionales mas completos y pertinentes.',
                    ],
                ],
                'cta' => [
                    'title' => 'Amplia tu experiencia profesional',
                    'text' => 'Revisa tambien la seccion de estudiantes y egresados para seguir fortaleciendo tu trayectoria dentro y fuera del aula.',
                    'primary' => ['label' => 'Ver estudiantes', 'href' => '/estudiantes'],
                    'secondary' => ['label' => 'Ver egresados', 'href' => '/egresados'],
                ],
            ],
            'internacionalizacion' => [
                'route' => 'internacionalizacion',
                'title' => 'Internacionalizacion',
                'description' => 'Experiencias y perspectivas globales para enriquecer la formacion, la colaboracion academica y la proyeccion universitaria.',
                'stats' => [
                    ['value' => 'Vision global', 'label' => 'Formacion conectada'],
                    ['value' => 'Colaboracion', 'label' => 'Intercambio academico'],
                    ['value' => 'Proyeccion', 'label' => 'Experiencias ampliadas'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Movilidad',
                        'title' => 'Oportunidades de intercambio',
                        'text' => 'La internacionalizacion favorece experiencias academicas y culturales que amplian la perspectiva formativa del estudiantado.',
                    ],
                    [
                        'eyebrow' => 'Cooperacion',
                        'title' => 'Colaboracion universitaria',
                        'text' => 'La articulacion con otras instituciones fortalece el dialogo academico y la innovacion en los procesos formativos.',
                    ],
                    [
                        'eyebrow' => 'Formacion',
                        'title' => 'Competencias con alcance global',
                        'text' => 'La mirada internacional complementa el desarrollo profesional y la comprension de contextos diversos.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Experiencia internacional',
                        'content' => 'La facultad incorpora una perspectiva global en sus acciones academicas para fortalecer competencias y posibilidades de colaboracion.',
                    ],
                    [
                        'title' => 'Proyeccion institucional',
                        'content' => 'La internacionalizacion amplifica el alcance de la comunidad universitaria y enriquece la experiencia educativa.',
                    ],
                ],
                'cta' => [
                    'title' => 'Conecta tu formacion con nuevas perspectivas',
                    'text' => 'Descubre como la experiencia estudiantil y la investigacion se enriquecen con una mirada global.',
                    'primary' => ['label' => 'Ver investigacion', 'href' => '/investigacion'],
                    'secondary' => ['label' => 'Ver estudiantes', 'href' => '/estudiantes'],
                ],
            ],
            'egresados' => [
                'route' => 'egresados',
                'title' => 'Egresados',
                'description' => 'Vinculo institucional con quienes concluyeron su formacion y continúan proyectando el impacto profesional de la FCA UADY.',
                'stats' => [
                    ['value' => 'Comunidad extendida', 'label' => 'Trayectorias profesionales'],
                    ['value' => 'Actualizacion', 'label' => 'Aprendizaje permanente'],
                    ['value' => 'Vinculo institucional', 'label' => 'Relacion continua'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Continuidad',
                        'title' => 'Relacion con la facultad',
                        'text' => 'La comunidad de egresados mantiene un vinculo con la institucion a traves de oportunidades academicas y profesionales.',
                    ],
                    [
                        'eyebrow' => 'Actualizacion',
                        'title' => 'Desarrollo profesional continuo',
                        'text' => 'La oferta complementaria y los espacios de colaboracion fortalecen el crecimiento de quienes egresan de la facultad.',
                    ],
                    [
                        'eyebrow' => 'Identidad',
                        'title' => 'Pertenencia y proyeccion',
                        'text' => 'La relacion con egresados amplifica el alcance institucional y enriquece la comunidad universitaria.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Trayectorias que continúan',
                        'content' => 'La facultad reconoce a sus egresados como parte activa de su identidad y como aliados en el fortalecimiento del entorno profesional.',
                    ],
                    [
                        'title' => 'Comunidad conectada',
                        'content' => 'El contacto con egresados favorece redes, oportunidades y nuevas formas de colaboracion con la vida universitaria.',
                    ],
                ],
                'cta' => [
                    'title' => 'Mantente vinculado a la FCA UADY',
                    'text' => 'Consulta tambien las secciones de oferta educativa y vinculacion para conocer nuevas oportunidades de desarrollo.',
                    'primary' => ['label' => 'Ver vinculacion', 'href' => '/vinculacion'],
                    'secondary' => ['label' => 'Ver oferta', 'href' => '/oferta'],
                ],
            ],
        ];
    }

    protected function programs(): array
    {
        return [
            'contaduria' => [
                'slug' => 'contaduria',
                'title' => 'Licenciatura en Contaduria',
                'shortTitle' => 'Contaduria',
                'description' => 'Formacion orientada al registro, analisis, control y evaluacion de informacion financiera para apoyar decisiones responsables en organizaciones publicas y privadas.',
                'image' => 'images/fca/fca-conta.jpg',
                'imageAlt' => 'Estudiantes de contaduria en actividad academica',
                'accent' => 'from-[#002f6c] to-[#075985]',
                'stats' => [
                    ['value' => 'Finanzas', 'label' => 'Analisis y control'],
                    ['value' => 'Fiscal', 'label' => 'Cumplimiento tributario'],
                    ['value' => 'Auditoria', 'label' => 'Revision y confianza'],
                ],
                'profile' => 'Quien estudia Contaduria desarrolla criterio tecnico, pensamiento analitico y sentido etico para interpretar informacion financiera, fiscal y administrativa.',
                'skills' => [
                    'Preparar e interpretar estados financieros.',
                    'Gestionar obligaciones fiscales y procesos de auditoria.',
                    'Evaluar riesgos, controles internos y costos.',
                    'Acompanar la toma de decisiones con informacion confiable.',
                ],
                'fields' => [
                    'Contabilidad financiera y administrativa',
                    'Auditoria interna y externa',
                    'Consultoria fiscal',
                    'Contraloria y finanzas corporativas',
                ],
                'curriculum' => [
                    'Base contable, economica y administrativa',
                    'Fiscalidad, costos y sistemas de informacion',
                    'Auditoria, control y gestion financiera',
                    'Practicas, proyectos integradores y enfoque profesional',
                ],
            ],
            'administracion' => [
                'slug' => 'administracion',
                'title' => 'Licenciatura en Administracion',
                'shortTitle' => 'Administracion',
                'description' => 'Programa enfocado en la direccion de organizaciones, la gestion del talento, la planeacion estrategica y la mejora de procesos con vision humana y competitiva.',
                'image' => 'images/fca/fca-admin.jpg',
                'imageAlt' => 'Espacios de aprendizaje para administracion',
                'accent' => 'from-[#003b73] to-[#047857]',
                'stats' => [
                    ['value' => 'Estrategia', 'label' => 'Direccion organizacional'],
                    ['value' => 'Talento', 'label' => 'Gestion humana'],
                    ['value' => 'Procesos', 'label' => 'Mejora continua'],
                ],
                'profile' => 'La Licenciatura en Administracion forma perfiles capaces de coordinar equipos, analizar entornos y convertir objetivos institucionales en planes de accion.',
                'skills' => [
                    'Disenar estrategias y modelos de gestion.',
                    'Coordinar equipos y procesos organizacionales.',
                    'Analizar indicadores para mejorar resultados.',
                    'Impulsar emprendimientos y proyectos de innovacion.',
                ],
                'fields' => [
                    'Direccion y administracion general',
                    'Gestion del talento humano',
                    'Emprendimiento y desarrollo de negocios',
                    'Consultoria organizacional',
                ],
                'curriculum' => [
                    'Fundamentos de administracion, economia y contabilidad',
                    'Planeacion, talento humano y comportamiento organizacional',
                    'Operacion, calidad, finanzas y mercadotecnia',
                    'Estrategia, emprendimiento y proyectos aplicados',
                ],
            ],
            'mercadotecnia' => [
                'slug' => 'mercadotecnia',
                'title' => 'Licenciatura en Mercadotecnia',
                'shortTitle' => 'Mercadotecnia',
                'description' => 'Formacion centrada en comprender mercados, crear propuestas de valor y disenar estrategias de comunicacion, marca y comercializacion basadas en datos.',
                'image' => 'images/fca/fca-mkt.jpg',
                'imageAlt' => 'Actividad academica vinculada con mercadotecnia',
                'accent' => 'from-[#7c2d12] to-[#be123c]',
                'stats' => [
                    ['value' => 'Mercados', 'label' => 'Investigacion y datos'],
                    ['value' => 'Marca', 'label' => 'Estrategia creativa'],
                    ['value' => 'Clientes', 'label' => 'Experiencia y valor'],
                ],
                'profile' => 'Mercadotecnia prepara profesionales que interpretan consumidores, tendencias y canales para desarrollar soluciones comerciales pertinentes y medibles.',
                'skills' => [
                    'Investigar mercados y analizar comportamiento del consumidor.',
                    'Construir estrategias de marca, producto y comunicacion.',
                    'Gestionar campanas digitales y comerciales.',
                    'Medir resultados para optimizar decisiones de mercado.',
                ],
                'fields' => [
                    'Investigacion de mercados',
                    'Gestion de marca y comunicacion',
                    'Marketing digital y comercio electronico',
                    'Ventas, servicio y experiencia del cliente',
                ],
                'curriculum' => [
                    'Fundamentos de negocios, comunicacion y comportamiento',
                    'Investigacion, segmentacion y estrategia de mercado',
                    'Branding, canales digitales y comercializacion',
                    'Analitica, proyectos y desarrollo de campanas',
                ],
            ],
            'lati' => [
                'slug' => 'lati',
                'title' => 'Licenciatura en Administracion de las Tecnologias de la Informacion',
                'shortTitle' => 'LATI',
                'description' => 'Programa que integra administracion, tecnologia y analisis de informacion para gestionar soluciones digitales alineadas con los objetivos de las organizaciones.',
                'image' => 'images/fca/fca-lati.jpg',
                'imageAlt' => 'Tecnologias de informacion aplicadas a la administracion',
                'accent' => 'from-[#1e3a8a] to-[#0f766e]',
                'stats' => [
                    ['value' => 'Tecnologia', 'label' => 'Soluciones digitales'],
                    ['value' => 'Datos', 'label' => 'Analisis para decidir'],
                    ['value' => 'Gestion', 'label' => 'Proyectos TI'],
                ],
                'profile' => 'LATI forma profesionales que conectan necesidades administrativas con herramientas tecnologicas, datos y procesos de transformacion digital.',
                'skills' => [
                    'Administrar proyectos y servicios de tecnologias de informacion.',
                    'Modelar procesos y proponer soluciones digitales.',
                    'Analizar datos para mejorar la gestion organizacional.',
                    'Coordinar equipos tecnicos y usuarios de negocio.',
                ],
                'fields' => [
                    'Gestion de proyectos tecnologicos',
                    'Analisis de datos y sistemas de informacion',
                    'Transformacion digital',
                    'Consultoria en procesos y tecnologia',
                ],
                'curriculum' => [
                    'Administracion, programacion y fundamentos de datos',
                    'Sistemas de informacion, procesos y redes',
                    'Gestion de proyectos, analitica y seguridad',
                    'Innovacion digital y soluciones organizacionales',
                ],
            ],
        ];
    }
}

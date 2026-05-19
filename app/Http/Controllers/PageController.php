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
                'description' => 'Una comunidad universitaria que integra formación académica, identidad institucional y compromiso con el desarrollo del entorno.',
                'heroImage' => [
                    'src' => 'images/fca/fca-fac.jpg',
                    'alt' => 'Instalaciones y comunidad de la FCA UADY',
                    'position' => 'center 45%',
                ],
                'stats' => [
                    ['value' => '1962', 'label' => 'Origen institucional'],
                    ['value' => 'Comunidad activa', 'label' => 'Vida académica y estudiantil'],
                    ['value' => 'Enfoque integral', 'label' => 'Formación con visión global'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Historia',
                        'title' => 'Trayectoria académica',
                        'text' => 'La FCA UADY ha consolidado una propuesta educativa orientada a la administración, la contaduría y la innovación en los negocios.',
                    ],
                    [
                        'eyebrow' => 'Infraestructura',
                        'title' => 'Espacios para aprender y colaborar',
                        'text' => 'Aulas, salas de trabajo y espacios de encuentro favorecen una experiencia universitaria dinámica y conectada con las necesidades actuales.',
                    ],
                    [
                        'eyebrow' => 'Identidad',
                        'title' => 'Compromiso institucional',
                        'text' => 'La facultad promueve valores, participación responsable y una formación centrada en la excelencia académica.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Vida institucional',
                        'content' => 'La página institucional de la facultad comunica su oferta, sus proyectos y sus servicios desde una identidad coherente con la UADY y con la experiencia de su comunidad.',
                    ],
                    [
                        'title' => 'Experiencia universitaria',
                        'content' => 'Las actividades académicas, culturales y de integración fortalecen el sentido de pertenencia y acompañan el desarrollo integral del estudiantado.',
                    ],
                ],
                'cta' => [
                    'title' => 'Conoce las áreas clave de la FCA UADY',
                    'text' => 'Explora la oferta educativa, la vida estudiantil y las rutas de vinculación académica y profesional.',
                    'primary' => ['label' => 'Ver oferta educativa', 'href' => '/oferta'],
                    'secondary' => ['label' => 'Vida estudiantil', 'href' => '/estudiantes'],
                ],
            ],
            'oferta' => [
                'route' => 'oferta',
                'title' => 'Oferta Educativa',
                'description' => 'Programas académicos orientados a formar profesionales con visión estratégica, compromiso social y capacidad para responder a los retos del entorno.',
                'stats' => [
                    ['value' => 'Licenciaturas', 'label' => 'Formación inicial'],
                    ['value' => 'Posgrados', 'label' => 'Especialización avanzada'],
                    ['value' => 'Educación continua', 'label' => 'Actualización profesional'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Licenciaturas',
                        'title' => 'Formación profesional de base',
                        'text' => 'Programas orientados al análisis, la gestión y la toma de decisiones en contextos organizacionales y empresariales.',
                        'href' => '#licenciaturas',
                    ],
                    [
                        'eyebrow' => 'Posgrados',
                        'title' => 'Profundización disciplinar',
                        'text' => 'Opciones académicas para fortalecer competencias especializadas y proyectos con impacto profesional o investigativo.',
                    ],
                    [
                        'eyebrow' => 'Formación continua',
                        'title' => 'Actualización permanente',
                        'text' => 'Cursos, diplomados y actividades académicas para responder a los cambios del entorno laboral y universitario.',
                    ],
                ],
                'programs' => $this->programs(),
                'sections' => [
                    [
                        'title' => 'Aprendizaje con pertinencia',
                        'content' => 'La oferta educativa de la facultad se articula con retos reales de los sectores público, privado y social, promoviendo habilidades analíticas y de liderazgo.',
                    ],
                    [
                        'title' => 'Acompañamiento académico',
                        'content' => 'La trayectoria formativa se complementa con orientación, seguimiento y experiencias que fortalecen el desarrollo de competencias en cada etapa.',
                    ],
                ],
                'cta' => [
                    'title' => 'Explora rutas de ingreso y permanencia',
                    'text' => 'Consulta información para aspirantes y estudiantes sobre acompañamiento, servicios y experiencia universitaria.',
                    'primary' => ['label' => 'Ir a aspirantes', 'href' => '/aspirantes'],
                    'secondary' => ['label' => 'Ver estudiantes', 'href' => '/estudiantes'],
                ],
            ],
            'aspirantes' => [
                'route' => 'aspirantes',
                'title' => 'Aspirantes',
                'description' => 'Información institucional para quienes desean integrarse a la FCA UADY y conocer su propuesta académica, formativa y universitaria.',
                'heroImage' => [
                    'src' => 'images/fca/fca-asp.jpg',
                    'alt' => 'Instalaciones de la FCA UADY para aspirantes',
                    'position' => 'center 45%',
                ],
                'stats' => [
                    ['value' => 'Ingreso informado', 'label' => 'Orientación oportuna'],
                    ['value' => 'Oferta visible', 'label' => 'Programas y servicios'],
                    ['value' => 'Trayectoria clara', 'label' => 'Ruta de incorporación'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Primer contacto',
                        'title' => 'Información de ingreso',
                        'text' => 'La sección para aspirantes concentra información clave sobre la facultad, su oferta y los servicios que acompañan el inicio de la vida universitaria.',
                    ],
                    [
                        'eyebrow' => 'Decision vocacional',
                        'title' => 'Conocer el perfil de formación',
                        'text' => 'Permite identificar los enfoques académicos y las posibilidades de desarrollo profesional vinculadas con la FCA UADY.',
                    ],
                    [
                        'eyebrow' => 'Integración',
                        'title' => 'Inicio de la experiencia universitaria',
                        'text' => 'Desde el acceso a información hasta la incorporación a la comunidad, la facultad promueve acompañamiento y claridad institucional.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Ruta de acercamiento',
                        'content' => 'Quienes aspiran a ingresar encuentran una visión general de la facultad, sus programas y los espacios de desarrollo que ofrece la vida universitaria.',
                    ],
                    [
                        'title' => 'Preparación para el ingreso',
                        'content' => 'La orientación institucional favorece una decisión informada y ayuda a reconocer las fortalezas de cada programa académico.',
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
                'description' => 'Servicios, acompañamiento y espacios de participación para fortalecer la trayectoria académica y la vida universitaria.',
                'heroSlides' => [
                    [
                        'src' => 'images/fca/fca-est1.jpg',
                        'alt' => 'Estudiantes de la FCA UADY participando en actividades universitarias',
                        'position' => 'center 45%',
                    ],
                    [
                        'src' => 'images/fca/fca-est2.jpg',
                        'alt' => 'Comunidad estudiantil en actividad académica',
                        'position' => 'center 45%',
                    ],
                    [
                        'src' => 'images/fca/fca-est3.jpg',
                        'alt' => 'Espacios de convivencia y aprendizaje en la FCA UADY',
                        'position' => 'center 45%',
                    ],
                ],
                'stats' => [
                    ['value' => 'Acompañamiento', 'label' => 'Trayectoria académica'],
                    ['value' => 'Servicios', 'label' => 'Apoyo universitario'],
                    ['value' => 'Participación', 'label' => 'Vida estudiantil activa'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Trayectoria',
                        'title' => 'Seguimiento académico',
                        'text' => 'La facultad promueve acompañamiento constante para fortalecer el aprendizaje, la permanencia y el desarrollo de competencias.',
                    ],
                    [
                        'eyebrow' => 'Comunidad',
                        'title' => 'Participación e integración',
                        'text' => 'Las actividades universitarias complementan la experiencia del aula y fortalecen la identidad institucional.',
                    ],
                    [
                        'eyebrow' => 'Servicios',
                        'title' => 'Apoyos y orientación',
                        'text' => 'Información, acompañamiento y recursos forman parte de una experiencia universitaria más completa y articulada.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Vida académica con acompañamiento',
                        'content' => 'La página para estudiantes se enfoca en ofrecer accesos claros a información relevante sobre servicios, procesos y apoyo institucional.',
                    ],
                    [
                        'title' => 'Aprender y participar',
                        'content' => 'La experiencia en la facultad incluye actividades complementarias que fortalecen la colaboración, el liderazgo y la pertenencia a la comunidad.',
                    ],
                ],
                'cta' => [
                    'title' => 'Explora tu experiencia universitaria',
                    'text' => 'Consulta oportunidades de vinculación, internacionalización y continuidad profesional dentro del ecosistema FCA UADY.',
                    'primary' => ['label' => 'Ver vinculación', 'href' => '/vinculacion'],
                    'secondary' => ['label' => 'Ver internacionalización', 'href' => '/internacionalizacion'],
                ],
            ],
            'investigacion' => [
                'route' => 'investigacion',
                'title' => 'Investigación',
                'description' => 'Impulso al conocimiento, al análisis aplicado y a la colaboración académica en temas vinculados con la contaduría, la administración y los negocios.',
                'heroImage' => [
                    'src' => 'images/fca/fca-inv.jpg',
                    'alt' => 'Investigación y trabajo académico en la FCA UADY',
                    'position' => 'center 45%',
                ],
                'stats' => [
                    ['value' => 'Análisis aplicado', 'label' => 'Conocimiento pertinente'],
                    ['value' => 'Colaboración', 'label' => 'Trabajo académico'],
                    ['value' => 'Impacto', 'label' => 'Proyectos con sentido social'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Producción académica',
                        'title' => 'Proyectos y líneas de trabajo',
                        'text' => 'Las iniciativas de investigación fortalecen el diálogo entre docencia, análisis y resolución de retos del entorno.',
                    ],
                    [
                        'eyebrow' => 'Vínculo con la formación',
                        'title' => 'Aprendizaje y generación de conocimiento',
                        'text' => 'La investigación complementa la experiencia formativa y favorece una mirada crítica sobre la realidad organizacional y social.',
                    ],
                    [
                        'eyebrow' => 'Comunidad académica',
                        'title' => 'Participación colegiada',
                        'text' => 'El trabajo conjunto entre docentes y cuerpos académicos impulsa propuestas con pertinencia institucional y profesional.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Entorno de investigación',
                        'content' => 'La facultad integra investigación y docencia para enriquecer la experiencia académica y fortalecer la aportación al conocimiento.',
                    ],
                    [
                        'title' => 'Desarrollo de proyectos',
                        'content' => 'Los proyectos se orientan a necesidades actuales de las organizaciones, el territorio y la formación universitaria.',
                    ],
                ],
                'cta' => [
                    'title' => 'Conecta investigación con formación',
                    'text' => 'Explora también las áreas de oferta educativa e internacionalización para ampliar la experiencia académica.',
                    'primary' => ['label' => 'Ver oferta', 'href' => '/oferta'],
                    'secondary' => ['label' => 'Ver internacionalización', 'href' => '/internacionalizacion'],
                ],
            ],
            'vinculacion' => [
                'route' => 'vinculacion',
                'title' => 'Vinculación',
                'description' => 'Relación institucional con sectores y actores externos para fortalecer la formación, los servicios y la proyección profesional.',
                'stats' => [
                    ['value' => 'Entorno profesional', 'label' => 'Conexión con sectores'],
                    ['value' => 'Servicios', 'label' => 'Extensión universitaria'],
                    ['value' => 'Aprendizaje aplicado', 'label' => 'Experiencia pertinente'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Entorno',
                        'title' => 'Relación con organizaciones',
                        'text' => 'La vinculación acerca a la comunidad universitaria a escenarios de práctica, servicio y colaboración con distintos sectores.',
                    ],
                    [
                        'eyebrow' => 'Impacto',
                        'title' => 'Proyectos con proyección social y profesional',
                        'text' => 'Las acciones de vinculación fortalecen la presencia de la facultad y favorecen aprendizajes conectados con la realidad.',
                    ],
                    [
                        'eyebrow' => 'Servicios',
                        'title' => 'Atención y acompañamiento externo',
                        'text' => 'Las iniciativas institucionales integran formación, colaboración y servicios con enfoque universitario.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Conexión con el entorno',
                        'content' => 'La vinculación articula experiencias formativas con necesidades y oportunidades del contexto organizacional y social.',
                    ],
                    [
                        'title' => 'Experiencia aplicada',
                        'content' => 'La participación en proyectos y servicios favorece la construcción de perfiles profesionales más completos y pertinentes.',
                    ],
                ],
                'cta' => [
                    'title' => 'Amplia tu experiencia profesional',
                    'text' => 'Revisa también la sección de estudiantes y egresados para seguir fortaleciendo tu trayectoria dentro y fuera del aula.',
                    'primary' => ['label' => 'Ver estudiantes', 'href' => '/estudiantes'],
                    'secondary' => ['label' => 'Ver egresados', 'href' => '/egresados'],
                ],
            ],
            'internacionalizacion' => [
                'route' => 'internacionalizacion',
                'title' => 'Internacionalización',
                'description' => 'Experiencias y perspectivas globales para enriquecer la formación, la colaboración académica y la proyección universitaria.',
                'stats' => [
                    ['value' => 'Visión global', 'label' => 'Formación conectada'],
                    ['value' => 'Colaboración', 'label' => 'Intercambio académico'],
                    ['value' => 'Proyección', 'label' => 'Experiencias ampliadas'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Movilidad',
                        'title' => 'Oportunidades de intercambio',
                        'text' => 'La internacionalización favorece experiencias académicas y culturales que amplían la perspectiva formativa del estudiantado.',
                    ],
                    [
                        'eyebrow' => 'Cooperación',
                        'title' => 'Colaboración universitaria',
                        'text' => 'La articulación con otras instituciones fortalece el diálogo académico y la innovación en los procesos formativos.',
                    ],
                    [
                        'eyebrow' => 'Formación',
                        'title' => 'Competencias con alcance global',
                        'text' => 'La mirada internacional complementa el desarrollo profesional y la comprensión de contextos diversos.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Experiencia internacional',
                        'content' => 'La facultad incorpora una perspectiva global en sus acciones académicas para fortalecer competencias y posibilidades de colaboración.',
                    ],
                    [
                        'title' => 'Proyección institucional',
                        'content' => 'La internacionalización amplifica el alcance de la comunidad universitaria y enriquece la experiencia educativa.',
                    ],
                ],
                'cta' => [
                    'title' => 'Conecta tu formación con nuevas perspectivas',
                    'text' => 'Descubre cómo la experiencia estudiantil y la investigación se enriquecen con una mirada global.',
                    'primary' => ['label' => 'Ver investigación', 'href' => '/investigacion'],
                    'secondary' => ['label' => 'Ver estudiantes', 'href' => '/estudiantes'],
                ],
            ],
            'egresados' => [
                'route' => 'egresados',
                'title' => 'Egresados',
                'description' => 'Vínculo institucional con quienes concluyeron su formación y continúan proyectando el impacto profesional de la FCA UADY.',
                'stats' => [
                    ['value' => 'Comunidad extendida', 'label' => 'Trayectorias profesionales'],
                    ['value' => 'Actualización', 'label' => 'Aprendizaje permanente'],
                    ['value' => 'Vínculo institucional', 'label' => 'Relación continua'],
                ],
                'cards' => [
                    [
                        'eyebrow' => 'Continuidad',
                        'title' => 'Relación con la facultad',
                        'text' => 'La comunidad de egresados mantiene un vínculo con la institución a través de oportunidades académicas y profesionales.',
                    ],
                    [
                        'eyebrow' => 'Actualización',
                        'title' => 'Desarrollo profesional continuo',
                        'text' => 'La oferta complementaria y los espacios de colaboración fortalecen el crecimiento de quienes egresan de la facultad.',
                    ],
                    [
                        'eyebrow' => 'Identidad',
                        'title' => 'Pertenencia y proyección',
                        'text' => 'La relación con egresados amplifica el alcance institucional y enriquece la comunidad universitaria.',
                    ],
                ],
                'sections' => [
                    [
                        'title' => 'Trayectorias que continúan',
                        'content' => 'La facultad reconoce a sus egresados como parte activa de su identidad y como aliados en el fortalecimiento del entorno profesional.',
                    ],
                    [
                        'title' => 'Comunidad conectada',
                        'content' => 'El contacto con egresados favorece redes, oportunidades y nuevas formas de colaboración con la vida universitaria.',
                    ],
                ],
                'cta' => [
                    'title' => 'Mantente vinculado a la FCA UADY',
                    'text' => 'Consulta también las secciones de oferta educativa y vinculación para conocer nuevas oportunidades de desarrollo.',
                    'primary' => ['label' => 'Ver vinculación', 'href' => '/vinculacion'],
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
                'title' => 'Licenciatura en Contaduría',
                'shortTitle' => 'Contaduría',
                'description' => 'Formación orientada al registro, análisis, control y evaluación de información financiera para apoyar decisiones responsables en organizaciones públicas y privadas.',
                'image' => 'images/fca/fca-conta.jpg',
                'imageAlt' => 'Estudiantes de contaduría en actividad académica',
                'accent' => 'from-[#002f6c] to-[#075985]',
                'stats' => [
                    ['value' => 'Finanzas', 'label' => 'Análisis y control'],
                    ['value' => 'Fiscal', 'label' => 'Cumplimiento tributario'],
                    ['value' => 'Auditoría', 'label' => 'Revisión y confianza'],
                ],
                'profile' => 'Quien estudia Contaduría desarrolla criterio técnico, pensamiento analítico y sentido ético para interpretar información financiera, fiscal y administrativa.',
                'skills' => [
                    'Preparar e interpretar estados financieros.',
                    'Gestionar obligaciones fiscales y procesos de auditoría.',
                    'Evaluar riesgos, controles internos y costos.',
                    'Acompañar la toma de decisiones con información confiable.',
                ],
                'fields' => [
                    'Contabilidad financiera y administrativa',
                    'Auditoría interna y externa',
                    'Consultoría fiscal',
                    'Contraloría y finanzas corporativas',
                ],
                'curriculum' => [
                    'Base contable, económica y administrativa',
                    'Fiscalidad, costos y sistemas de información',
                    'Auditoría, control y gestión financiera',
                    'Prácticas, proyectos integradores y enfoque profesional',
                ],
            ],
            'administracion' => [
                'slug' => 'administracion',
                'title' => 'Licenciatura en Administración',
                'shortTitle' => 'Administración',
                'description' => 'Programa enfocado en la dirección de organizaciones, la gestión del talento, la planeación estratégica y la mejora de procesos con visión humana y competitiva.',
                'image' => 'images/fca/fca-admin.jpg',
                'imageAlt' => 'Espacios de aprendizaje para administración',
                'accent' => 'from-[#003b73] to-[#047857]',
                'stats' => [
                    ['value' => 'Estrategia', 'label' => 'Dirección organizacional'],
                    ['value' => 'Talento', 'label' => 'Gestión humana'],
                    ['value' => 'Procesos', 'label' => 'Mejora continua'],
                ],
                'profile' => 'La Licenciatura en Administración forma perfiles capaces de coordinar equipos, analizar entornos y convertir objetivos institucionales en planes de acción.',
                'skills' => [
                    'Diseñar estrategias y modelos de gestión.',
                    'Coordinar equipos y procesos organizacionales.',
                    'Analizar indicadores para mejorar resultados.',
                    'Impulsar emprendimientos y proyectos de innovación.',
                ],
                'fields' => [
                    'Dirección y administración general',
                    'Gestión del talento humano',
                    'Emprendimiento y desarrollo de negocios',
                    'Consultoría organizacional',
                ],
                'curriculum' => [
                    'Fundamentos de administración, economía y contabilidad',
                    'Planeación, talento humano y comportamiento organizacional',
                    'Operacion, calidad, finanzas y mercadotecnia',
                    'Estrategia, emprendimiento y proyectos aplicados',
                ],
            ],
            'mercadotecnia' => [
                'slug' => 'mercadotecnia',
                'title' => 'Licenciatura en Mercadotecnia',
                'shortTitle' => 'Mercadotecnia',
                'description' => 'Formación centrada en comprender mercados, crear propuestas de valor y diseñar estrategias de comunicación, marca y comercialización basadas en datos.',
                'image' => 'images/fca/fca-mkt.jpg',
                'imageAlt' => 'Actividad académica vinculada con mercadotecnia',
                'accent' => 'from-[#7c2d12] to-[#be123c]',
                'stats' => [
                    ['value' => 'Mercados', 'label' => 'Investigación y datos'],
                    ['value' => 'Marca', 'label' => 'Estrategia creativa'],
                    ['value' => 'Clientes', 'label' => 'Experiencia y valor'],
                ],
                'profile' => 'La Licenciatura en Mercadotecnia prepara profesionales que interpretan consumidores, tendencias y canales para desarrollar soluciones comerciales pertinentes y medibles.',
                'skills' => [
                    'Investigar mercados y analizar comportamiento del consumidor.',
                    'Construir estrategias de marca, producto y comunicación.',
                    'Gestionar campañas digitales y comerciales.',
                    'Medir resultados para optimizar decisiones de mercado.',
                ],
                'fields' => [
                    'Investigación de mercados',
                    'Gestión de marca y comunicación',
                    'Marketing digital y comercio electrónico',
                    'Ventas, servicio y experiencia del cliente',
                ],
                'curriculum' => [
                    'Fundamentos de negocios, comunicación y comportamiento',
                    'Investigación, segmentación y estrategia de mercado',
                    'Branding, canales digitales y comercialización',
                    'Analítica, proyectos y desarrollo de campañas',
                ],
            ],
            'lati' => [
                'slug' => 'lati',
                'title' => 'Licenciatura en Administración de las Tecnologías de la Información',
                'shortTitle' => 'LATI',
                'description' => 'Programa que integra administración, tecnología y análisis de información para gestionar soluciones digitales alineadas con los objetivos de las organizaciones.',
                'image' => 'images/fca/fca-lati.jpg',
                'imageAlt' => 'Tecnologías de información aplicadas a la administración',
                'accent' => 'from-[#1e3a8a] to-[#0f766e]',
                'stats' => [
                    ['value' => 'Tecnología', 'label' => 'Soluciones digitales'],
                    ['value' => 'Datos', 'label' => 'Análisis para decidir'],
                    ['value' => 'Gestión', 'label' => 'Proyectos TI'],
                ],
                'profile' => 'La Licenciatura en Administración de Tecnologías de la Información forma profesionales que conectan necesidades administrativas con herramientas tecnológicas, datos y procesos de transformación digital.',
                'skills' => [
                    'Administrar proyectos y servicios de tecnologías de información.',
                    'Modelar procesos y proponer soluciones digitales.',
                    'Analizar datos para mejorar la gestión organizacional.',
                    'Coordinar equipos técnicos y usuarios de negocio.',
                ],
                'fields' => [
                    'Gestión de proyectos tecnológicos',
                    'Análisis de datos y sistemas de información',
                    'Transformación digital',
                    'Consultoría en procesos y tecnología',
                ],
                'curriculum' => [
                    'Administración, programación y fundamentos de datos',
                    'Sistemas de información, procesos y redes',
                    'Gestión de proyectos, analítica y seguridad',
                    'Innovación digital y soluciones organizacionales',
                ],
            ],
        ];
    }
}

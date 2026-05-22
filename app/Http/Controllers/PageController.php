<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function show(string $page): View
    {
        $pages = $this->pages();

        abort_unless(array_key_exists($page, $pages), 404);

        return view('pages.show', $this->withExpandedPage($pages[$page]));
    }

    public function program(string $program): View
    {
        $programs = $this->programs();

        abort_unless(array_key_exists($program, $programs), 404);

        return view('programs.show', $this->withExpandedProgram($programs[$program]) + [
            'programs' => $programs,
        ]);
    }

    protected function withExpandedPage(array $page): array
    {
        $expanded = [
            'nuestra-facultad' => [
                'focus' => [
                    'eyebrow' => 'Comunidad FCA',
                    'title' => 'Una facultad que aprende con su entorno',
                    'text' => 'La experiencia universitaria combina aula, investigación, actividades estudiantiles y vínculo con organizaciones. La FCA se presenta como un espacio donde la formación económico-administrativa se vuelve práctica, socialmente responsable y conectada con Yucatán.',
                    'items' => [
                        'Identidad universitaria con sentido de pertenencia.',
                        'Ambientes para colaboración, tutoría y aprendizaje aplicado.',
                        'Vida académica que dialoga con empresas, instituciones y comunidad.',
                    ],
                ],
                'pathways' => [
                    ['title' => 'Formación integral', 'text' => 'El modelo formativo articula competencias profesionales, responsabilidad social, cultura maya, emprendimiento y uso estratégico de tecnologías.'],
                    ['title' => 'Gobernanza académica', 'text' => 'La facultad organiza su trabajo mediante dirección, secretarías, unidad de posgrado e investigación, servicios escolares y áreas de apoyo a la comunidad.'],
                    ['title' => 'Campus vivo', 'text' => 'Los eventos, convocatorias, avisos, proyectos y actividades culturales hacen visible una comunidad que no se limita al horario de clase.'],
                ],
            ],
            'aspirantes' => [
                'focus' => [
                    'eyebrow' => 'Antes de elegir',
                    'title' => 'Conecta tus intereses con una ruta profesional',
                    'text' => 'Elegir una carrera en la FCA implica pensar cómo quieres participar en las organizaciones: desde las finanzas y la auditoría, hasta la estrategia, los mercados, los datos o la tecnología aplicada a los negocios.',
                    'items' => [
                        'Revisa el perfil de cada licenciatura y su malla curricular.',
                        'Identifica qué asignaturas despiertan curiosidad genuina.',
                        'Piensa en escenarios profesionales donde te gustaría resolver problemas.',
                    ],
                ],
                'pathways' => [
                    ['title' => 'Exploración vocacional', 'text' => 'Compara campos profesionales, competencias y experiencias prácticas para ubicar la carrera que mejor conversa con tus fortalezas.'],
                    ['title' => 'Preparación académica', 'text' => 'Fortalece lectura, comunicación, matemáticas, pensamiento lógico, cultura digital y comprensión del entorno social y económico.'],
                    ['title' => 'Ingreso con claridad', 'text' => 'La mejor decisión no solo mira el nombre de la carrera: mira el tipo de retos que quieres aprender a enfrentar durante varios semestres.'],
                ],
            ],
            'estudiantes' => [
                'focus' => [
                    'eyebrow' => 'Trayectoria universitaria',
                    'title' => 'Aprender, participar y construir futuro',
                    'text' => 'La vida estudiantil puede leerse como una ruta de crecimiento: organizar tu carga académica, participar en proyectos, buscar asesoría, aprovechar convocatorias y convertir cada semestre en evidencia de desarrollo profesional.',
                    'items' => [
                        'Planeación de asignaturas, servicio social y prácticas profesionales.',
                        'Participación en eventos, concursos, ferias y actividades culturales.',
                        'Construcción de portafolio con proyectos, evidencias y experiencias.',
                    ],
                ],
                'pathways' => [
                    ['title' => 'Acompañamiento', 'text' => 'Tutorías, orientación académica y servicios institucionales ayudan a tomar mejores decisiones durante la trayectoria.'],
                    ['title' => 'Experiencia aplicada', 'text' => 'Las visitas académicas, proyectos integradores y actividades con organizaciones acercan la profesión a situaciones reales.'],
                    ['title' => 'Vida de campus', 'text' => 'La participación estudiantil fortalece liderazgo, comunicación, colaboración y sentido de comunidad.'],
                ],
            ],
            'investigacion' => [
                'focus' => [
                    'eyebrow' => 'Conocimiento aplicado',
                    'title' => 'Investigar para comprender y transformar organizaciones',
                    'text' => 'La investigación en una facultad económico-administrativa se vuelve valiosa cuando explica decisiones, mide impactos, entiende mercados, analiza tecnologías y aporta soluciones pertinentes al contexto regional.',
                    'items' => [
                        'Problemas de gestión, finanzas, mercados y transformación digital.',
                        'Proyectos con potencial de transferencia a organizaciones.',
                        'Formación de pensamiento crítico desde licenciatura y posgrado.',
                    ],
                ],
                'pathways' => [
                    ['title' => 'Líneas de trabajo', 'text' => 'Las áreas de administración, contaduría, mercadotecnia, tecnologías de información y negocios ofrecen preguntas de investigación con impacto directo.'],
                    ['title' => 'Semilleros académicos', 'text' => 'El estudiantado puede acercarse a investigación mediante proyectos, seminarios, tesis y colaboración con profesorado.'],
                    ['title' => 'Impacto social', 'text' => 'El conocimiento generado ayuda a mejorar prácticas de gestión, transparencia, innovación y desarrollo sustentable.'],
                ],
            ],
            'vinculacion' => [
                'focus' => [
                    'eyebrow' => 'Puente profesional',
                    'title' => 'La facultad como punto de encuentro con el entorno',
                    'text' => 'La vinculación convierte el aprendizaje en experiencia: prácticas, servicios, proyectos, visitas, educación continua y colaboración con sectores que necesitan perfiles capaces de analizar, decidir y ejecutar.',
                    'items' => [
                        'Relación con empresas, instituciones públicas y organizaciones sociales.',
                        'Proyectos donde el aula conversa con necesidades reales.',
                        'Experiencias que fortalecen empleabilidad y criterio profesional.',
                    ],
                ],
                'pathways' => [
                    ['title' => 'Prácticas profesionales', 'text' => 'Permiten aplicar competencias, conocer culturas organizacionales y producir evidencia concreta de desempeño.'],
                    ['title' => 'Servicios y extensión', 'text' => 'La facultad puede aportar diagnóstico, capacitación, consultoría y acompañamiento desde su capacidad académica.'],
                    ['title' => 'Redes de oportunidad', 'text' => 'Las alianzas abren conversaciones para empleo, emprendimiento, proyectos y aprendizaje permanente.'],
                ],
            ],
            'internacionalizacion' => [
                'focus' => [
                    'eyebrow' => 'Perspectiva global',
                    'title' => 'Aprender a leer organizaciones más allá de una frontera',
                    'text' => 'La internacionalización no es solo movilidad: también es comparar contextos, practicar idiomas, analizar mercados globales, colaborar con otras instituciones y reconocer que las decisiones locales tienen conexiones amplias.',
                    'items' => [
                        'Movilidad académica y colaboración interinstitucional.',
                        'Competencias interculturales para negocios y organizaciones.',
                        'Mirada global aplicada a tecnología, finanzas, mercados y gestión.',
                    ],
                ],
                'pathways' => [
                    ['title' => 'Movilidad con propósito', 'text' => 'Una estancia académica se aprovecha mejor cuando se vincula con intereses de carrera, idioma, investigación o campo profesional.'],
                    ['title' => 'Internacionalización en casa', 'text' => 'Clases, proyectos, conferencias y colaboración remota también amplían la perspectiva sin salir del campus.'],
                    ['title' => 'Perfil competitivo', 'text' => 'El dominio de idiomas, la adaptación cultural y el análisis de entornos globales fortalecen la empleabilidad.'],
                ],
            ],
            'egresados' => [
                'focus' => [
                    'eyebrow' => 'Comunidad extendida',
                    'title' => 'El vínculo con la FCA continúa después del egreso',
                    'text' => 'Las trayectorias de egresadas y egresados muestran cómo la formación se proyecta en empresas, despachos, instituciones, emprendimientos, consultoría, tecnología, docencia e investigación.',
                    'items' => [
                        'Actualización profesional y educación continua.',
                        'Redes para colaboración, mentoría y oportunidades laborales.',
                        'Participación en actividades que retroalimentan la vida académica.',
                    ],
                ],
                'pathways' => [
                    ['title' => 'Aprendizaje permanente', 'text' => 'La actualización mantiene vigente el perfil profesional ante cambios fiscales, tecnológicos, financieros y organizacionales.'],
                    ['title' => 'Mentoría y red', 'text' => 'La experiencia de egresados puede orientar a estudiantes y fortalecer puentes con el mundo laboral.'],
                    ['title' => 'Orgullo institucional', 'text' => 'Seguir vinculado permite devolver conocimiento, abrir oportunidades y mantener viva la identidad universitaria.'],
                ],
            ],
        ];

        return $page + ($expanded[$page['route']] ?? []);
    }

    protected function withExpandedProgram(array $program): array
    {
        return $program + [
            'sourceNote' => 'Malla integrada a partir del plan de estudios oficial publicado por la UADY/FCA.',
        ];
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
                'sourceUrl' => 'https://apidemoportal.uady.mx/documento/77fc7377a3bf4f31f916af58b57b1721/PE-CP-2019.pdf',
                'curriculumGrid' => [
                    ['term' => '1er semestre', 'subjects' => ['Responsabilidad Social Universitaria', 'Valores Socioculturales', 'Economía de los Negocios', 'Fundamentos de Administración', 'Fundamentos de Mercadotecnia', 'Contabilidad Básica', 'Tecnologías y Sistemas de Información']],
                    ['term' => '2o semestre', 'subjects' => ['Cultura Maya', 'Matemáticas para los Negocios', 'Comportamiento Humano Organizacional', 'Métodos de Investigación', 'Entorno Macroeconómico de los Negocios', 'Proceso Contable']],
                    ['term' => '3er semestre', 'subjects' => ['Cultura Emprendedora', 'Fundamentos de Costos', 'Estadística Básica para los Negocios', 'Legislación Civil y Mercantil', 'Análisis Económico de los Negocios', 'Contabilidad del Activo']],
                    ['term' => '4o semestre', 'subjects' => ['Estadística Avanzada para los Negocios', 'Matemáticas Financieras', 'Legislación Laboral', 'Contabilidad de Costos', 'Código Fiscal de la Federación', 'Contabilidad de Pasivo y Capital']],
                    ['term' => '5o semestre', 'subjects' => ['Introducción a las Finanzas', 'Sistemas de Costos en las Organizaciones', 'Control Interno', 'I.S.R. de las Personas Morales', 'Estados Financieros Básicos']],
                    ['term' => '6o semestre', 'subjects' => ['Costos para Toma de Decisiones', 'Análisis e Interpretación de Estados Financieros', 'Normatividad de la Auditoría', 'I.S.R. de las Personas Físicas']],
                    ['term' => '7o semestre', 'subjects' => ['Presupuestos', 'Ética para el Ejercicio Profesional', 'Diversos Impuestos Federales, Estatales y Municipales', 'Administración del Capital de Trabajo', 'Prácticas Profesionales']],
                    ['term' => '8o semestre', 'subjects' => ['Planeación y Control Financiero', 'Fuentes de Financiamiento', 'Herramientas de Cálculo Gerencial y Financiero', 'Auditoría Interna', 'Optativas']],
                    ['term' => '9o semestre', 'subjects' => ['Proyectos de Inversión', 'Práctica de la Auditoría', 'Normatividad Contable Avanzada', 'Asignaturas libres', 'Servicio Social']],
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
                'sourceUrl' => 'https://apidemoportal.uady.mx/documento/77fc7377a3bf4f31f916af58b57b1721/PE-LA-2019.pdf',
                'curriculumGrid' => [
                    ['term' => '1er semestre', 'subjects' => ['Responsabilidad Social Universitaria', 'Valores Socioculturales', 'Tecnologías y Sistemas de Información', 'Fundamentos de Administración', 'Economía de los Negocios', 'Teoría General de la Administración']],
                    ['term' => '2o semestre', 'subjects' => ['Cultura Maya', 'Contabilidad Básica', 'Fundamentos de Mercadotecnia', 'Matemáticas para los Negocios', 'Comportamiento Humano Organizacional', 'Empresas Familiares']],
                    ['term' => '3er semestre', 'subjects' => ['Cultura Emprendedora', 'Métodos de Investigación', 'Estadística Básica para los Negocios', 'Entorno Macroeconómico de los Negocios', 'Fundamentos de Costos', 'Análisis de los Procesos de Negocio']],
                    ['term' => '4o semestre', 'subjects' => ['Legislación Civil y Mercantil', 'Estadística Avanzada para los Negocios', 'Legislación Laboral', 'Administración de Procesos y Venta', 'Administración de Personal']],
                    ['term' => '5o semestre', 'subjects' => ['Introducción a las Finanzas', 'Legislación Fiscal', 'Sistemas de Información de la Mercadotecnia', 'Gestión de la Información para la Innovación', 'Estructuración de las Organizaciones']],
                    ['term' => '6o semestre', 'subjects' => ['Investigación de Operaciones', 'Costos para la Toma de Decisiones', 'Estrategias de Dirección y Liderazgo', 'Administración de la Compensación', 'Estrategias de Mercadotecnia', 'Administración de Operaciones', 'Negocios Internacionales']],
                    ['term' => '7o semestre', 'subjects' => ['Desarrollo Sustentable', 'Análisis de la Información Financiera', 'Desarrollo de Personal', 'Administración de la Cadena Logística', 'Administración de la Calidad']],
                    ['term' => '8o semestre', 'subjects' => ['Presupuestos', 'Administración Estratégica', 'Administración de la Mercadotecnia', 'Auditoría Operacional y Administrativa', 'Prácticas Profesionales']],
                    ['term' => '9o semestre', 'subjects' => ['Proyectos de Inversión', 'Toma de Decisiones Directivas', 'Optativas', 'Asignaturas libres', 'Servicio Social']],
                ],
            ],
            'mercadotecnia' => [
                'slug' => 'mercadotecnia',
                'title' => 'Licenciatura en Mercadotecnia y Negocios Internacionales',
                'shortTitle' => 'Merca y Negocios',
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
                'sourceUrl' => 'https://apidemoportal.uady.mx/documento/77fc7377a3bf4f31f916af58b57b1721/PE-LMNI-2019.pdf',
                'curriculumGrid' => [
                    ['term' => '1er semestre', 'subjects' => ['Responsabilidad Social Universitaria', 'Valores Socioculturales', 'Tecnologías y Sistemas de Información', 'Contabilidad Básica', 'Introducción a la Investigación de Mercados', 'Probabilidad y Estadística']],
                    ['term' => '2o semestre', 'subjects' => ['Cultura Maya', 'Economía de los Negocios', 'Fundamentos de Administración', 'Fundamentos de Mercadotecnia', 'Métodos de Investigación', 'Legislación Civil y Mercantil']],
                    ['term' => '3er semestre', 'subjects' => ['Cultura Emprendedora', 'Entorno Macroeconómico de los Negocios', 'Comportamiento Humano Organizacional', 'Análisis y Medición de los Mercados', 'Desarrollo de Productos', 'Diseño Gráfico']],
                    ['term' => '4o semestre', 'subjects' => ['Estadística Avanzada para los Negocios', 'Administración y Procesos de Venta', 'Comunicación Integral de la Mercadotecnia', 'Análisis Económico de los Negocios', 'Software para la Investigación de Mercados', 'Desarrollo de Servicios']],
                    ['term' => '5o semestre', 'subjects' => ['Mercados Internacionales', 'Internacionalización de la Empresa', 'Métodos Cualitativos de Investigación de Mercados', 'Distribución', 'Fijación de Precios', 'Desarrollo de Marcas']],
                    ['term' => '6o semestre', 'subjects' => ['Investigación de Operaciones', 'Publicidad', 'Promoción de Ventas', 'Relaciones Públicas', 'Métodos Cuantitativos de Investigación de Mercados', 'Gestión del Punto de Venta']],
                    ['term' => '7o semestre', 'subjects' => ['Desarrollo Sustentable', 'Planeación Estratégica de Mercadotecnia', 'Mercadotecnia Digital 1', 'Administración de Recursos Financieros', 'Prácticas Profesionales']],
                    ['term' => '8o semestre', 'subjects' => ['Mercadotecnia Digital 2', 'Mercadotecnia Internacional', 'Desarrollo de Modelos de Negocios', 'Optativas', 'Asignaturas libres']],
                    ['term' => '9o semestre', 'subjects' => ['Métricas de Mercadotecnia', 'Mercadotecnia entre Negocios', 'Seminario de Negocios Internacionales', 'Servicio Social']],
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
                'sourceUrl' => 'https://apidemoportal.uady.mx/documento/77fc7377a3bf4f31f916af58b57b1721/LATI-2019.pdf',
                'curriculumGrid' => [
                    ['term' => '1er semestre', 'subjects' => ['Responsabilidad Social Universitaria', 'Valores Socioculturales', 'Economía de los Negocios', 'Fundamentos de Administración', 'Tecnologías y Sistemas de Información', 'Matemáticas para los Negocios', 'Lógica Computacional']],
                    ['term' => '2o semestre', 'subjects' => ['Cultura Maya', 'Fundamentos de Mercadotecnia', 'Contabilidad Básica', 'Interacción Humano Computadora', 'La Sociedad y las Tecnologías de Información']],
                    ['term' => '3er semestre', 'subjects' => ['Cultura Emprendedora', 'Métodos de Investigación', 'Fundamentos de Costos', 'Probabilidad y Estadística', 'Principios de la Programación Orientada a Objetos']],
                    ['term' => '4o semestre', 'subjects' => ['Proceso Contable', 'Matemáticas Financieras', 'Análisis de los Procesos del Negocio', 'Programación Orientada a Objetos', 'Redes y Comunicaciones']],
                    ['term' => '5o semestre', 'subjects' => ['Legislación Fiscal', 'Introducción a las Finanzas', 'Diseño de Bases de Datos', 'Programación para Web', 'Plataformas e Infraestructura Tecnológica']],
                    ['term' => '6o semestre', 'subjects' => ['Investigación de Operaciones', 'Costos para Toma de Decisiones', 'Legislación Laboral', 'Tecnología Web', 'Diseño e Implementación de Sistemas de Información']],
                    ['term' => '7o semestre', 'subjects' => ['Administración de la Calidad del Software', 'Administración Financiera', 'Administración de Proyectos de Tecnologías de Información', 'Desarrollo Sustentable', 'Prácticas Profesionales']],
                    ['term' => '8o semestre', 'subjects' => ['Negocios Electrónicos', 'Gestión de Servicios de Tecnologías de Información', 'Auditoría y Controles de Tecnologías de Información', 'Proyectos de Inversión Tecnológica', 'Optativas']],
                    ['term' => '9o semestre', 'subjects' => ['Optativas', 'Asignaturas libres', 'Servicio Social']],
                ],
            ],
        ];
    }
}

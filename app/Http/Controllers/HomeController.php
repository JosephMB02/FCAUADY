<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->take(4)->get();

        $accesos = [
            [
                'eyebrow' => 'Información institucional',
                'title' => 'Nuestra Facultad',
                'text' => 'Conoce la identidad, los espacios y la experiencia universitaria que distinguen a la FCA UADY.',
                'href' => '/nuestra-facultad',
            ],
            [
                'eyebrow' => 'Ingreso y orientación',
                'title' => 'Aspirantes',
                'text' => 'Explora la oferta académica y la ruta de ingreso para integrarte a la comunidad universitaria.',
                'href' => '/aspirantes',
            ],
            [
                'eyebrow' => 'Trayectoria universitaria',
                'title' => 'Estudiantes',
                'text' => 'Accede a información sobre acompañamiento, servicios y vida estudiantil dentro de la facultad.',
                'href' => '/estudiantes',
            ],
            [
                'eyebrow' => 'Continuidad profesional',
                'title' => 'Egresados',
                'text' => 'Mantente vinculado con la FCA UADY a través de espacios de actualización y comunidad profesional.',
                'href' => '/egresados',
            ],
        ];

        $indicadores = [
            ['value' => 'Formación integral', 'label' => 'Trayectoria académica y profesional', 'class' => 'border-yellow-300/40 bg-yellow-400/20'],
            ['value' => 'Vida universitaria', 'label' => 'Experiencias que fortalecen la comunidad', 'class' => 'border-sky-300/40 bg-sky-400/20'],
            ['value' => 'Vinculación activa', 'label' => 'Relación con el entorno y los sectores', 'class' => 'border-emerald-300/40 bg-emerald-400/20'],
            ['value' => 'Visión global', 'label' => 'Internacionalización y colaboración académica', 'class' => 'border-rose-300/40 bg-rose-400/20'],
        ];

        $programas = [
            [
                'eyebrow' => 'Licenciaturas',
                'title' => 'Oferta académica con enfoque estratégico',
                'text' => 'Programas de formación profesional orientados al análisis, la gestión y la toma de decisiones.',
                'href' => '/oferta',
            ],
            [
                'eyebrow' => 'Investigación',
                'title' => 'Conocimiento aplicado al entorno',
                'text' => 'La investigación fortalece el aprendizaje y contribuye a la atención de desafíos organizacionales y sociales.',
                'href' => '/investigacion',
            ],
            [
                'eyebrow' => 'Vinculación',
                'title' => 'Experiencias conectadas con la realidad profesional',
                'text' => 'Servicios, proyectos y colaboraciones que enriquecen la formación con experiencias aplicadas.',
                'href' => '/vinculacion',
            ],
        ];

        $agenda = [
            [
                'title' => 'Jornada de inducción para aspirantes',
                'meta' => 'Comunidad FCA UADY',
                'text' => 'Espacio informativo para conocer la oferta académica, la vida universitaria y los servicios institucionales.',
            ],
            [
                'title' => 'Encuentro académico y profesional',
                'meta' => 'Vinculación e intercambio',
                'text' => 'Actividad orientada al diálogo entre formación universitaria, colaboración y proyección profesional.',
            ],
            [
                'title' => 'Sesión informativa de movilidad e internacionalización',
                'meta' => 'Experiencias globales',
                'text' => 'Presentación de oportunidades que amplían la perspectiva académica y la experiencia universitaria.',
            ],
        ];

        return view('inicio', compact('noticias', 'accesos', 'indicadores', 'programas', 'agenda'));
    }
}

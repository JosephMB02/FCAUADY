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
                'eyebrow' => 'Informacion institucional',
                'title' => 'Nuestra Facultad',
                'text' => 'Conoce la identidad, los espacios y la experiencia universitaria que distinguen a la FCA UADY.',
                'href' => '/nuestra-facultad',
            ],
            [
                'eyebrow' => 'Ingreso y orientacion',
                'title' => 'Aspirantes',
                'text' => 'Explora la oferta academica y la ruta de ingreso para integrarte a la comunidad universitaria.',
                'href' => '/aspirantes',
            ],
            [
                'eyebrow' => 'Trayectoria universitaria',
                'title' => 'Estudiantes',
                'text' => 'Accede a informacion sobre acompanamiento, servicios y vida estudiantil dentro de la facultad.',
                'href' => '/estudiantes',
            ],
            [
                'eyebrow' => 'Continuidad profesional',
                'title' => 'Egresados',
                'text' => 'Mantente vinculado con la FCA UADY a traves de espacios de actualizacion y comunidad profesional.',
                'href' => '/egresados',
            ],
        ];

        $indicadores = [
            ['value' => 'Formacion integral', 'label' => 'Trayectoria academica y profesional', 'class' => 'border-yellow-300/40 bg-yellow-400/20'],
            ['value' => 'Vida universitaria', 'label' => 'Experiencias que fortalecen la comunidad', 'class' => 'border-sky-300/40 bg-sky-400/20'],
            ['value' => 'Vinculacion activa', 'label' => 'Relacion con el entorno y los sectores', 'class' => 'border-emerald-300/40 bg-emerald-400/20'],
            ['value' => 'Vision global', 'label' => 'Internacionalizacion y colaboracion academica', 'class' => 'border-rose-300/40 bg-rose-400/20'],
        ];

        $programas = [
            [
                'eyebrow' => 'Licenciaturas',
                'title' => 'Oferta academica con enfoque estrategico',
                'text' => 'Programas de formacion profesional orientados al analisis, la gestion y la toma de decisiones.',
                'href' => '/oferta',
            ],
            [
                'eyebrow' => 'Investigacion',
                'title' => 'Conocimiento aplicado al entorno',
                'text' => 'La investigacion fortalece el aprendizaje y contribuye a la atencion de desafios organizacionales y sociales.',
                'href' => '/investigacion',
            ],
            [
                'eyebrow' => 'Vinculacion',
                'title' => 'Experiencias conectadas con la realidad profesional',
                'text' => 'Servicios, proyectos y colaboraciones que enriquecen la formacion con experiencias aplicadas.',
                'href' => '/vinculacion',
            ],
        ];

        $agenda = [
            [
                'title' => 'Jornada de induccion para aspirantes',
                'meta' => 'Comunidad FCA UADY',
                'text' => 'Espacio informativo para conocer la oferta academica, la vida universitaria y los servicios institucionales.',
            ],
            [
                'title' => 'Encuentro academico y profesional',
                'meta' => 'Vinculacion e intercambio',
                'text' => 'Actividad orientada al dialogo entre formacion universitaria, colaboracion y proyeccion profesional.',
            ],
            [
                'title' => 'Sesion informativa de movilidad e internacionalizacion',
                'meta' => 'Experiencias globales',
                'text' => 'Presentacion de oportunidades que amplian la perspectiva academica y la experiencia universitaria.',
            ],
        ];

        return view('inicio', compact('noticias', 'accesos', 'indicadores', 'programas', 'agenda'));
    }
}

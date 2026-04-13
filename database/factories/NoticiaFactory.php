<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Noticia>
 */
class NoticiaFactory extends Factory
{
    protected $model = Noticia::class;

    public function definition(): array
    {
        $imagenes = [
            'images/Noticia1.jpg',
            'images/Noticia2.jpg',
            'images/Noticia3.jpg',
            'images/Noticia4.jpg',
        ];

        return [
            'titulo' => fake()->randomElement([
                'Estudiantes fortalecen proyectos de emprendimiento',
                'FCA UADY impulsa actividades de vinculacion academica',
                'Comunidad universitaria participa en jornada formativa',
                'Docentes promueven innovacion en las aulas',
            ]),
            'imagen' => fake()->randomElement($imagenes),
            'contenido' => fake()->paragraph(4),
        ];
    }
}

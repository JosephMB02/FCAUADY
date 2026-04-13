@extends('layouts.secondary')

@section('titulo', 'Oferta Educativa')

@section('descripcion')
Programas academicos orientados a formar profesionales con vision estrategica, compromiso social y capacidad para responder a los retos del entorno.
@endsection

@section('contenido')
<div class="grid gap-8 lg:grid-cols-[1fr_2fr]">
    <aside class="rounded-3xl border border-slate-100 bg-slate-50 p-6">
        <h2 class="mb-4 text-xl font-bold text-[#002f6c]">Opciones</h2>
        <nav class="flex flex-col gap-3 text-sm font-semibold text-slate-700">
            <a href="#licenciaturas" class="rounded-2xl bg-white px-4 py-3 shadow-sm transition hover:text-yellow-700">Licenciaturas</a>
            <a href="#posgrados" class="rounded-2xl bg-white px-4 py-3 shadow-sm transition hover:text-yellow-700">Posgrados</a>
            <a href="#formacion" class="rounded-2xl bg-white px-4 py-3 shadow-sm transition hover:text-yellow-700">Formacion continua</a>
        </nav>
    </aside>

    <div class="space-y-8 text-slate-700">
        <section id="licenciaturas">
            <h2 class="mb-3 text-2xl font-extrabold text-[#002f6c]">Licenciaturas</h2>
            <p class="leading-8">
                La Facultad de Contaduria y Administracion ofrece programas de licenciatura enfocados en el desarrollo de competencias profesionales, analisis estrategico y toma de decisiones.
            </p>
        </section>

        <section id="posgrados">
            <h2 class="mb-3 text-2xl font-extrabold text-[#002f6c]">Posgrados</h2>
            <p class="leading-8">
                Los programas de posgrado fortalecen la especializacion academica y profesional mediante proyectos, investigacion aplicada y vinculacion con el sector productivo.
            </p>
        </section>

        <section id="formacion">
            <h2 class="mb-3 text-2xl font-extrabold text-[#002f6c]">Formacion continua</h2>
            <p class="leading-8">
                La formacion continua permite actualizar conocimientos y habilidades a traves de cursos, diplomados y actividades academicas dirigidas a estudiantes, egresados y profesionales.
            </p>
        </section>
    </div>
</div>
@endsection

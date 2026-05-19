@props([
    'slides' => [],
    'altura' => 'h-[80vh] min-h-[620px]',
])

@php
    $galleryId = 'galeria-' . uniqid();
@endphp

@if (! empty($slides))
    <section
        id="{{ $galleryId }}"
        class="relative w-full {{ $altura }} overflow-hidden bg-[#001530]"
        data-gallery
    >
        @foreach ($slides as $index => $slide)
            <article
                class="absolute inset-0 transition-all duration-700 ease-out {{ $index === 0 ? 'opacity-100 translate-x-0 pointer-events-auto' : 'opacity-0 translate-x-8 pointer-events-none' }}"
                data-gallery-slide
                aria-hidden="{{ $index === 0 ? 'false' : 'true' }}"
            >
                <div class="absolute inset-0">
                    <img
                        src="{{ $slide['image'] ?? asset('images/Noticia1.jpg') }}"
                        alt="{{ $slide['image_alt'] ?? ($slide['h1'] ?? 'Galería FCA UADY') }}"
                        class="h-full w-full object-cover"
                        style="object-position: {{ $slide['image_position'] ?? 'center center' }};"
                    >
                </div>

                <div class="absolute inset-0 bg-[linear-gradient(110deg,rgba(0,21,48,0.92)_8%,rgba(0,47,108,0.78)_45%,rgba(0,21,48,0.58)_100%)]"></div>
                <div class="absolute inset-0 bg-black/20"></div>

                <div class="relative z-10 flex h-full items-center">
                    <div class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
                        <div class="max-w-3xl">
                            @if (! empty($slide['eyebrow']))
                                <p class="mb-5 text-base font-bold uppercase tracking-[0.28em] text-yellow-300">
                                    {{ $slide['eyebrow'] }}
                                </p>
                            @endif

                            <div class="space-y-3 text-white">
                                @if (! empty($slide['h1']))
                                    <h1 class="text-4xl font-black uppercase leading-none tracking-[0.08em] md:text-6xl xl:text-7xl">
                                        {{ $slide['h1'] }}
                                    </h1>
                                @endif

                                @if (! empty($slide['h2']))
                                    <h2 class="text-4xl font-semibold leading-tight text-yellow-300 md:text-6xl">
                                        {{ $slide['h2'] }}
                                    </h2>
                                @endif

                                @if (! empty($slide['h3']))
                                    <h3 class="text-lg font-medium leading-relaxed text-slate-200 md:text-2xl">
                                        {{ $slide['h3'] }}
                                    </h3>
                                @endif
                            </div>

                            @if (! empty($slide['subtitle']))
                                <p class="mt-8 max-w-2xl text-base font-light leading-7 text-slate-100 md:text-xl">
                                    {{ $slide['subtitle'] }}
                                </p>
                            @endif

                            <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:items-center">
                                @if (! empty($slide['primary']['label']) && ! empty($slide['primary']['href']))
                                    <a
                                        href="{{ $slide['primary']['href'] }}"
                                        class="inline-flex items-center justify-center rounded-full bg-yellow-400 px-8 py-4 text-sm font-bold uppercase tracking-[0.18em] text-[#002f6c] shadow-[0_16px_40px_rgba(0,0,0,0.24)] transition duration-300 hover:-translate-y-1 hover:bg-yellow-300"
                                    >
                                        {{ $slide['primary']['label'] }}
                                    </a>
                                @endif

                                @if (! empty($slide['secondary']['label']) && ! empty($slide['secondary']['href']))
                                    <a
                                        href="{{ $slide['secondary']['href'] }}"
                                        class="inline-flex items-center justify-center rounded-full border border-white/70 bg-white/10 px-8 py-4 text-sm font-bold uppercase tracking-[0.18em] text-white backdrop-blur-sm transition duration-300 hover:-translate-y-1 hover:bg-white hover:text-[#002f6c]"
                                    >
                                        {{ $slide['secondary']['label'] }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach

        <div class="pointer-events-none absolute inset-x-0 bottom-8 z-20">
            <div class="mx-auto flex w-full max-w-7xl flex-col items-start gap-5 px-6 sm:flex-row sm:items-center sm:justify-between lg:px-10">
                <div class="pointer-events-auto flex items-center gap-3">
                    <button
                        type="button"
                        class="flex h-12 w-12 items-center justify-center rounded-full border border-white/40 bg-black/25 text-2xl font-light text-white backdrop-blur-sm transition hover:border-yellow-300 hover:text-yellow-300"
                        data-gallery-prev
                        aria-label="Slide anterior"
                    >
                        &lt;
                    </button>

                    <button
                        type="button"
                        class="flex h-12 w-12 items-center justify-center rounded-full border border-white/40 bg-black/25 text-2xl font-light text-white backdrop-blur-sm transition hover:border-yellow-300 hover:text-yellow-300"
                        data-gallery-next
                        aria-label="Slide siguiente"
                    >
                        &gt;
                    </button>
                </div>

                <div class="pointer-events-auto flex max-w-full items-center gap-3 overflow-x-auto rounded-full border border-white/20 bg-black/20 px-4 py-3 backdrop-blur-sm">
                    @foreach ($slides as $index => $slide)
                        <button
                            type="button"
                            class="h-2.5 w-10 rounded-full transition {{ $index === 0 ? 'bg-yellow-400' : 'bg-white/35' }}"
                            data-gallery-indicator
                            data-gallery-go="{{ $index }}"
                            aria-label="Ir al slide {{ $index + 1 }}"
                        ></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        (() => {
            const gallery = document.getElementById(@json($galleryId));

            if (!gallery || gallery.dataset.ready === 'true') {
                return;
            }

            gallery.dataset.ready = 'true';

            const slides = Array.from(gallery.querySelectorAll('[data-gallery-slide]'));
            const indicators = Array.from(gallery.querySelectorAll('[data-gallery-indicator]'));
            const prevButton = gallery.querySelector('[data-gallery-prev]');
            const nextButton = gallery.querySelector('[data-gallery-next]');
            let currentIndex = 0;
            let autoplay = null;

            const renderSlide = (targetIndex) => {
                currentIndex = (targetIndex + slides.length) % slides.length;

                slides.forEach((slide, index) => {
                    const isActive = index === currentIndex;

                    slide.classList.toggle('opacity-100', isActive);
                    slide.classList.toggle('translate-x-0', isActive);
                    slide.classList.toggle('pointer-events-auto', isActive);
                    slide.classList.toggle('opacity-0', !isActive);
                    slide.classList.toggle('translate-x-8', !isActive);
                    slide.classList.toggle('pointer-events-none', !isActive);
                    slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
                });

                indicators.forEach((indicator, index) => {
                    const isActive = index === currentIndex;

                    indicator.classList.toggle('bg-yellow-400', isActive);
                    indicator.classList.toggle('bg-white/35', !isActive);
                });
            };

            const startAutoplay = () => {
                if (slides.length <= 1 || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                    return;
                }

                window.clearInterval(autoplay);
                autoplay = window.setInterval(() => renderSlide(currentIndex + 1), 6500);
            };

            const moveManually = (targetIndex) => {
                renderSlide(targetIndex);
                startAutoplay();
            };

            prevButton?.addEventListener('click', () => moveManually(currentIndex - 1));
            nextButton?.addEventListener('click', () => moveManually(currentIndex + 1));

            indicators.forEach((indicator) => {
                indicator.addEventListener('click', () => {
                    moveManually(Number(indicator.dataset.galleryGo));
                });
            });

            gallery.addEventListener('mouseenter', () => window.clearInterval(autoplay));
            gallery.addEventListener('mouseleave', startAutoplay);
            startAutoplay();
        })();
    </script>
@endif

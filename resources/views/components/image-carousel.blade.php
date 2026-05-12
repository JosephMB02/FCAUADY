@props([
    'slides' => [],
])

@php
    $carouselId = 'image-carousel-' . uniqid();
@endphp

@if (! empty($slides))
    <div
        id="{{ $carouselId }}"
        class="relative mt-8 h-96 w-full max-w-6xl overflow-hidden rounded-[1.5rem] bg-[#001530] shadow-2xl ring-1 ring-white/15 md:h-[30rem]"
        data-image-carousel
    >
        @foreach ($slides as $index => $slide)
            <article
                class="absolute inset-0 transition-all duration-700 ease-out {{ $index === 0 ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-6' }}"
                data-image-carousel-slide
                aria-hidden="{{ $index === 0 ? 'false' : 'true' }}"
            >
                <img
                    src="{{ asset($slide['src']) }}"
                    alt="{{ $slide['alt'] }}"
                    class="h-full w-full object-cover"
                    style="object-position: {{ $slide['position'] ?? 'center 45%' }};"
                >
                <div class="absolute inset-0 bg-gradient-to-r from-[#001530]/30 via-transparent to-[#001530]/20"></div>
            </article>
        @endforeach

        <div class="absolute inset-x-0 bottom-4 z-20 flex items-center justify-between px-4">
            <div class="flex items-center gap-2 rounded-full border border-white/20 bg-black/25 px-3 py-2 backdrop-blur-sm">
                @foreach ($slides as $index => $slide)
                    <button
                        type="button"
                        class="h-2.5 w-8 rounded-full transition {{ $index === 0 ? 'bg-yellow-400' : 'bg-white/45' }}"
                        data-image-carousel-indicator
                        data-image-carousel-go="{{ $index }}"
                        aria-label="Ir a imagen {{ $index + 1 }}"
                    ></button>
                @endforeach
            </div>

            <div class="flex items-center gap-2">
                <button
                    type="button"
                    class="flex h-10 w-10 items-center justify-center rounded-full border border-white/35 bg-black/30 text-lg font-bold text-white backdrop-blur-sm transition hover:border-yellow-300 hover:text-yellow-300"
                    data-image-carousel-prev
                    aria-label="Imagen anterior"
                >
                    &lt;
                </button>

                <button
                    type="button"
                    class="flex h-10 w-10 items-center justify-center rounded-full border border-white/35 bg-black/30 text-lg font-bold text-white backdrop-blur-sm transition hover:border-yellow-300 hover:text-yellow-300"
                    data-image-carousel-next
                    aria-label="Imagen siguiente"
                >
                    &gt;
                </button>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const carousel = document.getElementById(@json($carouselId));

            if (!carousel || carousel.dataset.ready === 'true') {
                return;
            }

            carousel.dataset.ready = 'true';

            const slides = Array.from(carousel.querySelectorAll('[data-image-carousel-slide]'));
            const indicators = Array.from(carousel.querySelectorAll('[data-image-carousel-indicator]'));
            const prevButton = carousel.querySelector('[data-image-carousel-prev]');
            const nextButton = carousel.querySelector('[data-image-carousel-next]');
            let currentIndex = 0;

            const renderSlide = (targetIndex) => {
                currentIndex = (targetIndex + slides.length) % slides.length;

                slides.forEach((slide, index) => {
                    const isActive = index === currentIndex;

                    slide.classList.toggle('opacity-100', isActive);
                    slide.classList.toggle('translate-x-0', isActive);
                    slide.classList.toggle('opacity-0', !isActive);
                    slide.classList.toggle('translate-x-6', !isActive);
                    slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
                });

                indicators.forEach((indicator, index) => {
                    const isActive = index === currentIndex;

                    indicator.classList.toggle('bg-yellow-400', isActive);
                    indicator.classList.toggle('bg-white/45', !isActive);
                });
            };

            prevButton?.addEventListener('click', () => renderSlide(currentIndex - 1));
            nextButton?.addEventListener('click', () => renderSlide(currentIndex + 1));

            indicators.forEach((indicator) => {
                indicator.addEventListener('click', () => {
                    renderSlide(Number(indicator.dataset.imageCarouselGo));
                });
            });
        })();
    </script>
@endif

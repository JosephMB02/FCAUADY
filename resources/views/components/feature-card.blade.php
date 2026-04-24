@props([
    'eyebrow' => null,
    'title' => '',
    'text' => '',
    'href' => null,
    'action' => 'Conocer mas',
])

<article class="flex h-full flex-col rounded-[1.75rem] border border-slate-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
    @if ($eyebrow)
        <p class="mb-3 text-xs font-bold uppercase tracking-[0.22em] text-yellow-600">{{ $eyebrow }}</p>
    @endif

    <h3 class="text-xl font-bold text-[#002f6c]">{{ $title }}</h3>
    <p class="mt-4 flex-grow leading-7 text-slate-600">{{ $text }}</p>

    @if ($href)
        <a href="{{ $href }}" class="mt-6 inline-flex items-center text-sm font-bold uppercase tracking-[0.18em] text-[#002f6c] transition hover:text-yellow-700">
            {{ $action }}
        </a>
    @endif
</article>

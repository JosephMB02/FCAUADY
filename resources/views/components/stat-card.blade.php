@props([
    'value' => '',
    'label' => '',
])

<div {{ $attributes->merge(['class' => 'flex min-h-36 flex-col items-center justify-center rounded-[1.5rem] border border-white/10 bg-white/10 p-6 text-center text-white backdrop-blur-sm']) }}>
    <p class="text-2xl font-extrabold leading-tight md:text-3xl">{{ $value }}</p>
    <p class="mt-3 max-w-56 text-sm uppercase leading-6 tracking-[0.12em] text-slate-200">{{ $label }}</p>
</div>

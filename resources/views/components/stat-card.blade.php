@props([
    'value' => '',
    'label' => '',
])

<div class="rounded-[1.5rem] border border-white/10 bg-white/8 p-6 text-white backdrop-blur-sm">
    <p class="text-2xl font-extrabold md:text-3xl">{{ $value }}</p>
    <p class="mt-2 text-sm uppercase tracking-[0.18em] text-slate-200">{{ $label }}</p>
</div>

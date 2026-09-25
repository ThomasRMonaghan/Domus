@php
    $items = [
        ['route' => 'about', 'label' => 'About Us', 'description' => 'Discover how Domus helps households organise everyday chores.', 'icon' => 'M12 16v-4m0-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0'],
        ['route' => 'contact', 'label' => 'Contact Information', 'description' => 'Find out how to get in touch with the Domus team.', 'icon' => 'M3 6l9 6 9-6M5 4h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2'],
        ['route' => 'team', 'label' => 'Meet the Team', 'description' => 'Get to know the people behind Domus.', 'icon' => 'M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2m20 0v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75M13 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0'],
        ['route' => 'pricing', 'label' => 'Pricing', 'description' => 'Learn about plans and pricing for your household.', 'icon' => 'M20 12l-8 8a2 2 0 0 1-3 0l-7-7V3h10l8 7a2 2 0 0 1 0 2ZM7 7h.01'],
    ];
@endphp

<nav aria-label="Main navigation" {{ $attributes->class(['relative shrink-0']) }}>
    <details class="header-menu group/menu">
        <summary class="flex min-h-11 cursor-pointer list-none items-center gap-2 rounded-lg border border-slate-700 bg-slate-900 px-3 text-sm font-medium text-slate-200 transition-colors hover:border-indigo-400/60 hover:bg-slate-800 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-indigo-400 [&::-webkit-details-marker]:hidden">
            <svg aria-hidden="true" class="size-4 text-indigo-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M4 6h16M4 12h16M4 18h16" /></svg>
            Menu
            <svg aria-hidden="true" class="size-3.5 transition-transform group-open/menu:rotate-180 motion-reduce:transition-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6" /></svg>
        </summary>
        <div class="absolute right-0 top-full mt-2 w-64 max-w-[calc(100vw-2rem)] overflow-y-auto max-h-[calc(100dvh-5rem)] rounded-xl border border-slate-700 bg-slate-900 p-2 shadow-xl shadow-black/40">
            <p class="px-3 pb-2 pt-1 text-[10px] font-semibold uppercase tracking-widest text-slate-500">Explore Domus</p>
            @foreach ($items as $item)
                <a href="{{ route($item['route']) }}" @if (request()->routeIs($item['route'])) aria-current="page" @endif aria-describedby="menu-description-{{ $item['route'] }}" class="header-menu-link group/item flex min-h-12 items-start gap-3 rounded-lg px-3 py-3 text-sm text-slate-200 transition duration-150 hover:-translate-y-0.5 hover:bg-slate-800 hover:text-white hover:shadow-md focus-visible:bg-slate-800 focus-visible:outline-2 focus-visible:outline-indigo-400 aria-[current=page]:bg-indigo-500/10 motion-reduce:transform-none motion-reduce:transition-none">
                    <svg aria-hidden="true" class="mt-0.5 size-4 shrink-0 text-indigo-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $item['icon'] }}" /></svg>
                    <span class="min-w-0">
                        <span class="font-medium">{{ $item['label'] }}</span>
                        <span class="header-menu-description" id="menu-description-{{ $item['route'] }}"><span class="block overflow-hidden"><span class="block pt-1.5 text-xs leading-relaxed text-slate-400">{{ $item['description'] }}</span></span></span>
                    </span>
                </a>
            @endforeach
        </div>
    </details>
</nav>

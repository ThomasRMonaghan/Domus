<div class="relative" id="header-nav-container">
    <!-- Menu Trigger Button -->
    <button
        id="header-nav-trigger"
        type="button"
        class="group relative inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-sm font-medium text-slate-300 hover:text-white bg-slate-900/80 hover:bg-slate-800 border border-slate-800 hover:border-slate-700 transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 shadow-sm cursor-pointer select-none"
        aria-expanded="false"
        aria-haspopup="true"
        aria-controls="header-nav-dropdown"
    >
        <!-- Menu Icon -->
        <svg class="w-4 h-4 text-slate-400 group-hover:text-slate-200 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <span>Menu</span>
        <!-- Dropdown Chevron -->
        <svg id="header-nav-chevron" class="w-3.5 h-3.5 text-slate-400 transition-transform duration-200 ease-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div
        id="header-nav-dropdown"
        class="absolute right-0 top-full mt-2 w-64 min-w-[240px] sm:min-w-[260px] max-w-[calc(100vw-2rem)] opacity-0 invisible translate-y-1 scale-95 pointer-events-none transition-all duration-200 ease-out z-50 bg-slate-900/95 backdrop-blur-xl border border-slate-800 rounded-xl shadow-2xl shadow-black/80 ring-1 ring-white/5 p-1.5 space-y-1"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="header-nav-trigger"
    >
        <!-- Option 1: About Us -->
        <div class="relative group" role="none">
            <a
                href="/about"
                role="menuitem"
                class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800/80 border border-transparent hover:border-slate-700/60 transition-all duration-150 text-left"
            >
                <div class="w-8 h-8 rounded-lg bg-indigo-500/10 text-indigo-400 flex items-center justify-center shrink-0 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-150">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <span class="text-sm font-medium text-slate-200 group-hover:text-white transition-colors block truncate">About Us</span>
                </div>
                <svg class="w-3.5 h-3.5 text-slate-500 group-hover:text-slate-300 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <!-- Desktop Floating Popup (Synopsis) -->
            <div class="hidden sm:block absolute right-[calc(100%+0.75rem)] top-1/2 -translate-y-1/2 w-64 pointer-events-none opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-x-2 group-hover:translate-x-0 scale-95 group-hover:scale-100 transition-all duration-200 ease-out z-50">
                <div class="p-3.5 bg-slate-900/95 backdrop-blur-xl border border-slate-700/80 rounded-xl shadow-2xl shadow-black/80 ring-1 ring-white/10 text-left">
                    <div class="flex items-center justify-between gap-2 mb-1.5">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
                            <span class="text-xs font-semibold text-white">About Us</span>
                        </div>
                        <span class="text-[10px] font-mono uppercase tracking-wider text-indigo-400 bg-indigo-500/10 px-1.5 py-0.5 rounded border border-indigo-500/20">Overview</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Our story, mission, and how Domus brings clarity, serenity, and coordination to everyday household chores.
                    </p>
                </div>
                <!-- Arrow pointer -->
                <div class="absolute top-1/2 -right-1.5 -translate-y-1/2 w-3 h-3 bg-slate-900 border-t border-r border-slate-700/80 rotate-45"></div>
            </div>

            <!-- Mobile Inline Synopsis (Expands on hover/focus) -->
            <div class="sm:hidden overflow-hidden transition-all duration-200 max-h-0 opacity-0 group-hover:max-h-24 group-hover:opacity-100 group-focus-within:max-h-24 group-focus-within:opacity-100">
                <div class="pt-1 pb-1.5 px-3 text-[11px] leading-relaxed text-slate-400 bg-slate-950/40 rounded-b-md mx-1 border-t border-slate-800/80">
                    Our story, mission, and how Domus brings clarity and coordination to everyday household chores.
                </div>
            </div>
        </div>

        <!-- Option 2: Contact Information -->
        <div class="relative group" role="none">
            <a
                href="/contact"
                role="menuitem"
                class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800/80 border border-transparent hover:border-slate-700/60 transition-all duration-150 text-left"
            >
                <div class="w-8 h-8 rounded-lg bg-sky-500/10 text-sky-400 flex items-center justify-center shrink-0 group-hover:bg-sky-500 group-hover:text-white transition-colors duration-150">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <span class="text-sm font-medium text-slate-200 group-hover:text-white transition-colors block truncate">Contact Information</span>
                </div>
                <svg class="w-3.5 h-3.5 text-slate-500 group-hover:text-slate-300 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <!-- Desktop Floating Popup (Synopsis) -->
            <div class="hidden sm:block absolute right-[calc(100%+0.75rem)] top-1/2 -translate-y-1/2 w-64 pointer-events-none opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-x-2 group-hover:translate-x-0 scale-95 group-hover:scale-100 transition-all duration-200 ease-out z-50">
                <div class="p-3.5 bg-slate-900/95 backdrop-blur-xl border border-slate-700/80 rounded-xl shadow-2xl shadow-black/80 ring-1 ring-white/10 text-left">
                    <div class="flex items-center justify-between gap-2 mb-1.5">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                            <span class="text-xs font-semibold text-white">Contact Information</span>
                        </div>
                        <span class="text-[10px] font-mono uppercase tracking-wider text-sky-400 bg-sky-500/10 px-1.5 py-0.5 rounded border border-sky-500/20">Support</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Direct communication channels, customer support, and dedicated resolution assistance for your home.
                    </p>
                </div>
                <!-- Arrow pointer -->
                <div class="absolute top-1/2 -right-1.5 -translate-y-1/2 w-3 h-3 bg-slate-900 border-t border-r border-slate-700/80 rotate-45"></div>
            </div>

            <!-- Mobile Inline Synopsis (Expands on hover/focus) -->
            <div class="sm:hidden overflow-hidden transition-all duration-200 max-h-0 opacity-0 group-hover:max-h-24 group-hover:opacity-100 group-focus-within:max-h-24 group-focus-within:opacity-100">
                <div class="pt-1 pb-1.5 px-3 text-[11px] leading-relaxed text-slate-400 bg-slate-950/40 rounded-b-md mx-1 border-t border-slate-800/80">
                    Direct communication channels, customer support, and dedicated resolution assistance for your home.
                </div>
            </div>
        </div>

        <!-- Option 3: Meet the Team -->
        <div class="relative group" role="none">
            <a
                href="/team"
                role="menuitem"
                class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800/80 border border-transparent hover:border-slate-700/60 transition-all duration-150 text-left"
            >
                <div class="w-8 h-8 rounded-lg bg-purple-500/10 text-purple-400 flex items-center justify-center shrink-0 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-150">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <span class="text-sm font-medium text-slate-200 group-hover:text-white transition-colors block truncate">Meet the Team</span>
                </div>
                <svg class="w-3.5 h-3.5 text-slate-500 group-hover:text-slate-300 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <!-- Desktop Floating Popup (Synopsis) -->
            <div class="hidden sm:block absolute right-[calc(100%+0.75rem)] top-1/2 -translate-y-1/2 w-64 pointer-events-none opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-x-2 group-hover:translate-x-0 scale-95 group-hover:scale-100 transition-all duration-200 ease-out z-50">
                <div class="p-3.5 bg-slate-900/95 backdrop-blur-xl border border-slate-700/80 rounded-xl shadow-2xl shadow-black/80 ring-1 ring-white/10 text-left">
                    <div class="flex items-center justify-between gap-2 mb-1.5">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
                            <span class="text-xs font-semibold text-white">Meet the Team</span>
                        </div>
                        <span class="text-[10px] font-mono uppercase tracking-wider text-purple-400 bg-purple-500/10 px-1.5 py-0.5 rounded border border-purple-500/20">People</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Meet the passionate creators, engineers, and designers crafting Domus for modern household living.
                    </p>
                </div>
                <!-- Arrow pointer -->
                <div class="absolute top-1/2 -right-1.5 -translate-y-1/2 w-3 h-3 bg-slate-900 border-t border-r border-slate-700/80 rotate-45"></div>
            </div>

            <!-- Mobile Inline Synopsis (Expands on hover/focus) -->
            <div class="sm:hidden overflow-hidden transition-all duration-200 max-h-0 opacity-0 group-hover:max-h-24 group-hover:opacity-100 group-focus-within:max-h-24 group-focus-within:opacity-100">
                <div class="pt-1 pb-1.5 px-3 text-[11px] leading-relaxed text-slate-400 bg-slate-950/40 rounded-b-md mx-1 border-t border-slate-800/80">
                    Meet the passionate creators, engineers, and designers crafting Domus for modern household living.
                </div>
            </div>
        </div>

        <!-- Option 4: Pricing -->
        <div class="relative group" role="none">
            <a
                href="/pricing"
                role="menuitem"
                class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800/80 border border-transparent hover:border-slate-700/60 transition-all duration-150 text-left"
            >
                <div class="w-8 h-8 rounded-lg bg-emerald-500/10 text-emerald-400 flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-150">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <span class="text-sm font-medium text-slate-200 group-hover:text-white transition-colors block truncate">Pricing</span>
                </div>
                <svg class="w-3.5 h-3.5 text-slate-500 group-hover:text-slate-300 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <!-- Desktop Floating Popup (Synopsis) -->
            <div class="hidden sm:block absolute right-[calc(100%+0.75rem)] top-1/2 -translate-y-1/2 w-64 pointer-events-none opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-x-2 group-hover:translate-x-0 scale-95 group-hover:scale-100 transition-all duration-200 ease-out z-50">
                <div class="p-3.5 bg-slate-900/95 backdrop-blur-xl border border-slate-700/80 rounded-xl shadow-2xl shadow-black/80 ring-1 ring-white/10 text-left">
                    <div class="flex items-center justify-between gap-2 mb-1.5">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <span class="text-xs font-semibold text-white">Pricing</span>
                        </div>
                        <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 bg-emerald-500/10 px-1.5 py-0.5 rounded border border-emerald-500/20">Plans</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Transparent plans tailored for individuals, shared flats, and busy families. Start free today.
                    </p>
                </div>
                <!-- Arrow pointer -->
                <div class="absolute top-1/2 -right-1.5 -translate-y-1/2 w-3 h-3 bg-slate-900 border-t border-r border-slate-700/80 rotate-45"></div>
            </div>

            <!-- Mobile Inline Synopsis (Expands on hover/focus) -->
            <div class="sm:hidden overflow-hidden transition-all duration-200 max-h-0 opacity-0 group-hover:max-h-24 group-hover:opacity-100 group-focus-within:max-h-24 group-focus-within:opacity-100">
                <div class="pt-1 pb-1.5 px-3 text-[11px] leading-relaxed text-slate-400 bg-slate-950/40 rounded-b-md mx-1 border-t border-slate-800/80">
                    Transparent plans tailored for individuals, shared flats, and busy families. Start free today.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        const container = document.getElementById('header-nav-container');
        const trigger = document.getElementById('header-nav-trigger');
        const dropdown = document.getElementById('header-nav-dropdown');
        const chevron = document.getElementById('header-nav-chevron');

        if (!container || !trigger || !dropdown) return;

        let isOpen = false;
        let hoverTimeout = null;

        function openMenu() {
            isOpen = true;
            dropdown.classList.remove('opacity-0', 'invisible', 'translate-y-1', 'scale-95', 'pointer-events-none');
            dropdown.classList.add('opacity-100', 'visible', 'translate-y-0', 'scale-100', 'pointer-events-auto');
            trigger.setAttribute('aria-expanded', 'true');
            trigger.classList.add('border-indigo-500/50', 'ring-2', 'ring-indigo-500/30', 'text-white');
            if (chevron) chevron.classList.add('rotate-180');
        }

        function closeMenu() {
            isOpen = false;
            dropdown.classList.remove('opacity-100', 'visible', 'translate-y-0', 'scale-100', 'pointer-events-auto');
            dropdown.classList.add('opacity-0', 'invisible', 'translate-y-1', 'scale-95', 'pointer-events-none');
            trigger.setAttribute('aria-expanded', 'false');
            trigger.classList.remove('border-indigo-500/50', 'ring-2', 'ring-indigo-500/30', 'text-white');
            if (chevron) chevron.classList.remove('rotate-180');
        }

        function toggleMenu() {
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        }

        trigger.addEventListener('click', function (e) {
            e.stopPropagation();
            toggleMenu();
        });

        // Open on hover for desktop mice with a smooth intent delay
        container.addEventListener('mouseenter', function () {
            clearTimeout(hoverTimeout);
            openMenu();
        });

        container.addEventListener('mouseleave', function () {
            hoverTimeout = setTimeout(function () {
                closeMenu();
            }, 250);
        });

        // Close on outside click
        document.addEventListener('click', function (e) {
            if (!container.contains(e.target)) {
                closeMenu();
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeMenu();
            }
        });
    })();
</script>

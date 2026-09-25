<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ isset($pageTitle) ? $pageTitle.' — Domus' : 'Domus — Ticketing & Resolution Platform' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col font-sans selection:bg-indigo-500 selection:text-white">

  <!-- Navigation Bar -->
  <header class="border-b border-slate-800 bg-slate-900/50 backdrop-blur-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between gap-3">
      <!-- Logo -->
      <a href="{{ route('home') }}" aria-label="Domus home" class="flex items-center gap-3">
        <div class="w-9 h-9 bg-indigo-600 rounded-lg flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/30">
          D
        </div>
        <span class="font-semibold text-lg tracking-tight text-white">Domus</span>
        <span class="hidden sm:inline text-xs bg-slate-800 text-slate-400 px-2 py-0.5 rounded-full border border-slate-700">v1.0</span>
      </a>
      <x-header-menu />
    </div>
  </header>

  <!-- Hero Section -->
  <main class="flex-1 flex flex-col justify-center max-w-4xl mx-auto px-6 py-16 text-center">
    
    @isset($pageTitle)
    <p class="mb-3 text-sm font-medium text-indigo-400">Discover Domus</p>
    <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight">{{ $pageTitle }}</h1>
    <p class="mt-6 text-lg text-slate-400 max-w-2xl mx-auto">{{ $pageDescription }}</p>
    <a href="{{ route('home') }}" class="mt-8 self-center rounded-lg border border-slate-700 px-5 py-3 text-sm text-indigo-300 hover:bg-slate-800 focus-visible:outline-2 focus-visible:outline-indigo-400">Back to home</a>
    @else
    <!-- Main Headline -->
    <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight">
     Household Ticketing System <br class="hidden sm:inline" />
      <span class="bg-linear-to-r from-indigo-400 to-sky-400 bg-clip-text text-transparent">for everyday chores.</span>
    </h1>

    <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto">
      Domus centralizes everyday chores, helping households organise and mantain themselves with clear planning and organisation.
    </p>

    <!-- Quick Action Placeholders -->
    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-4 text-left">
      <x-generic-info />
      <x-use-cases />
    </div>
    @endisset
  </main>

  <!-- Footer -->
  <footer class="border-t border-slate-900 py-6 text-center text-xs text-slate-500">
    Domus Ticketing System &bull; Powered by Laravel
  </footer>

</body>
</html>

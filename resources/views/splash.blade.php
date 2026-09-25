<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domus — Ticketing & Resolution Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col font-sans selection:bg-indigo-500 selection:text-white">

  <!-- Navigation Bar -->
  <header class="border-b border-slate-800 bg-slate-900/50 backdrop-blur-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center space-x-3">
        <div class="w-9 h-9 bg-indigo-600 rounded-lg flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/30">
          D
        </div>
        <span class="font-semibold text-lg tracking-tight text-white">Domus</span>
        <span class="text-xs bg-slate-800 text-slate-400 px-2 py-0.5 rounded-full border border-slate-700">v1.0</span>
      </div>

      <!-- Navigation Dropdown Menu -->
      <x-header-menu />      
    </div>
  </header>

  <!-- Hero Section -->
  <main class="flex-1 flex flex-col justify-center max-w-4xl mx-auto px-6 py-16 text-center">
    
    <!-- Main Headline -->
    <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight">
     Household Ticketing System <br class="hidden sm:inline" />
      <span class="bg-gradient-to-r from-indigo-400 to-sky-400 bg-clip-text text-transparent">for everyday chores.</span>
    </h1>

    <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto">
      Domus centralizes everyday chores, helping households organise and mantain themselves with clear planning and organisation.
    </p>

    <!-- Quick Action Placeholders -->
    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-4 text-left">
      <x-generic-info />
      <x-use-cases />
    </div>
  </main>

  <!-- Footer -->
  <footer class="border-t border-slate-900 py-6 text-center text-xs text-slate-500">
    Domus Ticketing System &bull; Powered by Laravel
  </footer>

</body>
</html>
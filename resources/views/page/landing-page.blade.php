<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUPIA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-grid-dark text-zinc-100 antialiased flex flex-col justify-between">

    {{-- Navbar Atas --}}
    <header class="w-full max-w-7xl mx-auto px-6 md:px-10 py-5 flex items-center justify-between">
        <div class="flex items-center gap-6">
            <a href="#" class="text-2xl font-extrabold tracking-tight text-white">
                RUPIA
            </a>
            <span class="hidden sm:inline-block text-[11px] uppercase tracking-widest text-zinc-500">
                dompet pribadi
            </span>
        </div>

        <nav class="flex items-center gap-6 text-sm text-zinc-300">
            <a href="#about" class="hover:text-white transition">about us</a>
            <a href="#signin"
                class="px-4 py-1.5 rounded-full border border-zinc-700 bg-zinc-900/80 text-white hover:border-zinc-500 transition">
                Sign in
            </a>
        </nav>
    </header>

    {{-- Bagian Tengah (Hero) --}}
    <main class="flex-1 flex flex-col items-center justify-center px-6 py-12 text-center">
        <div class="relative w-full max-w-3xl flex flex-col items-center">

            {{-- Baris Label Kapsul di Atas Huruf --}}
            <div class="flex flex-wrap items-center justify-center gap-3 md:gap-6 mb-3">
                <span
                    class="px-3.5 py-1 rounded-full border border-zinc-700 bg-zinc-900/90 text-[11px] tracking-widest uppercase text-zinc-200">
                    Income
                </span>
                <span
                    class="px-3.5 py-1 rounded-full border border-zinc-700 bg-zinc-900/90 text-[11px] tracking-widest uppercase text-zinc-200">
                    Expenses
                </span>
                <span
                    class="px-3.5 py-1 rounded-full border border-zinc-700 bg-zinc-900/90 text-[11px] tracking-widest uppercase text-zinc-200">
                    Budget
                </span>
            </div>

            {{-- Garis Konektor Sederhana --}}
            <div class="w-2/3 max-w-md h-5 border-t border-x border-zinc-700/80 rounded-t-xl mb-1"></div>

            {{-- Judul Utama RUPIA Berwarna per Huruf --}}
            <h1 class="text-6xl sm:text-8xl md:text-9xl font-extrabold tracking-tight select-none leading-none">
                <span class="text-green-700">R</span><span class="text-green-600">U</span><span
                    class="text-green-500">P</span><span class="text-yellow-400">I</span><span
                    class="text-yellow-300">A</span>
            </h1>

            {{-- Subjudul / Deskripsi --}}
            <p class="mt-8 max-w-md text-sm sm:text-base text-zinc-400 leading-relaxed">
                Catat pemasukan, pantau pengeluaran, dan jaga anggaran tetap rapi.

            </p>
        </div>
    </main>

    {{-- footer kecil dibagian bawah  --}}
    <footer class="pb-8 flex justify-center px-6">
        <div
            class="inline-flex items-center gap-4 px-5 py-2.5 rounded-full border border-zinc-800 bg-zinc-900/80 text-xs text-zinc-400">
            <span class="font-semibold text-purple-300">Rp</span>
            <span class="text-zinc-700">|</span>
            <span class="text-orange-400">↔</span>
            <span class="text-zinc-700">|</span>
            <span class="text-amber-400">▤</span>
        </div>
    </footer>




</body>

</html>

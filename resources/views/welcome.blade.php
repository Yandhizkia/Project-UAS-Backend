<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white">

    <!-- Header -->
    <header class="flex justify-between items-center px-6 py-4 bg-black">
        <img src="{{ asset('IMG/logo-new.png') }}" alt="TiketApaSaja Logo" class="w-32 h-auto">
        <div class="flex items-center space-x-6">
    @auth
        <a href="{{ route('dashboard') }}" class="text-red-500 font-semibold">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="text-red-500 font-semibold">Login/Register</a>
    @endauth
        </div>
    </header>

    <!-- Content -->
    <main class="p-6">
        <h1 class="text-3xl font-bold mb-6">Daftar Tiket Event</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($events as $event)
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold mb-2">{{ $event->nama }}</h2>
                    <p class="text-sm mb-1">Lokasi: {{ $event->lokasi }}</p>
                    <p class="text-sm mb-1">Tanggal: {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</p>
                    <p class="text-sm mb-4">Harga: Rp{{ number_format($event->harga, 0, ',', '.') }}</p>

                </div>
            @empty
                <p class="text-gray-400">Belum ada event tersedia.</p>
                <a href="{{ url('/tiket') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                    Pesan Tiket
                </a>
            @endforelse
        </div>
    </main>

</body>
</html>

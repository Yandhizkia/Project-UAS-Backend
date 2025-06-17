<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white">

    <!-- Header -->
    <header class="flex justify-between items-center px-6 py-4 bg-black">
    <img src="{{ asset('IMG/logo-new.png') }}" alt="TiketApaSaja Logo" class="w-32 h-auto">
        <div class="flex items-center space-x-6">
            <a href="{{ route('login') }}" class="text-red-500 font-semibold">Login/Register</a>
        </div>
    </header>

    <!-- Content -->
    <main class="p-6">
        
    </main>
</body>
</html>

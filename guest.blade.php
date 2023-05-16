<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UpTask</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="  flex justify-between  gap-5 py-5 px-20 bg-blue-700">
        <a href="/" class="text-5xl font-black text-white">UpTask</a>
        <nav class="my-auto flex gap-5">
            <a href="{{ route('login') }}"
                class="text-white font-bold text-xl hover:border-b-2 
                @if (Request::route()->getName() === 'login') border-b-2 @endif">Iniciar
                Sesión</a>
            <a href="{{ route('register') }}"
                class="text-white font-bold text-xl hover:border-b-2
                @if (Request::route()->getName() === 'register') border-b-2 @endif">Crear
                Cuenta</a>
        </nav>
    </header>
    <section class="mt-5 mx-20 flex justify-evenly">
        <div class="w-1/3">
            <img src="" alt="Imagen logo" class="mx-auto">
        </div>
        <div class="my-auto w-1/3">
            {{ $slot }}
        </div>

    </section>
</body>

</html>

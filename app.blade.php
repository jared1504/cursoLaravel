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

    <main class="flex">
        <aside class="w-1/4 p-10 bg-blue-700 min-h-screen">
            <h1 class="text-center text-5xl text-white">Up<span class="font-extrabold">Task</span></h1>
            <nav class="mt-5 flex flex-col gap-5 text-center">
                <a href="{{ route('dashboard') }}"
                    class="text-2xl text-white font-bold hover:bg-white hover:text-blue-800 p-2 rounded-lg
                        @if (Request::route()->getName() === 'dashboard') bg-white text-blue-800 @endif
                        ">Mis
                    Proyectos</a>
                <a href="{{ route('project.create') }}"
                    class="text-2xl text-white font-bold hover:bg-white hover:text-blue-800 p-2 rounded-lg
                        @if (Request::route()->getName() === 'project.create') bg-white text-blue-800 @endif">Nuevo
                    Proyecto</a>

                <a href="{{ route('profile.edit') }}"
                    class="text-2xl text-white font-bold hover:bg-white hover:text-blue-800 p-2 rounded-lg
                        @if (Request::route()->getName() === 'profile.edit') bg-white text-blue-800 @endif">Mi
                    Perfil</a>

                <form action="{{ route('logout') }}" method="POST" class="">
                    @csrf
                    <input class="text-2xl text-white font-bold hover:bg-red-700  p-2 rounded-lg w-full" type="submit"
                        value="Cerrar Sesión">
                </form>
            </nav>
        </aside>
        <div class="w-3/4 p-5">
            {{ $slot }}
        </div>
    </main>
</body>

</html>

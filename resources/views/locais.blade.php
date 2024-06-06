<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="md:bg-gray-300 bg-blue-600">
<div class="max-w-2xl mx-auto p-16 mt-60 bg-blue-600 md:border md:rounded-lg">
    <img src="https://seeklogo.com/images/G/guarapuava-parana-logo-EC6836A3FD-seeklogo.com.png" alt="Logo da sua empresa" class="w-48 h-48 mx-auto mb-8">
    <h2 class="text-black">Selecione o Bairro ou Distrito do qual você deseja ver informações</h2>
    <label for="local" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro ou Distrito:</label>
    <select id="local" name="local" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="" selected>Selecione</option>
        @foreach($locais as $local)
            <option value="{{ $local->id }}">{{ $local->name }}</option>
        @endforeach

    </select>

    <a href="{{ route('entidades', ['local' => $local->id]) }}" class="text-white bg-blue-950 mt-8 hover:bg-blue-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Mostrar Entidades
    </a>

</div>

</body>
</html>

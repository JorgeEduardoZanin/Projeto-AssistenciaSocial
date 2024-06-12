<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Assistência Social</title>

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
    <select id="local" name="local" class="block w-full p-2 mb-6 text-sm text-gray-900 border mt-3 border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="" selected>Selecione</option>
        @foreach($locais as $local)
            <option value="{{ $local->id }}">{{ $local->name }}</option>
        @endforeach
    </select>

    <button id="mostrarEntidadesBtn" class="text-white bg-blue-950 mt-8 hover:bg-blue-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Mostrar informações
    </button>

    <div id="entidadesContainer" class="hidden">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-8" id="entidadesGrid">
            <!-- Aqui serão exibidas as entidades -->
        </div>
    </div>
</div>

<script>
    document.getElementById('mostrarEntidadesBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Evita o comportamento padrão de clicar no botão

        var localId = document.getElementById('local').value; // Obtém o ID do local selecionado

        if (localId !== '') { // Verifica se um local foi selecionado
            // Mostra o container de entidades
            document.getElementById('entidadesContainer').classList.remove('hidden');

            // Redireciona para a página de entidades com o ID do local selecionado
            window.location.href = "{{ route('entidades', ['local' => ':local']) }}".replace(':local', localId);
        } else {
            alert("Por favor, selecione um Bairro ou Distrito.");
        }
    });
</script>

</body>
</html>

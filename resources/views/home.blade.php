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
<body class="md:bg-gray-700 bg-blue-400">
<div class="max-w-2xl mx-auto p-16 mt-60 bg-blue-400 md:border md:rounded-lg">

    <form>
        <h2 class="text-black">Selecione o Bairro ou Distrito do qual voce deseja ver informacoes</h2>
        <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
        <select id="small" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Selecione</option>
            <option value="Alto Cascavel">Alto Cascavel</option>
            <option value="Alto da XV">Alto da XV</option>
            <option value="Área Rural de Guarapuava">Área Rural de Guarapuava</option>
            <option value="Batel">Batel</option>
            <option value="Bonsucesso">Bonsucesso</option>
            <option value="Boqueirão">Boqueirão</option>
            <option value="Cascavel">Cascavel</option>
            <option value="Centro">Centro</option>
            <option value="Cidade dos Lagos">Cidade dos Lagos</option>
            <option value="Conradinho">Conradinho</option>
            <option value="Santana">Santana</option>
            <option value="Entre Rios">Entre Rios</option>
            <option value="Guairacá">Guairacá</option>
            <option value="Palmeirinha">Palmeirinha</option>
        </select>

        <button type="submit"
                class="text-white bg-blue-700  mt-8 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
        </button>
    </form>
</div>
</body>
</html>

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
<body class="bg-gray-700">
<div class="max-w-2xl mx-auto p-16 mt-8 bg-blue-950 border rounded-lg">

    <form>
        <div class="grid gap-6 mb-6 lg:grid-cols-2 mt-9">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Nome da
                    Entidade</label>
                <input type="text" id="first_name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Nome" required>
            </div>
            <div>
                <label for="last_name"
                       class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Endereço</label>
                <input type="text" id="last_name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Endereço" required>
            </div>
            <div>
                <label for="company" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Horario de
                    Funcionamento</label>
                <input type="text" id="company"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Hora" required>
            </div>
            <div>
                <label for="phone"
                       class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Telefone</label>
                <input type="tel" id="phone"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="99-9999-9999" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
            </div>
            <div>
                <label for="website"
                       class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Descrição</label>
                <input type="" id="website"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[542px] p-8 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Descrição" required>
            </div>
        </div>
        <div>
            <label for="dropzone-file"
                   class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                </svg>

                <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">Logo da Entidade</h2>

                <p class="mt-2 text-gray-500 tracking-wide">Upload or darg & drop your file SVG, PNG, JPG or GIF. </p>

                <input id="dropzone-file" type="file" class="hidden"/>
        </div>
        <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small select</label>
        <select id="small" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Selecione o bairro ou distrito a qual essa entidade pertence</option>
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

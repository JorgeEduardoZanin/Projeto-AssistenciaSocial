<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-700">
<div class="border-t-gray-600 from-blue-50 to-violet-50 flex items-center justify-center lg:h-screen mt-72">
    <div class="container mx-auto  p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            @foreach($noticias as $noticia)
                <div class="bg-white rounded-lg border p-4">
                    <img src="{{ $noticia->photo }}" alt="Imagem da Notícia"
                         class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl text-black mb-2">{{ $noticia->title }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $noticia->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>

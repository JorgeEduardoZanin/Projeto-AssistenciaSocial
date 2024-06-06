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
<div class="from-blue-50 to-violet-50 flex items-center justify-center mt-72 lg:h-screen">
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            @foreach($entidades as $entidade)
                <div class="bg-white rounded-lg border p-4">
                    <img src="" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl text-black mb-2">{{ $entidade->name }}</div>
                        <div class="font-semibold flex-col text-base text-gray-500 mb-2">{{ $entidade->phone }}</div>
                        <div class="font-semibold flex-col text-base text-gray-500 mb-2">{{ $entidade->address }}</div>
                        <div class="font-semibold flex-col text-base text-gray-500 mb-2">{{ $entidade->hour }}</div>
                        <p class="text-gray-700 text-base">{{ $entidade->description }}</p>
                    </div>
                    <div class="px-1 py-4">
                        <a href="{{ route('noticias', ['entidade' => $entidade->id]) }}" class="text-blue-500 hover:underline">Ver noticias sobre {{ $entidade->name }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>

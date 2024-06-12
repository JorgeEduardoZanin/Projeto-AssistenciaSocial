<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Assistência Social</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="from-blue-50 bg-gray-700 to-violet-50 flex items-center justify-center lg:h-screen">

<div class="container mx-auto p-4">
    @forelse($noticias as $noticia)
    <h1 class="w-full text-center text-3xl font-semibold text-gray-100 mt-4">Notícias</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4 mt-4">
            <div class="bg-white rounded-lg border p-4 w-full max-w-lg mx-auto">
                <img src="/images/{{ $noticia->image }}" alt="Imagem da Notícia" class="w-full h-48 rounded-md object-cover">
                <div class="px-1 py-4">
                    <div class="font-bold text-xl text-black mb-2">{{ $noticia->title }}</div>
                    <p class="text-gray-700 text-base">{{ $noticia->description }}</p>
                </div>
            </div>
        @empty
            <div class="flex items-center justify-center bg-gray-700 w-full col-span-full">
                <div class="rounded-lg bg-gray-700 px-16 py-14">
                    <div class="flex justify-center">
                        <div class="rounded-full bg-red-200 p-6">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-red-500 p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     strokeWidth="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path strokeLinecap="round" strokeLinejoin="round"
                                          d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.25-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="my-4 text-center text-3xl font-semibold text-white">Foi mal</h3>
                    <p class="w-[230px] text-center font-normal text-white">Parece que ainda não temos notícias
                        adicionadas :(</p>
                </div>
            </div>
        @endforelse
    </div>
    <div class="mt-4">
        {{ $noticias->links() }}
    </div>
</div>

</body>
</html>

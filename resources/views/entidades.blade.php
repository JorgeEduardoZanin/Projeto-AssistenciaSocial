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
<div class="from-blue-50 to-violet-50 flex items-center justify-center lg:h-screen">
    <div class="container mx-auto  p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg border p-4">
                <img src="https://imbuia.sc.gov.br/uploads/sites/391/2021/12/3130314-800x445.jpg" alt="Placeholder Image"
                     class="w-full h-48 rounded-md object-cover">
                <div class="px-1 py-4">
                    <div class="font-bold text-xl text-black mb-2">Cras I</div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">(42) 9-8429-2901</div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">Rua Capitão Frederico Virmond, 2021 - Centro, Guarapuava - PR, 85010-120 </div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">Das 8:00 as 11:30 e das 13:00 as 17:00 de segunda a sexta</div>
                    <p class="text-gray-700 text-base">
                        O Centro de Referência de Assistência Social (CRAS) é uma unidade pública que oferece serviços
                        de proteção social básica às famílias em situação de vulnerabilidade, promovendo o
                        fortalecimento de vínculos comunitários e acesso a direitos sociais. É a porta de entrada para o
                        Sistema Único de Assistência Social (SUAS) no Brasil,
                        proporcionando orientação e apoio socioassistencial.
                    </p>
                </div>
                <div class="px-1 py-4">
                    <a href="#" class="text-blue-500 hover:underline">Ver noticias sobre</a>
                </div>
            </div>
            <div class="bg-white rounded-lg border p-4">
                <img src="https://imbuia.sc.gov.br/uploads/sites/391/2021/12/3130314-800x445.jpg" alt="Placeholder Image"
                     class="w-full h-48 rounded-md object-cover">
                <div class="px-1 py-4">
                    <div class="font-bold text-xl text-black mb-2">Cras I</div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">(42) 9-8429-2901</div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">Rua Capitão Frederico Virmond, 2021 - Centro, Guarapuava - PR, 85010-120 </div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">Das 8:00 as 11:30 e das 13:00 as 17:00 de segunda a sexta</div>
                    <p class="text-gray-700 text-base">
                        O Centro de Referência de Assistência Social (CRAS) é uma unidade pública que oferece serviços
                        de proteção social básica às famílias em situação de vulnerabilidade, promovendo o
                        fortalecimento de vínculos comunitários e acesso a direitos sociais. É a porta de entrada para o
                        Sistema Único de Assistência Social (SUAS) no Brasil,
                        proporcionando orientação e apoio socioassistencial.
                    </p>
                </div>
                <div class="px-1 py-4">
                    <a href="#" class="text-blue-500 hover:underline">Ver noticias sobre</a>
                </div>
            </div>
            <div class="bg-white rounded-lg border p-4">
                <img src="https://imbuia.sc.gov.br/uploads/sites/391/2021/12/3130314-800x445.jpg" alt="Placeholder Image"
                     class="w-full h-48 rounded-md object-cover">
                <div class="px-1 py-4">
                    <div class="font-bold text-xl text-black mb-2">Conselho Tutelar</div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">(42) 9-8429-2901</div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">Rua Capitão Frederico Virmond, 2021 - Centro, Guarapuava - PR, 85010-120 </div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">Das 8:00 as 11:30 e das 13:00 as 17:00 de segunda a sexta</div>
                    <p class="text-gray-700 text-base">
                        O Centro de Referência de Assistência Social (CRAS) é uma unidade pública que oferece serviços
                        de proteção social básica às famílias em situação de vulnerabilidade, promovendo o
                        fortalecimento de vínculos comunitários e acesso a direitos sociais. É a porta de entrada para o
                        Sistema Único de Assistência Social (SUAS) no Brasil,
                        proporcionando orientação e apoio socioassistencial.
                    </p>
                </div>
                <div class="px-1 py-4">
                    <a href="#" class="text-blue-500 hover:underline">Ver noticias sobre</a>
                </div>
            </div>
            <div class="bg-white rounded-lg border p-4">
                <img
                    src="data:image/png;base64,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"
                    alt="Placeholder Image"
                    class="w-full h-48 rounded-md object-cover">
                <div class="px-1 py-4">
                    <div class="font-bold flex-col text-xl text-black mb-2">Cras I</div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">(42) 9-8429-2901</div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">Rua Capitão Frederico Virmond, 2021 - Centro, Guarapuava - PR, 85010-120 </div>
                    <div class="font-semibold flex-col text-base text-gray-500 mb-2">Das 8:00 as 11:30 e das 13:00 as 17:00 de segunda a sexta</div>
                    <p class="text-gray-700 text-base">
                        O Centro de Referência de Assistência Social (CRAS) é uma unidade pública que oferece serviços
                        de proteção social básica às famílias em situação de vulnerabilidade, promovendo o
                        fortalecimento de vínculos comunitários e acesso a direitos sociais. É a porta de entrada para o
                        Sistema Único de Assistência Social (SUAS) no Brasil,
                        proporcionando orientação e apoio socioassistencial.
                    </p>
                </div>
                <div class="px-1 py-4">
                    <a href="#" class="text-blue-500 hover:underline">Ver noticias sobre</a>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>

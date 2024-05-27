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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <div class="flex flex-col justify-center mt-16 mx-8 mb-8">
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-center gap-8">
                <h2 class=" font-bold">Todas as Entidades</h2>

                <!-- Seções de filtro e busca -->

                <a href="{{ route('entidade.store') }}">
                    <div class="flex justify-end py-1 px-3 rounded items-center gap-2 text-white font-bold bg-[#1AB65C]">
                        <!-- Ícone de adicionar nova entidade -->
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Ícone de adicionar -->
                        </svg>
                        <button>Nova Entidade</button>
                    </div>
                </a>
            </div>
        </div>

        <!-- Tabela de entidades -->
        <div class="relative overflow-x-auto mb-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome da Entidade
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Endereço
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Telefone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descrição
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Horário de Atendimento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Local
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ação
                    </th>
                </tr>
                </thead>
                <tbody class="text-xs text-gray-700 bg-white dark:bg-gray-800 dark:text-gray-400">
{{--                @foreach($entidades as $entidade)--}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
{{--                            {{ $entidade->name }}--}}
                        </th>
                        <td class="px-6 py-4">
{{--                            {{ $entidade->address }}--}}
                        </td>
                        <td class="px-6 py-4">
{{--                            {{ $entidade->phone }}--}}
                        </td>
                        <td class="px-6 py-4">
{{--                            {{ $entidade->description }}--}}
                        </td>
                        <td class="px-6 py-4">
{{--                            {{ $entidade->hour }}--}}
                        </td>
                        <td class="px-6 py-4">
{{--                            {{ $entidade->local->nome }}--}}
                        </td>
                        <td class="px-6 py-4 flex gap-2 justify-center items-center">
                        <td class="px-6 py-4 flex gap-2 justify-center items-center">
                            <!-- Botão para editar -->
                            <a href="" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-600">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 1.842L15.074 5.386L22 2.5V11H20V5.5L16 7.167V11H14V7.074L10 4.741V16.926L11.868 18.016L10.86 19.743L8.926 18.614L2 21.5V5.926L9 1.842ZM8 16.833V4.741L4 7.074V18.5L8 16.833ZM19.787 12.086L23.914 16.213L16.628 23.5H12.5L12.499 19.372L19.787 12.086ZM18.865 15.836L20.164 17.136L21.086 16.213L19.786 14.914L18.865 15.836ZM18.75 18.549L17.45 17.25L14.5 20.2V21.5H15.8L18.75 18.549Z"
                                        fill="#00B087"/>
                                </svg>
                            </a>

                            <!-- Formulário para excluir -->
                            <form action="" method="post">
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
                                <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 18C2.45 18 1.97933 17.8043 1.588 17.413C1.19667 17.0217 1.00067 16.5507 1 16V3H0V1H5V0H11V1H16V3H15V16C15 16.55 14.8043 17.021 14.413 17.413C14.0217 17.805 13.5507 18.0007 13 18H3ZM13 3H3V16H13V3ZM5 14H7V5H5V14ZM9 14H11V5H9V14Z"
                                            fill="#DF0404"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                        </td>
                    </tr>
{{--                @endforeach--}}
                </tbody>
            </table>
        </div>
{{--        {{ $entidades->links() }}--}}
    </div>

</html>

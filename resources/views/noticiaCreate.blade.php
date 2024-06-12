<x-app-layout>
    <div class="max-w-2xl mx-auto p-16 mt-8 bg-gray-700 border rounded-lg">
        <form action="{{ route('noticia.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6 mb-6 mt-9">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Nome da
                        Notícia</label>
                    <input type="text" id="title" name="title"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Nome Noticia" required>
                </div>
                <div class="lg:w-[542px]">
                    <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Descrição</label>
                    <textarea id="description" name="description"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 h-40 resize-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Descrição" required></textarea>
                </div>
            </div>
            <div>
                <label for="image"
                       class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                    </svg>
                    <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">Foto da Notícia</h2>
                    <p class="mt-2 text-gray-500 tracking-wide">Upload or darg & drop your file SVG, PNG, JPG or
                        GIF. </p>
                    <input id="image" type="file" name="image" class="hidden"/>
            </div>
            <div>
                <label for="entidade_id" class="block mb-2 text-sm font-medium text-gray-700 mt-7">Entidade</label>
                <select id="entidade_id" name="entidade_id" class="block w-full p-2 border border-gray-300 rounded-lg">
                    <option value="">Selecione a entidade</option>
                    @foreach($entidades as $entidade)
                        <option value="{{ $entidade->id }}">{{ $entidade->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                    class="text-white bg-blue-700 mt-8 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Enviar
            </button>
        </form>
    </div>
</x-app-layout>


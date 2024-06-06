<x-app-layout>
    <div class="flex justify-center">
            <div class="card-header text-2xl">Editar Entidade</div>
            <div class="card-body">
                <form action="{{ route('entidades.update', $entidade->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6 mb-6 lg:grid-cols-2 mt-9">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Nome da Entidade</label>
                            <input type="text" id="name" name="name" value="{{ old('name', $entidade->name) }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Nome" required>
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Endereço</label>
                            <input type="text" id="address" name="address" value="{{ old('address', $entidade->address) }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Endereço" required>
                        </div>
                        <div>
                            <label for="hour" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Horário de Funcionamento</label>
                            <input type="text" id="hour" name="hour" value="{{ old('hour', $entidade->hour) }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Hora" required>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Telefone</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone', $entidade->phone) }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="99-9999-9999">
                        </div>
                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Descrição</label>
                            <input type="text" id="description" name="description" value="{{ old('description', $entidade->description) }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-[542px] block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Descrição" required>
                        </div>
                    </div>
                    <div>
                        <label for="image"
                               class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                            </svg>

                            <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">Foto da Entidade</h2>

                            <p class="mt-2 text-gray-500 tracking-wide">Upload or drag & drop your file SVG, PNG, JPG or GIF.</p>

                            <input id="image" type="file" name="image" class="hidden"/>
                        </label>
                    </div>
                    <div>
                        <label for="local_id" class="block mb-2 text-sm font-medium text-gray-700">Local</label>
                        <select id="local_id" name="local_id" class="block w-full p-2 border border-gray-300 rounded-lg">
                            <option value="">Selecione o local</option>
                            @foreach($locais as $local)
                                <option value="{{ $local->id }}">{{ $local->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit"
                            class="text-white bg-blue-700  mt-8 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Salvar Alterações
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>

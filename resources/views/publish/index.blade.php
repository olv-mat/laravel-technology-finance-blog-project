<x-layout>
    <main class="flex flex-col flex-grow mt-20 container mx-auto px-4 min-h-screen">
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 mb-4 rounded">
                <ul class="mt-1 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li class="flex items-center">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="mb-8 flex-grow">
            <h2 class="text-3xl font-bold mb-4">Nova Publicação</h2>
            <form method="post" class="bg-white p-6 rounded-lg shadow-md" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-lg font-semibold mb-2">Título</label>
                    <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="caption" class="block text-lg font-semibold mb-2">Legenda</label>
                    <input type="text" id="caption" name="caption" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="cover" class="block text-lg font-semibold mb-2">Capa</label>
                    <label for="cover" class="cursor-pointer flex items-center justify-center w-full h-40 border-2 border-dashed border-gray-300 rounded-lg bg-gray-100 hover:bg-gray-200 transition">
                        <span class="text-gray-600">Clique para selecionar uma imagem</span>
                        <input type="file" id="cover" name="cover" class="hidden" required>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-lg font-semibold mb-2">Conteúdo</label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content" class="border border-gray-300 rounded-md"></trix-editor>
                </div>
                <div class="mt-4">
                    <button type="submit" class="w-full bg-black text-white py-2 rounded-md font-semibold">Publicar</button>
                </div>
            </form>
        </section>
    </main>
</x-layout>
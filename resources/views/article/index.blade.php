<x-layout>
    <main class="mt-20 container mx-auto px-4">
        <section class="mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="{{ asset($article->cover) }}" alt="Cover" class="w-full h-96 object-cover rounded-md mb-6">
                <h2 class="text-4xl font-bold mb-4">{{ $article->title }}</h2>
                <p class="text-gray-700 mb-4">Publicado {{ $article->created_at->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i') }} | Tech & Finanças</p>
                <div>
                    {!! $article->content !!}
                </div>
                <div class="mt-6">
                    <h3 class="text-2xl font-semibold mb-4">Compartilhe este artigo</h3>
                    <div class="flex flex-wrap gap-2 md:flex-nowrap md:space-x-4">
                        <a href="#" target="_blank" class="bg-blue-600 text-white px-4 py-2 rounded-md text-center w-full md:w-auto">Facebook</a>
                        <a href="#" target="_blank" class="bg-black text-white px-4 py-2 rounded-md text-center w-full md:w-auto">X</a>
                        <a href="#" target="_blank" class="bg-blue-800 text-white px-4 py-2 rounded-md text-center w-full md:w-auto">LinkedIn</a>
                        <a href="#" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded-md text-center w-full md:w-auto">WhatsApp</a>
                    </div>
                </div>
                <a href="{{ route('blog.index') }}" class="text-blue-700 font-bold mt-6 inline-block">Voltar</a>
            </div>
        </section>
        <section class="bg-white p-6 rounded-lg shadow-md mt-8">
            <h3 class="text-3xl font-semibold mb-4">Deixe seu comentário</h3>
            <form action="#" method="post" class="space-y-4">
                <div>
                    <label for="comment" class="block text-gray-700 font-medium">Seu comentário</label>
                    <textarea id="comment" name="comment" rows="4" class="w-full p-3 border border-gray-300 rounded-md" required></textarea>
                </div>
                <button type="submit" class="bg-blue-900 text-white py-2 px-4 rounded-md hover:bg-blue-700">Comentar</button>
            </form>
            <div class="mt-6">
                <h4 class="text-2xl font-semibold mb-4">Comentários Recentes</h4>
                <div class="space-y-4">
                    <div class="border-b pb-4">
                        <p class="font-semibold text-gray-800">João Silva</p>
                        <p class="text-gray-600">Muito interessante! A IA está realmente mudando o mercado financeiro de formas que nunca imaginamos.</p>
                    </div>
                    <div class="border-b pb-4">
                        <p class="font-semibold text-gray-800">Maria Oliveira</p>
                        <p class="text-gray-600">Eu acredito que os robo-advisors vão se tornar mais acessíveis para o público em geral, tornando os investimentos mais fáceis.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
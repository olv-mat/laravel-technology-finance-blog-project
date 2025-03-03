<x-layout>
    <main class="mt-20 container mx-auto px-4">
        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4">Destaque</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="{{ asset($featuredArticle->cover) }}" alt="{{ $featuredArticle->title }}" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">{{ $featuredArticle->title }}</h3>
                <p class="text-gray-700">{{ $featuredArticle->caption }}</p>
                <a href="{{ route('article.show', $featuredArticle->slug) }}" class="text-blue-700 font-bold mt-2 inline-block">Leia mais →</a>
            </div>
        </section>
        <section>
            <h2 class="text-3xl font-bold mb-4">Últimos Artigos</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($articles as $article)
                    @if ($article->id != $featuredArticle->id)
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <img src="{{ asset($article->cover) }}" alt="{{ $article->title }}" class="w-full h-32 object-cover rounded-md mb-4">
                            <h3 class="text-lg font-bold">{{ $article->title }}</h3>
                            <p class="text-gray-700">{{ $article->caption }}</p>
                            <a href="{{ route('article.show', $article->slug) }}" class="text-blue-700 font-bold mt-2 inline-block">Leia mais →</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </main>
</x-layout>
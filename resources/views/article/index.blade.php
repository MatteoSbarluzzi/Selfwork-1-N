<x-layout>

<header class="header">
    <div class="container h-100">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center">I miei articoli</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row my-5">
        @foreach($articles as $article)
            <div class="col-12 col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-subtitle">{{ $article->subtitle }}</p>
                        <p class="card-text">{{ $article->body }}</p>
                        <a href="{{ route('article.show', $article) }}" class="btn btn-outline-primary w-100 mt-2">🔍 Vedi dettaglio</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</x-layout>

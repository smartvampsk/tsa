@extends('layouts.app')
@section('title', 'Task One')

@section('content')
    <section class="pb-5">
        <h3 class="text--primary">Articles</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($articles as $article)
                <div class="col">
                    <a href="{{ route('article-detail', $article->id) }}">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/'.$article->image) }}"
                                         class="card-img-top article-card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ \Str::limit($article->title, 100) }}</h5>
                                        <p class="card-text mb-0">
                                            <small class="text-muted">Last updated
                                                {{ $article->updated_at->diffForHumans() }}
                                            </small>
                                        </p>
                                        <p class="text-muted mb-0 small">By: {{ $article->user->name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $articles->links() }}
        </div>
    </section>
@endsection

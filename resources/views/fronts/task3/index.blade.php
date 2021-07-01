@extends('layouts.app')
@section('title', 'Task Three')

@section('content')
    <section class="pb-5">
        <div class="accordion mb-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button text--primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Articles having one or more comments
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row sm:justify-between">
                            <div class="col-md-7">
                                <table class="table table-sm">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Comments Count</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($articlesWithComment as $key => $article)
                                        <tr>
                                            <th scope="row"> {{ ++$key }}</th>
                                            <td>
                                                <a href="{{ route('article-detail', $article->id) }}">{{ \Str::limit($article->title, 60) }}</a>
                                            </td>
                                            <td class="text-center">{{ $article->comments->count() }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <b>Total Articles: </b> {{ $totalArticles }}
                                        <br>
                                        <b>Articles with comments: </b> {{ $articlesWithComment->count() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="text--primary">All Articles</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($articles as $article)
                <div class="col">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/'.$article->image) }}"
                                     class="card-img-top article-card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="{{ route('article-detail', $article->id) }}">
                                        <h5 class="card-title">{{ \Str::limit($article->title, 100) }}</h5>
                                    </a>
                                    <p class="card-text mb-0">
                                        <small class="text-muted">Last updated
                                            {{ $article->updated_at->diffForHumans() }}
                                        </small>
                                    </p>
                                    <p class="text-muted mb-0 small">
                                        <span>By: {{ $article->user->name }}</span>
                                        <span class="float-end"><i class="fas fa fa-comment pe-1"></i> {{ $article->comments->count() }} </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $articles->links() }}
        </div>
    </section>
@endsection


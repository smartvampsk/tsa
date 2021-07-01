@extends('layouts.app')
@section('title', 'Task Three')

@section('content')
    <section class="pb-4">
        <div class="row justify-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bolder">{{ $article->title }}</h5>
                        <p class="mb-0 small text-muted">"{{ $article->sub_title }}"</p>
                    </div>
                    <img src="{{ asset('images/'.$article->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        {!! \Str::limit($article->content, 500) !!}
                    </div>
                    <div class="card-footer d-flex justify-content-between items-center">
                        <div class="text-muted">
                            By: <a href="">{{ $article->user->name }}</a>
                        </div>
                        <div class="text-muted">
                            <span class="pe-4"><i class="fas fa fa-comment pe-1"></i> {{ $comments->count() }}</span>
                            Last updated: {{ $article->updated_at->diffForHumans() }}
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header"><i class="fas fa fa-comment pe-2"></i>Comments</div>
                    <div class="">
                        @if($article->comments->count() < 1)
                            <p class="p-4 mb-0">No Comments yet</p>
                        @endif
                        @foreach($article->comments as $comment)
                            <div class="px-4 pt-4 border-bottom">
                                <div class="d-flex items-center">
                                    <p class="mb-0"><i
                                            class="fas fa fa-user-circle pe-2"></i> {{ $comment->user->name }}</p>
                                    <p class="mb-0 small ps-5">
                                        <i class="fas fa fa-clock pe-2"></i>
                                        {{ $comment->created_at->diffForHumans() }}
                                    </p>
                                </div>

                                <div class="mt-1">
                                    <p class="mb-0">{{ $comment->comment }}</p>
                                    <p class="text-muted small">Commentator Detail: {{ $comment->user }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa fa-book-open pe-2"></i>Article array by Author
                        <span class="text-muted">({{$article->user->name}})</span>
                    </div>
                    <div class="card-body">
                        {{ $articlesByAuthor }}
                    </div>
                </div>

                <h4 class="bg-light py-2 px-3 rounded">Latest Articles</h4>
                <ul class="list-group">
                    @foreach($articles as $article)
                        <a href="{{ route('article-detail', $article->id) }}"
                           class="list-group-item list-group-item-action">
                            <div class="row items-center">
                                <div class="col-3">
                                    <img src="{{ asset('images/'.$article->image) }}" class="img-fluid"
                                         alt="{{ $article->image }}">
                                </div>
                                <div class="col">
                                    <p class="mb-0 h6">{{ \Str::limit($article->title, 60) }}</p>
                                    <p class="mb-0 text-muted small">
                                        Last updated
                                        {{ $article->updated_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
@endsection

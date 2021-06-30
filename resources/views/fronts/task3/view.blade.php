@extends('layouts.app')
@section('title', 'Task One')

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
                        {!! $article->content !!}
                    </div>
                    <div class="card-footer d-flex justify-content-between items-center">
                        <div class="text-muted">
                            By: <a href="">{{ $article->user->name }}</a>
                        </div>
                        <div class="text-muted">
                            <span class="pe-4"><i class="fas fa fa-comment pe-1"></i> 1</span>
                            Last updated: {{ $article->updated_at->diffForHumans() }}
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header"><i class="fas fa fa-comment pe-2"></i>Comments</div>
                    <div class="card-body"></div>
                </div>
            </div>

            <div class="col-4">
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

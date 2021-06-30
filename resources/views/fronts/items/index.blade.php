@extends('layouts.app')
@section('title', 'Task One')

@section('content')
    <section class="">
        <h3 class="text--primary">Items</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($items as $item)
                <div class="col">
                    <a href="{{ route('item-detail', $item->id) }}">
                        <div class="card h-100">
                            <img src="{{ asset('images/'.$item->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card-title mb-0 fs-18">{{ $item->name }}</div>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted mb-0">Rs {{$item->price }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection

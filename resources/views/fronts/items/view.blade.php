@extends('layouts.app')
@section('title', 'Task One')

@section('content')
    <section class="pb-4">
        <div class="row justify-center">
            <div class="col-6">
                @include('partials.message')
                <div class="card">
                    <img src="{{ asset('images/'.$item->image) }}" class="card-img-top" alt="...">
                    <h5 class="card-header">
                        {{ $item->name }}
                    </h5>
                    <div class="card-body">
                        {!! $item->description !!}
                    </div>
                    <div class="card-footer d-flex justify-content-between items-center">
                        <div class="text-muted">
                            Price: Rs. {{$item->price}}
                        </div>
                        <div class="">
                            <a href="{{ route('add-to-cart', $item->id) }}" id="buy-buttonn"
                               class="btn btn-sm btn-danger">
                                <i class="fas fa fa-shopping-cart pr-2"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <h4 class="bg-light py-2 px-3 rounded">Latest Items</h4>
                <ul class="list-group">
                    @foreach($items as $item)
                        <a href="{{ route('item-detail', $item->id) }}" class="list-group-item list-group-item-action">
                            <div class="row items-center">
                                <div class="col-3">
                                    <img src="{{ asset('images/'.$item->image) }}" class="img-fluid"
                                         alt="{{ $item->image }}">
                                </div>
                                <div class="col">
                                    <p class="mb-0 h6">{{$item->name}}</p>
                                    <p class="mb-0 text--primary">Price: Rs. {{$item->price}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')
@section('title', 'Task One')

@section('content')
    <section>
        <h3 class="text--primary">My Cart</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody>
                <?php $grand_total = 0; ?>
                @empty($items)
                    <tr>
                        <td colspan="6" class="">No items added to cart!</td>
                    </tr>
                @else
                    @php($sn = 1)
                    @foreach($items as $item)
                        <?php
                        $total = $item['quantity'] * $item['price'];
                        $grand_total += $total;
                        ?>
                        <tr>
                            <th scope="row">{{ $sn++ }}</th>
                            <td>
                                <img src="{{ asset('images/'.$item['image']) }}" class="img-fluid" style="height: 50px"
                                     alt="">
                            </td>
                            <td>{{ $item['name']}}</td>
                            <td>{{ $item['quantity']}}</td>
                            <td>Rs. {{ $item['price']}}</td>
                            <td>Rs. {{ $total }}</td>
                        </tr>
                    @endforeach
                @endempty
                </tbody>
            </table>
        </div>
        <div class="d-flex items-center justify-content-between">
            <div>
                <strong>Grand Total: Rs {{ $grand_total }}</strong>
            </div>
            <div class="text-end">
                <a href="{{ route('empty-cart') }}" class="btn btn-warning">Empty cart</a>
                <a href="" id="proceed" class="btn btn-primary">Proceed</a>
            </div>
        </div>
    </section>
@endsection

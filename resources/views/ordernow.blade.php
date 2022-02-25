@extends('master')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-10">
                <div class="trending_wrpper">
                    <h2>Orders List</h2>
                    @foreach ($myorder as $item)
                        <div class="row search_item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">
                                    <img class="trending_img" src="{{ $item->gallery }}">
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <div class="">
                                    <h2>{{ $item->name }}</h2>
                                    <p>Order Status:-{{ $item->status }}</p>
                                    <p>Payment Status:-{{ $item->payment_status }}</p>
                                    <p>Payment Method:-{{ $item->payment_method }}</p>
                                    <p>Order Address:-{{ $item->address }}</p>
                                    <p>Price:-{{ $item->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

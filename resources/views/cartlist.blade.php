@extends('master')
@section('content')
    <div class="custom-product">
        <div class="row">

            <div class="col-10">
                <div class="trending_wrpper">
                    <h2>Your Cart List</h2>
                    @foreach ($cartdata as $item)
                        <div class="row search_item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">
                                    <img class="trending_img" src="{{ $item->gallery }}">
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <div class="">
                                    <h2>{{ $item->name }}</h2>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                            <div class="col-sm-3"> 
                                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Romove From Cart</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('master')
@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ $detail['gallery'] }}" alt="" class="detail_img">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Home</a>
                <h2>Name : {{ $detail['name'] }}</h2>
                <h3>Price : {{ $detail['price'] }}</h3>
                <h5>Category : {{ $detail['category'] }}</h5>
                <h5>Description : {{ $detail['description'] }}</h5>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    <input type="hidden" name="product_id" value="{{$detail['id']}}">
                    @csrf
                    <button class="btn btn-success">Add to Cart</button>
                </form>
                <br><br>
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>

    </div>
@endsection

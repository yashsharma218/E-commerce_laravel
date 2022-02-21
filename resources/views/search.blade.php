@extends('master')
@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-4">
                <a href="">Filter</a>
            </div>
            <div class="col-4">
                <div class="trending_wrpper">
                    <h4>Result for Products</h4>
                    @foreach ($search as $item)
                        <div class="search_item">
                            <a href="detail/{{ $item['id'] }}">
                                <img class="trending_img" src="{{ $item['gallery'] }}">
                                <div class="">
                                    <h2>{{ $item['name'] }}</h2>
                                    <p>{{ $item['description'] }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

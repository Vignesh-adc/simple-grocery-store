@extends('layouts.app')

@section('title', 'Grocery Store | Home')

@section('content')
    <div class="product-grid">
        @foreach($products as $product)
            <div class="product-card">
                <h2>{{ $product->name }}</h2>
                <p>Price: ${{ $product->price }}</p>
                <a href="{{ route('product.show', $product->id) }}">Buy Now</a>
            </div>
        @endforeach
    </div>
@endsection

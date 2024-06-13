@extends('layouts.app')

@section('title', 'Payment Success | Grocery Store')

@section('content')
    <div class="success-container">
        <div class="success-card">
            <h2>{{ $product->name }}</h2>
            <p>Price: ${{ $product->price }}</p>
            <p class="green_text">Thank you for your purchase!</p>
            <a href="{{ url('/') }}" class="btn btn-success">Back to Products</a>
        </div>
    </div>
@endsection

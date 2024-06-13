@extends('layouts.app')

@section('title', $product->name.' | Grocery Store')

@section('content')
    <div class="product-details-container">
        <h1>{{ $product->name }}</h1>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p>{!! nl2br(e($product->description)) !!}</p>

        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        <form id="payment-form" action="{{ route('product.buy', $product->id) }}" method="POST">
            @csrf
            <div id="card-element" class="StripeElement">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>

            <button id="submit-button" class="pay-button">Pay ${{ $product->price }}</button>
        </form>
    </div>

    <div class="back-button-container">
        <a href="{{ url('/') }}" class="back-button">Return to Products Page</a>
    </div>

    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();

        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        var card = elements.create('card', {style: style});
        card.mount('#card-element');

        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>
@endsection

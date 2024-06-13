<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Grocery Store')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <header>
        <h1 class="title">Grocery Store</h1>
    </header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Grocery Store | Developed By Vignesh Dhamodaran</p>
    </footer>
</body>
</html>

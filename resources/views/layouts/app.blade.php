<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bulma/css/bulma.min.css') }}">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .card-image img {
            max-width: 50%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Groundup Laravel Tutorial')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">

        @include('nav', ['username' => 'username meh'])

        @yield('content')

    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
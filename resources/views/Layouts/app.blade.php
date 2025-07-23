<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>

    @include('Partials.header')
    <div class="container mx-auto my-4">
        @yield('content')
    </div>

    @include('Partials.footer')

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel Comics</title>

    @vite('resources/scss/app.scss')

</head>
<body>

    @include('partials.header')
    @include('partials.jumbotron')

    <main>

        @yield('content')

    </main>

    @include('partials.footer')

</body>
</html>

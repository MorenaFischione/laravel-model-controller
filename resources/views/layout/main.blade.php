<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', 'MyMovies')</title>

   
    <link rel="stylesheet" href=" {{ asset('css/app.css')}}">
    {{-- CDNs Entrypoint --}}
    @yield('cdn-entrypoint')
</head>
<body>

    <main>
        @yield('content')
    </main>
    
    {{-- Script section --}}
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
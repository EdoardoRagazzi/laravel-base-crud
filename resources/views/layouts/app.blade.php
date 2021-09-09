<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap and link to app.css + sass --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    
    {{-----------Structure body---------------}}
    
    {{-- Including HEADER --}}  
    @include('partials.header')

    {{-- Including  MAIN --}}
    <main>@yield('main')</main>

    {{-- Including FOOTER --}}
   


        {{-- Connect app.js and Bootstrap.min.js --}}
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'DC COMICS')}} | @yield('title')</title>

    <link rel="icon" href="{{Vite::asset('resources/img/favicon.ico')}}">

    <!--§ font-awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'
        integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=='
        crossorigin='anonymous'>
    
    @vite('resources/js/app.js')

    <style>
        body{
            display: none
        }
    </style>
</head>


<body>
@include('includes.header')
@include('includes.jumbotron')

<main>
    @yield('main-content')
</main>

@include('includes.footer')

@yield('scripts')
</body>
</html>
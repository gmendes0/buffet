<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="stylesheet" href="{{url('assets/site/buffet/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{url('assets/site/buffet/css/custom.css')}}"/>
        <title>@yield('titulo')</title>
    </head>

    <body>
        @yield('content')
        <script src="{{url('assets/site/buffet/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{url('assets/site/buffet/js/popper.js')}}"></script>
        <script src="{{url('assets/site/buffet/js/bootstrap.min.js')}}"></script>
    </body>
</html>
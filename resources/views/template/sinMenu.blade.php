<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tips</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .active{
                background: #999;
            }
        </style>

    </head>
    <body>
        <div class="container">
        <div id='app'>
            @yield('contenido')
        </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        @yield('script')
    </body>
</html>

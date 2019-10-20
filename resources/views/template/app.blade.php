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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a href="#" class="navbar-brand">Tips</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <!-- asi se marca la ruta activa sin el helper-->
                        <!--
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>-->
                        <!-- usando el helper creado-->
                        <li class="nav-item {{ rutaActiva('/') }}">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item {{ rutaActiva('datatable/index') }}">
                            <a href="{{ route('datatable.index') }}" class="nav-link">dataTable</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <hr>
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

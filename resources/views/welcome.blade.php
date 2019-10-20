@extends('template.app')
@section('contenido')
    EL presente proyecto muesta algunos tips practicos de lavarel, entre ellos esta: <br>
    <ul>
        <li>Marcado en el menu de ruta activa</li>
        <li>Creacion de propio helper</li>
        <li>Manejo de data table </li>
    </ul>
    <br>
    <b>Marcado en el menu de ruta activa:</b> se logra colocando en el LI la siguiente clase class="nav-item {{ request()->is('/') ? 'active' : '' }}"
    <br>
    <b>Creacion de propio helper:</b> se logra creando un archivo en la carpeta app con el nombre que queramos, en este ejemplo es app,
        luego hay q ir al archivo composer.json, en la seccion autoload hay q anexar un array llamado files,
        en el anexamos la ruta de nuestro helper desde la carpeta app, app/helpers.php. <br>
        finalmente vamos a la terminal y ejecutamos la siguiente linea de codigo composer dump-autoload <br>
        "files": [
            "app/helpers.php"
        ], despues de <br> "psr-4": {
            "App\\": "app/"
        }, <br> ahora para buscar la ruta activa solo se coloca class="nav-item {{ rutaActiva('/') }}" nada mas, ademas el helper permite crear las funciones q queramos y reutilizarla una y otra vez
    <p><b>Route actual es:</b> {{ request()->path() }}</p>
    <p><b>La ruta completa es:</b> {{ request()->url() }}</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    nota: <br>
    SELECT @cosa := id, id*@cosa FROM `users` WHERE 1 crea la variable cosa y luego la utiliza para una multiplicacion
@endsection 
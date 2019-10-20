<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        <?php include(public_path().'/css/bootstrap.min.css');?>
    </style>

    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}} </td>
            <td>{{$usuario->name}} </td>
            <td>{{$usuario->email}} </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
</head>
<body>

    @foreach ($usuarios as $usuario)

        {{$usuario-> userName }}

    @endforeach


</body>
</html>
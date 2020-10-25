<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios SCYE</title>
</head>
<body>
    <center>
    <h1>Registro de Usuarios</h1>
    <p><h3>Por favor ingresa los siguientes datos: </h3></p>
    <form action="{{ url('/Registro') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/></br>
        <input type="hidden" name="created_at" value="{{ now() }}"/></br>
        <input type="text" name="usuario" id="userName" placeholder="ingresa tu Nombre"></br>
        <input type="text" name="mail" id="userMail" placeholder="ingresa tu Correo"></br>
        <input type="password" name="pass" id="userPass" placeholder="ingresa tu Contraseña"></br></br>
        <input type="submit" value="Registrarse">

    </form>
    </center>
</body>
</html>
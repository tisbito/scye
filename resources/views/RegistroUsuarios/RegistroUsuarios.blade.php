<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios SCYE</title>
</head>
<body>

    <center>
    <h1>Registro de Usuarios SCYE</h1>
    <p><h3>Por favor Ingrese la información del Formulario de Registro </h3></p>
    <form action="{{ url('/Usuarios') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <p>Ingrese sus datos Personales:</p>
        <label>Tipo de Documento:</label>
        <select name="tipodocumento" id="documentType">
            <option value="0">1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
            <option value="5">6</option>
        </select></br>
        
        <input type="text" name="documento" id="document" placeholder="# de Documento"></br>
        <input type="text" name="nombres" id="name" placeholder="Nombres"></br>
        <input type="text" name="apellidos" id="lastName" placeholder="Apellidos"></br>
        <input type="text" name="mail" id="userMail" placeholder="Correo"></br>

        <p>Ingrese sus datos de ingreso a la Plataforma:</p>

        <input type="text" name="usuario" id="user" placeholder="Usuario"></br>
        <input type="password" name="pass" id="userPass" placeholder="Contraseña"></br>
        <input type="password" name="pass_confirmn" id="userPass2" placeholder="Confirme la Contraseña"></br></br>
        

        <p>Seleccione la Empresa en a la cuál pertenece:</p>

        <label>Empresa:</label>
        <select name="tipodocumento" id="documentType">
            <option value="0">Empresa 1</option>
            <option value="1">Empresa 2</option>
            <option value="2">Empresa 3</option>
            <option value="3">Empresa 4</option>
            <option value="4">Empresa 5</option>
            <option value="5">Empresa 6</option>
        </select></br></br>

        <input type="submit" value="Registrarse">
    </form>
    </center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Clientes SCYE</title>
</head>
<body>

    <center>
    <h1>Registro de Clientes SCYE</h1>
    <p><h3>Por favor Ingrese la información del Formulario de Registro </h3></p>
    <form action="{{ url('/Clientes') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="hidden" name="estado" value=1/>
        <p>Ingrese sus datos de Contácto:</p>
        <label>Tipo de Documento:</label>
        <select name="tipodocumento" id="documentType">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select></br>
        
        <input type="text" name="documento" id="document" placeholder="# de Documento o Nit"></br>
        <input type="text" name="nombres" id="name" placeholder="Nombres Completos"></br>
        <input type="text" name="direccion" id="addres" placeholder="Dirección"></br>
        <input type="text" name="mail" id="userMail" placeholder="Correo"></br>
        <input type="text" name="ciudad" id="city" placeholder="Ciudad"></br>
        <input type="text" name="telefono" id="phone" placeholder="Teléfono"></br>
        <label>Ingrese el Número de Empleados de la Compañia:</label></br>
        <input type="number" name="numEmpleados" id="numEmpleados"></br>

        <p>Ingrese sus datos de ingreso a la Plataforma:</p>

        <input type="text" name="usuario" id="user" placeholder="Usuario"></br>
        <input type="password" name="pass" id="userPass" placeholder="Contraseña"></br>
        <input type="password" name="pass_confirmn" id="userPass2" placeholder="Confirme la Contraseña"></br></br>
        
        <input type="submit" value="Registrarse">
    </form>
    </center>
</body>
</html>
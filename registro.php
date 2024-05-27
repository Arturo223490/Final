<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario de Registro</title>
</head>
<body>

<h2>Formulario de Registro</h2>

<form class="clientes" action="guardar.php" method="POST" id="contact_form" runat="server" enctype="multipart/form-data">

<label for="Nombre">Nombre</label> <br>
<input type="text" id="Nombre" name="Nombre" maxlenght="30" require> <br>

<label for="Apellido">Apellido</label> <br>
<input type="text" id="Apellido" name="Apellido" maxlenght="60" require> <br>

<label for="Usuario">Usuario</label> <br>
<input type="text" id="Usuario" name="Usuario" maxlenght="40" require> <br>

<label for="Correo">Correo</label> <br>
<input type="text" id="Correo" name="Correo" maxlenght="70" require> <br>

<label for="Contrasena">Contrasena</label> <br>
<input type="text" id="Contrasena" name="Contrasena" maxlenght="20" require> <br>

<button class="submit" type="submit">Registrarse</button>





</form>

    
</body>
</html>
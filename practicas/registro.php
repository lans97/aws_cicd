<!-- nombres ap am email tipo_usr contra -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registro Usuario</title>
</head>

<body>
    <form action="registroCNT.php" method="post">
        <div>
            <label for="username">Usuario</label>
            <input name="username" id="txt_username"/>
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input name="nombre" id="txt_nombre"/>
        </div>
        <div>
            <label for="apaterno">Apellido Paterno</label>
            <input name="apaterno" id="txt_apaterno"/>
        </div>
        <div>
            <label for="amaterno">Apellido Materno</label>
            <input name="amaterno" id="txt_amaterno"/>
        </div>
        <div>
            <label for="correo">Correo</label>
            <input name="correo" id="txt_correo"/>
        </div>
        <div>
            <label for="tipo_usuario">Tipo de Usuario</label>
            <input name="tipo_usuario" id="txt_tipo_usuario"/>
        </div>
        <div>
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="txt_contrasena"/>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>
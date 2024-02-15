<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Formularios HTML</title>
    </head>
    
    <body>
        Formulario prueba
        <form action="basicoCNT.php" method="post" id="frm_user_login">
            <div>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="txt_usuasrio">
            </div>
            <div>
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="txt_contrasena">
            </div>
            <button type="submit">Ingresar</button>
        </form>
    </body>

</html>
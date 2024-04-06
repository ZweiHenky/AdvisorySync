<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de registro</title>
  <link rel="stylesheet" href="../app/styles/register.css">
</head>
<body>
    <div class="login-container">
        <div>
            <img src="../app/assets/icons/logo.png"  alt="" srcset="">
        </div>
        <form class="login-form" id="login" action="/advisorysync/auth/register" enctype="multipart/form-data" method='POST'>
            
            <h2>Registrate</h2>
            
            <input type="text" id="nombre" name="nombre" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>" required placeholder="Nombre" >
            <input type="text" id="apellidos" name="apellidos" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['apellidos']) : ''; ?>"required placeholder="Apellidos">
            <input type="text" id="correo" name="correo" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['correo']) : ''; ?>" required placeholder="Correo">
            <input type="password" id="password" name="password" required placeholder="Contraseña">

            <?php
                // Mostrar errores si existen
                if (!empty($errores)) {
                    echo "<div>";
                    foreach ($errores as $error) {
                        echo "<p>$error</p>";
                    }
                    echo "</div>";
                }
            ?>

            <button type="submit" name='create'>Registrarse</button>
        </form>

        <div class='texto'>
            <a href="login"><p>¿Ya tienes cuenta?, Inicia Sesion.</p></a>
        </div>
    </div>
    <div class='img'>
    </div>
</body>
</html>

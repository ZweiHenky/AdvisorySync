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
        <form class="login-form">
            
            <h2>Registrate</h2>

            <input type="email" id="email" name="email" required placeholder="Correo">
            <input type="text" id="nombre" name="nombre" required placeholder="Nombre">
            <input type="text" id="apellidos" name="apellidos" required placeholder="Apellidos">
            <input type="password" id="password" name="password" required placeholder="Contraseña">
            
            <button type="submit">Login</button>
        </form>

        <div class='texto'>
            <a href="login"><p>¿Ya tienes cuenta?, Inicia Sesion.</p></a>
        </div>
    </div>
    <div class='img'>
    </div>
</body>
</html>

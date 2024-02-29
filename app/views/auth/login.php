<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="../app/styles/login.css">
</head>
<body>
    <div class="login-container">
        <div>
            <img src="../app/assets/icons/logo.png"  alt="" srcset="">
        </div>
        <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='POST'>
            
            <h2>Inicia Sesion</h2>

            <input type="text" id="username" name="username" required placeholder="Usuario">

            <input type="password" id="password" name="password" required placeholder="Contraseña">
            
            <button type="submit">Login</button>
        </form>

        <div class='texto'>
            <a href=""><p>Se te olvido la contraseña.</p></a>
            <a href="register"><p>¿No tiene cuenta?, Registrate.</p></a>
        </div>
    </div>
    <div class='img'>
    </div>
</body>
</html>

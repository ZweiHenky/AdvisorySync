<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario acceso</title>
  <link rel="stylesheet" href="../app/styles/login.css">
  <link rel="stylesheet" href="../app/styles/config.css">
</head>
<body>
    <div class="login-container">
        <div>
            <img src="../app/assets/icons/logo.png"  alt="" srcset="">
        </div>
        <form class="login-form" id='login' action="<?php echo '/advisorysync/auth/login'?>" method='POST'>
            
            <h2>Inicia Sesion</h2>

            <input type="text" id="email" name="email" placeholder="Correo">

            <span id='error-email'></span>
            
            <input type="password" id="password" name="password" placeholder="Contraseña">

            <!-- <span id='error-password'></span> -->

            <?php

                if ($errorMessage != '') {
                    echo '<span>' . $errorMessage . '</span>';
                }

            ?>
            
            <button id='btn-login' type="submit">Acceso</button>
        </form>

        <div class='texto'>
            <a href=""><p>Se te olvido la contraseña.</p></a>
            <a href="register"><p>¿No tiene cuenta?, Registrate.</p></a>
        </div>
    </div>
    <div class='img'>
    </div>

    <script>
        
        const btn = document.querySelector('#login')

        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
        // const regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        const validation = ()=>{
            const email = document.querySelector('#email').value
            // const password = document.querySelector('#password').value

            let errors = {}

            if (email.trim() === '') {
                errors.email ='campo vacio'
            }else if(!regexEmail.test(email)){
                errors.email = 'correo invalido'
            }

            // if (password.trim() === '') {
            //     errors.password ='campo vacio'
            // }else if(!regexPassword.test(password)){
            //     errors.password = 'contraseña invalida'
            // }

            return errors
        }
        

        login.addEventListener('submit', (e)=>{

            const errorEmail = document.querySelector('#error-email')
            // const errorPassword = document.querySelector('#error-password')

            e.preventDefault();

            const errors = validation()

            if (Object.keys(errors).length !== 0) {

                if (errors.email != undefined) {
                    errorEmail.innerHTML = errors.email
                    errorEmail.style.display = 'block'
                }else{
                    errorEmail.innerHTML = ''
                    errorEmail.style.display = 'none'
                }

                // if (errors.password != undefined) {
                //     errorPassword.innerHTML = errors.password
                //     errorPassword.style.display = 'block'
                // }else{
                //     errorPassword.innerHTML = ''
                //     errorPassword.style.display = 'none'
                // }

                return false
            }

            btn.submit()
            
        })

    </script>

</body>
</html>

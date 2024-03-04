<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>
    <link rel="stylesheet" href="../app/styles/config.css">
    <link rel="stylesheet" href="../app/styles/tutorial.css">
</head>
<body>
<?php
            include_once 'app/views/templates/header.php';
        ?>
    <main>
        
        <div class="container-tutorial">
            <article class="container-aside">
                <div  class="aside">
                    <h3>Primeros Pasos</h3>
                    <ul>
                        <li>
                            <a href="#registroInicio">Registrarse e Iniciar Sesion</a>
                        </li>
                    </ul>
                </div>
                <div  class="aside">
                    <h3>Recibir Asesoria</h3>
                    <ul>
                        <li><a href="#crearPublicacion">Crear publicacion de asesoria</a></li>
                        <li><a href="#confirmarAsesoria">Confirmar asesoria</a></li>
                        <li><a href="#pagarAsesoria">Pagar asesoria</a></li>
                        <li><a href="#ingresarSala">Ingresar a la sala de la asesoria</a></li>
                        <li><a href="#finalizarAsesoria">Finalizar la asesoria</a></li>
                        <li><a href="#calificarAsesor">Calificar al asesor</a></li>
                    </ul>
                </div>
                <div  class="aside">
                    <h3>Dar Asesoria</h3>
                    <ul>
                        <li><a href="#buscarAsesoria">Buscar Asesoria</a></li>
                        <li><a href="#aceptarAsesoria">Aceptar asesoria</a></li>
                        <li><a href="#confirmarAsesoriaDar">Confirmar Asesoria</a></li>
                        <li><a href="#ingresarSalaDar">Ingresar a la sala de la asesoria</a></li>
                        <li><a href="#finalizarAsesoriaDar">Finalizar la asesoria</a></li>
                    </ul>
                </div>
            </article>
            <article class="information">
                <div class="primer-pasos">       
                    <section id='registroInicio'>
                        <h3 class='titulo-seccion'>Registrarte</h3>
                        <h4>Accede a la pagina de registro</h4>
                        <p>
                            <a href="../dinamic/register" target='_blank'>Haz click para ir a la pagina de registro</a>.
                        </p>
                        <h4>Completa el formulario</h4>
                        <p>
                            Ingresa la información solicitada, como nombre, dirección de correo electrónico y contraseña. 
                        </p>
                        <img src="../assets/img/register-tutorial.jpg"  alt="">
                    </section>
                    <section>
                        <h3 class='titulo-seccion'>Iniciar Sesion</h3>
                        <h4>Accede a la pagina de inicio de sesion</h4>
                        <p>
                            <a href="../dinamic/login" target='_blank'>Haz click para ir a la pagina de inicio de sesion</a>.
                        </p>
                        <h4>Ingresa tus credenciales</h4>
                        <p>
                            Introduce tu dirección de correo electrónico y contraseña en los campos correspondientes.
                        </p>
                        <h4>Accede a tu cuenta</h4>
                        <p>
                            Una vez que hayas completado estos pasos, deberías estar conectado a tu cuenta y listo para usar el sitio web o la aplicación.
                        </p>
                        <img src="../assets/img/login-tutorial.jpg"  alt="">
                    </section>
                </div>
                <div class="recibir-asesoria">
                    <section id='crearPublicacion'>
                        <h3 class='titulo-seccion'>Crear publicacion de asesoria</h3>
                        <p>Al publicar una asesoria nos va a desplegar un formulario donde colocaras el Titulo de la publicacion, en la caja de opcciones colocas la categoria y la descripccion de la Asesoria</p>
                        <img src="../assets/img/publicar_Asesoria.png" alt="">
                    </section>
                    <section id='confirmarAsesoria'>
                        <h3 class='titulo-seccion'>Confirmar Asesoria</h3>
                        <p>Para confirmar una asesoria, de todas las publicaciones de asesorias tenemos que ponerlas en favoritos para tenerlos en nuestro perfil.</p>
                        <img src="../assets/img/AgregarAsesoria.jpg" alt="">
                    </section>
                    <section id='pagarAsesoria'>
                        <h3 class='titulo-seccion'>Pagar asesoria</h3>
                        <p>Al momento de pagar te dara una opccion que es externa, este sitio web de Terceros es la responsable de brondar las opcciones de pago</p>
                        <img src="../assets/img/AgregarAsesoria.jpg" alt="">
                    </section>
                    <section id='ingresarSala'>
                        <h3 class='titulo-seccion'>Ingresar a la sala de la asesoria</h3>
                        <p>Ingresa mediante el link generado que se te otorga al aceptar la asesoria, en la fechar y hora indicada.</p>
                        <img src="../assets/img/AgregarAsesoria.jpg" alt="">
                    </section>
                    <section id='finalizarAsesoria'>
                        <h3 class='titulo-seccion'>Finalizar la asesoria</h3>
                        <p>Para finalizar tu acesoria oprime el boton de salir e                                                n color rojo.</p>
                        <img src="../assets/img/AgregarAsesoria.jpg" alt="">
                    </section>
                    <section id='calificarAsesor'>
                        <h3 class='titulo-seccion'>Calificar al asesor</h3>
                        <p>Podras calificar a tu acesor o al usuario sobre tú satisfaccion hacia su asesoria.</p>
                        <img src="../assets/img/calificacionAsesor.jpg" alt="">
                    </section>
                </div>
                <div class="dar-asesoria">
                    <section id='buscarAsesoria'>
                        <h3 class='titulo-seccion'>Buscar Asesoria</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed consequatur, laborum recusandae eveniet enim repellendus ullam sit alias ea cupiditate voluptatem quod rem repudiandae ab maiores expedita veritatis. Sapiente, expedita.</p>
                        <img src="../assets/img/buscarAsesoria.jpg" alt="">
                    </section>
                    <section id='aceptarAsesoria'>
                        <h3 class='titulo-seccion'>Aceptar Asesoria</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed consequatur, laborum recusandae eveniet enim repellendus ullam sit alias ea cupiditate voluptatem quod rem repudiandae ab maiores expedita veritatis. Sapiente, expedita.</p>
                        <img src="../assets/img/aceptarAsesoria.jpg" alt="">
                    </section>
                    <section id='confirmarAsesoriaDar'>
                        <h3 class='titulo-seccion'>Confirmar Asesoria</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed consequatur, laborum recusandae eveniet enim repellendus ullam sit alias ea cupiditate voluptatem quod rem repudiandae ab maiores expedita veritatis. Sapiente, expedita.</p>
                        <img src="../assets/img/AgregarAsesoria.jpg" alt="">
                    </section>
                    <section id='ingresarSalaDar'>
                        <h3 class='titulo-seccion'>Ingresar a la sala de la asesoria</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed consequatur, laborum recusandae eveniet enim repellendus ullam sit alias ea cupiditate voluptatem quod rem repudiandae ab maiores expedita veritatis. Sapiente, expedita.</p>
                        <img src="../assets/img/AgregarAsesoria.jpg" alt="">
                    </section>
                    <section id='finalizarAsesoriaDar'>
                        <h3 class='titulo-seccion'>Finalizar la asesoria</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed consequatur, laborum recusandae eveniet enim repellendus ullam sit alias ea cupiditate voluptatem quod rem repudiandae ab maiores expedita veritatis. Sapiente, expedita.</p>
                        <img src="../assets/img/AgregarAsesoria.jpg" alt="">
                    </section>
                </div>
            </article>
        </div>
    </main>
    <?php
        include_once 'app/views/templates/footer.php';
    ?>

<script>
    const sections = document.querySelectorAll('.aside h3');
    const primerPaso = document.querySelector('.primer-pasos');
    const recibir = document.querySelector('.recibir-asesoria');
    const dar = document.querySelector('.dar-asesoria');

    sections.forEach(el => {
        el.addEventListener('click', (e) => {
            switch (e.target.textContent) {
                case 'Primeros Pasos':
                    showSection(primerPaso);
                    hideSections([recibir, dar]);
                    break;
                case 'Recibir Asesoria':
                    showSection(recibir);
                    hideSections([primerPaso, dar]);
                    break;
                case 'Dar Asesoria':
                    showSection(dar);
                    hideSections([primerPaso, recibir]);
                    break;
                default:
                    break;
            }
        });
    });

    function showSection(section) {
        section.style.display = 'block';
    }

    function hideSections(sections) {
        sections.forEach(section => {
            section.style.display = 'none';
        });
    }

</script>
</body>
</html>
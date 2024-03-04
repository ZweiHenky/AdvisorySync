<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../app/styles/config.css">
    <link rel="stylesheet" href="../app/styles/index.css">
</head>
<body>

    <?php
        include_once 'app/views/templates/header.php';
    ?>

    <main>
        <section class="hero">
            <h1>
                Asesorías Personalizadas en Tiempo Real para Tu Éxito Académico.
            </h1>
            <p class="phrase">
                "Conecta con expertos dispuestos a compartir sus conocimientos. Obtén ayuda instantánea y eleva tu rendimiento académico."
            </p>
            <div class="container-btn-info">
                <a href="../auth/register" class="btn-start" ><span>Comenzar</span></a>
                <a href="tutorial" class="btn-end"><span>Como Funciona</span></a>
            </div>
        </section>
        <section class="container-property">
            <h2><strong>Aumenta tus conocimientos con nuestra plataforma de asesorías.</strong></h2>
            <article class="properties">
                <div>
                    <img class='imf-property' src="../app/assets/icons/question.svg"  alt="">
                    <h3>Publica tus dudas y obten asesoramiento personalizado</h3>
                    <p>
                        Describe tu consulta de manera detallada y especifica el área 
                        o materia en la que necesitas ayuda.
                    </p>  
                </div>
                <div>
                    <img class='imf-property' src="../app/assets/icons/teacher.svg"  alt="">
                    <h3>Diversidad de asesores</h3>
                    <p>
                        Explora nuestra amplia comunidad de asesores, 
                        todos con conocimientos especializados en diversas áreas. 
                        Cualquier persona con conocimientos puede convertirse en un asesor,
                        aportando una riqueza de perspectivas y habilidades.
                    </p>
                </div>
                <div>
                    <img class='imf-property' src="../app/assets/icons/time.svg"  alt="">
                    <h3>Flexibilidad de horarios</h3>
                    <p>
                        Toma el control de tu agenda académica. 
                        Programa sesiones de asesoría según tu horario, 
                        permitiéndote adaptar el aprendizaje a tu vida cotidiana.
                    </p>
                </div>
                <div>
                    <img class='imf-property' src="../app/assets/icons/stream.svg"  alt="">
                    <h3>Asesoramiento en tiempo real a través de streaming</h3>
                    <p>
                        Las asesorías se llevan a cabo en tiempo real, 
                        lo que te permite resolver tus dudas de manera eficiente y sin demoras.
                    </p>
                </div>
                <div>
                    <img class='imf-property' src="../app/assets/icons/chat.svg"  alt="">
                    <h3>Chat en vivo para poder compartir documentos</h3>
                    <p>
                        Comparte y descarga archivos, enlaces y recursos educativos durante las sesiones de asesoría.
                    </p>
                </div>
                <div>
                    <img class='imf-property' src="../app/assets/icons/rating.svg"  alt="">
                    <h3>Sistema de valoración</h3>
                    <p>
                        Califica a tus asesores y comparte testimonios sobre tus experiencias. 
                        Ayuda a construir una comunidad confiable y de alta calidad.
                    </p>
                </div>
            </article>
        </section>
    </main>

    <?php
        include_once 'app/views/templates/footer.php';
    ?>
</body>
</html>
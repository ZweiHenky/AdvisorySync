<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
    <link rel="stylesheet" href="../app/styles/config.css">
    <link rel="stylesheet" href="../app/styles/about.css">
</head>
<body>

    <?php
        include_once 'app/views/templates/header.php';
    ?>

    <main>
        <section class="hero">
            <h1>
                En AdvisorySync, 
                estamos comprometidos a proporcionar una experiencia educativa innovadora y personalizada, 
                donde cada estudiante tenga la oportunidad de alcanzar su máximo potencial.
            </h1>
            <img class="hero-img" src="../app/assets/img/about.png" alt="">
        </section>

        <article class="container-MV">
            <section class="mision">
                <p class="text">
                    "Facilitar y mejorar el acceso a asesorías académicas dentro de nuestra universidad a través de una plataforma en línea intuitiva y segura. Nos comprometemos a proporcionar un espacio donde estudiantes y asesores puedan conectarse de manera efectiva, promoviendo el aprendizaje colaborativo, el bienestar estudiantil y el desarrollo académico continuo."
                </p>
                <h2>Misión</h2>
                
            </section>
            <section class="vision">
                <h2>Visión</h2>
                <p class="text">
                    "Ser la plataforma líder en asesorías universitarias en línea, contribuyendo al éxito académico y al desarrollo integral de los estudiantes. Buscamos transformar la experiencia educativa, fomentando un entorno colaborativo y seguro que potencie el aprendizaje y la superación académica."
                </p>
            </section>
        </article>
    </main>

    <?php
        include_once 'app/views/templates/footer.php';
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../app/styles/dynamic/config.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../app/utils/dynamic/tailwind.config.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        .tab-selected {
            border-color: #1a73e8;
            /* Cambia el color del borde inferior cuando la pestaña está seleccionada */
        }
    </style>

</head>

<body>

    <?php
    include_once('app/views/templates/dynamic/aside.php')
    ?>

    <header class='bg-background border-b flex w-full justify-between p-5 items-center'>
        <div>
            <img src="../app/assets/icons/menu.svg" class='openMenu w-[20px] h-auto' alt="">
        </div>
        <h2 class='text-xl font-semibold'>Perfil</h2>
    </header>

    <main>
        <div class="flex flex-col items-center justify-center space-y-4 p-4  ">
            <div class="w-24 h-24 rounded-full overflow-hidden">
                <img src="https://picsum.photos/200/300" alt="Imagen de perfil" class="w-full h-full object-cover" />
            </div>
            <h2 class="text-lg font-semibold">Nombre Completo</h2>
            <div class="flex items-center space-x-2">
                <div class="flex items-center">
                    <p class="text-sm text-gray-600">Estudiante</p> <!-- O "Asesor" -->
                </div>
                <div class="flex items-center">
                    <p class="text-xs text-gray-600">|</p>
                </div>
                <div class="flex items-center">
                    <p class="text-xs text-gray-600">5 asesorías dadas</p> <!-- O "5 asesorías recibidas" -->
                </div>
                <div class="flex items-center space-x-1">
                    <span class="text-xs text-yellow-400">&#9733;</span> <!-- Estrella rellena -->
                    <span class="text-xs text-yellow-400">&#9733;</span> <!-- Estrella rellena -->
                    <span class="text-xs text-yellow-400">&#9733;</span> <!-- Estrella rellena -->
                    <span class="text-xs text-yellow-400">&#9733;</span> <!-- Estrella rellena -->
                    <span class="text-xs text-gray-400">&#9734;</span> <!-- Estrella vacía -->
                </div>
            </div>
        </div>
        </div>

        <!-- Sección de opciones -->
        <div class="flex justify-center space-x-4 mt-4">
            <button id="btnPublicaciones" class="tab-selected focus:outline-none border-b-2  pb-2 px-4 py-2 rounded-tl-md rounded-tr-md font-semibold">Publicaciones</button>
            <button id="btnReseñas" class="focus:outline-none border-b-2  pb-2 px-4 py-2 rounded-tl-md rounded-tr-md font-semibold">Reseñas</button>
            <button id="btnGuardadas" class="focus:outline-none border-b-2  pb-2 px-4 py-2 rounded-tl-md rounded-tr-md font-semibold">Guardadas</button>
        </div>

        <!-- publicaciones-->
        <div id="publicaciones" class=" mt-4">
            <div class="border border-gray-200 p-4 rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Título de la Publicación</h3>
                <p class="text-sm text-gray-600 mb-2">Status: Confirmacion</p>
                <p class="text-sm text-gray-600 mb-2">Fecha: 17 de marzo de 2024</p>
                <p class="text-sm text-gray-600 mb-2">Asesor: Nombre del Asesor</p>
                <p class="text-sm text-gray-600 mb-2">Categoria: Nombre de la categoria</p>
    

            <form action="" method="post">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md" name='pagar'>Acción</button>
                </form>
        </div>

            <!-- Publicación 2 -->
            <div class="border border-gray-200 p-4 rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Título de la Publicación</h3>
                <p class="text-sm text-gray-600 mb-2">Status: Confirmacion</p>
                <p class="text-sm text-gray-600 mb-2">Fecha: 16 de marzo de 2024</p>
                <p class="text-sm text-gray-600 mb-2">Asesor: Nombre del Asesor</p>
                <p class="text-sm text-gray-600 mb-2">Categoria: Nombre de la categoria</p>
                <form action="profile" method= 'POST'>
                    <button id='btn-create' name ='pagar' class="bg-blue-500 text-white px-4 py-2 rounded-md">Acción</button>
                </form>
            </div>
        </div>

        <div id="reseñas" class="hidden mt-4">
            <!-- Reseña 1 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <div class="p-6">
                    <p class="text-sm text-gray-600 mb-2">Usuario: Nombre de Usuario</p>
                    <p class="text-sm text-gray-600 mb-2">Fecha: 17 de marzo de 2024</p>
                    <p class="text-lg mb-4">Comentario de la Reseña</p>
                </div>
            </div>

            <!-- Reseña 2 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <div class="p-6">
                    <p class="text-sm text-gray-600 mb-2">Usuario: Nombre de Usuario</p>
                    <p class="text-sm text-gray-600 mb-2">Fecha: 16 de marzo de 2024</p>
                    <p class="text-lg mb-4">Comentario de la Reseña</p>
                </div>
            </div>
        </div>

        <!-- favoritos -->
        <div id="guardadas" class='hidden mt-4'>
            <?php
            foreach ($favorite as $fav) {
                $string = $fav['horarios'];
                $array = json_decode($string, true);
                //print_r($array);
                echo "<section class='min-w-[90%] max-w-[90%] h-[500px] mb-5 mx-auto relative border border-gray-300 rounded-md shadow-md'>";
                echo "<form class='*:p-4' action='home' method='post'>";
                echo "<p class='absolute right-0 top-0 p-4 text-xl'>{$fav['nombre']} {$fav['apellidos']} </p>";
                echo "<h3 class='text-xl border-b'>{$fav['titulo']}</h3>";
                echo "<div class='mt-4 flex justify-between'>";
                echo "<span class='bg-purple-100 text-purple-800 text-xs font-medium p-2 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400'>{$fav['categoria']}</span>";
                echo "<img id='fav' class='w-[30px] h-auto' src='../app/assets/icons/heart.svg' alt=''>";
                echo "</div>";
                echo "<div class='mt-4'>";
                echo "<div class='h-32 overflow-y-auto'>";
                echo "<p>{$fav['descripcion']}</p>";
                echo "</div>";
                echo "</div>";
                echo "<div>";
                echo "<h4>Selecciona un horario</h4>";
                echo "<select class='mt-2 p-2 w-full rounded bg-background text-gray-400 border' name='' id=''>";
                foreach($array as $dia => $horario ){
                    echo "<option value=''>{$dia}: {$horario}</option>";
                }
                echo "</select>";
                echo "</div>";
                $ultimaConexion = $fav['fecha'];
                $timestampUltimaConexion = strtotime($ultimaConexion);
                $timestampActual = time();
                $diferenciaSegundos = $timestampActual - $timestampUltimaConexion;
                $diferenciaDias = floor($diferenciaSegundos / (60 * 60 * 24));

                echo "<p class='absolute left-0 bottom-0 p-4 '>hace {$diferenciaDias} días</p>";
                echo "<div>";
                echo "<button name='aceptar' class='absolute right-0 bottom-0 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm py-3 px-5 m-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900'>Aceptar</button>";
                echo "</div>";
                echo "</form>";
                echo "</section>";
            }
            ?>




        </div>
    </main>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnPublicaciones = document.getElementById("btnPublicaciones");
            const btnReseñas = document.getElementById("btnReseñas");
            const btnGuardadas = document.getElementById("btnGuardadas");
            const publicaciones = document.getElementById("publicaciones");
            const reseñas = document.getElementById("reseñas");
            const guardadas = document.getElementById("guardadas");



            function mostrarPublicaciones() {
                publicaciones.classList.remove("hidden");
                reseñas.classList.add("hidden");
                guardadas.classList.add("hidden");
                btnPublicaciones.classList.add("tab-selected");
                btnReseñas.classList.remove("tab-selected");
                btnGuardadas.classList.remove("tab-selected");
            }

            function mostrarReseñas() {
                publicaciones.classList.add("hidden");
                reseñas.classList.remove("hidden");
                guardadas.classList.add("hidden");
                btnPublicaciones.classList.remove("tab-selected");
                btnReseñas.classList.add("tab-selected");
                btnGuardadas.classList.remove("tab-selected");
            }

            function mostrarGuardadas() {
                publicaciones.classList.add("hidden");
                reseñas.classList.add("hidden");
                guardadas.classList.remove("hidden");
                btnPublicaciones.classList.remove("tab-selected");
                btnReseñas.classList.remove("tab-selected");
                btnGuardadas.classList.add("tab-selected");
            }

            btnPublicaciones.addEventListener("click", mostrarPublicaciones);
            btnReseñas.addEventListener("click", mostrarReseñas);
            btnGuardadas.addEventListener("click", mostrarGuardadas);
        });
    </script>

    <script src='../app/utils/dynamic/aside.js'></script>
    <script src='../app/utils/dynamic/createProyect.js'></script>

</body>

</html>
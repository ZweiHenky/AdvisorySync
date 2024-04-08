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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <h2 class="text-lg font-semibold"><?php echo $user['nombre'] . ' ' . $user['apellidos'] ?></h2>
            <div class="flex items-center space-x-2">
                <div class="flex items-center">
                    <p class="text-sm text-gray-600"><?php echo $user == null ? 'Estudiante' : 'Asesor' ?></p> <!-- O "Asesor" -->
                </div>
                <div class="flex items-center">
                    <p class="text-xs text-gray-600">|</p>
                </div>

                <div class="flex items-center justify-center space-x-1">
                    <?php
                        // Ejemplo de calificación
                        $calificacion = $review['rating'] == null ? 0 : $review['rating'];

                        // Obtener el número de estrellas llenas
                        $estrellasLlenas = floor($calificacion);
                        
                        // Calcular la parte decimal
                        $decimal = $calificacion - $estrellasLlenas;

                        // Calcular el número de estrellas parciales
                        if ($decimal >= 0.75) {
                            $estrellaParcial = 1;
                        } elseif ($decimal >= 0.25) {
                            $estrellaParcial = 0.5;
                        } else {
                            $estrellaParcial = 0;
                        }

                        // Calcular el número de estrellas vacías
                        $estrellasVacias = 5 - $estrellasLlenas - ($estrellaParcial > 0 ? 1 : 0);

                        // Generar estrellas llenas
                        for ($i = 0; $i < $estrellasLlenas; $i++) {
                            echo '<svg class="w-6 h-6 fill-current text-yellow-400" viewBox="0 0 24 24">
                                    <path d="M12 2l2.812 6.844L22 10.75l-5.125 4.406.812 7.969L12 19.75l-6.688 3.375.813-7.969L2 10.75l7.188-2.906L12 2z"/>
                                </svg>';
                        }

                        // Generar estrella parcial con gradiente
                        if ($estrellaParcial > 0) {
                            echo '<svg class="w-6 h-6 text-yellow-400" viewBox="0 0 24 24">
                                    <defs>
                                        <linearGradient id="gradiente-estrella" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="' . (100 - ($estrellaParcial * 100)) . '%" style="stop-color:#FFD700;stop-opacity:1" />
                                            <stop offset="' . (100 - ($estrellaParcial * 100)) . '%" style="stop-color:#ffffff;stop-opacity:1" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#gradiente-estrella)" d="M12 2l2.812 6.844L22 10.75l-5.125 4.406.812 7.969L12 19.75l-6.688 3.375.813-7.969L2 10.75l7.188-2.906L12 2z"/>
                                </svg>';
                        }

                        // Generar estrellas vacías
                        for ($i = 0; $i < $estrellasVacias; $i++) {
                            echo '<svg class="w-6 h-6 fill-current text-gray-400" viewBox="0 0 24 24">
                                    <path d="M12 2l2.812 6.844L22 10.75l-5.125 4.406.812 7.969L12 19.75l-6.688 3.375.813-7.969L2 10.75l7.188-2.906L12 2z"/>
                                </svg>';
                        }
                    ?>
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
            

                <?php
                    foreach ($notifications as $notification) {
                        echo "<div class='border border-gray-200 p-4 rounded-md mb-4'>";
                        echo "<h3 class='text-lg font-semibold mb-2'>{$notification['titulo']}</h3>";
                        echo "<p class='text-sm text-gray-600 mb-2'>Status: {$notification['estatus']}  </p>";
                        echo "<p class='text-sm text-gray-600 mb-2'>fecha: {$notification['fecha']}</p>";
                        echo "<p class='text-sm text-gray-600 mb-2'>Asesor: {$notification['asesor']}</p>";
                        echo "<p class='text-sm text-gray-600 mb-2'>Categoria: {$notification['categoria']}</p>";

                        if ($notification['id_usuario'] == $_SESSION['usuario']['id_usuario'] && $notification['estatus'] == 'confirmacion') {
                            echo 'En espera del pago del estudiante';
                        }else{
                            if ($notification['estatus'] == 'pagado') {
                                echo "<form >
                                    <input type='hidden' id='id_app' value='{$notification['id_sala']}'>
                                    <input type='hidden' id='token' value='{$notification['access_token']}'>
                                    <input type='hidden' id='channel' value={$notification['nombre']}>
                                    <button class='bg-blue-500 text-white px-4 py-2 rounded-md' id='reunion'>Entrar a la reunion</button>
                                </form>";
                            }else{
                                echo "<form action='' method='post'>
                                    <input id='horas' type='hidden' name='horas' value='{$notification['fecha']}'>
                                    <input id='id_noti' type='hidden' name='id_noti' value='{$notification['id_noti']}'>
                                    <input id='id_stripe' type='hidden' name='id_stripe' value={$notification['id_stripe']}>
                                    <button class='createRoom bg-blue-500 text-white px-4 py-2 rounded-md' >Pagar</button>
                                </form>";
                            }
                        }
                        
                        echo '</div>';
                    }
                ?>
                
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
    <script src='../app/utils/dynamic/createRoom.js'></script>
    <script src='../app/utils/dynamic/joinRoom.js'></script>

</body>

</html>
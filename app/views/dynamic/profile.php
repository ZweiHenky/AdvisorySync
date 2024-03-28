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
            border-color: #1a73e8; /* Cambia el color del borde inferior cuando la pestaña está seleccionada */
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
            <p class="text-sm text-gray-600 mb-2">Status: Activa</p>
            <p class="text-sm text-gray-600 mb-2">Fecha: 17 de marzo de 2024</p>
            <p class="text-sm text-gray-600 mb-2">Asesor: Nombre del Asesor</p>
            <p class="text-sm text-gray-600 mb-2">Categoria: Nombre de la categoria</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Acción</button>
        </div>

        <!-- Publicación 2 -->
        <div class="border border-gray-200 p-4 rounded-md mb-4">
            <h3 class="text-lg font-semibold mb-2">Título de la Publicación</h3>
            <p class="text-sm text-gray-600 mb-2">Status: Activa</p>
            <p class="text-sm text-gray-600 mb-2">Fecha: 16 de marzo de 2024</p>
            <p class="text-sm text-gray-600 mb-2">Asesor: Nombre del Asesor</p>
            <p class="text-sm text-gray-600 mb-2">Categoria: Nombre de la categoria</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Acción</button>
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
        <div class="border border-gray-200 p-4 rounded-md mb-4">
            <h3 class="text-lg font-semibold mb-2">Título de la Publicación</h3>
            <p class="text-sm text-gray-600 mb-2">Status: Activa</p>
            <p class="text-sm text-gray-600 mb-2">Fecha: 17 de marzo de 2024</p>
            <p class="text-sm text-gray-600 mb-2">Asesor: Nombre del Asesor</p>
            <p class="text-sm text-gray-600 mb-2">Categoria: Nombre de la categoria</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Acción</button>
        </div>

        
        <div class="border border-gray-200 p-4 rounded-md mb-4">
            <h3 class="text-lg font-semibold mb-2">Título de la Publicación</h3>
            <p class="text-sm text-gray-600 mb-2">Status: Activa</p>
            <p class="text-sm text-gray-600 mb-2">Fecha: 16 de marzo de 2024</p>
            <p class="text-sm text-gray-600 mb-2">Asesor: Nombre del Asesor</p>
            <p class="text-sm text-gray-600 mb-2">Categoria: Nombre de la categoria</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Acción</button>
        </div>
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

</body>

</html>
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
    

</head>
<body>

    <?php
        include_once('app/views/templates/dynamic/aside.php')
    ?>

    <header class='bg-background border-b flex w-full justify-between p-5 items-center'>
        <div>
            <img src="../app/assets/icons/menu.svg" class='openMenu w-[20px] h-auto' alt="">
        </div>
        <h2 class='text-xl font-semibold'>Inicio</h2>
    </header>

    <main>
        <div class='mt-5 w-full p-5 '>
            <form class='flex *:rounded gap-5 flex-col' action="home" method='POST'>
                <div class=' flex *:p-2 gap-5'>
                    <input class='basis-1/2 bg-background rounded border' type="text" name="titulo" id="" placeholder='Buscar Publicacion'>
                    <select name="categoria" id="" class='bg-background text-gray-400 border rounded basis-1/2'>
                        <option value="">categorias</option>
                        <?php
                            foreach ($categories as $categoria) {
                                echo "<option value={$categoria['id_categoria']}>{$categoria['nombre']} </option>";
                            }
                        ?>
                    </select>
                </div>
                <button name='buscar' class='p-3 bg-primary text-white'>Buscar</button>
            </form>
        </div>

        <h2 class='text-center m-5 text-3xl'>Publicaciones</h2>

        
            <?php

                foreach ($advisories as $advisory) {

                    $dates = $advisory['horarios'];
                    $dateArray = json_decode($dates, true);

                    echo "<section class=' min-w-[90%] max-w-[90%] h-[500px]  mb-5 mx-auto relative border border-gray-300 rounded-md shadow-md '>";
                    echo "<form class='*:p-4' action='home' method='post'>";
                    echo "<input type='hidden' name='id_publi' value={$advisory['id_publi']} >";
                    echo "<p class='absolute right-0 top-0 p-4 text-xl'>{$advisory['nombre']}</p>";
                    echo "<h3 class='text-xl border-b'>{$advisory['titulo']}</h3>";
                    echo "<div class='mt-4 flex justify-between'>
                            <span class='bg-purple-100 text-purple-800 text-xs font-medium p-2 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400'>{$advisory['categoria']}</span>
                            <img id='fav' class='w-[30px] h-auto' src='../app/assets/icons/heart.svg' alt=''>
                        </div>";
                    echo "<div class='mt-4'>
                            <div class='h-32 overflow-y-auto'>
                                <p>{$advisory['descripcion']}</p>
                            </div>
                        </div>";
                    echo "<div>
                            <h4>Selecciona un horario</h4>
                            <select class='mt-2 p-2 w-full rounded bg-background text-gray-400 border ' name='fecha' id=''>";
                                foreach($dateArray as $dia => $horario ){
                                    echo "<option value='{$dia}:{$horario}'>{$dia}: {$horario}</option>";
                                }
                            echo "</select>
                        </div>";

                    $ultimaConexion = $advisory['fecha'];
                    $timestampUltimaConexion = strtotime($ultimaConexion);
                    $timestampActual = time();
                    $diferenciaSegundos = $timestampActual - $timestampUltimaConexion;
                    $diferenciaDias = floor($diferenciaSegundos / (60 * 60 * 24));
                    if ($diferenciaDias == 0) {
                        echo "<p class='absolute left-0 bottom-0 p-4 '>Hace un momento</p>";
                    }else{
                        echo "<p class='absolute left-0 bottom-0 p-4 '>Hace {$diferenciaDias} dias</p>";
                    }
                    if (isset($_SESSION['usuario']['id_stripe'])) {
                        echo "<div>
                                <button name='aceptar' class='absolute right-0 bottom-0 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm py-3 px-5 m-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900'>Aceptar</button>
                            </div>
                    </form>";
                    }else{
                        echo "<div>
                                <button id='aceptar' class='absolute right-0 bottom-0 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm py-3 px-5 m-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900'>Aceptar</button>
                            </div>
                    </form>";
                    }
                    
                    echo "</section>";
                }

            ?>


        <?php
            include('app/views/templates/admin/pagination.php');
        ?>
    </main>

    <script src='../app/utils/dynamic/aside.js'></script>
    <script src='../app/utils/dynamic/favorite.js'></script>
    <script src='../app/utils/dynamic/createAsesor.js'></script>
</body>
</html>
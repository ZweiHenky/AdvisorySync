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
            <form class='flex *:rounded gap-5 flex-col' action="">
                <div class=' flex *:p-2 gap-5'>
                    <input class='basis-1/2 bg-background rounded border' type="text" name="" id="" placeholder='Buscar Publicacion'>
                    <select name="" id="" class='bg-background text-gray-400 border rounded basis-1/2'>
                        <option value="">categorias</option>
                    </select>
                </div>
                <button name='buscar' class='p-3 bg-primary text-white'>Buscar</button>
            </form>
        </div>

        <h2 class='text-center m-5 text-3xl'>Publicaciones</h2>

        <section class=' min-w-[90%] max-w-[90%] h-[500px]  mb-5 mx-auto relative border border-gray-300 rounded-md shadow-md '>
            <form class='*:p-4' action="home" method="post">
                <p class='absolute right-0 top-0 p-4 text-xl'>usuario</p>
                <h3 class='text-xl border-b'>Titulo</h3>
                <div class='mt-4'>
                    <span class='bg-purple-100 text-purple-800 text-xs font-medium p-2 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400'>Categoria</span>
                </div>
                <div class='mt-4'>
                    <div class="h-32 overflow-y-auto">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, nobis? Neque minus magnam sint quibusdam nostrum velit officiis et earum rerum est? Doloribus inventore deleniti saepe optio repellat atque quam.</p>
                    </div>
                </div>
                <div>
                    <h4>Selecciona un horario</h4>
                    <select class='mt-2 p-2 w-full rounded bg-background text-gray-400 border ' name="" id="">
                        <option value="">Opciones</option>
                        <option value="">Lunes: 2:00 pm - 4:00 pm</option>
                        <option value="">Miercoles: 2:00 pm - 4:00 pm</option>
                        <option value="">Jueves: 2:00 pm - 4:00 pm</option>
                    </select>
                </div>
                
                <p class='absolute left-0 bottom-0 p-4 '>dias</p>
                <div>
                    <button name='aceptar' class='absolute right-0 bottom-0 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm py-3 px-5 m-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900'>Aceptar</button>
                </div>
            </form>
        </section>
    </main>

    <script src='../app/utils/dynamic/aside.js'></script>
</body>
</html>
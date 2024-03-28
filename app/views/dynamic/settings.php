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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
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
        <h2 class='text-xl font-semibold'>Configuracion</h2>
    </header>

    <main >
        <h1 class='text-center mt-2 text-2xl'>Configuracion</h1>
        <form class='*:p-3 *:mt-5 *:mb-2 flex-col divide-y ' action="">
            <article>
                <h2 class='text-xl mb-2'>Lunes:</h2> 
                <div class=" mt-2 flex items-center justify-evenly">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desde</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasta</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
            </article>
            <article>
                <h2 class='text-xl mb-2'>Martes:</h2> 
                <div class=" mt-2 flex items-center justify-evenly">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desde</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasta</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
            </article>
            <article>
                <h2 class='text-xl mb-2'>Miercoles:</h2> 
                <div class=" mt-2 flex items-center justify-evenly">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desde</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasta</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
            </article>
            <article>
                <h2 class='text-xl mb-2'>Jueves:</h2> 
                <div class=" mt-2 flex items-center justify-evenly">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desde</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasta</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
            </article>
            <article>
                <h2 class='text-xl mb-2'>Viernes:</h2> 
                <div class=" mt-2 flex items-center justify-evenly">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desde</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasta</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
            </article>
            <article>
                <h2 class='text-xl mb-2'>Sabado:</h2> 
                <div class=" mt-2 flex items-center justify-evenly">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desde</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasta</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
            </article>
            <article>
                <h2 class='text-xl mb-2'>Domingo:</h2> 
                <div class=" mt-2 flex items-center justify-evenly">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desde</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasta</label>
                    <div class="relative">
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
            </article>
            <div class='w-full'>
                <button name='guardar'  class='w-full p-3 bg-primary text-white rounded' type="submit">Guardar</button>
            </div>
        </form>
        
    </main>

    <script src='../app/utils/dynamic/aside.js'></script>

</body>

</html>
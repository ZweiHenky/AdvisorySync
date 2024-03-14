<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../app/utils/dinamyc/tailwind.config.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />

</head>
<body>

    <div class="backNav closeNav w-full bg-[#00000060] absolute h-dvh top-0 left-0 z-20 transition-transform -translate-x-full">
    </div>

    <aside class=" min-w-[70%] max-w-[80%] h-dvh bg-white p-3 absolute z-30 transition-transform -translate-x-full">
        
        <section class='flex justify-between items-center'>
            <h1 class='text-3xl'>AdvisorySync</h1>
            <img src="../app/assets/icons/close.svg" class='closeNav w-[15px] h-auto' alt="" srcset="">
        </section>

        <nav class='mt-10'>
            
            <ul class='flex flex-col gap-10'>
                <li class='flex gap-2 items-center'>
                    <img class='w-[20px] h-auto' src="../app/assets/icons/home.svg" alt="" > 
                    <p>Inicio</p>
                </li>
                <li class='flex gap-2  items-center'>
                    <img class='w-[20px] h-auto' src="../app/assets/icons/user.svg" alt="" >
                    <p>Perfil</p>
                </li>
                <li class='flex gap-2 items-center'>
                    <img class='w-[20px] h-auto' src="../app/assets/icons/setting.svg" alt="" >
                    <p>Configuracion</p>
                </li>
                <li class='flex gap-2 items-center'>
                    <img class='w-[20px] h-auto' src="../app/assets/icons/logOut.svg" alt="" >
                    <p>Cerrar Sesion</p>
                </li>
            </ul>

        </nav>

        <button class='mt-12 bg-primary text-white w-full p-2 rounded'>Crear Nueva Asesoria</button>

    </aside>

    <header class='bg-background border-b flex w-full justify-between p-5 items-center'>
        <div>
            <img src="../app/assets/icons/menu.svg" class='openMenu w-[20px] h-auto' alt="">
        </div>
        <h2 class='text-xl font-semibold'>Inicio</h2>
    </header>

    <main>
        <div class='mt-5 w-full p-5 bg-background'>
            <form class='flex *:rounded gap-5 flex-col' action="">
                <div class=' flex *:p-2 gap-5'>
                    <input class='basis-1/2' type="text" name="" id="" placeholder='Buscar Publicacion'>
                    <select name="" id="" class='basis-1/2'>
                        <option value="">categorias</option>
                    </select>
                </div>
                <button class='p-3 bg-primary text-white'>Buscar</button>
            </form>
        </div>

        <h2 class='text-center m-5 text-3xl'>Publicaciones</h2>

        <section class='bg-background min-w-[90%] max-w-[90%] h-[500px] *:p-4 mb-5 mx-auto relative border border-gray-200 rounded-md shadow-md '>
            <p class='absolute right-0 top-0 p-4 text-xl'>usuario</p>
            <h3 class='text-xl border-b'>Titulo</h3>
            <div class='mt-4'>
                <span class='bg-purple-100 text-purple-800 text-xs font-medium p-2 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400'>Categoria</span>
            </div>
            <div class='mt-4'>
                <p class='text-balance truncate ...'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, nobis? Neque minus magnam sint quibusdam nostrum velit officiis et earum rerum est? Doloribus inventore deleniti saepe optio repellat atque quam.</p>
            </div>
            <button >Seleccionar Horario</button>
            
            <p class='absolute left-0 bottom-0 p-4 '>dias</p>
            <div>
                <button class='absolute right-0 bottom-0 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm p-3 m-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900'>Aceptar</button>
            </div>
        </section>
    </main>

    <script>
        const btnClose = document.querySelectorAll('.closeNav')
        const back = document.querySelector('.backNav')
        const aside = document.querySelector('aside')

        const openMenu = document.querySelector('.openMenu')
        
        openMenu.addEventListener('click', ()=>{
            aside.classList.remove('-translate-x-full')
            back.classList.remove('-translate-x-full')
        })

        btnClose.forEach(btn =>{
            btn.addEventListener('click', ()=>{
                aside.classList.add('-translate-x-full')
                back.classList.add('-translate-x-full')
            })
        })
    </script>
</body>
</html>
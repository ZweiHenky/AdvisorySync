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
<body class='bg-background'>

    <div class="backNav closeNav w-full bg-[#00000060] absolute h-dvh top-0 left-0 z-20 transition-transform -translate-x-full">
    </div>

    <aside class="min-w-[70%] max-w-[80%] h-dvh bg-white p-3 absolute z-30 transition-transform -translate-x-full">
        
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

    <header class='flex w-full justify-between p-5 bg-white items-center'>
        <div>
            <img src="../app/assets/icons/menu.svg" class='openMenu w-[20px] h-auto' alt="">
        </div>
        <h2 class='text-xl font-semibold'>Inicio</h2>
    </header>

    <main>
        <div class='mt-5 w-full p-5'>
            <form class='flex *:p-3 *:rounded gap-5' action="">
                <input class='flex-auto ' type="text" name="" id="" placeholder='Buscar Publicacion'>
                <button class='flex-auto bg-primary text-white'>Buscar</button>
            </form>
        </div>

        <section class='w-[90%] p-2 *:p-2 mx-auto relative bg-white rounded'>
            <p class='absolute right-0 top-0 '>usuario</p>
            <h3>Titulo</h3>
            <p class='badge badge-secondary badge-outline'>Categoria</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, nobis? Neque minus magnam sint quibusdam nostrum velit officiis et earum rerum est? Doloribus inventore deleniti saepe optio repellat atque quam.</p>
            <button>Seleccionar Horario</button>
            
            <p>dias</p>
            <button>Aceptar</button>
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
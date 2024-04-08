<div class="backNav closeNav w-full bg-[#00000020] absolute h-dvh top-0 left-0 z-20 transition-transform -translate-x-full">
</div>

<aside class=" min-w-[70%] max-w-[80%] h-dvh bg-white p-3 absolute z-30 transition-transform -translate-x-full">
    
    <section class='flex justify-between items-center'>
        <h1 class='text-3xl'>AdvisorySync</h1>
        <img src="../app/assets/icons/close.svg" class='closeNav w-[15px] h-auto' alt="" srcset="">
    </section>

    <nav class='mt-10'>
        
        <ul class='flex flex-col gap-10'>
            <a href="home">
                <li class='flex gap-2 items-center'>
                    <img class='w-[20px] h-auto' src="../app/assets/icons/home.svg" alt="" > 
                    <p>Inicio</p>
                </li>
            </a>
            <a href="profile">
                <li class='flex gap-2  items-center'>
                    <img class='w-[20px] h-auto' src="../app/assets/icons/user.svg" alt="" >
                    <p>Perfil</p>
                </li>
            </a>
            <a href="settings">
                <li class='flex gap-2 items-center'>
                    <img class='w-[20px] h-auto' src="../app/assets/icons/setting.svg" alt="" >
                    <p>Configuracion</p>
                </li>
            </a>
            <a href="/advisorysync/auth/logOut">
                <li class='flex gap-2 items-center'>
                    <img class='w-[20px] h-auto' src="../app/assets/icons/logOut.svg" alt="" >
                    <p>Cerrar Sesion</p>
                </li>
			</a>
        </ul>

    </nav>

        <button id='openCreateModal' class='mt-12 bg-primary text-white w-full p-2 rounded'>Crear Nueva Asesoria</button>

    </aside>


    <div id="modal" class="create-modal" >
        <div class="modal-content *:mt-4">
            <span class="closeCreate cursor-pointer">&times;</span>
            <h2 class='text-center text-2xl'>Crear Publicacion</h2>
            <form class='*:mt-4' action="/advisorysync/dynamic/home" enctype="multipart/form-data" method='POST'>
                <input type="text" name="titulo" id="" placeholder='Titulo'>
                <textarea name='descripcion' id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                <select name="categoria" id="" class='rounded p-2 border border-gray-300 w-full'>
                    <?php
                        foreach ($categories as $categoria) {
                            echo "<option value={$categoria['id_categoria']}>{$categoria['nombre']} </option>";
                        }
                    ?>
                </select>
                <button class='mt-2' name='agregar' type="submit">Crear</button>
            </form>
        </div>
    </div>

    <script>
		// Obtener el modal
		var modalCreate = document.getElementById("modal");
		// Obtener el botón que abre el modal
		var btnCreate = document.getElementById("openCreateModal");
		// Obtener el elemento <span> que cierra el modal
		var spanCreate = document.querySelector(".closeCreate");

        // Cuando el usuario haga clic en el botón, abrir el modal
		btnCreate.addEventListener('click', ()=>{
			modalCreate.style.display = "block";
		})
		// Cuando el usuario haga clic en <span> (x), cerrar el modal
		spanCreate.onclick = function() {
			modalCreate.style.display = "none";
		}

        // Cuando el usuario haga clic fuera del modal, cerrarlo
		window.onclick = function(event) {
			if (event.target == modalCreate) {
				modalCreate.style.display = "none";
			}
		}
    </script>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../app/styles/admin/config.css">
	<link rel="stylesheet" href="../app/styles/admin/categories.css">
	<title>Categorias</title>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>
    <script type='module' src="../app/utils/admin/lenguage.js">	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <?php
        include('app/views/templates/admin/sidebar.php')
    ?>

	<!-- CONTENT -->
	<section id="content">

        <?php
            include('app/views/templates/admin/navbar.php')
        ?>

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1 data-title>Panel</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<button id='openCreateModal' class='btn-create'>Nueva categoria</button>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Categorias</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Nombre</th>
								<th data-date >Descripción</th>
								<th data-status>Imagen</th>
								<th data-status>Opciones</th>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach($categories as $category){
								echo '<tr>';
								echo "<td>
										<p>{$category['nombre']}</p>
									  </td>";
								echo "<td>
										<p>{$category['descripcion']}</p>
									  </td>";
								echo "<td>
										<img src='{$category['img']}'>
									  </td>";
								echo "<td>
										<div class='container-btn'>
											<form action='/advisorysync/admin/categories' method='post'>
												<input type='hidden' name='id_categoria' value={$category['id_categoria']}>
													<button class='btn-delete' type='submit' name='delete'>Borrar</button>
											</form>
											<a class='btn-update' id='openUpdateModal' href=?id={$category['id_categoria']} >Actualizar</a>
										</div>
									  </td>";
								echo '</tr>';
							}
						?>
						</tbody>
					</table>
					<?php
						include('app/views/templates/admin/pagination.php');
					?>
				</div>
			</div>

		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->

	<div id="createModal" class="modal" >
        <div class="modal-content">
            <span class="closeCreate">&times;</span>
            <form action="/advisorysync/admin/categories" enctype="multipart/form-data" method='POST'>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" required>
				<div>
					<label for="imagen" class="custom-file-upload">
						<i class="bx bx-cloud-upload"></i> Subir Imagen
					</label>
					<input type="file" id="imagen" name="imagen" accept="image/*">
				</div>
                <button type="submit" name='create'>Crear</button>
            </form>
        </div>
    </div>

	<div id="updateModal" class="modal" >
        <div class="modal-content">
            <span class="closeUpdate">&times;</span>
            <form action="/advisorysync/admin/categories" enctype="multipart/form-data" method='POST'>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required value= <?php echo $_SESSION['userUpdate']['nombre']; ?>>
                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" value=" <?php echo $_SESSION['userUpdate']['descripcion']; ?>" required>
				<div>
					<label for="imagen" class="custom-file-upload">
						<i class="bx bx-cloud-upload"></i> Subir Imagen
					</label>
					<input type="file" id="imagen" name="imagen" accept="image/*">
				</div>
                <button type="submit" name='update'>Modificar</button>
            </form>
        </div>
    </div>

    <script>
		// Obtener el modal
		var modal = document.getElementById("createModal");

		// Obtener el botón que abre el modal
		var btn = document.getElementById("openCreateModal");

		// Obtener el elemento <span> que cierra el modal
		var span = document.getElementsByClassName("closeCreate")[0];

		// Cuando el usuario haga clic en el botón, abrir el modal
		btn.addEventListener('click', ()=>{
			modal.style.display = "block";
		})

		// Cuando el usuario haga clic en <span> (x), cerrar el modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// Cuando el usuario haga clic fuera del modal, cerrarlo
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}



		// Obtener el modal
		var modal = document.getElementById("updateModal");

		// Obtener el botón que abre el modal
		var btn = document.getElementById("openUpdateModal");

		// Obtener el elemento <span> que cierra el modal
		var span = document.getElementsByClassName("closeUpdate")[0];

		// Cuando el usuario haga clic en el botón, abrir el modal
		btn.addEventListener('click', ()=>{
			modal.style.display = "block";
		})

		// Cuando el usuario haga clic en <span> (x), cerrar el modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// Cuando el usuario haga clic fuera del modal, cerrarlo
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		// Obtener la cadena de consulta de la URL
		var queryString = window.location.search;

		// Parsear la cadena de consulta para obtener los parámetros
		var urlParams = new URLSearchParams(queryString);

		// Obtener el valor del parámetro "id"
		var id = urlParams.get('id');

		// Mostrar el valor del parámetro "id" en la consola
		console.log(id);

		if (id) {
			modal.style.display = "block";
		}

	</script>
	

	<script src="../app/utils/admin/script.js"></script>
	<script src="../app/utils/admin/counter.js"></script>
</body>
</html>
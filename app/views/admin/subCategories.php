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
					<button id='openCreateModal' class='btn-create'>Nueva Sub Categoria</button>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Sub Categorias</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Nombre</th>
								<th data-date >Categoria</th>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach($subCategories as $subCategory){
								echo '<tr>';
								echo "<td>
										<p>{$subCategory['nombre']}</p>
									  </td>";
								echo "<td>
										<p>{$subCategory['nombreCategoria']}</p>
									  </td>";								
								echo "<td>
										<div class='container-btn'>
											<form action='/advisorysync/admin/subCategories' method='post'>
												<input type='hidden' name='id_sub' value={$subCategory['id_sub']}>
													<button class='btn-delete' type='submit' name='delete'>Borrar</button>
											</form>
											<a class='btn-update' id='openUpdateModal' href=?id={$subCategory['id_sub']} >Actualizar</a>
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
            <form action="/advisorysync/admin/subCategories" enctype="multipart/form-data" method='POST'>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
<<<<<<< HEAD
                <div>
					<select name="id_categoria" id="">
						<option value="">categorias</option>
						<?php

							foreach($categories as $category){
								echo "<option value={$category['id_categoria']}>{$category['nombre']}</option>";
							}

						?>
					</select>
				</div>
				
=======
>>>>>>> 85c153af2dba23c4a6c9dda97aa3d2dc80280c9f
                <button type="submit" name='create'>Crear</button>
            </form>
        </div>
    </div>

<<<<<<< HEAD
=======

>>>>>>> 85c153af2dba23c4a6c9dda97aa3d2dc80280c9f
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
	</script>
	

	<script src="../app/utils/admin/script.js"></script>
	<script src="../app/utils/admin/counter.js"></script>
</body>
</html>
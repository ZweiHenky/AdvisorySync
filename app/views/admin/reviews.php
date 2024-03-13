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
	<title>Reseñas</title>
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
					<h1 data-title>Reseñas</h1>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Reseñas</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Comentario</th>
								<th data-date >Valoracion</th>
								<th data-status>Usuario evaluado</th>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach($reviews as $review){
								echo '<tr>';
								echo "<td>
										<p>{$review['comentario']}</p>
									  </td>";
								echo "<td>
										<p>{$review['valoracion']}</p>
									  </td>";
								echo "<td>
										<p>{$review['nombre']}</p>
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

    <script>
		// Obtener el modal
		var modalCreate = document.getElementById("createModal");

		// Obtener el botón que abre el modal
		var btnCreate  = document.getElementById("openCreateModal");

		// Obtener el elemento <span> que cierra el modal
		var spanCreate  = document.getElementsByClassName("closeCreate")[0];

		// Cuando el usuario haga clic en el botón, abrir el modal
		btnCreate.addEventListener('click', ()=>{
			modalCreate.style.display = "block";
		})

		// Cuando el usuario haga clic en <span> (x), cerrar el modal
		spanCreate.onclick = function() {
			modalCreate.style.display = "none";
		}

		// Cuando el usuario haga clic fuera del modal, cerrarlo
		// window.onclick = function(event) {
		// 	if (event.target == modalCreate) {
		// 		modalCreate.style.display = "none";
		// 	}
		// }



		// Obtener el modal
		var modalUpdate = document.getElementById("updateModal");

		// Obtener el botón que abre el modal
		var btnUpdate = document.getElementById("openUpdateModal");

		// Obtener el elemento <span> que cierra el modal
		var spanUpdate = document.getElementsByClassName("closeUpdate")[0];

		// Cuando el usuario haga clic en el botón, abrir el modal
		btnUpdate.addEventListener('click', ()=>{
			modalUpdate.style.display = "block";
		})

		// Cuando el usuario haga clic en <span> (x), cerrar el modal
		spanUpdate.onclick = function() {
			modalUpdate.style.display = "none";
		}

		// Cuando el usuario haga clic fuera del modal, cerrarlo
		// window.onclick = function(event) {
		// 	if (event.target == modalUpdate) {
		// 		modalUpdate.style.display = "none";
		// 	}
		// }

		// Obtener la cadena de consulta de la URL
		var queryString = window.location.search;

		// Parsear la cadena de consulta para obtener los parámetros
		var urlParams = new URLSearchParams(queryString);

		// Obtener el valor del parámetro "id"
		var id = urlParams.get('id');

		// Mostrar el valor del parámetro "id" en la consola
		console.log(id);

		if (id) {
			modalUpdate.style.display = "block";
		}

		window.onclick = function(event) {
    if (event.target == modalCreate) {
        modalCreate.style.display = "none";
    } else if (event.target == modalUpdate) {
        modalUpdate.style.display = "none";
    }
}

	</script>
	

	<script src="../app/utils/admin/script.js"></script>
	<script src="../app/utils/admin/navbarChangeBtn.js"></script>
	<script src="../app/utils/admin/counter.js"></script>
</body>
</html>
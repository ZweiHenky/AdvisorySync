<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../app/styles/admin/config.css">
	<title>Notificaciones</title>
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
					<h1 data-title>Notificaciones</h1>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Contenido</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-status>ID</th>
								<th data-user>Nombre</th>
								<th data-status>Titulo</th>
								<th data-status>Descripción</th>
								<th data-status>Activo</th>
                                <th data-date>Fecha</th>
							</tr>
						</thead>
						<tbody>
							<?php

								foreach($messages as $messages){
									echo "<tr>";
									echo "<td>
											<p>{$messages['id_noti']}</p>
										</td>";
									echo "<td>
											<p>{$messages['nombre']}</p>
										</td>";
									echo "<td>{$messages['titulo']}</td>";
									echo "<td>{$messages['descripcion']}</td>";
									if ($messages['is_active'] == 1) {
										echo "<td>
											<p>Si</p>
										</td>";
									}else{
										echo "<td>
											<p>No</p>
										</td>";
									}
                                    echo "<td>{$messages['fecha']}</td>";
									/* echo "<td>
											<form action='/advisorysync/admin/users' method='post'>
												<input type='hidden' name='id_mensaje' value={$messages['id_mensaje']}>
												<button class='btn-delete' type='submit' name='delete'>Delete</button>
											</form>
										</td>"; */
									echo "</tr>";
								}

							?>
						</tbody>
					</table>
					<?php
						include('app/views/templates/admin/pagination.php')
					?>
				</div>
			</div>
		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->
	

	<script src="../app/utils/admin/script.js"></script>
	<script src="../app/utils/admin/navbarChangeBtn.js"></script>
	<script src="../app/utils/admin/counter.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../app/styles/admin/config.css">
	<title>Usuarios</title>
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
					<h1 data-title>Usuarios</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3 class='counter'> <?php echo $countAdviser;  ?> </h3>
						<p data-users>Cantidad de Asesores</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3 class='counter'><?php echo $countStudent;  ?></h3>
						<p data-revenue>Cantidad de alumnos</p>
					</span>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Usuarios</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Nombre</th>
								<th data-user >Correo</th>
								<th data-date >Ultimo acceso</th>
								<th data-status>Calificacion</th>
								<th>Tipo</th>
								<th data-options>Opcciones</th>
							</tr>
						</thead>
						<tbody>
							<?php

								foreach($users as $user){
									echo "<tr>";
									echo "<td>
											<p>{$user['nombre']}</p>
										</td>";
									echo "<td>{$user['correo']}</td>";
									echo "<td>{$user['ult_sesion']}</td>";
									if ($user['valoracion'] == null) {
										echo "<td>
											<p>No tiene</p>
										</td>";
									}else{
										echo "<td>
											<p>{$user['valoracion']}</p>
										</td>";
									}
									if ($user['id_stripe'] == 'null') {
										echo "<td>
											<p>Alumno</p>
										</td>";
									}else{
										echo "<td>
											<p>Asesesor</p>
										</td>";
									}
									echo "<td>
											<form action='/advisorysync/admin/users' method='post'>
												<input type='hidden' name='id_usuario' value={$user['id_usuario']}>
												<button class='btn-delete' type='submit' name='delete'>Delete</button>
											</form>
										</td>";
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
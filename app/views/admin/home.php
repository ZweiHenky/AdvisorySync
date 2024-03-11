<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../app/styles/admin/config.css">
	<link rel="stylesheet" href="../app/styles/admin/home.css">
	<title>Home</title>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>
    <script type='module' src="../app/utils/admin/lenguage.js">	</script>
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
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3 class='counter'><?php echo $countAdvisory; ?></h3>
						<p data-allAdvisory>Total de asesorias</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3 class='counter'><?php echo $countUser; ?></h3>
						<p data-users>Usuarios registrados</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3 class='counter'><?php echo '$'.$revenue; ?></h3>
						<p data-revenue>Ingresos</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Asesorias Recientes</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Usuario</th>
								<th data-date >Fecha de la asesoria</th>
								<th data-status>Estado</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($lastAdvisory as $advisory) {
									echo '<tr>';
									echo "<td>{$advisory['nombre']}</td>";
									echo "<td>{$advisory['fecha']}</td>";
									echo "<td>{$advisory['estatus']}</td>";
									echo '</tr>';
								}
							?>
						</tbody>
					</table>
				</div>
				<div class="order">
					<div class="head">
						<h3 data-top >Mejores Calificados</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Usuario</th>
								<th data-date >Calificaciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($topUser as $user) {
									echo '<tr>';
									echo "<td>{$user['nombre']}</td>";
									echo "<td>{$user['valoracion']}</td>";
									echo '</tr>';
								}
							?>
						</tbody>
					</table>
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
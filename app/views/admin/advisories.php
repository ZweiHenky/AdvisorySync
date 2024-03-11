<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../app/styles/admin/config.css">
	<title>AdminHub</title>
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
					<h1 data-title>Asesorias</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3 class='counter'> <?php echo $moreUsedCategory; ?> </h3>
						<p data-allAdvisory>Categoria mas usada</p>
					</span>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Asesorias</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Id</th>
								<th data-date >Titulo</th>
								<th data-status>Fecha</th>
								<th data-status>Categoria</th>
								<th data-status>Usuario</th>
								<th data-status>Opciones</th>
							</tr>
						</thead>
						<tbody>

						<?php
							foreach($advisories as $advisory){
								echo '<tr>';
								echo "<td>
										<p>{$advisory['id_publi']}</p>
									  </td>";
								echo "<td>
										<p>{$advisory['titulo']}</p>
									  </td>";
								echo "<td>
										<p>{$advisory['fecha']}</p>
									  </td>";
								echo "<td>
										<p>{$advisory['categoria']}</p>
									  </td>";
								echo "<td>
										<p>{$advisory['nombre']}</p>
									  </td>";
								echo "<td>
									<form action='/advisorysync/admin/advisories' method='post'>
										<input type='hidden' name='id_publi' value={$advisory['id_publi']}>
										<button class='btn-delete' type='submit' name='delete'>Delete</button>
									</form>
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
	

	<script src="../app/utils/admin/script.js"></script>
	<script src="../app/utils/admin/navbarChangeBtn.js"></script>
	<script src="../app/utils/admin/counter.js"></script>
</body>
</html>
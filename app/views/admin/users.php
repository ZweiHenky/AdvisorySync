<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../app/styles/admin/config.css">
	<link rel="stylesheet" href="../app/styles/admin/users.css">
	<title>AdminHub</title>
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
					<h1 data-title>Users</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3 class='counter'>2834</h3>
						<p data-users>Cantidad de Asesores</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3 class='counter'>$2543</h3>
						<p data-revenue>Cantidad de alumnos</p>
					</span>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Users</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Name</th>
								<th data-date >Last login</th>
								<th data-status>Rating</th>
								<th>Tipo</th>
								<th data-options>Options</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td>5</td>
								<td>
									<p>Alumno</p>
								</td>
								<td>
									<button class='btn-delete'>Delete</button>
								</td>
								
							</tr>
							<tr>
								<td>
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td>5</td>
								<td>
									<p>Alumno</p>
								</td>
								<td>
									<button class='btn-delete'>Delete</button>
								</td>
							</tr>
							<tr>
								<td>
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td>5</td>
								<td>
									<p>Alumno</p>
								</td>
								<td>
									<button class='btn-delete'>Delete</button>
								</td>
							</tr>
							<tr>
								<td>
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td>5</td>
								<td>
									<p>Alumno</p>
								</td>
								<td>
									<button class='btn-delete'>Delete</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->
	

	<script src="../app/utils/admin/script.js"></script>
	<script src="../app/utils/admin/counter.js"></script>
</body>
</html>
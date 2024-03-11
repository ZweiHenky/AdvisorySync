	<?php
		// Obtener la URL
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		// Dividir la URL en partes
		$urlParts = explode('/', rtrim($url, '/'));

		// Determinar el controlador y el método
		$methodName = isset($urlParts[1]) ? $urlParts[1] : 'home';

	?>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text" data-title>AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li id='side-home' class=<?php echo $methodName == 'home' ? 'active' : ''; ?>>
				<a href="home">
					<i class='bx bxs-dashboard' ></i>
					<span class="text" data-one>Panel</span>
				</a>
			</li>
			<li id='side-users' class=<?php echo $methodName == 'users' ? 'active' : ''; ?>>
				<a href="users" >
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text" data-two>Usuarios</span>
				</a>
			</li>
			<li id='side-advisories' class=<?php echo $methodName == 'advisories' ? 'active' : ''; ?>>
				<a href="advisories">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text" data-three>Asesorias</span>
				</a>
			</li>
			<li id='side-categories' class=<?php echo $methodName == 'categories' ? 'active' : ''; ?>>
				<a href="categories">
					<i class='bx bxs-message-dots' ></i>
					<span class="text" data-four>Categorias</span>
				</a>
			</li>
			<li>
				<a href="subCategories">
					<i class='bx bxs-message-dots' ></i>
					<span class="text" data-four>Sub Categorias</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="/advisorysync/auth/logOut" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text" data-logOut>Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
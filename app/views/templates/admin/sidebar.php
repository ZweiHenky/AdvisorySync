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
					<i class='bx bxs-user' ></i>
					<span class="text" data-two>Usuarios</span>
				</a>
			</li>
			<li id='side-advisories' class=<?php echo $methodName == 'advisories' ? 'active' : ''; ?>>
				<a href="advisories">
					<i class='bx bxs-camera' ></i>
					<span class="text" data-three>Asesorias</span>
				</a>
			</li>
			<li id='side-categories' class=<?php echo $methodName == 'categories' ? 'active' : ''; ?>>
				<a href="categories">
					<i class='bx bxs-category-alt' ></i>
					<span class="text" data-four>Categorias</span>
				</a>
			</li>
			<li>
				<a href="subCategories">
					<i class='bx bxs-category' ></i>
					<span class="text" data-four>Sub Categorias</span>
				</a>
			</li>
			<li id='side-reviews' class=<?php echo $methodName == 'reviews' ? 'active' : ''; ?>>
				<a href="reviews">
					<i class='bx bxs-message-dots' ></i>
					
					<span class="text" data-four>Reseñas</span>
				</a>
			</li>
			<li id='side-messagesUser' class=<?php echo $methodName == 'messagesUser' ? 'active' : ''; ?>>
				<a href="messagesUser" >
					<i class='bx bxs-message-rounded-dots' ></i>
					<span class="text" data-five>Mensajes</span>
				</a>
			</li>
			<li id='side-userRoom' class=<?php echo $methodName == 'userRoom' ? 'active' : ''; ?>>
				<a href="userRoom" >
					<i class='bx bxs-user-account' ></i>
					<span class="text" data-six>Sala Usuario</span>
				</a>
			</li>
			<li id='side-notification' class=<?php echo $methodName == 'notification' ? 'active' : ''; ?>>
				<a href="notification" >
					<i class='bx bxs-notification' ></i>
					<span class="text" data-seven>Notificaciones</span>
				</a>
			</li>

		</ul>
		<ul class="side-menu">
			<li>
				<a href="/advisorysync/auth/logOut" class="logout">
					<i class='bx bxs-log-out' ></i>
					<span class="text" data-logOut>Cerrar sesion</span>
				</a>
			</li>
			
		</ul>
	</section>
	<!-- SIDEBAR -->
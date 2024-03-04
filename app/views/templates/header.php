<header id='header'>
    <nav>
        <div class="logo-header">
            <img src="../app/assets/icons/logo.png" alt="" >
            <ul class="menu">
                <li><a href="../static/index">Inicio</a></li>
                <li><a href="../static/about">Sobre Nosotros</a></li>
                <li><a href="../static/category">Categorias</a></li>
            </ul>
        </div>
        
        <div class="btn-header">
            <a class="btn-login" href="../auth/login"><span>Iniciar Sesión</span></a> 
            <a class="btn-register" href="../auth/register"><span>Registrarse</span></a>
        </div>

        <div class='btn-hamburger'>

            <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                <path
                        class="line top"
                        d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path
                        class="line middle"
                        d="m 70,50 h -40" />
                <path
                        class="line bottom"
                        d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </div>

    </nav>

    <div class="container-menu-hamburger">
        <ul class='menu-hamburger'>
            <li><a href="../static/index">Inicio</a></li>
            <li><a href="../static/about">Sobre Nosotros</a></li>
            <li><a href="../static/category">Categorias</a></li>
        </ul>
        <div class="btn-hamburger">
                <a class="btn-login" href="../auth/login"><span>Iniciar Sesion</span></a> 
                <a class="btn-register" href="../auth/register"><span>Registrarse</span></a>
        </div>
    </div>

</header>

<script>
    const header = document.querySelector('#header');

    const btnHamburger = document.querySelector('.btn-hamburger')

    window.addEventListener('scroll', ()=>{
        
        const scroll = window.scrollY;

        if (scroll > 0) {
            header.classList.add('header-active')
        }else{
            header.classList.remove('header-active')
        }
    })
    
    btnHamburger.addEventListener('click', ()=>{
        const menu = document.querySelector('.container-menu-hamburger')
        
        if (menu.style.display === 'flex') {
            menu.style.display = 'none'
        }else{
            menu.style.display = 'flex'
        }
    })


</script>
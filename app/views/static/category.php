<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="../app/styles/config.css">
    <link rel="stylesheet" href="../app/styles/category.css">
</head>
<body>

    <?php
        include_once 'app/views/templates/header.php';
    ?>

<main>
        <h1 class="title">Categorías Disponibles</h1>
        <article class="container-categories">

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/mate.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Matemáticas</h2>
                                <p>Las matemáticas son una disciplina académica que se ocupa del estudio de las relaciones entre números, formas, estructuras y patrones. Es una ciencia que se basa en la lógica y el razonamiento deductivo para formular teoremas y resolver problemas. </p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Algebra Lineal</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Funciones Matematicas</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Cálculo diferencial</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Probabilidad y Estadistica</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Funciones escalares de varias variables</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Planos y Superficies</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Límites y continuidad en funciones de tres variables</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Conceptos de ecuaciones diferenciales.</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Métodos analíticos de solución a ecuaciones diferenciales de primer orden.</p>   
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/redes.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Redes</h2>
                                <p>La Interconexión de Redes de Telecomunicaciones es la vinculación de recursos físicos y lógicos de dos o mas
                                    operadores de telecomunicaciones para el intercambio de información a través de diferentes medios de transmisión
                                    para que los usuarios de un operador puedan comunicarse con los usuarios de otro operador.</p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Fundamentos de Redes</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Interconexión de Redes</p>
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/ti.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Tecnologías de la información (TI)</h2>
                                <p>Las Tecnologías de la Información son el conjunto de recursos, equipos,
                                    programas informáticos, aplicaciones y redes; que permiten la compilación, procesamiento, almacenamiento,
                                    transmisión de información como: voz, texto, video e imágenes </p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Fundamentos de TI</p>
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/base.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Base de Datos</h2>
                                <p>Una base de datos es una recopilación organizada de información o datos estructurados, que normalmente se almacena de
                                    forma electrónica en un sistema informático. Normalmente, una base de datos está controlada por un sistema de
                                    gestión de bases de datos (DBMS).</p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Base de Datos para Aplicaciones</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Base de Datos para Computo en la Nube</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Administración de Bases de Datos</p>
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/web.png" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Aplicaciones Web</h2>
                                <p>Una aplicación web es un software cliente-servidor que permite realizar funciones determinadas en internet, como
                                    enviar mensajes, realizar compras, editar imágenes, jugar videojuegos, hacer pagos, entre otras acciones.</p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Aplicaciones Web orientadaa servicios</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Aplicaciones Web para IOT 4.0</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Aplicaciones Web Progresivas</p>
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/programacion.jpeg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Desarrollo Web</h2>
                                <p>El desarrollo web es diseñar, crear y mantener sitios web, proporcionando en el proceso un portal online coherente y
                                    fácil de usar para los clientes, compañeros de trabajo y otras partes implicadas. </p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Desarrollo Web Profesional</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Desarrollo Web Integral</p>
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/iot.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">IoT</h2>
                                <p>La Internet de las cosas (IoT) describe la red de objetos físicos ("cosas") que llevan incorporados sensores,
                                    software y otras tecnologías con el fin de conectarse e intercambiar datos con otros dispositivos y sistemas a
                                    través de Internet.</p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Principios para loT</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Aplicaciones de loT</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Aplicaciones web para IOT 4.0</p>
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/security.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Seguridad informática</h2>
                                <p>Se encarga de mantener la confidencialidad de los datos de tu organización y de recuperar el control mediante el uso
                                    de recursos de gestión de riesgos en el caso de que se haya producido algún incidente.</p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Aspectos éticos y legales del manejo de la información.</p>
                                    </li>  
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Estándares del manejo de la información.</p>
                                    </li>  
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Conceptos de seguridad.</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Conceptos de criptografía.</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Buenas prácticas en el desarrollo de software seguro.</p>
                                    </li>  
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Protección de vulnerabilidades.</p>
                                    </li>    
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/integradora.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Integradora</h2>
                                <p>Tiene como objetivo integrar todos los conocimientos de las areas correspondientes a cada nivel de la carrera;
                                    generalmente comienzan introduciéndote en tu futura profesión y finalizan realizando un proyecto final, que aglutina
                                    todos los conocimientos adquiridos durante el dictado de la carrera.</p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Definición del proyecto </p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Planificación del proyecto</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Conceptos clave para la creación de soluciones tecnológicas.</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Definición de soluciones a partir de la innovación incremental.</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Diseño de Interacciones</p>   
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/ingles.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Inglés</h2>
                                <p>Tiene como objetivo comunicar sentimientos, pensamientos, conocimientos,
                                    experiencias, ideas, reflexiones, opiniones,
                                    a través de expresiones sencillas y de uso común, en
                                    forma productiva y receptiva en el idioma inglés.
                                    </p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Información Personal</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Actividades en Progreso</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Presente Simple vs Presente Continuo</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Describiendo situaciones en pasado</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Acciones simultáneas en el pasado</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Comparativos de igualdad y superioridad</p>                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Superlativos</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Zero and 1st. Conditional</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>2nd. Conditional</p>   
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/expresion.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Expresión Oral y Escrita</h2>
                                <p>Es el conjunto de técnicas que se deben seguir para comunicarse oralmente con efectividad, es decir, la forma de
                                    expresar sin barreras lo que se piensa. La expresión oral es la destreza lingüística relacionada con la producción
                                    del discurso oral.</p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Componentes y Usos Gramaticales</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Estructura del Texto</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Fundamentos del Proceso Comunicativo</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Tipos de Comunicación Humana</p>   
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img class="img-category" src="../app/assets/img/sociocultural.jpg" alt="" >
                        <div class="container-description">
                            <div class="description-category">
                                <h2 class="category">Formación Sociocultural</h2>
                                <p>La formación sociocultural se basa en propiciar conocimientos, herramientas y habilidades para la permanente
                                    readaptación y actuación en correspondencia con las condiciones sociales y culturales de los diversos contextos
                                    profesionales y comunitarios en que se encuentre el profesional.</p>
                            </div>
                            <button class="button mas">Ver más</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="materias">
                            <div class="description-materias">
                                <h3>Temas</h3>
                                <ul class='lista-materias'>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Globalización:Económica, Cultural, Identidad</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Ejes de Sustentabilidad</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Tipos de Grupos</p>
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Formas de Asociación al Grupo</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Liderazgo</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Tipos de Liderazgo</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Inteligencia</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Pensamiento Vertical y Lateral</p>   
                                    </li>
                                    <li>
                                        <img src="../app/assets/icons/check.svg" alt="" srcset="" witdh='20' height='20' >
                                        <p>Proceso de pensamiento creativo</p>   
                                    </li>
                                </ul>
                            </div>
                            <button class="button menos">Ver Menos</button>
                        </div>
                    </div>
                </div>

            </div>

         

        </article>

    </main>

        <script>
            document.querySelectorAll('.mas').forEach(button => {
                button.addEventListener('click', () => {
                    // Encontrar la tarjeta asociada al botón clicado
                    const card = button.closest('.card');
                    // Agregar o quitar la clase 'change' a la tarjeta encontrada
                    card.classList.toggle('change');
                });
            });

            // Obtener todos los botones "menos" y agregarles un event listener
            document.querySelectorAll('.menos').forEach(button => {
                button.addEventListener('click', () => {
                    // Encontrar la tarjeta asociada al botón clicado
                    const card = button.closest('.card');
                    // Agregar o quitar la clase 'change' a la tarjeta encontrada
                    card.classList.toggle('change');
                });
            });
        </script>
        
        <?php
        include_once 'app/views/templates/footer.php';
        ?>
</body>
</html>
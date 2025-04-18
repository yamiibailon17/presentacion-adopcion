<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Adopción de Perros</title> 
    <style>

        body {
            margin: 0; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Define la fuente de la página */
            background-image: url("img/fondo.jpeg");
            background-size: cover; /* Hace que la imagen de fondo cubra toda la pantalla */
            background-position: center; /* Centra la imagen de fondo */
            background-attachment: fixed; /* Hace que la imagen de fondo permanezca fija cuando se desplaza */
            color: black; 
        }

        /* Estilo para el encabezado (header), que tiene un fondo oscuro */
        header {
            background-color: rgba(0, 0, 0, 0.7); /* Color de fondo negro con transparencia */
            padding: 10px 0; /* Espaciado en la parte superior e inferior */
        }

        /* Estilo para el menú, que es una lista horizontal */
        .menu {
            list-style: none; /* Elimina los puntos de la lista */
            margin: 0; /* Elimina el margen predeterminado */
            padding: 0; /* Elimina el padding predeterminado */
            display: flex; /* Hace que los elementos de la lista estén en una fila */
            justify-content: center; /* Centra los elementos dentro del contenedor */
            gap: 30px; /* Espacio entre los elementos del menú */
        }

        /* Estilo para los elementos de la lista en el menú */
        .menu li {
            position: relative; /* Para que los submenús se muestren correctamente */
        }

        /* Estilo para los enlaces dentro del menú */
        .menu a {
            color: white; /* Color de los enlaces */
            text-decoration: none; /* Elimina el subrayado */
            font-weight: bold; /* Hace el texto en negrita */
            padding: 10px 20px; /* Espaciado dentro del enlace */
            display: block; /* Hace que el enlace ocupe todo el espacio del elemento de la lista */
            transition: background 0.3s; /* Agrega una transición suave para el cambio de color de fondo */
        }

        /* Efecto cuando se pasa el mouse sobre el enlace */
        .menu a:hover {
            background-color: rgba(255, 182, 193, 0.6); /* Cambia el fondo del enlace */
            border-radius: 5px; /* Redondea las esquinas del enlace */
        }

        /* Estilo para los submenús, que se muestran solo cuando se pasa el mouse sobre el item */
        .submenu {
            display: none; /* Oculta los submenús por defecto */
            position: absolute; /* Los coloca encima del elemento principal */
            top: 40px; /* Los coloca por debajo del enlace principal */
            left: 0; /* Alinea el submenú con el enlace */
            background-color: rgba(255, 182, 193, 0.85); /* Fondo con color rosa */
            list-style: none; /* Elimina los puntos de la lista */
            padding: 0; /* Elimina el padding predeterminado */
            border-radius: 5px; /* Redondea las esquinas del submenú */
            min-width: 200px; /* Establece un tamaño mínimo para el submenú */
        }

        /* Muestra el submenú cuando se pasa el mouse sobre el ítem */
        .dropdown:hover .submenu {
            display: block; /* Hace visible el submenú */
        }

        /* Estilo para los enlaces dentro del submenú */
        .submenu li a {
            padding: 10px; /* Espaciado dentro del enlace */
            color: white; /* Color de los enlaces */
        }

        /* Efecto cuando se pasa el mouse sobre los enlaces del submenú */
        .submenu li a:hover {
            background-color: rgba(255, 182, 193, 0.6); /* Cambia el color de fondo del enlace */
        }

        /* Estilo para las secciones de la página */
        section {
            background-color: rgba(255, 255, 255, 0.1); /* Fondo semi-transparente blanco */
            margin: 30px auto; /* Espaciado alrededor de las secciones */
            padding: 20px; /* Espaciado interno */
            max-width: 900px; /* Limita el ancho máximo de la sección */
            border-radius: 10px; /* Redondea las esquinas */
        }

        /* Estilo para las tarjetas de los perros */
        .perros {
            display: flex; /* Muestra las tarjetas en fila */
            flex-wrap: wrap; /* Permite que las tarjetas se envuelvan a una nueva fila */
            gap: 20px; /* Espaciado entre las tarjetas */
            justify-content: space-around; /* Alinea las tarjetas de manera distribuida */
        }

        /* Estilo para cada tarjeta de perro */
        .perro {
            background-color: rgba(255, 182, 193, 0.2); /* Fondo rosado claro */
            border: 1px solid #ffb6c1; /* Borde rosa claro */
            border-radius: 10px; /* Redondea las esquinas de las tarjetas */
            padding: 15px; /* Espaciado interno de la tarjeta */
            width: 250px; /* Ancho de la tarjeta */
            text-align: center; /* Centra el texto dentro de la tarjeta */
        }

        /* Estilo para las imágenes dentro de las tarjetas */
        .perro img {
            width: 100%; /* La imagen ocupa el 100% del ancho de la tarjeta */
            height: 200px; /* La altura de la imagen */
            object-fit: cover; /* Asegura que la imagen se recorte correctamente para ajustarse */
            border-radius: 8px; /* Redondea las esquinas de la imagen */
        }

        /* Estilo para el botón dentro de cada tarjeta */
        .perro button {
            background-color: #ff80ab; /* Fondo rosado para el botón */
            border: none; /* Elimina el borde del botón */
            color: white; /* Color del texto del botón */
            padding: 10px 15px; /* Espaciado dentro del botón */
            border-radius: 8px; /* Redondea las esquinas del botón */
            cursor: pointer; /* Cambia el cursor cuando se pasa sobre el botón */
            margin-top: 10px; /* Espaciado en la parte superior del botón */
            transition: background-color 0.3s ease; /* Transición suave al pasar el mouse */
        }

        /* Efecto cuando se pasa el mouse sobre el botón */
        .perro button:hover {
            background-color: #ff4081; /* Cambia el color del fondo del botón */
        }

        /* Estilo para el reloj que aparece en la esquina de la página */
        .reloj {
            position: fixed; /* Fija el reloj en la parte superior derecha */
            top: 10px; /* Distancia desde la parte superior de la página */
            right: 17px; /* Distancia desde la parte derecha de la página */
            background: rgba(145, 94, 101, 0.6); /* Fondo semi-transparente */
            padding: 10px 15px; /* Espaciado dentro del reloj */
            border-radius: 8px; /* Redondea las esquinas del reloj */
            font-size: 20px; /* Tamaño del texto */
            font-weight: bold; /* Hace el texto en negrita */
        }

        /* Estilo para el enlace para ver el video de adopción */
        #masinfo .ver-video {
            display: none; /* Inicialmente está oculto */
            color: white; /* Color del texto */
            font-weight: bold; /* Texto en negrita */
            background-color: rgba(255, 182, 193, 0.6); /* Fondo rosa claro */
            padding: 10px; /* Espaciado dentro del enlace */
            text-decoration: none; /* Elimina el subrayado */
            border-radius: 5px; /* Redondea las esquinas */
            transition: background-color 0.3s; /* Transición suave al pasar el mouse */
        }

        /* Muestra el enlace cuando se pasa el mouse sobre el "Más Información" */
        #masinfo:hover .ver-video {
            display: inline-block; /* Hace visible el enlace */
        }

        /* Estilo para cuando se pasa el mouse sobre el enlace del video */
        #masinfo .ver-video:hover {
            background-color: #ff80ab; /* Cambia el color de fondo */
        }

        /* Estilo para la sección de contacto */
        #contacto p {
            margin: 5px 0; /* Espaciado en la parte superior e inferior del texto */
            color: #ffb6c1; /* Color rosa claro */
        }
    </style>
</head>
<body>
    <!-- Aquí se coloca el reloj que muestra la hora y fecha actual -->
    <div class="reloj" id="reloj"></div>

    <header>
        <nav>
            <ul class="menu">
                <li class="dropdown">
                    <a href="#">Nosotros</a>
                    <ul class="submenu">
                        <li><a href="#" onclick="mostrarSeccion('quienes')">Quiénes Somos</a></li>
                        <li><a href="#" onclick="mostrarSeccion('mision')">Misión</a></li>
                        <li><a href="#" onclick="mostrarSeccion('vision')">Visión</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#masinfo">Más Información</a>
                    <ul class="submenu">
                        <li><a id="linkVideo" href="https://youtu.be/mlfzDp9rjos?si=-JynliMMppFCSQH5" target="_blank">Ver Video</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Informacion de la organizacion -->
    <section id="nosotros">
        <div id="quienes" class="contenido-nosotros" style="display:none;">
            <h2>Quiénes Somos</h2>
            <p>Somos una organización dedicada a rescatar y dar en adopción perros sin hogar.</p>
        </div>
        <div id="mision" class="contenido-nosotros" style="display:none;">
            <h2>Misión</h2>
            <p>Brindar un hogar amoroso a perros necesitados.</p>
        </div>
        <div id="vision" class="contenido-nosotros" style="display:none;">
            <h2>Visión</h2>
            <p>Ser una plataforma confiable para la adopción responsable de mascotas.</p>
        </div>
    </section>

    <!-- Aquí se muestra la sección de perros disponibles para adopción -->
    <section id="adopciones">
        <div class="perros">
            <div class="perro">
                <img src="img/perro1.jpg" alt="Perro 1">
                <h3>Max</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="img/perro2.jpg" alt="Perro 2">
                <h3>Rex</h3>
                <button>Adoptar</button>
            </div>
        </div>
    </section>

    <section id="masinfo">
        <div id="video" class="contenido-nosotros">
            <h2>Más Información</h2>
            <p>Conoce más sobre nuestra labor viendo nuestro video.</p>
            <a class="ver-video" href="https://youtu.be/mlfzDp9rjos?si=-JynliMMppFCSQH5" target="_blank">Ver Video</a>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto">
        <h2>Contacto</h2>
        <p>Correo electrónico: contacto@adopcionperros.com</p>
        <p>Teléfono: +123 456 789</p>
    </section>

    <script>
        // Muestra la hora actual en el reloj
        function actualizarReloj() {
            const fecha = new Date();
            const horas = fecha.getHours().toString().padStart(2, '0');
            const minutos = fecha.getMinutes().toString().padStart(2, '0');
            const segundos = fecha.getSeconds().toString().padStart(2, '0');
            const fechaTexto = `${horas}:${minutos}:${segundos}`;
            document.getElementById('reloj').innerText = fechaTexto;
        }

        // Ejecuta la función de actualización de hora cada segundo
        setInterval(actualizarReloj, 1000);

        // Muestra el contenido correspondiente al hacer clic en un enlace
        function mostrarSeccion(id) {
            const secciones = document.querySelectorAll('.contenido-nosotros');
            secciones.forEach(seccion => seccion.style.display = 'none');
            document.getElementById(id).style.display = 'block';
        }
    </script>
</body>
</html>

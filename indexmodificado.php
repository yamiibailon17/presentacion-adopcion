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
            background-image: url("pegrines.jpeg");
            background-size: cover; /* Hace que la imagen de fondo cubra toda la pantalla */
            background-position: center; /* Centra la imagen de fondo */
            background-attachment: fixed; /* Hace que la imagen de fondo permanezca fija cuando se desplaza */
            color: black; 
        }

@keyframes fadeInBody {
    from { opacity: 0; }
    to { opacity: 1; }
}

header {
    background-color: rgba(0, 80, 50, 0.85);
    padding: 12px 0;
    position: relative;
}

header::before {
    content: '';
    background-image: linear-gradient(to right, #b2f7ef, #a0ffe6);
    position: absolute;
    height: 5px;
    width: 100%;
    top: 0;
    left: 0;
}

header::after {
    content: '';
    background: url('logo.png') no-repeat center/contain;
    position: absolute;
    top: 10px;
    left: 20px;
    width: 50px;
    height: 50px;
}

.menu {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 30px;
}

.menu li {
    position: relative;
}

.menu a {
    color: #e0ffe6;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;
    display: block;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.menu a:hover {
    background-color: #62c79f;
    transform: scale(1.05) translateZ(10px);
    box-shadow: 0 0 12px rgba(0, 150, 100, 0.6);
}

.submenu {
    display: none;
    position: absolute;
    top: 40px;
    left: 0;
    background-color: rgba(0, 150, 100, 0.9);
    list-style: none;
    padding: 0;
    border-radius: 10px;
    min-width: 200px;
    z-index: 10;
}

.dropdown:hover .submenu {
    display: block;
    animation: fadeIn 0.3s ease;
}

.submenu li a {
    padding: 10px;
    color: white;
    transition: background 0.3s ease;
}

.submenu li a:hover {
    background-color: #45a077;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

section {
    background: rgba(240, 255, 248, 0.8);
    margin: 30px auto;
    padding: 20px;
    max-width: 950px;
    border-radius: 20px;
    box-shadow: 0 6px 18px rgba(0, 100, 50, 0.2);
    backdrop-filter: blur(4px);
    transition: transform 0.4s ease;
}

section:hover {
    transform: scale(1.01);
}

.perros {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.perro {
    background-color: rgba(120, 250, 180, 0.2);
    border: 2px solid #9be7c4;
    border-radius: 18px;
    padding: 15px;
    width: 250px;
    text-align: center;
    box-shadow: 0 8px 16px rgba(72, 189, 140, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    transform-style: preserve-3d;
}

.perro:hover {
    transform: rotateY(8deg) rotateX(5deg) scale(1.05);
    box-shadow: 0 12px 25px rgba(40, 170, 120, 0.4);
}

.perro img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 12px;
    border: 3px solid #b2f7d6;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.perro button {
    background-color: #46b88f;
    border: none;
    color: white;
    padding: 10px 15px;
    border-radius: 10px;
    cursor: pointer;
    margin-top: 10px;
    font-weight: bold;
    transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 4px 10px rgba(0,100,70,0.3);
}

.perro button:hover {
    background-color: #3aa576;
    transform: translateY(-2px) scale(1.1);
    box-shadow: 0 8px 20px rgba(0, 130, 90, 0.4);
}

.reloj {
    position: fixed;
    top: 10px;
    right: 17px;
    background: rgba(0, 100, 60, 0.6);
    padding: 10px 15px;
    border-radius: 10px;
    font-size: 20px;
    font-weight: bold;
    color: white;
    backdrop-filter: blur(4px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

#masinfo .ver-video {
    display: none;
    color: white;
    font-weight: bold;
    background-color: rgba(76, 175, 80, 0.6);
    padding: 10px;
    text-decoration: none;
    border-radius: 6px;
    transition: background-color 0.3s ease;
}

#masinfo:hover .ver-video {
    display: inline-block;
}

#masinfo .ver-video:hover {
    background-color: #2e7d32;
}

#contacto p {
    margin: 5px 0;
    color: #388e3c;
    font-size: 18px;
    text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
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
    
    <!-- Mini ventana lateral para mostrar info del perrito -->
<div id="ventana-info" style="
    display: none;
    position: absolute;
    background-color: rgba(255, 255, 255, 0.9);
    border: 3px solid #4caf50;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    width: 280px;
    z-index: 1000;
    transform: translateX(100%);
    transition: transform 0.5s ease-out;
">
    <button onclick="cerrarVentanaInfo()" style="
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #ff4081;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 5px 10px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    ">X</button>
    <h3 id="info-nombre" style="
        font-size: 24px;
        color: #2e7d32;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: center;
    ">Capuchino</h3>
    <p id="info-detalles" style="
        font-size: 16px;
        color: #333;
        line-height: 1.5;
        text-align: center;
    ">edad: 8 años 
raza: pug
color: cervato 
peso: 12 kg
tamaño: mediano
Capuchino es un perrito muy amigable y muy buena compañía, 
siempre tendrás un compañero que te acompañe a diferentes aventuras. 
Es un gran fan de la comida en especial de las salchichas
 así que no dudes en premiarlo de vez en cuando. 
 Es bastante juguetón así que no dudes en gastar
  su energía sacándolo a pasear 🐾</p>
</div>



    <!-- Aquí se muestra la sección de perros disponibles para adopción -->
    <section id="adopciones">
        <div class="perros">
            <div class="perro">
                <img src="capu.jpg" alt="Perro 1"
                data-nombre="Capuchino" 
      data-detalles="nombre: capuchino
edad: 8 años 
raza: pug
color: cervato 
peso: 12 kg
tamaño: mediano
Capuchino es un perrito muy amigable y muy buena compañía, 
siempre tendrás un compañero que te acompañe a diferentes aventuras. 
Es un gran fan de la comida en especial de las salchichas
 así que no dudes en premiarlo de vez en cuando. 
 Es bastante juguetón así que no dudes en gastar
  su energía sacándolo a pasear 🐾" 
     onclick="mostrarVentanaInfo(event)">
                <h3>Capuchino</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="descarga (34).jpeg" alt="Perro 2"
                data-nombre="Zeus" 
      data-detalles="nombre: Zeus
edad: 10 años 
raza: Golden Retiever
color: miel 
peso: 18 kg
tamaño: grande
Zeus es un perrito no muy jugueton pero muy amigable, le gusta mucho dormir
y aveces jugar con los niños a correr, a el lo dieron en adopcion
ya que su dueño fallecio entonces desde esa vez Zeus ya no estan alegre
es por eso que buscamos a alguien que lo cuide y lo entienda 🐾" 
     onclick="mostrarVentanaInfo(event)">
                <h3>Zeus</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="descarga (34).jpeg" alt="Perro 2">
                <h3>Zeus</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="descarga (34).jpeg" alt="Perro 2">
                <h3>Zeus</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="descarga (34).jpeg" alt="Perro 2">
                <h3>Zeus</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="descarga (34).jpeg" alt="Perro 2">
                <h3>Zeus</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="descarga (34).jpeg" alt="Perro 2">
                <h3>Zeus</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="descarga (34).jpeg" alt="Perro 2">
                <h3>Zeus</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="descarga (34).jpeg" alt="Perro 2">
                <h3>Zeus</h3>
                <button>Adoptar</button>
            </div>
            <div class="perro">
                <img src="descarga (34).jpeg" alt="Perro 2">
                <h3>Zeus</h3>
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

        function mostrarVentanaInfo(event) {
        const img = event.target;
        const nombre = img.getAttribute('data-nombre');
        const detalles = img.getAttribute('data-detalles');

        const ventana = document.getElementById('ventana-info');
        document.getElementById('info-nombre').innerText = nombre;
        document.getElementById('info-detalles').innerText = detalles;

        // Posicionamiento al lado del perrito
        const rect = img.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

        ventana.style.top = (rect.top + scrollTop) + "px";
        ventana.style.left = (rect.right + 10 + scrollLeft) + "px";
        ventana.style.display = "block";
    }

    function cerrarVentanaInfo() {
        document.getElementById('ventana-info').style.display = 'none';
    }
    function mostrarVentanaInfo() {
    const ventana = document.getElementById('ventana-info');
    ventana.style.display = 'block';
    setTimeout(() => {
        ventana.style.transform = 'translateX(0)';
    }, 10);
}

function cerrarVentanaInfo() {
    const ventana = document.getElementById('ventana-info');
    ventana.style.transform = 'translateX(100%)';
    setTimeout(() => {
        ventana.style.display = 'none';
    }, 500);
}

    </script>
</body>
</html>

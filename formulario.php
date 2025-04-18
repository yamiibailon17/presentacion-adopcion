<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Adopción</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url("img/imagenn.jpeg"); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: black;
        }

        /* Menú de navegación */
        header {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px 0;
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
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            display: block;
            transition: background 0.3s;
        }

        .menu a:hover {
            background-color: rgba(255, 182, 193, 0.6); /* Color rosita pastel */
            border-radius: 5px;
        }

        /* Formulario de adopción */
        section {
            background-color: rgba(255, 255, 255, 0.1); /* Fondo más claro */
            margin: 30px auto;
            padding: 20px;
            max-width: 900px;
            border-radius: 10px;
            text-align: center;
        }

        h2 {
            color: #ffb6c1; /* Título en color rosita pastel */
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ffb6c1;
            background-color: rgba(255, 255, 255, 0.7);
        }

        button {
            background-color: #ff80ab; /* Rosita pastel para el botón */
            border: none;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff4081; /* Rosita un poco más fuerte */
        }

        .reloj {
     position: fixed;
    top: 10px;
    right: 17px;
    background: rgba(145, 94, 101, 0.6); 
    padding: 10px 15px; 
    border-radius: 8px;
    font-size: 20px; 
    font-weight: bold; 
}
       
        #masinfo .ver-video {
            display: none;
            color: white;
            font-weight: bold;
            background-color: rgba(255, 182, 193, 0.6); /* Rosita pastel suave */
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        #masinfo:hover .ver-video {
            display: inline-block;
        }

        #masinfo .ver-video:hover {
            background-color: #ff80ab; /* Rosita más fuerte cuando pasa el mouse */
        }

        /* Contacto */
        #contacto p {
            margin: 5px 0;
            color: #ffb6c1; /* Rosita pastel para los textos */
        }
    </style>
</head>
<body>
    <section>
        <h2>Formulario de Adopción</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST["nombre"]);
            $correo = htmlspecialchars($_POST["correo"]);
            $perro = htmlspecialchars($_POST["perro"]);
            $mensaje = htmlspecialchars($_POST["mensaje"]);

            echo "<p>Gracias, <strong>$nombre</strong>. Hemos recibido tu solicitud para adoptar a <strong>$perro</strong>. Pronto nos pondremos en contacto contigo al correo <strong>$correo</strong>.</p>";

            echo "<script>
            setTimeout(function() {
                window.location.href = 'catalogo.html'; // Cambia a la URL real de tu catálogo
            }, 5000);
        </script>";
        } else {
        ?>
            <form action="formulario.php" method="post">
                <label for="nombre">Tu nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="correo">Correo electrónico:</label><br>
                <input type="email" id="correo" name="correo" required><br><br>

                <label for="perro">Nombre del perro que deseas adoptar:</label><br>
                <input type="text" id="perro" name="perro" required><br><br>

                <label for="mensaje">Mensaje adicional:</label><br>
                <textarea id="mensaje" name="mensaje" rows="5" cols="40"></textarea><br><br>

                <button type="submit">Enviar Solicitud</button>
            </form>
        <?php
        }
        ?>
    </section>

    <div class="reloj" id="reloj"></div>

    <script>
    function actualizarReloj() {
        const reloj = document.getElementById('reloj');
        const ahora = new Date();
        
       //el dia que es
        const opcionesFecha = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const fecha = ahora.toLocaleDateString('es-ES', opcionesFecha);

       //La hora saldra en formato de 12 hrs
        let horas = ahora.getHours();
        const minutos = ahora.getMinutes().toString().padStart(2, '0');
        const segundos = ahora.getSeconds().toString().padStart(2, '0');
        const ampm = horas >= 12 ? 'PM' : 'AM';

       //De 24 hrs a 12 hrs
        horas = horas % 12;
        horas = horas ? horas : 12; // La hora "0" se muestra como 12

        reloj.textContent = `${fecha} - ${horas}:${minutos}:${segundos} ${ampm}`;
    }

    setInterval(actualizarReloj, 1000);
    actualizarReloj();
        // Mostrar el mensaje de confirmación cuando se envía el formulario
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const nombre = document.getElementById('nombre').value;
            const correo = document.getElementById('correo').value;
            const perro = document.getElementById('perro').value;

            form.innerHTML = `<p>Gracias, <strong>${nombre}</strong>. Hemos recibido tu solicitud para adoptar a <strong>${perro}</strong>. Pronto nos pondremos en contacto contigo al correo <strong>${correo}</strong>.</p>`;
        });
    </script>
</body>
</html>

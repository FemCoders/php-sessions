<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>
    <a href="https://www.w3schools.com/php/php_sessions.asp" target="_blank">
        <h1>Sesiones en PHP</h1>
    </a>

    <p>En el contexto de PHP, una "sesión" se refiere a la capacidad de mantener información entre diferentes páginas web durante la interacción del usuario con un sitio. Las sesiones en PHP permiten almacenar datos específicos del usuario, como variables, de manera que puedan ser utilizados en varias páginas del sitio web mientras la sesión esté activa.</p>

    <p>Cuando un usuario accede a un sitio web, se le asigna un identificador único de sesión. Este identificador se utiliza para rastrear al usuario a lo largo de su visita al sitio. La información relacionada con esa sesión, como variables de sesión, se almacena en el servidor. Esto permite que los datos persistan incluso cuando el usuario navega a través de diferentes páginas dentro del sitio.</p>

    <p>Para trabajar con sesiones en PHP, se utilizan funciones como:</p>
    <ul>
        <li><strong>session_start()</strong>: para iniciar una nueva sesión o reanudar una existente.</li>
        <li><strong>$_SESSION</strong>: para almacenar y recuperar variables de sesión.</li>
        <li><strong>session_destroy()</strong>: para finalizar una sesión.</li>
    </ul>

    <h4><em>¡Vamos a realizar un simple ejercicio de inicio de sesión y desconexión, mira el archivo README para ver las instrucciones!</em></h4>
    
</body>
</html>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motivación diaria para alcanzar el éxito</title>
    <meta name="description" content="Encuentra frases y consejos de motivación para mantenerte inspirado y alcanzar tus metas diarias.">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Motivación para Ganar</h1>

        <div class="motivational-content">
            <h2>Mensaje de la semana</h2>

             <!-- Imagen de motivación -->
             <div class="motivational-image">
                <img src="https://i.pinimg.com/236x/ae/38/a3/ae38a31c7882298f4a35add547190460.jpg" alt="Imagen de motivación">
            </div>
            
            <blockquote>
                <p>"El éxito es la suma de pequeños esfuerzos repetidos día tras día."</p>
                <footer>— Robert Collier</footer>
            </blockquote>

            <h2>Consejo del día:</h2>
            <ul>
                <li>Establece objetivos claros y alcanzables.</li>
                <li>Mantén una actitud positiva incluso ante los desafíos.</li>
                <li>Busca inspiración en los logros de otros para motivarte.</li>
            </ul>
           
            <!-- Enlace para compartir -->
            <div class="share-link">
                <p>Comparte este mensaje:</p>
                <a href="https://sneidermoreno.github.io/practica/" target="_blank">https://sneidermoreno.github.io/practica/</a>
            </div>

            <!-- Botones para compartir en redes sociales -->
            <div class="social-share">
                <p>Comparte en:</p>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://sneidermoreno.github.io/practica/" target="_blank" class="social-button facebook">Facebook</a>
                <a href="https://twitter.com/intent/tweet?url=https://sneidermoreno.github.io/practica/&text=¡Mira esta motivación!" target="_blank" class="social-button twitter">Twitter</a>
                <a href="https://wa.me/?text=https://sneidermoreno.github.io/practica/" target="_blank" class="social-button whatsapp">WhatsApp</a>
            </div>
        </div>

        <a href="logout.php" class="logout-button">Cerrar sesión</a>
    </div>
</body>
</html>
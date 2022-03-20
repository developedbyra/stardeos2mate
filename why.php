<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Por qué hicimos esto? - Kalium Team</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    <link rel="stylesheet" href="app/views/public/css/style.css">
</head>
<body>
    <?php  
    
      /* Navigator */
      include("app/controller/helpers/navigator.php");
    
    ?>

    <div class="container py-5">
        <h1><strong>Sobre el proyecto Stardeos2Mate</strong></h1>
        <hr>
        <p>El equipo de <a href="https://discord.gg/vzxhhXGR">Kalium Team</a> se percató del mal desarrollo que conyeba la plataforma de 
        <strong>Stardeos</strong>. Hemos comprometido su seguridad creando esta herramienta para 
        que cualquier usuario pueda descargar todos los videos sin restricción 
        y sin tener que pagar ningún video. 
    </p>
    <hr>
    <p>Esta herramienta demuestra la poca seguridad que <strong>Stardeos</strong> tiene, por esa razón esta es la primera versión de <strong>Stardeos2Mate</strong>,
         la idea es que todos puedan disfrutar el contenido exclusivo de Stardeos sin necesidad de pagar.</p>
    <hr>
    <p>
        <h1><strong>¿Como usar Stardeos2Mate?</strong></h1>
        <ul>
            <li>Busca el canal</li>
            <li>Copia el link del video </li>
            <li>Si no tienes VLC Player <a href="https://www.videolan.org/vlc/index.es.html">Descargatelo por aqui e instalalo</a> </li>
            <li>Abre una fuente y escoge la sección de "red" y pega el link en el campo</li>
            <li>Espera a que cargue el video y disfrutalo</li>
        </ul>
    </p>
    <hr>
    <p><h1><strong>¿Qué viene para la versión 1.1?</strong></h1>
        <ul>
            <li>Conversión del video (m3u8) a extensiones comunes (MOV, MKV, MP4, WMV, FLV) </li>
            <li>Ver los videos en "streaming" sin necesidad de entrar a Stardeos y comerte los anuncios.</li>
            <li>Información más detallada sobre los canales.</li>
            <li>Más rapidez en los tiempo de busquedas.</li>
        </ul>
    </p>
    <hr>
    <p>Errores comunes: 
    <ul id="#error-comun">
        <li>Error en las busquedas, se deben ya que Stardeos tiene un tiempo de agotamiento en su servidor. Muchas veces solamente debes esperar unos 2 o 4 minutos para realizar tu busqueda.</li>
        <li>Stardeos no permite los "lowercase" entonces, se debe buscar el nombre del canal exactamente como esta escrito en la URL Ejemplo: https://stardeos.com/en/GasPooH se debe buscar como GasPooH. </li>
        <li>Algunos canales no tienen avatar, ya que el servidor responde 404 al tratar de buscarlos.</li>
        <li>Algunos videos tampoco no tienen thumbnail, ya que como lo que pasa con los avatares en los perfiles.</li>
        <li>Algunos canales no responden a su nombre (username), avatar, suscriptores y id único. Ya que el servidor responde un error 500 al tratar de obtenerlos.</li>
    </ul>
    </p>
  
    
    <hr>
    <p>Este proyecto fue desarrollado por <a href="https://twitter.com/developedbyra">Ra.</a>, que es parte del equipo de <a href="https://discord.gg/vzxhhXGR">Kalium</a>.</p>
    <hr>
    <small>Versión: 1.0</small>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
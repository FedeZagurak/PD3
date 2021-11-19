<?php session_start(); 
if(array_key_exists("logueado", $_SESSION) and $_SESSION["logueado"]=="ok") {

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<link rel="shortcut icon" href="../../img/icono4.jpeg">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="../../css/estilos.css">
<title>Cuenta</title>
</head>

<body>

<header class="container-fluid header">

            <nav class="navbar navbar-expand-lg navbar-dark ">
                <a class="navbar-brand" href="../../index.html"><img src="../../img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item ">
                      <a class="nav-link" href="../../subpaginas/historia.html">Historia</a>
                    </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="../../subpaginas/artistas.html">Artistas</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="../../subpaginas/obras.html">Obras</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="../subpaginas/noticias.html">Noticias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../subpaginas/contacto.html">Contacto</a>
                  </li>
                  
				  <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0" action="subpaginas/buscador/resultados_buscar.php" method="post">
                    <input class="form-control mr-sm-2" type="search" name="buscar" placeholder="Buscar..." />
                    <input class="form-control mr-sm-2" type="submit" value="Enviar">
                    </label>
                    </form>
                  </li>
                  </ul>
                </div>
              </nav>


        </header>
        <div class="espacio">
        </div>

        <section class="container-fluid" id="content1">
          <div class="container">
          <section class="">
                <article class="col">
              <div class="row historia">
              <div>
            <h2>Arte óptico vs. arte cinético: ¿son lo mismo?</h2>
            <p>
            El Op Art construye sus obras con formas que hacen que parezcan en movimiento y que el ojo humano completa el sentido al verlas.
            Pero, ¿qué pasa con el arte cinético? ¿es lo mismo?
            Si bien son similares y comparten algunas cosas en común, el arte cinético surgió un tiempo antes que el Op Art (el término apareció por primera vez en 1920).
            En esta corriente, y a diferencia del Op Art, las obras tienen movimiento real o aparentan tenerlo. Es por esto que interactúan con elementos exteriores a la obra como el viento, el agua o la luz.
            </p>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <img src="../../img/sesion.png" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <p>
                Las imágenes del Op Art suelen estar muy asociadas con los efectos que producen.
                <br>
                Dentro de las producciones artísticas que conforman las imágenes del arte óptico podemos encontrar tanto pinturas en lienzo, dibujos de arte óptico como así también trabajos de arte digital.
                Todas ellas se consolidan como obras de Op Art que muestran sus características de abstracción y juego con los efectos visuales en su máximo esplendor.
                Aquí te dejamos una selección de las obras de Op Art más famosas.
                <br>
                El Op Art ha recorrido muchas épocas y estilos que lo llevan a evolucionar y convertirse en algo nuevo cada vez.
                Con la influencia del futurismo y de artistas neoimpresionistas, el arte óptico tomó los elementos de la abstracción y del color pleno para jugar con nuestros ojos.
                De la mano del arte cinético, la relación entre lo que vemos y el efecto que logran las obras del Op Art, hacen que como espectadores estemos siempre involucrados en los significados que producen.
                Ahora que ya sabes qué es el Op Art, quiénes son los artistas que lo convirtieron en un movimiento a nivel mundial, y todas las características de la vanguardia, te invitamos a que experimentes con formas básicas y a que dibujes figuras geométricas.
                Esperamos que con esta nota tengas toda la información para que puedas poner a prueba todos los efectos ópticos que producen las obras del Op Art al mirarlas.
                <br>
                A partir de figuras geométricas, el Op Art explota la relación de la retina del ojo con el cerebro.
                Ciertos patrones confunden a estos órganos y genera efectos ópticos que resultan irracionales.
                Esto mismo es lo que sucede cuando miramos una obra de Op Art.
                Movimiento de círculos, movimiento de cuadrados, movimiento en espiral…
                El arte óptico como categoría del arte cinético confunde al ojo para generar efectos físicos que pueden ir desde una simple dificultad para enfocar hasta mareos.
                Una vez más las combinaciones de colores inciden en esto haciendo que se intensifique el efecto. 
                </p>   
            </div> 
            
            
            <h2><a href="salir.php">Cerrar Sesión</a></h2>
            </div>

            </article>
            </section>

            <?php }else {
            header ("Location:../registro login/form_login.php");
         }

        ?>
            
            </div>
		     </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <footer class="">
        <h1>Federico Zagurak</h1>
   
        <p>Universidad de Palermo</p>
    
    </footer>

</body>
</html>

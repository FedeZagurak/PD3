<?php session_start();

if(array_key_exists( "logueado", $_SESSION ) ) {

  

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
              <div class="row">
              <div>
        <p>Has ingresado correctamente</p>
        <h2>   <a href="sesion3.php">Siguiente >>  </a>   </h2>
        

<?php }else {
     header ('Location:../registro login/login.php');
     
 }

 
 
 ?>

			    </div>
		     </div>
        </section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <footer class="fixed-bottom">
        <h1>Federico Zagurak</h1>
   
        <p>Universidad de Palermo</p>
    
    </footer>


</body>
</html>

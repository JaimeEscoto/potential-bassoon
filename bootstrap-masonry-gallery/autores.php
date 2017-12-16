<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-27162090-6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-27162090-6');
  </script>

  <style>
  			.loader {
  					position: fixed;
  					left: 0px;
  					top: 0px;
  					width: 100%;
  					height: 100%;
  					z-index: 9999;
  					background: url('wait.gif') 50% 50% no-repeat rgb(249, 249, 249);
  					opacity: .8;
  			}
  			#wait {
  					position: fixed;
  					top: 50%;
  					left: 50%;
  					background-color: #dbf4f7;
  					background-image: url("wait.gif"); // path to your wait image
  					background-repeat: no-repeat;
  					z-index: 100; // so this shows over the rest of your content
  					/* alpha settings for browsers */

  					opacity: 0.9;
  					filter: alpha(opacity=90);
  					-moz-opacity: 0.9;
  			}
  			#loading {
  					width: 100%;
  					height: 100%;
  					top: 0;
  					left: 0;
  					position: fixed;
  					display: block;
  					opacity: 0.7;
  					background-color: #fff;
  					z-index: 99;
  					text-align: center;
  			}
  			#loading-image {
  					position: absolute;
  					top: 100px;
  					left: 240px;
  					z-index: 100;
  			}
  	</style>
  <!-- The Gallery JS -->
	<script src="fbi.js"></script>

  <meta charset="UTF-8">
  <title>Fuente Bibliográfica +</title>


  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <header id="header" class="container">
    <p>
    <img src="logo1.png" width="7%" align="left">
    <h1>.    Fuente Bibliográfica + </h1>
    </p>

    <p class="lead">
      Éste sitio fue creado para ayudarte a encontrar <code>fuentes bibliográficas</code> <strong>fácilmente</strong>. Pronto agregaremos una descripción con más información.
    </p>
    <a href="index.php"><button type="button" name="button"><i class="fa fa-home" aria-hidden="true"></i></button></a>
    <a href="autores.php"><button type="button" name="button"><i class="fa fa-users" aria-hidden="true"></i> | Ver autores</button></a>
    <a href="libros.php"><button type="button" name="button"><i class="fa fa-book" aria-hidden="true"></i> | Ver libros</button></a>

  <hr>
    <form action="#">
      Escriba el <code>término</code> que desea buscar: <input type="text" placeholder="Buscar..." name="search"><button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

    </form>
  </header>
  <!-- Posts -->
  <!-- <div id="grid" class="container"> -->
  <?php
  include "getInfraestructure.php";
  $autores= getAutores();
  /* obtener un array asociativo */

  ?>
  <div class="container">
    <form class="" action="#" name="guardarAutor">
      <h3>Crear Autor   <button type="button" onclick="saveAutor()" ><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
</h3>
      <p>
      Nombre del autor: <input type="text" placeholder="Escriba el nombre..." name="nombreAutor" value="">
    </p>
    </form>

  </div>
  <div class="container" id="grid">
    <div id="posts">
      <?php  while ($autor = $autores->fetch_assoc()) {
      //printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);?>
      <div class="post" style="border: thin solid black">

        <h2><strong><?php echo $autor["Nombre"]; ?></strong></h2>
        <br>
        Nombre: <input id="name<?php echo $autor["Codigo"]; ?>" disabled value="<?php echo $autor["Nombre"]; ?> ">
        <button id="enableb<?php echo $autor["Codigo"]; ?>" onclick="enableControls('<?php echo $autor["Codigo"]; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button>
<button id="updateb<?php echo $autor["Codigo"]; ?>" onclick="updateAutor(<?php echo $autor["Codigo"]; ?>)" ><i class="fa fa-share-square-o" aria-hidden="true"></i></button>

        <br>
        <p>---</p>
        <p><cite><i class="fa fa-book" aria-hidden="true"></i>  ---- </cite> <strong>---</strong>.</p>
        <p> <code> ? ? ?</code> </p>
        <small>Relacionados: Economía | Agricultura | Finanzas</small>
      </div>
      <?php
  } ?>
  </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js'></script>

  <script src="js/index.js"></script>
  <div class='loader' id="loader" style="display: none;">
</body>

</html>

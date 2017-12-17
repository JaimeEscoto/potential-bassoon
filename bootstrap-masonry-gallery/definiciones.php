<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-27162090-6">
    </script>
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
        background-image: url("wait.gif");
        // path to your wait image
        background-repeat: no-repeat;
        z-index: 100;
        // so this shows over the rest of your content
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
    <script src="fbi.js">
    </script>
    <meta charset="UTF-8">
    <title>Fuente Bibliográfica +
    </title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
    <header id="header" class="container">
      <p>
        <img src="logo1.png" width="7%" align="left">
      <h1>.    Fuente Bibliográfica +
      </h1>
      </p>
    <p class="lead">
      Éste sitio fue creado para ayudarte a encontrar
      <code>fuentes bibliográficas</code>
      <strong>fácilmente</strong>. Pronto agregaremos una descripción con más información.
    </p>
    <a href="index.php">
      <button type="button" name="button">
        <i class="fa fa-home" aria-hidden="true">
        </i>
      </button>
    </a>
    <a href="autores.php">
      <button type="button" name="button">
        <i class="fa fa-users" aria-hidden="true">
        </i> | Ver autores
      </button>
    </a>
    <a href="libros.php">
      <button type="button" name="button">
        <i class="fa fa-book" aria-hidden="true">
        </i> | Ver libros
      </button>
    </a>
    <a href="definiciones.php">
      <button type="button" name="button">
        <i class="fa fa-quote-right" aria-hidden="true">
        </i> | Ver definiciones
      </button>
    </a>
    <hr>
    <form action="#">
      Escriba el
      <code>término
      </code> que desea buscar:
      <input type="text" placeholder="Buscar..." name="search">
      <button type="submit">
        <i class="fa fa-search" aria-hidden="true">
        </i>
      </button>
    </form>
    </header>
  <!-- Posts -->
  <!-- <div id="grid" class="container"> -->
  <?php
include "getInfraestructure.php";
$libros= getLibrosAutores();
/* obtener un array asociativo */
?>
  <div class="container">
    <form class="" action="#" name="guardarDefinicion">
      <h3>Crear Definición
        <button type="button" onclick="saveDefinicion()" >
          <i class="fa fa-floppy-o" aria-hidden="true">
          </i>
        </button>
      </h3>
      <p>
        Término:
        <input type="text" placeholder="Escriba el término..." name="termino" value="">
        <br>
        Definición:
        <input type="text" placeholder="Escriba la definicion..." name="definicion" value="">
        <br>
        Libro:
        <select name="nombreLibro">
          <?php
$libros->data_seek(0);
while ($libro = $libros->fetch_assoc()) {
    //printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);?>
          <option value="<?php echo $libro["CodigoLibro"]; ?>">
            <?php echo $libro["NombreLibro"]." - ".$libro["Anio"]." - ".$libro["NombreAutor"]; ?>
          </option>
          <?php
} ?>
        </select>
        <br>Pagina:
        <input type="number" placeholder="Escriba la página..." min="1" name="pagina" value="111">
      </p>
    </form>
  </div>
  <div class="container" id="grid">
    <div id="posts">
      <?php
$definiciones= getDefiniciones();
while ($definicion = $definiciones->fetch_assoc()) {
    //printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);?>
      <div class="post" style="border: thin solid black">
        <h2>
          <strong>
            <?php echo $libro["Nombre"]; ?>
          </strong>
        </h2>
        <br>
        <table>
          <tr>
            <td>Termino:
            </td>
            <td>
              <input id="name<?php echo $definicion["Codigo"]; ?>" disabled value="<?php echo $definicion["Termino"]; ?> ">
            </td>
            <td>
              <button id="enableb<?php echo $libro["Codigo"]; ?>" onclick="enableControls('<?php echo $libro["Codigo"]; ?>')">
                <i class="fa fa-pencil" aria-hidden="true">
                </i>
              </button>
              <button id="updateb<?php echo $libro["Codigo"]; ?>" onclick="updateLibro(<?php echo $libro["Codigo"]; ?>)" >
                <i class="fa fa-share-square-o" aria-hidden="true">
                </i>
              </button>
            </td>
          </tr>
          <tr>
            <td>Definición:
            </td>
            <td>
              <input id="anio<?php echo $definicion["Codigo"]; ?>" disabled value="<?php echo $definicion["Definicion"]; ?> ">
            </td>
          </tr>
          <tr>
            <td> Libro:
            </td>
            <td>
              <select id="nombreLibro<?php echo $libro["Codigo"]; ?>" disabled>
                <?php
                $libros->data_seek(0);
    while ($libro = $libros->fetch_assoc()) {
        //printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);?>
                          <option value="<?php echo $libro["CodigoLibro"]; ?>">
                            <?php echo $libro["NombreLibro"]." - ".$libro["Anio"]." - ".$libro["NombreAutor"]; ?>
                          </option>
                          <?php
    } ?>
          </select>
          </td>
        </tr>
      <tr>
        <td>Pagina:
        </td>
        <td>
          <input id="anio<?php echo $definicion["Codigo"]; ?>" disabled value="<?php echo $definicion["Pagina"]; ?> ">
        </td>
      </tr>
      </table>
    <small>Relacionados: Economía | Agricultura | Finanzas
    </small>
  </div>
  <?php
} ?>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js'>
</script>
<script src="js/index.js">
</script>
<div class='loader' id="loader" style="display: none;">
  </body>
</html>
